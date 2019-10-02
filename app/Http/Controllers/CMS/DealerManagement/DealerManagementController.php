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

        $Take = ___TableGetTake($request, $TableKey);
        $DataTable = [
            'key' => $TableKey,
            'take' => $Take,
            'filter_search' => ___TableGetFilterSearch($request, $TableKey),
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'DEALER_NAME', 'label' => 'Dealer Name'],
                (object)['name' => 'USERNAME', 'label' => 'Username'],
                (object)['name' => 'NAMA_USER', 'label' => 'Nama user'],
                (object)['name' => 'EMAIL', 'label' => 'Email'],
                (object)['name' => 'NO_HP', 'label' => 'No hp'],
                (object)['name' => 'JABATAN', 'label' => 'Jabatan'],
                (object)['name' => 'STATUS_ACTIVE', 'label' => 'Status active'],
                (object)['name' => 'STATUS_VERIFIED', 'label' => 'Status verified'],
                (object)['name' => 'ACTION', 'label' => 'ACTION'],
            ],
            'records' => [
                (object)['DEALER_NAME' => 'WALDI', 'USERNAME' => 'waldiirawan', 'NAMA_USER' => 'Waldi Irawan', 'EMAIL' => 'waldirawan127@gmail.com', 'NO_HP' => '081311383560', 'JABATAN' => 'OWNER', 'STATUS_ACTIVE' => 'ACTIVE', 'STATUS_VERIFIED' => 'VERIFIED']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.dealer.management.user.home.index', $ParseData);
    }

    public function UserEdit(Request $request)
    {
        return view('app.dealer.management.user.edit.index');
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
