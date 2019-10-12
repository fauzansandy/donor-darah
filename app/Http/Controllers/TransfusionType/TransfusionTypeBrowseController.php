<?php

namespace App\Http\Controllers\TransfusionType;

use App\Models\TransfusionType;

use App\Traits\Browse;
use App\Traits\TransfusionType\TransfusionTypeCollection;

use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class TransfusionTypeBrowseController extends Controller
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

        $TransfusionType = TransfusionType::where(function ($query) use($request) {
            if (isset($request->ArrQuery->id)) {
                $query->where("$this->TransfusionTypeTable.id", $request->ArrQuery->id);
            }
       })
       ;

       $Browse = $this->Browse($request, $TransfusionType, function ($data) use($request) {
           $data = $this->Manipulate($data);
           if (isset($request->ArrQuery->for) && ($request->ArrQuery->for === 'select')) {
               return $data->map(function($TransfusionType) {
                   return [ 'value' => $TransfusionType->id, 'label' => $TransfusionType->name ];
               });
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
