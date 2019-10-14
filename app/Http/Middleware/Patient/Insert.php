<?php

namespace App\Http\Middleware\Patient;

use App\Models\Patient;

use Closure;
use Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Middleware\BaseMiddleware;

class Insert extends BaseMiddleware
{
    private function Initiate()
    {
        $this->Model->Patient = new Patient();

        $this->Model->Patient->name = $this->_Request->input('name');
        $this->Model->Patient->no_rm = $this->_Request->input('no_rm');
        $this->Model->Patient->transfusion_type_id = $this->_Request->input('transfusion_type_id');
    }

    private function Validation()
    {
        $validator = Validator::make($this->_Request->all(), [
        ]);
        if ($validator->fails()) {
            $this->Json::set('errors', $validator->errors());
            return false;
        }
        return true;
    }

    public function handle($request, Closure $next)
    {
        $this->Initiate();
        if ($this->Validation()) {
            $this->Payload->put('Model', $this->Model);
            $this->_Request->merge(['Payload' => $this->Payload]);
            return $next($this->_Request);
        } else {
            return response()->json($this->Json::get(), $this->HttpCode);
        }
    }
}
