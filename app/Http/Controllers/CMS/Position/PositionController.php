<?php

namespace App\Http\Controllers\CMS\Position;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Hash;
use App\Support\Generate\Hash as KeyGenerator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PositionController extends Controller
{
    public function Home(Request $request)
    {
        $TableKey = 'position-table';

        $Take = ___TableGetTake($request, $TableKey);
        $DataTable = [
            'key' => $TableKey,
            'take' => $Take,
            'filter_search' => ___TableGetFilterSearch($request, $TableKey),
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'ID', 'label' => 'ID'],
                (object)['name' => 'NAME', 'label' => 'Name'],
                (object)['name' => 'UPDATED_AT', 'label' => 'Updated At'],
                (object)['name' => 'CREATED_AT', 'label' => 'Created At'],
                (object)['name' => 'ACTION', 'label' => 'Action']
            ],
            'records' => [
                (object)['ID' => '1', 'NAME' => 'ADMIN', 'UPDATED_AT' => '2019-09-01 00:00:00', 'CREATED_AT' => '2019-09-01 00:00:00']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.position.home.index', $ParseData);
    }
}
