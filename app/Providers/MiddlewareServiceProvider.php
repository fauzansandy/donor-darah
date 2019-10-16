<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MiddlewareServiceProvider extends ServiceProvider
{
    protected $middleware = [
        \Barryvdh\Cors\HandleCors::class
    ];

    protected $routeMiddleware = [
        // Web Middleware
        'cookies.encrypt' => \App\Http\Middleware\EncryptCookies::class,
        'auth.web' => \App\Http\Middleware\AuthenticateForWeb::class,
        'subtitue.bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'throttle' => \App\Http\Middleware\ThrottleRequests::class,

        'auth.api' => \App\Http\Middleware\Authenticate::class,
        'auth.cms' => \App\Http\Middleware\CMS\Authenticate::class,
        'cors' => \Barryvdh\Cors\HandleCors::class,
        'ArrQuery' => \App\Http\Middleware\QueryRoute::class,

        'Authentication.Login' => \App\Http\Middleware\Authentication\Login::class,

        'Account.SignUp' => \App\Http\Middleware\Account\SignUp::class,

        'Account.SignUp' => \App\Http\Middleware\Account\SignUp::class,

        'Patient.Insert' => \App\Http\Middleware\Patient\Insert::class,

        'Patient.InsertTransfusion' => \App\Http\Middleware\Patient\InsertTransfusion::class,
        'Patient.UpdateTransfusion' => \App\Http\Middleware\Patient\UpdateTransfusion::class,
        'Patient.DeleteTransfusion' => \App\Http\Middleware\Patient\DeleteTransfusion::class,

        'User.Insert' => \App\Http\Middleware\User\Insert::class,
        'User.Update' => \App\Http\Middleware\User\Update::class,
        'User.Password' => \App\Http\Middleware\User\Password::class,
        'User.Delete' => \App\Http\Middleware\User\Delete::class,

        'User.Developer.Token' => \App\Http\Middleware\User\Developer\Token::class,

        'Upload.Excel' => \App\Http\Middleware\Upload\Excel::class,
    ];

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->middleware($this->middleware);
        $this->app->routeMiddleware($this->routeMiddleware);
    }
}
