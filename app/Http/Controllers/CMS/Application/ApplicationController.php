<?php

namespace App\Http\Controllers\CMS\Application;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Hash;
use App\Support\Generate\Hash as KeyGenerator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function Verified(Request $request)
    {
        $TableKey = 'application-verified-table';
        $filter_search = $request->input('filter_search');

        $DataTable = [
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'Tgl Submit', 'label' => 'Tgl Submit'],
                (object)['name' => 'Nama dealer', 'label' => 'Nama dealer'],
                (object)['name' => 'Nama user', 'label' => 'Nama user'],
                (object)['name' => 'Jabatan', 'label' => 'Jabatan'],
                (object)['name' => 'Status Verifed', 'label' => 'Status Verifed'],
                (object)['name' => 'Status Pengajuan Aplikasi', 'label' => 'Status Pengajuan Aplikasi']
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
        return view('app.application.verified.home.index', $ParseData);
    }

    public function NotVerified(Request $request)
    {
        $TableKey = 'application-notverified-table';
        $filter_search = $request->input('filter_search');

        $DataTable = [
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'Tgl Submit', 'label' => 'Tgl Submit'],
                (object)['name' => 'Nama dealer', 'label' => 'Nama dealer'],
                (object)['name' => 'Nama user', 'label' => 'Nama user'],
                (object)['name' => 'Jabatan', 'label' => 'Jabatan'],
                (object)['name' => 'Status Verifed', 'label' => 'Status Verifed'],
                (object)['name' => 'Status Pengajuan Aplikasi', 'label' => 'Status Pengajuan Aplikasi']
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
        return view('app.application.notverified.home.index', $ParseData);
    }
}
