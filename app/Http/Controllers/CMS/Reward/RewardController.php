<?php

namespace App\Http\Controllers\CMS\Reward;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Hash;
use App\Support\Generate\Hash as KeyGenerator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class RewardController extends Controller
{
    public function Dealer(Request $request)
    {
        $TableKey = 'reward-table';
        $filter_search = $request->input('filter_search');

        $DataTable = [
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'id', 'label' => 'ID'],
                (object)['name' => 'name', 'label' => 'Name'],
                (object)['name' => 'updated_at', 'label' => 'Updated At'],
                (object)['name' => 'created_at', 'label' => 'Created At'],
                (object)['name' => 'action', 'label' => 'Action']
            ],
            'records' => []
        ];

        $DataTable['records'] = [];
        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'filter_search' => $filter_search,
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.reward.dealer.home.index', $ParseData);
    }
}
