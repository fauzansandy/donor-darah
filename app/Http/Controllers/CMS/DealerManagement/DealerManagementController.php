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

    public function UserDetail(Request $request)
    {
        return view('app.dealer.management.user.detail.index');
    }

    public function VerificationRequest(Request $request)
    {
        $TableKey = 'user-verification-request-table';

        $Take = ___TableGetTake($request, $TableKey);
        $DataTable = [
            'key' => $TableKey,
            'take' => $Take,
            'filter_search' => ___TableGetFilterSearch($request, $TableKey),
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'DATE_REQUEST', 'name' => 'Date Request'],
                (object)['name' => 'DEALER_NAME', 'name' => 'Dealer Name'],
                (object)['name' => 'NAMA_USER', 'name' => 'Nama user'],
                (object)['name' => 'EMAIL', 'name' => 'Email'],
                (object)['name' => 'NO_HP', 'name' => 'No hp'],
                (object)['name' => 'JABATAN', 'name' => 'Jabatan'],
                (object)['name' => 'STATUS_USER', 'name' => 'Status User'],
                (object)['name' => 'ACTION', 'label' => 'ACTION']
            ],
            'records' => [
                (object)['DATE_REQUEST' => '2019-09-01', 'DEALER_NAME' => 'WALDI', 'NAMA_USER' => 'Waldi Irawan', 'EMAIL' => 'waldirawan127@gmail.com', 'NO_HP' => '081311383560', 'JABATAN' => 'OWNER', 'STATUS_USER' => 'ACTIVE']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.dealer.management.verification.home.index', $ParseData);
    }

    public function VerificationRequestDetail(Request $request)
    {
        return view('app.dealer.management.verification.detail.home.index');
    }

    public function VerificationRequestDetailGrabMasterDealer(Request $request)
    {
        $TableKey = 'user-verification-request-detail-masterinsentifscheme-table';

        $Take = ___TableGetTake($request, $TableKey);
        $DataTable = [
            'key' => $TableKey,
            'take' => $Take,
            'filter_search' => ___TableGetFilterSearch($request, $TableKey),
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'NAMA', 'name' => 'Date Request'],
                (object)['name' => 'DEALER', 'name' => 'Dealer Name'],
                (object)['name' => 'NAMA_OWNER', 'name' => 'Nama user'],
                (object)['name' => 'ALAMAT', 'name' => 'Email'],
                (object)['name' => 'KELURAHAN', 'name' => 'No hp'],
                (object)['name' => 'KOTA', 'name' => 'Jabatan'],
                (object)['name' => 'PROVINSI', 'name' => 'Status User'],
                (object)['name' => 'ACTION', 'label' => 'ACTION']
            ],
            'records' => [
                (object)['NAMA' => 'Waldi Irawan', 'DEALER' => 'WALDI', 'NAMA_OWNER' => 'WALDI', 'ALAMAT' => 'Jalan Mawar', 'KELURAHAN' => 'CIRACAS', 'KOTA' => 'Jakarta Tiur', 'PROVINSI' => 'Jakarta']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];

        return view('app.dealer.management.verification.detail.masterdealer.index', $ParseData);
    }

    public function VerificationRequestDetailGrabMasterInsentifScheme(Request $request)
    {
        $TableKey = 'user-verification-request-detail-masterinsentifscheme-table';

        $Take = ___TableGetTake($request, $TableKey);
        $DataTable = [
            'key' => $TableKey,
            'take' => $Take,
            'filter_search' => ___TableGetFilterSearch($request, $TableKey),
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'NAMA', 'name' => 'Date Request'],
                (object)['name' => 'DEALER', 'name' => 'Dealer Name'],
                (object)['name' => 'NAMA_OWNER', 'name' => 'Nama user'],
                (object)['name' => 'ALAMAT', 'name' => 'Email'],
                (object)['name' => 'KELURAHAN', 'name' => 'No hp'],
                (object)['name' => 'KOTA', 'name' => 'Jabatan'],
                (object)['name' => 'PROVINSI', 'name' => 'Status User'],
                (object)['name' => 'ACTION', 'label' => 'ACTION']
            ],
            'records' => [
                (object)['NAMA' => 'Waldi Irawan', 'DEALER' => 'WALDI', 'NAMA_OWNER' => 'WALDI', 'ALAMAT' => 'Jalan Mawar', 'KELURAHAN' => 'CIRACAS', 'KOTA' => 'Jakarta Tiur', 'PROVINSI' => 'Jakarta']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.dealer.management.verification.detail.masterinsentifscheme.home.index', $ParseData);
    }

    public function VerificationRequestDetailGrabMasterInsentifSchemeSalesSelect(Request $request)
    {
        $TableKey = 'user-verification-request-detail-masterinsentifscheme-salesselect-table';

        $Take = ___TableGetTake($request, $TableKey);
        $DataTable = [
            'key' => $TableKey,
            'take' => $Take,
            'filter_search' => ___TableGetFilterSearch($request, $TableKey),
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'NAMA_SALES', 'name' => 'Date Request'],
                (object)['name' => 'NOMOR_HP', 'name' => 'Dealer Name'],
                (object)['name' => 'EMAIL', 'name' => 'Email'],
                (object)['name' => 'JABATAN', 'name' => 'Jabatan'],
                (object)['name' => 'ACTION', 'label' => 'ACTION']
            ],
            'records' => [
                (object)['NAMA_SALES' => 'WALDI', 'NOMOR_HP' => '081311383560', 'EMAIL' => 'waldirawan127@gmail.com', 'JABATAN' => 'SALES']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.dealer.management.verification.detail.masterinsentifscheme.salesselect.index', $ParseData);
    }
}
