@extends('layout.app')

@section('title', 'Dashboard')
@section('bodyClass', 'fixed-header dashboard menu-pin menu-behind')

@section('contentManagementMenuClass', 'active')
@section('contentManagementPushNotificationMenuClass', 'active')

@section('content')
    <div class="jumbotron jumbotron m-b-0" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Content Push Notification</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid container-fixed-lg p-t-10">
        <div class="card card-white">
            <div class="card-header ">
                <div class="card-title">Content Push Notification Data</div><br>
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
                                {{ $item->ID }}
                            </td>
                            <td class="v-align-middle ">
                                {{ $item->MESSAGE }}
                            </td>
                            <td class="v-align-middle">
                                {{ $item->CREATED_DATE }}
                            </td>
                            <td class="v-align-middle">
                                {{ $item->CODE_PUSH_NOTIF }}
                            </td>
                            <td class="v-align-middle">
                                <div class="btn-group">
                                    <a href="{{ url('/content/pushnotification/1') }}" class="btn btn-xs btn-success btn-table-action">DETAIL</a>
                                </div>
                            </td>
                        </tr>
                    @endscopedslot
                @endcomponent
            </div>
        </div>
    </div>
@endsection
