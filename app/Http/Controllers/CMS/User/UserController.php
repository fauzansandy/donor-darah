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

    // Batch

    public function Home(Request $request)
    {
        $TableKey = 'user-table';

        $filter_status = $request->input('filter_status');
        if (!$filter_status) {
            $filter_status = 'active';
        }

        $QueryRoute = QueryRoute($request);
        $QueryRoute->ArrQuery->status = 'all';
        $QueryRoute->ArrQuery->set = 'fetch';
        $QueryRoute->ArrQuery->{'orderBy.blast_users.created_at'} = 'desc';
        $QueryRoute->ArrQuery->skip = ___TableGetSkip($request, $TableKey, $QueryRoute->ArrQuery->take);
        $QueryRoute->ArrQuery->{'with.total'} = 'true';
        $UserBrowseController = new UserBrowseController($QueryRoute);
        $data = $UserBrowseController->get($QueryRoute);

        $filter_search = $request->input('filter_search');
        
        if (isset($request['user-table-show'])) {
            $selected = $request['user-table-show'];
        } 
        else {
            $selected = 5;
        }

        $options = array(5,10,15,20);
        // $filter_entries = $request->input('filter_entries');
        // $items = $request->items ?? 5;
        $User = UserBrowseController::FetchBrowse($request)
            ->where('take', $selected)
            ->where('status', $filter_status)
            ->where('orderBy.blast_users.created_at', 'desc')
            ->where('with.total', 'true')
            ->middleware(function($fetch) use($filter_search, $request, $TableKey) {
                if ($filter_search) {
                    $fetch->equal('search', $filter_search);
                }
                // , $filter_entries
                // if ($filter_entries) {
                //     $fetch->where('take', $filter_entries);
                // }
                $fetch->equal('skip', ___TableGetSkip($request, $TableKey, $fetch->QueryRoute->ArrQuery->take));
                return $fetch;
            })
            ->get('fetch');
        //    dd($User);
        $DataTable = [  
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)$User['total'], (int)$User['query']->take, ___TableGetCurrentPage($request, $TableKey)),
            'selected' =>$selected,
            'options' => $options,
            'heads' => [
                (object)['name' => 'id', 'label' => 'ID'],
                (object)['name' => 'name', 'label' => 'Name'],
                (object)['name' => 'updated_at', 'label' => 'Updated At'],
                (object)['name' => 'created_at', 'label' => 'Created At'],
                (object)['name' => 'action', 'label' => 'Action']
            ],
            'records' => []
        ];
        // dd($DataTable);
       
        if ($User['records']) {
            $DataTable['records'] = $User['records'];
            $DataTable['total'] = $User['total'];
            $DataTable['show'] = $User['show'];
        }
        
        $ParseData = [
            'filter_status' => $filter_status,
            'filter_search' => $filter_search,
            'options'    => $options,
            'selected' => $selected,
            // 'filter_entries' => $filter_entries,
            'data' => $DataTable,
            'result_total' => isset($DataTable['total']) ? $DataTable['total'] : 0
        ];
        // dd($ParseData);
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

    public function UserPhoneNumberMiddlewareQuery($fetch, $filter_category)
    {
        if ($filter_category) {
            $fetch->equal('blast_category_id', $filter_category);
        }
        return $fetch;
    }

    public function DetailBlastWhatsAppPhoneNumber(Request $request, $id)
    {
        // --
        $filter_category = $request->input('filter_category');
        if ($filter_category) {
            $FilterCategoryData = CategoryBrowseController::FetchBrowse($request)
                ->where('id', $filter_category)
                ->where('status', 'all')->get('first');
        }

        $AvailableCount = UserPhoneNumberBrowseController::FetchBrowse($request)
            ->equal('user_id', $id)->equal('status', 'available')->equal('with.total', true)
            ->middleware(function($fetch) use($filter_category) {
                return $this->UserPhoneNumberMiddlewareQuery($fetch, $filter_category);
            })->get('count');
        $DeliveredCount = UserPhoneNumberBrowseController::FetchBrowse($request)
            ->equal('user_id', $id)->equal('status', 'delivered')->equal('with.total', true)
            ->middleware(function($fetch) use($filter_category) {
                return $this->UserPhoneNumberMiddlewareQuery($fetch, $filter_category);
            })->get('count');
        $FailedCount = UserPhoneNumberBrowseController::FetchBrowse($request)
            ->equal('user_id', $id)->equal('status', 'failed')->equal('with.total', true)
            ->middleware(function($fetch) use($filter_category) {
                return $this->UserPhoneNumberMiddlewareQuery($fetch, $filter_category);
            })->get('count');


        $CategoryUser = UserPhoneNumberBrowseController::FetchBrowse($request)
            ->equal('user_id', $id)
            ->equal('status', 'all')
            ->equal('take', 'all')
            ->equal('groupBy', 'category')
            ->equal('with.total', false)
            ->get();

        $CategorySelect = $CategoryUser['records']->map(function($category) {
            return ['value' => $category->category['id'], 'label' => $category->category['name']];
        });

        $User = UserBrowseController::FetchBrowse($request)
            ->equal('id', $id)->equal('take', 'all')->equal('with.total', true)->get('first');

        $TableKey = 'user-phone-number-table';
        $UserPhoneNumber = UserPhoneNumberBrowseController::FetchBrowse($request)
            ->equal('user_id', $id)
            ->equal('status', 'all')
            ->equal('orderBy.blast_users.created_at', 'desc')
            ->equal('with.total', 'true')
            ->middleware(function($fetch) use($request, $filter_category, $TableKey) {
                if ($filter_category) {
                    $fetch->equal('blast_category_id', $filter_category);
                }
                $fetch->equal('skip', ___TableGetSkip($request, $TableKey, $fetch->QueryRoute->ArrQuery->take));
                return $fetch;
            })
            ->get('fetch');

        $DataTable = [
            'key' => $TableKey,
            'pageNow' => ___TableGetCurrentPage($request, $TableKey),
            'paginate' => ___TablePaginate((int)$UserPhoneNumber['total'], (int)$UserPhoneNumber['query']->take, ___TableGetCurrentPage($request, $TableKey)),
            'heads' => [
                (object)['name' => 'phone_number', 'label' => 'Phone Number'],
                (object)['name' => 'blast_category_id', 'label' => 'Category ID'],
                (object)['name' => 'status', 'label' => 'Status'],
                (object)['name' => 'updated_at', 'label' => 'Updated At'],
                (object)['name' => 'created_at', 'label' => 'Created At'],
            ],
            'records' => []
        ];
        if ($UserPhoneNumber['records']) {
            $DataTable['records'] = $UserPhoneNumber['records'];
            $DataTable['total'] = $UserPhoneNumber['total'];
            $DataTable['show'] = $UserPhoneNumber['show'];
        }

        $ParseData = [
            'hasOne' => [],
            'count' => [
                'available' => $AvailableCount['total'],
                'delivered' => $DeliveredCount['total'],
                'failed' => $FailedCount['total'],
            ],
            'select' => ['categories' => $CategorySelect],
            'user' => $User['records'],
            'filter_category' => $filter_category,
            'data' => $DataTable,
            'filter_category' => $filter_category

        ];
        if (isset($FilterCategoryData)) {
            $ParseData['hasOne']['FilterCategory'] = $FilterCategoryData['records'];
        }
        return view('app.user.detail.whatsapp.phone_number.home.index', $ParseData);
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
