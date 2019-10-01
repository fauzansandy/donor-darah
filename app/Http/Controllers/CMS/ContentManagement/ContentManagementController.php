<?php

namespace App\Http\Controllers\CMS\ContentManagement;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Hash;
use App\Support\Generate\Hash as KeyGenerator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ContentManagementController extends Controller
{
    public function Master(Request $request)
    {
        $TableKey = 'content-master-table';
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
        return view('app.content.master.home.index', $ParseData);
    }

    public function FeedBack(Request $request)
    {
        $TableKey = 'feedback-table';
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
        return view('app.content.feedback.home.index', $ParseData);
    }

    public function PushNotification(Request $request)
    {
        $TableKey = 'user-table';
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
        return view('app.content.pushnotification.home.index', $ParseData);
    }

    public function News(Request $request)
    {
        $TableKey = 'news-table';
        $filter_search = $request->input('filter_search');

        $DataTable = [
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'ID news', 'name' => 'ID news'],
                (object)['name' => 'Title', 'name' => 'Title'],
                (object)['name' => 'Role', 'name' => 'Role'],
                (object)['name' => 'Tgl Update', 'name' => 'Tgl Update'],
                (object)['name' => 'Edit', 'name' => 'Edit'],
                (object)['name' => 'Status', 'name' => 'Status'],
                (object)['name' => 'Order By', 'name' => 'Order By']
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
        return view('app.content.news.home.index', $ParseData);
    }
}
