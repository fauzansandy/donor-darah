<?php

namespace App\Http\Controllers\Patient;

use App\Models\Patient;

use App\Traits\Browse;

use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PatientBrowseController extends Controller
{
    use Browse;

    protected $search = [];

    public function __construct(Request $request)
    {
        if ($request) {
            $this->_Request = $request;
        }
    }

    public function get(Request $request)
    {
        $Now = Carbon::now();
        if (!isset($request->OriginalArrQuery->take)) {
            $request->ArrQuery->take = 5000;
        }

        $Patient = Patient::where(function ($query) use($request) {
            if (isset($request->ArrQuery->id)) {
                if ($request->ArrQuery->id === 'my') {
                    $query->where("id", $request->user()->id);
                } else {
                    $query->where("id", $request->ArrQuery->id);
                }
            }
            if (isset($request->ArrQuery->username)) {
                if ($request->ArrQuery->username === 'my') {
                    $query->where("username", $request->user()->username);
                } else {
                    $query->where("username", $request->ArrQuery->username);
                }
            }
            if (isset($request->ArrQuery->search)) {
                $query->where("username", 'like', '%'.$request->ArrQuery->search.'%')
                      ->orWhere("id", 'like', '%'.$request->ArrQuery->search.'%');
            }
            if (isset($request->ArrQuery->status)) {
                $query->where("status", $request->ArrQuery->status);
            }
       });

       $Patient->orderBy("created_at", 'desc');
       $Browse = $this->Browse($request, $Patient, function ($data) use($request) {
           if (isset($request->ArrQuery->for) && ($request->ArrQuery->for === 'select')) {
               return $data->map(function($Patient) {
                   return [ 'value' => $Patient->id, 'label' => $Patient->name ];
               });
           }
           return $data;
       });
       Json::set('data', $Browse);
       return response()->json(Json::get(), 200);
    }

}
