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

    public function MasterContact(Request $request)
    {
        $TableKey = 'content-master-contact-table';
        $filter_search = $request->input('filter_search');

        $DataTable = [
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'title', 'label' => 'TITLE'],
                (object)['name' => 'email', 'label' => 'EMAIL'],
                (object)['name' => 'alamat', 'label' => 'ALAMAT'],
                (object)['name' => 'keterangan', 'label' => 'KETERANGAN'],
                (object)['name' => 'ACTION', 'label' => 'Action']
            ],
            'records' => [
                (object)['title' => 'kantor pusat', 'email' => 'kantorpusat@gmail.com', 'alamat' => 'Jalanan Jakarta', 'keterangan' => 'Lorem Ipsum is simply dummy text of the printing and typesetting']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'filter_search' => $filter_search,
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.content.master.contact.home.index', $ParseData);
    }

    public function MasterContactNew(Request $request)
    {
        return view('app.content.master.contact.new.index');
    }

    public function MasterContactDetail(Request $request)
    {
        return view('app.content.master.contact.detail.index');
    }

    public function MasterTermCo(Request $request)
    {
        $TableKey = 'content-master-contact-table';
        $filter_search = $request->input('filter_search');

        $DataTable = [
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'title', 'label' => 'TITLE'],
                (object)['name' => 'status', 'label' => 'STATUS'],
                (object)['name' => 'upload_date', 'label' => 'UPLOAD DATE'],
                (object)['name' => 'ACTION', 'label' => 'ACTION']
            ],
            'records' => [
                (object)['title' => 'Term 1', 'status' => 'active', 'upload_date' => '2019-09-10 00:00:00']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'filter_search' => $filter_search,
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.content.master.termco.home.index', $ParseData);
    }

    public function MasterTermCoDetail(Request $request)
    {
        return view('app.content.master.termco.detail.index');
    }

    public function MasterTermCoNew(Request $request)
    {
        return view('app.content.master.termco.new.index');
    }

    public function MasterFAQ(Request $request)
    {
        $TableKey = 'content-master-contact-table';
        $filter_search = $request->input('filter_search');

        $DataTable = [
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'order_by', 'label' => 'ORDER BY'],
                (object)['name' => 'title', 'label' => 'TITLE'],
                (object)['name' => 'status', 'label' => 'STATUS'],
                (object)['name' => 'created_date', 'label' => 'CREATED DATE'],
                (object)['name' => 'ACTION', 'label' => 'ACTION']
            ],
            'records' => [
                (object)['order_by' => 'Ascending', 'title' => 'FAQ 1', 'status' => 'active', 'created_date' => '2019-09-10 00:00:00']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'filter_search' => $filter_search,
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.content.master.faq.home.index', $ParseData);
    }

    public function MasterFAQNew(Request $request)
    {
        return view('app.content.master.faq.new.index');
    }

    public function MasterFAQDetail(Request $request)
    {
        return view('app.content.master.faq.detail.index');
    }

    public function MasterPeriodProvision(Request $request)
    {
        $TableKey = 'content-master-contact-table';
        $filter_search = $request->input('filter_search');

        $DataTable = [
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'title', 'label' => 'TITLE'],
                (object)['name' => 'status', 'label' => 'STATUS'],
                (object)['name' => 'upload_date', 'label' => 'UPLOAD DATE'],
                (object)['name' => 'ACTION', 'label' => 'ACTION']
            ],
            'records' => [
                (object)['title' => 'Ketentuan periode 1', 'status' => 'inactive', 'upload_date' => '2019-09-10 00:00:00']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'filter_search' => $filter_search,
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.content.master.period.home.index', $ParseData);
    }

    public function MasterPeriodProvisionNew(Request $request)
    {
        return view('app.content.master.period.new.index');
    }

    public function MasterPeriodProvisionDetail(Request $request)
    {
        return view('app.content.master.period.detail.index');
    }

    public function MasterCashRewards(Request $request)
    {
        $TableKey = 'content-master-contact-table';
        $filter_search = $request->input('filter_search');

        $DataTable = [
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'title', 'label' => 'TITLE'],
                (object)['name' => 'status', 'label' => 'STATUS'],
                (object)['name' => 'upload_date', 'label' => 'UPLOAD DATE'],
                (object)['name' => 'ACTION', 'label' => 'ACTION']
            ],
            'records' => [
                (object)['title' => 'Reward periode 1', 'status' => 'active', 'upload_date' => '2019-09-10 00:00:00']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'filter_search' => $filter_search,
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.content.master.rewards.home.index', $ParseData);
    }

    public function MasterCashRewardsNew(Request $request)
    {
        return view('app.content.master.rewards.new.index');
    }

    public function MasterCashRewardsDetail(Request $request)
    {
        return view('app.content.master.rewards.detail.index');
    }

    public function MasterInfo(Request $request)
    {
        $TableKey = 'content-master-contact-table';
        $filter_search = $request->input('filter_search');

        $DataTable = [
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'order_by', 'label' => 'ORDER BY'],
                (object)['name' => 'title', 'label' => 'TITLE'],
                (object)['name' => 'status', 'label' => 'STATUS'],
                (object)['name' => 'created_date', 'label' => 'CREATED AT'],
                (object)['name' => 'ACTION', 'label' => 'ACTION']
            ],
            'records' => [
                (object)['order_by' => 'Ascending', 'title' => 'Info periode 1', 'status' => 'active', 'created_date' => '2019-09-10 00:00:00']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'filter_search' => $filter_search,
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.content.master.info.home.index', $ParseData);
    }

    public function MasterInfoNew(Request $request)
    {
        return view('app.content.master.info.new.index');
    }

    public function MasterInfoDetail(Request $request)
    {
        return view('app.content.master.info.detail.index');
    }

    public function FeedBackCritics(Request $request)
    {
        $TableKey = 'feedback-critics-table';
        $Take = ___TableGetTake($request, $TableKey);
        $DataTable = [
            'key' => $TableKey,
            'take' => $Take,
            'filter_search' => ___TableGetFilterSearch($request, $TableKey),
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'USER_ID', 'label' => 'User ID'],
                (object)['name' => 'CUSTOMER_NAME', 'label' => 'Customer Name'],
                (object)['name' => 'EMAIL', 'label' => 'Email'],
                (object)['name' => 'REPORT', 'label' => 'Report'],
                (object)['name' => 'SUBMIT_DATE', 'label' => 'Submit date'],
                (object)['name' => 'ACTION', 'label' => 'Action']
            ],
            'records' => [
                (object)['USER_ID' => 1, 'CUSTOMER_NAME' => 'WALDI IRAWAN', 'EMAIL' => 'waldiirawan127@gmail.com', 'REPORT' => '11111', 'SUBMIT_DATE' => '2019-09-10 00:00:00']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.content.feedback.critics.home.index', $ParseData);
    }

    public function FeedBackSuggestion(Request $request)
    {
        $TableKey = 'feedback-suggestion-table';
        $Take = ___TableGetTake($request, $TableKey);
        $DataTable = [
            'key' => $TableKey,
            'take' => $Take,
            'filter_search' => ___TableGetFilterSearch($request, $TableKey),
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'USER_ID', 'label' => 'User ID'],
                (object)['name' => 'CUSTOMER_NAME', 'label' => 'Customer Name'],
                (object)['name' => 'EMAIL', 'label' => 'Email'],
                (object)['name' => 'REPORT', 'label' => 'Report'],
                (object)['name' => 'SUBMIT_DATE', 'label' => 'Submit date'],
                (object)['name' => 'ACTION', 'label' => 'Action']
            ],
            'records' => [
                (object)['USER_ID' => 1, 'CUSTOMER_NAME' => 'WALDI IRAWAN', 'EMAIL' => 'waldiirawan127@gmail.com', 'REPORT' => '11111', 'SUBMIT_DATE' => '2019-09-10 00:00:00']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.content.feedback.suggestion.home.index', $ParseData);
    }

    public function PushNotification(Request $request)
    {
        $TableKey = 'user-table';
        $Take = ___TableGetTake($request, $TableKey);
        $DataTable = [
            'key' => $TableKey,
            'take' => $Take,
            'filter_search' => ___TableGetFilterSearch($request, $TableKey),
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'ID', 'name' => 'ID'],
                (object)['name' => 'MESSAGE', 'name' => 'Message'],
                (object)['name' => 'USER', 'name' => 'User'],
                (object)['name' => 'CREATED_DATE', 'name' => 'Created At'],
                (object)['name' => 'CODE_PUSH_NOTIF', 'name' => 'Code Push Notif'],
                (object)['name' => 'ACTION', 'label' => 'ACTION']
            ],
            'records' => [
                (object)['ID' => 1, 'MESSAGE' => 'BERITA NEWS ONE', 'USER' => 'WALDI IRAWAN', 'CREATED_DATE' => '2019-09-10 00:00:00', 'CODE_PUSH_NOTIF' => '11111']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.content.pushnotification.home.index', $ParseData);
    }

    public function PushNotificationNew(Request $request)
    {
        return view('app.content.pushnotification.new.index');
    }

    public function PushNotificationDetail(Request $request)
    {
        return view('app.content.pushnotification.detail.index');
    }

    public function News(Request $request)
    {
        $TableKey = 'news-table';
        $Take = ___TableGetTake($request, $TableKey);
        $DataTable = [
            'key' => $TableKey,
            'take' => $Take,
            'filter_search' => ___TableGetFilterSearch($request, $TableKey),
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'ID_NEWS', 'name' => 'ID news'],
                (object)['name' => 'TITLE', 'name' => 'Title'],
                (object)['name' => 'ROLE', 'name' => 'Role'],
                (object)['name' => 'TGL_UPDATE', 'name' => 'Tgl Update'],
                (object)['name' => 'STATUS', 'name' => 'Status'],
                (object)['name' => 'ACTION', 'label' => 'ACTION']
            ],
            'records' => [
                (object)['ID_NEWS' => 1, 'TITLE' => 'BERITA NEWS ONE', 'ROLE' => 'OWNER', 'TGL_UPDATE' => '2019-09-10 00:00:00', 'STATUS' => 'publish']
            ]
        ];

        $DataTable['total'] = 0;
        $DataTable['show'] = 0;

        $ParseData = [
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.content.news.home.index', $ParseData);
    }

    public function NewsNew(Request $request)
    {
        return view('app.content.news.new.index');
    }

    public function NewsDetail(Request $request)
    {
        return view('app.content.news.detail.index');
    }
}
