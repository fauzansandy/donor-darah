<?php

namespace App\Http\Controllers\Checklist;

use App\Models\ChecklistType;

use App\Traits\Browse;

use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ChecklistBrowseController extends Controller
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

        $Checklist = ChecklistType::where(function ($query) use($request) {
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
       })->with('checklist')
       // ->join($this->PositionTable, "$this->PositionTable.id", "position_id")
       // ->select(
       //      // Checklist
       //      "id as user.id",
       //      "name as user.name",
       //      "username as user.username",
       //      "email as user.email",
       //      "gender as user.gender",
       //      "position_id as user.position_id",
       //      "address as user.address",
       //      "remember_token as user.remember_token",
       //      "updated_at as user.updated_at",
       //      "created_at as user.created_at",
       //      "deleted_at as user.deleted_at",
       //
       //      // Checklist
       //      "$this->PositionTable.id as position.id",
       //      "$this->PositionTable.name as position.name"
       // );
       ;
       $Checklist->orderBy("created_at", 'desc');
       $Browse = $this->Browse($request, $Checklist, function ($data) use($request) {
           $data = $this->Manipulate($data);
           if (isset($request->ArrQuery->for) && ($request->ArrQuery->for === 'select')) {
               return $data->map(function($Checklist) {
                   return [ 'value' => $Checklist->id, 'label' => $Checklist->name ];
               });
           }
           return $data;
       });
       Json::set('data', $Browse);
       return response()->json(Json::get(), 200);
    }

    private function Manipulate($records)
    {
        $position = [];
        return $records->map(function ($item) {
            foreach ($item->getAttributes() as $key => $value) {
                $this->Group($item, $key, 'user.', $item);
                $this->Group($position, $key, 'position.', $item);
            }
            $item->position = $position;
            return $item;
        });
    }
}
