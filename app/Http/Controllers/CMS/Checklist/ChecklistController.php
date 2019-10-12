<?php

namespace App\Http\Controllers\CMS\Checklist;

use App\Http\Controllers\Checklist\ChecklistBrowseController;
use App\Http\Controllers\Position\PositionBrowseController;
use App\Http\Controllers\Blast\ChecklistPhoneNumber\ChecklistPhoneNumberBrowseController;
use App\Http\Controllers\Blast\Category\CategoryBrowseController;
use App\Http\Controllers\Blast\ChecklistPhoneNumber\View\NotesBrowseController;

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

class ChecklistController extends Controller
{
    public function Home(Request $request)
    {
        $TableKey = 'user-table';

        $Checklist = ChecklistBrowseController::FetchBrowse($request)
            ->where('orderBy.id', 'asc')
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
                (object)['name' => 'updated_at', 'label' => 'Updated At'],
                (object)['name' => 'created_at', 'label' => 'Created At'],
                (object)['name' => 'action', 'label' => 'Action']
            ],
            'records' => []
        ];

        if ($Checklist['records']) {
            $DataTable['records'] = $Checklist['records'];
            $DataTable['total'] = $Checklist['total'];
            $DataTable['show'] = $Checklist['show'];
        }
        $ParseData = [
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.checklist.home.index', $ParseData);
    }

    // public function New(Request $request)
    // {
    //     $PositionQueryRoute = QueryRoute($request);
    //     $PositionQueryRoute->ArrQuery->status = 'all';
    //     $PositionQueryRoute->ArrQuery->set = 'fetch';
    //     $PositionQueryRoute->ArrQuery->{'with.total'} = 'true';
    //     $PositionBrowseController = new PositionBrowseController($PositionQueryRoute);
    //     $PositionData = $PositionBrowseController->get($PositionQueryRoute);
    //     $PositionSelect = FormSelect($PositionData->original['data']['records'], true);
    //
    //     return view('app.user.new.index', [
    //         'select' => ['positions' => $PositionSelect],
    //     ]);
    // }
    //
    // public function Detail(Request $request, $id)
    // {
    //     $QueryRoute = QueryRoute($request);
    //     $QueryRoute->ArrQuery->id = $id;
    //     $QueryRoute->ArrQuery->set = 'first';
    //     $QueryRoute->ArrQuery->{'with.total'} = 'true';
    //     $ChecklistBrowseController = new ChecklistBrowseController($QueryRoute);
    //     $data = $ChecklistBrowseController->get($QueryRoute);
    //
    //     return view('app.user.detail.home.index', [ 'data' => $data->original['data']['records'] ]);
    // }
    //
    // public function Edit(Request $request, $id)
    // {
    //     $PositionQueryRoute = QueryRoute($request);
    //     $PositionQueryRoute->ArrQuery->status = 'all';
    //     $PositionQueryRoute->ArrQuery->set = 'fetch';
    //     $PositionQueryRoute->ArrQuery->take = 'all';
    //     $PositionQueryRoute->ArrQuery->{'with.total'} = 'true';
    //     $PositionBrowseController = new PositionBrowseController($PositionQueryRoute);
    //     $PositionData = $PositionBrowseController->get($PositionQueryRoute);
    //     $PositionSelect = FormSelect($PositionData->original['data']['records'], true);
    //
    //     $Category = CategoryBrowseController::FetchBrowse($request)
    //         ->equal('status', 'all')->equal('take', 'all')->equal('with.total', true)->get();
    //     $CategorySelect = FormSelect($Category['records'], true);
    //
    //     $Checklist = ChecklistBrowseController::FetchBrowse($request)
    //         ->equal('id', $id)->get('first');
    //
    //     $CategoryIds = [];
    //     try {
    //         foreach (explode(',', str_replace(' ', '', $Checklist['records']->category_id)) as $key => $value) {
    //             $CategoryIds[] = $value;
    //         }
    //     } catch (\Exception $e) {
    //     }
    //
    //     if (!isset($Checklist['records']->id)) {
    //         throw new ModelNotFoundException('Not Found Batch');
    //     }
    //     return view('app.user.edit.index', [
    //         'select' => ['positions' => $PositionSelect, 'categories' => $CategorySelect],
    //         'categoryIds' => $CategoryIds,
    //         'data' => $Checklist['records']
    //     ]);
    // }

}
