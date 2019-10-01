<?php

namespace App\Http\Controllers\CMS\DealerManagement;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Hash;
use App\Support\Generate\Hash as KeyGenerator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class DealerManagementController extends Controller
{

    public function User(Request $request)
    {
        $TableKey = 'dealer-user-table';
        $filter_search = $request->input('filter_search');
        if ($request->input('user-table-show')) {
            $selected = $request->input('user-table-show');
        } else {
            $selected = 5;
        }

        $DataTable = [
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'selected' => $selected,
            'heads' => [
                (object)['name' => 'Dealer Name', 'label' => 'Dealer Name'],
                (object)['name' => 'Username', 'label' => 'Username'],
                (object)['name' => 'Nama user', 'label' => 'Nama user'],
                (object)['name' => 'Email', 'label' => 'Email'],
                (object)['name' => 'No hp', 'label' => 'No hp'],
                (object)['name' => 'Jabatan', 'label' => 'Jabatan'],
                (object)['name' => 'Status active', 'label' => 'Status active'],
                (object)['name' => 'Status verified', 'label' => 'Status verified']
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
        return view('app.dealer.management.user.home.index', $ParseData);
    }

    public function VerificationRequest(Request $request)
    {
        $TableKey = 'user-verification-request-table';
        $filter_search = $request->input('filter_search');

        $DataTable = [
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'Date Request', 'name' => 'Date Request'],
                (object)['name' => 'Dealer Name', 'name' => 'Dealer Name'],
                (object)['name' => 'Nama user', 'name' => 'Nama user'],
                (object)['name' => 'Email', 'name' => 'Email'],
                (object)['name' => 'No hp', 'name' => 'No hp'],
                (object)['name' => 'Jabatan', 'name' => 'Jabatan'],
                (object)['name' => 'Status User', 'name' => 'Status User']
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
        return view('app.dealer.management.verification.home.index', $ParseData);
    }
}
