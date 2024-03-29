<?php

namespace App\Http\Controllers\Patient;

use App\Models\Patient;
use App\Models\PatientTransfusion;

use App\Traits\Browse;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Hash;
use App\Support\Generate\Hash as KeyGenerator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    use Browse;

    protected $search = [
        'id',
        'name',
        'no_rm',
        'updated_at',
        'created_at'
    ];
    public function get(Request $request)
    {
        $Patient = Patient::where(function ($query) use($request) {
            if (isset($request->ArrQuery->id)) {
                if ($request->ArrQuery->id === 'my') {
                    $query->where('id', $request->user()->id);
                } else {
                    $query->where('id', $request->ArrQuery->id);
                }
            }
            if (isset($request->ArrQuery->username)) {
                if ($request->ArrQuery->username === 'my') {
                    $query->where('name', $request->user()->name);
                } else {
                    $query->where('name', $request->ArrQuery->name);
                }
            }
            if (isset($request->ArrQuery->search)) {
               $search = '%' . $request->ArrQuery->search . '%';
               if (isset($request->ArrQuery->for) && ($request->ArrQuery->for === 'select')) {
                  $query->where('name', 'like', $search);
                  $query->orWhere('no_rm', 'like', $search);
               } else {
                   $query->where(function ($query) use($search) {
                       foreach ($this->search as $key => $value) {
                           $query->orWhere($value, 'like', $search);
                       }
                   });
               }
           }
        });
        $Browse = $this->Browse($request, $Patient, function ($data) use($request) {
            if (isset($request->ArrQuery->for) && ($request->ArrQuery->for === 'select')) {
                return $data->map(function($Patient) {
                    return [ 'value' => $Patient->id, 'label' => $Patient->name ];
                });
            } else {
                $data->map(function($Patient) {
                    if (isset($Patient->point->balance)) {
                        $Patient->point->balance = (double)$Patient->point->balance;
                    }
                    return $Patient;
                });
            }
            return $data;
        });
        Json::set('data', $Browse);
        return response()->json(Json::get(), 200);
    }

    public function Insert(Request $request)
    {
        $Model = $request->Payload->all()['Model'];
        $transfusion_type_id = $Model->Patient->transfusion_type_id;
        unset($Model->Patient->transfusion_type_id);
        $Model->Patient->save();

        $patientTransfusion = new PatientTransfusion();
        $patientTransfusion->patient_id = $Model->Patient->id;
        $patientTransfusion->transfusion_type_id = $transfusion_type_id;
        $patientTransfusion->save();

        Json::set('data', $this->SyncData($request, $Model->Patient->id));
        return response()->json(Json::get(), 201);
    }

    public function Update(Request $request)
    {
        $Model = $request->Payload->all()['Model'];
        $Model->Patient->save();

        Json::set('data', $this->SyncData($request, $Model->Patient->id));
        return response()->json(Json::get(), 202);
    }

    public function Delete(Request $request)
    {
        $Model = $request->Payload->all()['Model'];
        $Model->Patient->delete();
        return response()->json(Json::get(), 202);
    }

    public function DeveloperToken(Request $request)
    {
        $Model = $request->Payload->all()['Model'];

        Json::set('data', [
            'token_type' => 'Bearer',
            'access_token' => $Model->Patient->createToken('ServiceAccessToken', ['blast'])->accessToken
        ]);
        return response()->json(Json::get(), 202);
    }

    public function SyncData($request, $id)
    {
        $QueryRoute = QueryRoute($request);
        $QueryRoute->ArrQuery->set = 'first';
        $QueryRoute->ArrQuery->id = $id;
        $data = $this->get($QueryRoute);
        return $data->original['data']['records'];
    }
}
