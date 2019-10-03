@extends('layout.app')

@section('title', 'Dashboard')
@section('bodyClass', 'fixed-header dashboard menu-pin menu-behind')

@section('dealerManagementMenuClass', 'active')
@section('dealerManagementVerificationRequestMenuClass', 'active')

@section('content')
    <div class="jumbotron" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/dealer/verification/request') }}">Verification User</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/dealer/verification/request/1') }}">DUMMY_VERIFICATION_USER</a></li>
                    <li class="breadcrumb-item active">MASTER SKEMA INSENTIF</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid container-fixed-lg p-t-10">
        <div class="card card-white">
            <div class="card-header ">
                <div class="card-title">Master Skema Insentif Data</div><br>
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
                                {{ $item->NAMA }}
                            </td>
                            <td class="v-align-middle ">
                                {{ $item->DEALER }}
                            </td>
                            <td class="v-align-middle">
                                {{ $item->NAMA_OWNER }}
                            </td>
                            <td class="v-align-middle">
                                {{ $item->ALAMAT }}
                            </td>
                            <td class="v-align-middle">
                                {{ $item->KELURAHAN }}
                            </td>
                            <td class="v-align-middle">
                                {{ $item->KOTA }}
                            </td>
                            <td class="v-align-middle">
                                {{ $item->PROVINSI }}
                            </td>
                            <td class="v-align-middle">
                                <div class="btn-group">
                                    <a href="{{ url('/dealer/verification/request/1/grab/masterinsentifscheme/1/salesselect') }}" class="btn btn-xs btn-success btn-table-action">Pilih DETAIL</a>
                                </div>
                            </td>
                        </tr>
                    @endscopedslot
                @endcomponent
            </div>
        </div>
    </div>
@endsection
