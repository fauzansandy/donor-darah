<?php

namespace App\Http\Controllers\Position;

use App\Models\Position;

use App\Traits\Browse;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Hash;
use App\Support\Generate\Hash as KeyGenerator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PositionController extends Controller
{
    use Browse;

    protected $search = [
        'id',
        'username',
        'email',
        'updated_at',
        'created_at'
    ];
    public function get(Request $request)
    {
        $Position = Position::where(function ($query) use($request) {
            if (isset($request->ArrQuery->id)) {
                if ($request->ArrQuery->id === 'my') {
                    $query->where('id', $request->user()->id);
                } else {
                    $query->where('id', $request->ArrQuery->id);
                }
            }
            if (isset($request->ArrQuery->username)) {
                if ($request->ArrQuery->username === 'my') {
                    $query->where('username', $request->user()->username);
                } else {
                    $query->where('username', $request->ArrQuery->username);
                }
            }
            if (isset($request->ArrQuery->search)) {
               $search = '%' . $request->ArrQuery->search . '%';
               if (isset($request->ArrQuery->for) && ($request->ArrQuery->for === 'select')) {
                  $query->where('username', 'like', $search);
                  $query->orWhere('email', 'like', $search);
               } else {
                   $query->where(function ($query) use($search) {
                       foreach ($this->search as $key => $value) {
                           $query->orWhere($value, 'like', $search);
                       }
                   });
               }
           }
        });
        $Browse = $this->Browse($request, $Position, function ($data) use($request) {
            if (isset($request->ArrQuery->for) && ($request->ArrQuery->for === 'select')) {
                return $data->map(function($Position) {
                    return [ 'value' => $Position->id, 'label' => $Position->name ];
                });
            } else {
                $data->map(function($Position) {
                    if (isset($Position->point->balance)) {
                        $Position->point->balance = (double)$Position->point->balance;
                    }
                    return $Position;
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
        $Model->Position->password = Hash::make($Model->Position->password);
        $Model->Position->save();

        Json::set('data', $this->SyncData($request, $Model->Position->id));
        return response()->json(Json::get(), 201);
    }

    public function Update(Request $request)
    {
        $Model = $request->Payload->all()['Model'];
        $Model->Position->save();

        Json::set('data', $this->SyncData($request, $Model->Position->id));
        return response()->json(Json::get(), 202);
    }

    public function Delete(Request $request)
    {
        $Model = $request->Payload->all()['Model'];
        $Model->Position->delete();
        return response()->json(Json::get(), 202);
    }

    public function DeveloperToken(Request $request)
    {
        $Model = $request->Payload->all()['Model'];

        Json::set('data', [
            'token_type' => 'Bearer',
            'access_token' => $Model->Position->createToken('ServiceAccessToken', ['blast'])->accessToken
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
