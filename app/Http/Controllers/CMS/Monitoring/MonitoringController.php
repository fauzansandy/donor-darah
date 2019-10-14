<?php

namespace App\Http\Controllers\CMS\Monitoring;

use App\Http\Controllers\Patient\PatientBrowseController;
use App\Http\Controllers\TransfusionType\TransfusionTypeBrowseController;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Support\Response\Json;
use Illuminate\Support\Facades\Hash;
use App\Support\Generate\Hash as KeyGenerator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class MonitoringController extends Controller
{
    public function Home(Request $request)
    {
        $TableKey = 'user-table';

        $Patient = PatientBrowseController::FetchBrowse($request)
            ->where('orderBy.blast_users.created_at', 'desc')
            ->where('with.total', 'true')
            ->middleware(function($fetch) use($request, $TableKey) {
                $fetch->equal('skip', ___TableGetSkip($request, $TableKey, $fetch->QueryRoute->ArrQuery->take));
                return $fetch;
            })
            ->get('fetch');
        $Take = ___TableGetTake($request, $TableKey);
        $DataTable = [
            'key' => $TableKey,
            'take' => $Take,
            'filter_search' => ___TableGetFilterSearch($request, $TableKey),
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)0, 30, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'id', 'label' => 'ID'],
                (object)['name' => 'name', 'label' => 'Name'],
                (object)['name' => 'created_at', 'label' => 'Created At'],
                (object)['name' => 'action', 'label' => 'Action']
            ],
            'records' => []
        ];

        if ($Patient['records']) {
            $DataTable['records'] = $Patient['records'];
            $DataTable['total'] = $Patient['total'];
            $DataTable['show'] = $Patient['show'];
        }

        $ParseData = [
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.monitoring.home.index', $ParseData);
    }

    public function New(Request $request)
    {
        $TransfusionTypeQueryRoute = QueryRoute($request);
        $TransfusionTypeQueryRoute->ArrQuery->status = 'all';
        $TransfusionTypeQueryRoute->ArrQuery->set = 'fetch';
        $TransfusionTypeQueryRoute->ArrQuery->{'with.total'} = 'true';
        $TransfusionTypeBrowseController = new TransfusionTypeBrowseController($TransfusionTypeQueryRoute);
        $TransfusionTypeData = $TransfusionTypeBrowseController->get($TransfusionTypeQueryRoute);
        $TransfusionTypeSelect = FormSelect($TransfusionTypeData->original['data']['records'], true);

        return view('app.monitoring.new.index', [
            'select' => ['transfusions' => $TransfusionTypeSelect],
        ]);
    }

    public function Detail(Request $request, $id)
    {
        $QueryRoute = QueryRoute($request);
        $QueryRoute->ArrQuery->id = $id;
        $QueryRoute->ArrQuery->set = 'first';
        $QueryRoute->ArrQuery->{'with.total'} = 'true';
        $PatientBrowseController = new PatientBrowseController($QueryRoute);
        $data = $PatientBrowseController->get($QueryRoute);

        return view('app.monitoring.detail.home.index', [ 'data' => $data->original['data']['records'] ]);
    }

    public function Edit(Request $request, $id)
    {
        $TransfusionTypeQueryRoute = QueryRoute($request);
        $TransfusionTypeQueryRoute->ArrQuery->status = 'all';
        $TransfusionTypeQueryRoute->ArrQuery->set = 'fetch';
        $TransfusionTypeQueryRoute->ArrQuery->take = 'all';
        $TransfusionTypeQueryRoute->ArrQuery->{'with.total'} = 'true';
        $TransfusionTypeBrowseController = new TransfusionTypeBrowseController($TransfusionTypeQueryRoute);
        $TransfusionTypeData = $TransfusionTypeBrowseController->get($TransfusionTypeQueryRoute);
        $TransfusionTypeSelect = FormSelect($TransfusionTypeData->original['data']['records'], true);

        $Category = CategoryBrowseController::FetchBrowse($request)
            ->equal('status', 'all')->equal('take', 'all')->equal('with.total', true)->get();
        $CategorySelect = FormSelect($Category['records'], true);

        $Patient = PatientBrowseController::FetchBrowse($request)
            ->equal('id', $id)->get('first');

        $CategoryIds = [];
        try {
            foreach (explode(',', str_replace(' ', '', $Patient['records']->category_id)) as $key => $value) {
                $CategoryIds[] = $value;
            }
        } catch (\Exception $e) {
        }

        if (!isset($Patient['records']->id)) {
            throw new ModelNotFoundException('Not Found Batch');
        }
        return view('app.user.edit.index', [
            'select' => ['transfusions' => $TransfusionTypeSelect, 'categories' => $CategorySelect],
            'categoryIds' => $CategoryIds,
            'data' => $Patient['records']
        ]);
    }

}
