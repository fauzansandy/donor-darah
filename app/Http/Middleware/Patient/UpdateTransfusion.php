<?php

namespace App\Http\Middleware\PatientTransfusion;

use App\Models\PatientTransfusion;
use App\Models\Position;
use App\Models\Blast\Category;

use Illuminate\Support\Facades\Hash;
use Closure;
use Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Middleware\BaseMiddleware;

class UpdateTransfusion extends BaseMiddleware
{
    private function Initiate($request)
    {
        $this->Model->PatientTransfusion = PatientTransfusion::where('id', $this->Id)->first();
        $password = $this->_Request->input('password');
        if (Hash::needsRehash($this->_Request->input('password'))) {
            $password = app('hash')->make($password);
        }
        if ($this->Model->PatientTransfusion) {
            !$this->_Request->input('name') || $this->Model->PatientTransfusion->name = $this->_Request->input('name');
            !$this->_Request->input('address') || $this->Model->PatientTransfusion->address = $this->_Request->input('address');
            !$this->_Request->input('category_id') || $this->Model->PatientTransfusion->category_id = $this->_Request->input('category_id');
            !$this->_Request->input('status') || $this->Model->PatientTransfusion->status = $this->_Request->input('status');
            if ($this->_Request->input('password')) {
                $this->Model->PatientTransfusion->password = $password;
            }
            if ($this->_Request->input('position_id')) {
                $this->Model->Position = Position::where('id', $this->Model->PatientTransfusion->position_id)->first();
            }

        }
    }

    private function Validation()
    {
        $validator = Validator::make($this->_Request->all(), [

        ]);
        if (!$this->Model->PatientTransfusion) {
            $this->Json::set('exception.code', 'NotFoundPatientTransfusion');
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
