<?php

namespace App\Http\Controllers\Position;

use App\Models\Position;

use App\Traits\Browse;
use App\Traits\Position\PositionCollection;

use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PositionBrowseController extends Controller
{
    use Browse, PositionCollection {
        PositionCollection::__construct as private __PositionCollectionConstruct;
    }

    protected $search = [];

    public function __construct(Request $request)
    {
        if ($request) {
            $this->_Request = $request;
        }
        $this->__PositionCollectionConstruct();
    }

    public function get(Request $request)
    {
        $Now = Carbon::now();

        $Position = Position::where(function ($query) use($request) {
            if (isset($request->ArrQuery->id)) {
                $query->where("$this->PositionTable.id", $request->ArrQuery->id);
            }
       })
       ->select(
            // Position
            "$this->PositionTable.id as user.id",
            "$this->PositionTable.name as user.name",
            "$this->PositionTable.updated_at as user.updated_at",
            "$this->PositionTable.created_at as user.created_at",
            "$this->PositionTable.deleted_at as user.deleted_at"
       );

       $Browse = $this->Browse($request, $Position, function ($data) use($request) {
           $data = $this->Manipulate($data);
           if (isset($request->ArrQuery->for) && ($request->ArrQuery->for === 'select')) {
               return $data->map(function($Position) {
                   return [ 'value' => $Position->id, 'label' => $Position->name ];
               });
           } else {
               $data = $this->GetPositionDetails($data);
           }
           return $data;
       });
       Json::set('data', $Browse);
       return response()->json(Json::get(), 200);
    }

    private function Manipulate($records)
    {
        return $records->map(function ($item) {
            foreach ($item->getAttributes() as $key => $value) {
                $this->Group($item, $key, 'user.', $item);
            }
            return $item;
        });
    }
}
