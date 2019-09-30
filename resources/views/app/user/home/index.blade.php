@extends('layout.app')

@section('title', 'WhatsApp User')
@section('bodyClass', 'fixed-header menu-pin menu-behind')

@section('content')
    <div class="jumbotron jumbotron m-b-0" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid container-fixed-lg">
        <nav class="navbar navbar-default bg-transparent sm-padding-10 full-width p-t-0 p-b-0 m-b-0" role="navigation">
            <div class="container-fluid full-width">
                <div class="navbar-header text-center">
                    <button type="button" class="navbar-toggle collapsed btn btn-link no-padding" data-toggle="collapse" data-target="#sub-nav">
                        <i class="pg pg-more v-align-middle"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="navbar-nav d-flex flex-row">
                                <li class="nav-item">
                                    <a href="{{ url('/user/new') }}"><i class="fas fa-plus"></i> Create</a>
                                </li>
                                <li class="nav-item">
                                    @if ($filter_status === 'active')
                                        <a href="{{ url('/user?filter_status=inactive') }}"><i class="fas fa-eye-slash"></i> Inactive</a>
                                    @else
                                        <a href="{{ url('/user?filter_status=active') }}"><i class="fas fa-eye"></i> Active</a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="navbar-nav d-flex flex-row">
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="navbar-nav d-flex flex-row justify-content-sm-end">
                                <li class="nav-item"><a href="#" class="p-r-10" onclick="$.Pages.setFullScreen(document.querySelector('html'));"><i class="fa fa-expand"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="card card-white">
            <div class="card-header ">
                <div class="card-title">User Data</div><br>
                @include('components.search')
                @include('components.entries')
            </div>
            <div class="card-body">
                @component('components.table', ['data' => $data, 'props' => []])
                    @scopedslot('head', ($item))
                        @if($item->name === 'id')
                            <th style="width: 3%">{{ $item->name }}</th>
                        @elseif ($item->name === 'action')
                            <th style="width: 10%">{{ $item->name }}</th>
                        @else
                            <th>{{ $item->name }}</th>
                        @endif
                    @endscopedslot
                    @scopedslot('record', ($item, $props))
                        <tr>
                            <td class="v-align-middle ">
                                <p>{{ $item->id }}</p>
                            </td>
                            <td class="v-align-middle ">
                                <p>{{ $item->username }}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{ $item->updated_at }}</p>
                            </td>
                            <td class="v-align-middle">
                                <p>{{ $item->created_at }}</p>
                            </td>
                            <td class="v-align-middle">
                                <div class="btn-group">
                                    <a href="{{ url('/user/'.$item->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ url('/user/edit/'.$item->id) }}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#modalDelete" data-toggle="modal" data-record-id="{{$item->id}}" data-record-name="{{$item->name}}" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endscopedslot
                @endcomponent
            </div>
        </div>
    </div>
    {{-- Detail Modal --}}
    <div class="modal fade slide-up disable-scroll" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-md">
            <div class="modal-content-wrapper">
                <div class="modal-content">
                    <div class="modal-header clearfix text-left">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                        </button>
                        <h5>Delete <span class="semi-bold">User</span></h5>
                        <p class="p-b-10">Are you sure you want to delete this entries?</p>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                            </div>
                            <div class="col-md-4 m-t-10 sm-m-t-10">
                                <button id="deleteAction" class="btn btn-block btn-danger btn-cons m-b-10"><i class="fas fa-trash"></i> Yes Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- /.Delete Modal --}}
@endsection

@section('script')
    @include('app.user.home.scripts.index')
@endsection
