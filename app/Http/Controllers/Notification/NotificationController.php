<?php

namespace App\Http\Controllers\Notification;

use App\Models\NotificationTransfusion;

use App\Traits\Browse;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Hash;
use App\Support\Generate\Hash as KeyGenerator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    use Browse;

    protected $search = [
        'id'
    ];
    public function get(Request $request)
    {
        $Notification = NotificationTransfusion::where(function ($query) use($request) {
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
            if (isset($request->ArrQuery->time_notification)) {
                $query->where('time_notification','<=', date('Y-m-d H:i:s'));
            }

            if (isset($request->ArrQuery->is_read)) {
                $query->where('is_read', $request->ArrQuery->is_read);
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
        $Browse = $this->Browse($request, $Notification, function ($data) use($request) {
            if (isset($request->ArrQuery->for) && ($request->ArrQuery->for === 'select')) {
                return $data->map(function($Notification) {
                    return [ 'value' => $Notification->id, 'label' => $Notification->name ];
                });
            } else {
                $data->map(function($Notification) {
                    if (isset($Notification->point->balance)) {
                        $Notification->point->balance = (double)$Notification->point->balance;
                    }
                    return $Notification;
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
        $transfusion_type_id = $Model->NotificationTransfusion->transfusion_type_id;
        $transfusion_date = $Model->NotificationTransfusion->transfusion_date;
        $transfusion_time = $Model->NotificationTransfusion->transfusion_time;
        $datetime = $transfusion_date.' '.date("G:i", strtotime($transfusion_time));
        unset($Model->NotificationTransfusion->transfusion_type_id);
        unset($Model->NotificationTransfusion->transfusion_date);
        unset($Model->NotificationTransfusion->transfusion_time);
        $patientTransfusion = new NotificationTransfusion();

        $patientTransfusion->b30m_tgl_pemberian = date("Y-m-d", strtotime($datetime)-(30*60));
        $patientTransfusion->tgl_pemberian = date("Y-m-d", strtotime($datetime));
        $patientTransfusion->a15m_tgl_pemberian = date("Y-m-d", strtotime($datetime)+(15*60));
        $patientTransfusion->a1h_tgl_pemberian = date("Y-m-d", strtotime($datetime)+(60*60));
        $patientTransfusion->a2h_tgl_pemberian = date("Y-m-d", strtotime($datetime)+(2*60*60));
        $patientTransfusion->a3h_tgl_pemberian = date("Y-m-d", strtotime($datetime)+(3*60*60));

        $patientTransfusion->b30m_jam_pemberian = date("H:i", strtotime($datetime)-(30*60));
        $patientTransfusion->jam_pemberian = date("H:i", strtotime($datetime));
        $patientTransfusion->a15m_jam_pemberian = date("H:i", strtotime($datetime)+(15*60));
        $patientTransfusion->a1h_jam_pemberian = date("H:i", strtotime($datetime)+(60*60));
        $patientTransfusion->a2h_jam_pemberian = date("H:i", strtotime($datetime)+(2*60*60));
        $patientTransfusion->a3h_jam_pemberian = date("H:i", strtotime($datetime)+(3*60*60));

        $Model->NotificationTransfusion->save();

        $patientTransfusion->patient_id = $Model->NotificationTransfusion->id;
        $patientTransfusion->transfusion_type_id = $transfusion_type_id;



        $patientTransfusion->transfusion_time = $datetime;
        $patientTransfusion->save();

        Json::set('data', $this->SyncData($request, $Model->NotificationTransfusion->id));
        return response()->json(Json::get(), 201);
    }

    public function Update(Request $request)
    {
        $Model = $request->Payload->all()['Model'];
        $Model->NotificationTransfusion->save();

        Json::set('data', $this->SyncData($request, $Model->NotificationTransfusion->id));
        return response()->json(Json::get(), 202);
    }

    public function UpdateTransfusion(Request $request)
    {
        $Model = $request->Payload->all()['Model'];
        $Model->NotificationTransfusion->save();

        return response()->json(Json::get(), 202);
    }

    public function Delete(Request $request)
    {
        $Model = $request->Payload->all()['Model'];
        $Model->NotificationTransfusion->delete();
        return response()->json(Json::get(), 202);
    }

    public function DeveloperToken(Request $request)
    {
        $Model = $request->Payload->all()['Model'];

        Json::set('data', [
            'token_type' => 'Bearer',
            'access_token' => $Model->NotificationTransfusion->createToken('ServiceAccessToken', ['blast'])->accessToken
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
