<?php

namespace App\Http\Controllers\CMS\User;

use App\Http\Controllers\User\UserBrowseController;
use App\Http\Controllers\Position\PositionBrowseController;
use App\Http\Controllers\Blast\UserPhoneNumber\UserPhoneNumberBrowseController;
use App\Http\Controllers\Blast\Category\CategoryBrowseController;
use App\Http\Controllers\Blast\UserPhoneNumber\View\NotesBrowseController;

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

class UserController extends Controller
{
    public function Home(Request $request)
    {
        $TableKey = 'user-table';

        $User = UserBrowseController::FetchBrowse($request)
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
                (object)['name' => 'updated_at', 'label' => 'Updated At'],
                (object)['name' => 'created_at', 'label' => 'Created At'],
                (object)['name' => 'action', 'label' => 'Action']
            ],
            'records' => []
        ];

        if ($User['records']) {
            $DataTable['records'] = $User['records'];
            $DataTable['total'] = $User['total'];
            $DataTable['show'] = $User['show'];
        }

        $ParseData = [
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        return view('app.user.home.index', $ParseData);
    }

    public function New(Request $request)
    {
        $PositionQueryRoute = QueryRoute($request);
        $PositionQueryRoute->ArrQuery->status = 'all';
        $PositionQueryRoute->ArrQuery->set = 'fetch';
        $PositionQueryRoute->ArrQuery->{'with.total'} = 'true';
        $PositionBrowseController = new PositionBrowseController($PositionQueryRoute);
        $PositionData = $PositionBrowseController->get($PositionQueryRoute);
        $PositionSelect = FormSelect($PositionData->original['data']['records'], true);

        return view('app.user.new.index', [
            'select' => ['positions' => $PositionSelect],
        ]);
    }

    public function Detail(Request $request, $id)
    {
        $QueryRoute = QueryRoute($request);
        $QueryRoute->ArrQuery->id = $id;
        $QueryRoute->ArrQuery->set = 'first';
        $QueryRoute->ArrQuery->{'with.total'} = 'true';
        $UserBrowseController = new UserBrowseController($QueryRoute);
        $data = $UserBrowseController->get($QueryRoute);

        return view('app.user.detail.home.index', [ 'data' => $data->original['data']['records'] ]);
    }

    public function Edit(Request $request, $id)
    {
        $PositionQueryRoute = QueryRoute($request);
        $PositionQueryRoute->ArrQuery->status = 'all';
        $PositionQueryRoute->ArrQuery->set = 'fetch';
        $PositionQueryRoute->ArrQuery->take = 'all';
        $PositionQueryRoute->ArrQuery->{'with.total'} = 'true';
        $PositionBrowseController = new PositionBrowseController($PositionQueryRoute);
        $PositionData = $PositionBrowseController->get($PositionQueryRoute);
        $PositionSelect = FormSelect($PositionData->original['data']['records'], true);

        $Category = CategoryBrowseController::FetchBrowse($request)
            ->equal('status', 'all')->equal('take', 'all')->equal('with.total', true)->get();
        $CategorySelect = FormSelect($Category['records'], true);

        $User = UserBrowseController::FetchBrowse($request)
            ->equal('id', $id)->get('first');

        $CategoryIds = [];
        try {
            foreach (explode(',', str_replace(' ', '', $User['records']->category_id)) as $key => $value) {
                $CategoryIds[] = $value;
            }
        } catch (\Exception $e) {
        }

        if (!isset($User['records']->id)) {
            throw new ModelNotFoundException('Not Found Batch');
        }
        return view('app.user.edit.index', [
            'select' => ['positions' => $PositionSelect, 'categories' => $CategorySelect],
            'categoryIds' => $CategoryIds,
            'data' => $User['records']
        ]);
    }

}
