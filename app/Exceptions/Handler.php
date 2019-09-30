<?php

namespace App\Exceptions;

use Exception;
use App\Support\Response\Json;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        NotFoundHttpException::class,
        MethodNotAllowedHttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $e)
    {
        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function render($request, Exception $e)
    {
        if (isset($_SERVER['HTTP_HOST'])) {
            $DOMAIN = $_SERVER['HTTP_HOST'];
            if ($DOMAIN === 'satellite.' . config('app.domain') || $DOMAIN === 'satellite.' . config('app.domain_dock')) {
                return $this->apiReporting($request, $e);
            } else {
                return $this->webReporting($request, $e);
            }
        } else {
            return $this->webReporting($request, $e);
        }
    }

    private function apiReporting($request, Exception $e)
    {
        Json::set('exception.name',
            (new \ReflectionClass($e))->getShortName()
        );
        if ($e instanceof NotFoundHttpException) {
            Json::set('exception.filelocation', $e->getFile());
            Json::set('exception.line', $e->getLine());
            return response()->json(Json::get(), 404);
        } elseif($e instanceof MethodNotAllowedHttpException) {
            // method not allowed
            Json::set('exception.filelocation', $e->getFile());
            Json::set('exception.line', $e->getLine());
            return response()->json(Json::get(), 405);
        } else {
            Json::set('exception.filelocation', $e->getFile());
            Json::set('exception.line', $e->getLine());
            Json::set('exception.name', get_class($e));
            Json::set('exception.message', $e->getMessage());
            return response()->json(Json::get(), 500);
        }
    }

    private function webReporting($request, Exception $e)
    {
        if (!config('app.debug')) {
            if ($e instanceof NotFoundHttpException) {
                return view('errors.404.index');
            } elseif ($e instanceof NotFoundHttpException) {
                return view('errors.404.index');
            } else {
                return view('errors.500.index');
            }
        } else {
            return parent::render($request, $e);
        }
    }
}
