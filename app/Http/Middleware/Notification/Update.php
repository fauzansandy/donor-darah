<?php

namespace App\Http\Middleware\Notification;

use App\Models\NotificationTransfusion;

use Illuminate\Support\Facades\Hash;
use Closure;
use Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Middleware\BaseMiddleware;

class Update extends BaseMiddleware
{
    private function Initiate($request)
    {
        $this->Model->NotificationTransfusion = NotificationTransfusion::where('id', $this->Id)->first();
        if ($this->Model->NotificationTransfusion) {
            !$this->_Request->input('is_read') || $this->Model->NotificationTransfusion->is_read = $this->_Request->input('is_read');
        }
    }

    private function Validation()
    {
        $validator = Validator::make($this->_Request->all(), [
        ]);
        if (!$this->Model->NotificationTransfusion) {
            $this->Json::set('exception.code', 'NotFoundNotificationTransfusion');
            $this->Json::set('exception.message', trans('validation.'.$this->Json::get('exception.code')));
            return false;
        }
        if ($validator->fails()) {
            $this->Json::set('errors', $validator->errors());
            return false;
        }
        return true;
    }

    public function handle($request, Closure $next)
    {
        $this->Initiate($request);
        if ($this->Validation()) {
            $this->Payload->put('Model', $this->Model);
            $this->_Request->merge(['Payload' => $this->Payload]);
            return $next($this->_Request);
        } else {
            return response()->json($this->Json::get(), $this->HttpCode);
        }
    }
}
