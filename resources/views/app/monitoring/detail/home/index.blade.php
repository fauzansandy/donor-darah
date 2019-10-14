@extends('layout.app')

@section('title', 'User '.$data['name'])
@section('bodyClass', 'fixed-header menu-pin menu-behind')

@section('content')
    <div class="jumbotron jumbotron m-b-0" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/monitoring') }}">Monitoring</a></li>
                    <li class="breadcrumb-item active">Detail Pasien {{ $data['name'] }}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid container-fixed-lg">
        <div class="card card-default m-t-20">
            <div class="card-body">
                <div>
                    <div class="pull-left">
                        <h2 class="font-montserrat all-caps hint-text">{{ $data['name'] }}</h2>
                        <address class="m-t-10">
                            No RM: {{ $data['no_rm'] }}
                        </address>
                    </div>
                    <div class="pull-right sm-m-t-20">
                        <h2 class="font-montserrat all-caps hint-text">{{ $data['position']['name'] }}</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <table class="table table-bordered table-sm">
                        <tr>
                            <td rowspan="2">Saat Monitoring</td>
                            <td rowspan="1" colspan="2">Waktu Pemberian</td>
                            <td rowspan="2">Tekanan darah</td>
                            <td rowspan="2">Nadi</td>
                            <td rowspan="2">Suhu</td>
                            <td rowspan="2">Respirasi</td>
                            <td rowspan="2">Jumlah Cairan Masuk</td>
                            <td rowspan="2">Jumlah Cairan Keluar</td>
                            <td rowspan="1" colspan="2">Reaksi Transfusi</td>
                        </tr>
                        <tr>
                            <td>Tgl</td>
                            <td>Jam</td>
                            <td>Ada</td>
                            <td>tidak</td>
                        </tr>
                        <tr>
                            <td>30 menit pre Transfusi</td>
                            <td><input name="myInput" style="width:50px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                        </tr>
                        <tr>
                            <td>Saat Transfusi Mulai</td>
                            <td><input style="width:50px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                        </tr>
                        <tr>
                            <td>15 menit pertama Transfusi</td>
                            <td><input style="width:50px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                        </tr>
                        <tr>
                            <td>1 Jam pertama Transfusi</td>
                            <td><input style="width:50px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                        </tr>
                        <tr>
                            <td>1 Jam kedua Transfusi</td>
                            <td><input style="width:50px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                        </tr>
                        <tr>
                            <td>1 jam ketiga Transfusi</td>
                            <td><input style="width:50px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                        </tr>
                        <tr>
                            <td>1 jam keempat Transfusi</td>
                            <td><input style="width:50px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                        </tr>
                        <tr>
                            <td>saat Transfusi selesai</td>
                            <td><input style="width:50px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                        </tr>
                        <tr>
                            <td>4 jam post Transfusi selesai</td>
                            <td><input style="width:50px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:40px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                            <td><input style="width:20px" type="text"/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @include('app.monitoring.detail.home.scripts.index')
@endsection
