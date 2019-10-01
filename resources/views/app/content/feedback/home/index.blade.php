@extends('layout.app')

@section('title', 'Dashboard')
@section('bodyClass', 'fixed-header dashboard menu-pin menu-behind')

@section('content')
    <div class="jumbotron jumbotron m-b-0" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Content FeedBack</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid container-fixed-lg p-t-10">
        <div class="card card-white">
            <div class="card-header ">
                <div class="card-title">Content FeedBack Data</div><br>
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
                            </td>
                            <td class="v-align-middle ">
                            </td>
                            <td class="v-align-middle">
                            </td>
                            <td class="v-align-middle">
                            </td>
                            <td class="v-align-middle">
                                <div class="btn-group">
                                </div>
                            </td>
                        </tr>
                    @endscopedslot
                @endcomponent
            </div>
        </div>
    </div>
@endsection
