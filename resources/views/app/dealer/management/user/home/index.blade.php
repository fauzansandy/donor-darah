@extends('layout.app')

@section('title', 'Dashboard')
@section('bodyClass', 'fixed-header dashboard menu-pin menu-behind')

@section('dealerManagementMenuClass', 'active')
@section('dealerManagementUserDealerMenuClass', 'active')

@section('content')
    <div class="jumbotron jumbotron m-b-0" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dealer User</li>
                </ol>
            </div>
        </div>
    </div>
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
                                <a href="{{ url('/dealer/user/new') }}"><i class="fas fa-plus"></i> Create</a>
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
    <div class="container-fluid container-fixed-lg p-t-10">
        <div class="card card-white">
            <div class="card-header ">
                <div class="card-title">Dealer User Data</div><br>
            </div>
            <div class="card-body">
                @component('components.table', ['data' => $data, 'props' => []])
                    @scopedslot('head', ($item))
                        @if($item->name === 'ID')
                            <th style="width: 3%">{{ $item->name }}</th>
                        @elseif ($item->name === 'ACTION')
                            <th style="width: 112px">{{ $item->name }}</th>
                        @else
                            <th>{{ $item->name }}</th>
                        @endif
                    @endscopedslot
                    @scopedslot('record', ($item, $props))
                        <tr>
                            <td class="v-align-middle ">
                                {{ $item->DEALER_NAME }}
                            </td>
                            <td class="v-align-middle ">
                                {{ $item->USERNAME }}
                            </td>
                            <td class="v-align-middle">
                                {{ $item->NAMA_USER }}
                            </td>
                            <td class="v-align-middle">
                                {{ $item->EMAIL }}
                            </td>
                            <td class="v-align-middle">
                                {{ $item->NO_HP }}
                            </td>
                            <td class="v-align-middle">
                                {{ $item->JABATAN }}
                            </td>
                            <td class="v-align-middle">
                                {{ $item->STATUS_ACTIVE }}
                            </td>
                            <td class="v-align-middle">
                                {{ $item->STATUS_VERIFIED }}
                            </td>
                            <td class="v-align-middle">
                                <div class="btn-group">
                                    <a href="{{ url('/dealer/user/1') }}" class="btn btn-xs btn-success btn-table-action">DETAIL</a>
                                </div>
                            </td>
                        </tr>
                    @endscopedslot
                @endcomponent
            </div>
        </div>
    </div>
@endsection
