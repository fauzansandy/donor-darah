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
                            <td>{{ $data['patient_transfusions'][0]->b30m_tgl_pemberian }}</td>
                            <td>{{ $data['patient_transfusions'][0]->b30m_jam_pemberian }}</td>
                            <td><input style="width:50px" type="text" name="b30m_td" value="{{ $data['patient_transfusions'][0]->b30m_td }}"/></td>
                            <td><input style="width:50px" type="text" name="b30m_nadi" value="{{ $data['patient_transfusions'][0]->b30m_nadi }}"/></td>
                            <td><input style="width:50px" type="text" name="b30m_nadi" value="{{ $data['patient_transfusions'][0]->b30m_suhu }}"/></td>
                            <td><input style="width:50px" type="text" name="b30m_nadi" value="{{ $data['patient_transfusions'][0]->b30m_respirasi }}"/></td>
                            <td><input style="width:50px" type="text" name="b30m_jml_cairan_masuk" value="{{ $data['patient_transfusions'][0]->b30m_jml_cairan_masuk }}"/></td>
                            <td><input style="width:50px" type="text" name="b30m_jml_cairan_keluar" value="{{ $data['patient_transfusions'][0]->b30m_jml_cairan_keluar }}"/></td>
                            <td><input style="width:50px" type="text" name="b30m_ada_reaksi" value="{{ $data['patient_transfusions'][0]->b30m_ada_reaksi }}"/></td>
                            <td><input style="width:50px" type="text" name="b30m_tidak_ada_reaksi" value="{{ $data['patient_transfusions'][0]->b30m_tidak_ada_reaksi }}"/></td>
                        </tr>
                        <tr>
                            <td>Saat Transfusi Mulai</td>
                            <td>{{ $data['patient_transfusions'][0]->tgl_pemberian }}</td>
                            <td>{{ $data['patient_transfusions'][0]->jam_pemberian }}</td>
                            <td><input style="width:50px" type="text" name="td" value="{{ $data['patient_transfusions'][0]->td }}"/></td>
                            <td><input style="width:50px" type="text" name="nadi" value="{{ $data['patient_transfusions'][0]->nadi }}"/></td>
                            <td><input style="width:50px" type="text" name="nadi" value="{{ $data['patient_transfusions'][0]->suhu }}"/></td>
                            <td><input style="width:50px" type="text" name="nadi" value="{{ $data['patient_transfusions'][0]->respirasi }}"/></td>
                            <td><input style="width:50px" type="text" name="jml_cairan_masuk" value="{{ $data['patient_transfusions'][0]->jml_cairan_masuk }}"/></td>
                            <td><input style="width:50px" type="text" name="jml_cairan_keluar" value="{{ $data['patient_transfusions'][0]->jml_cairan_keluar }}"/></td>
                            <td><input style="width:50px" type="text" name="ada_reaksi" value="{{ $data['patient_transfusions'][0]->ada_reaksi }}"/></td>
                            <td><input style="width:50px" type="text" name="tidak_ada_reaksi" value="{{ $data['patient_transfusions'][0]->tidak_ada_reaksi }}"/></td>
                        </tr>
                        <tr>
                            <td>15 menit pertama Transfusi</td>
                            <td>{{ $data['patient_transfusions'][0]->a15m_tgl_pemberian }}</td>
                            <td>{{ $data['patient_transfusions'][0]->a15m_jam_pemberian }}</td>
                            <td><input style="width:50px" type="text" name="a15m_td" value="{{ $data['patient_transfusions'][0]->a15m_td }}"/></td>
                            <td><input style="width:50px" type="text" name="a15m_nadi" value="{{ $data['patient_transfusions'][0]->a15m_nadi }}"/></td>
                            <td><input style="width:50px" type="text" name="a15m_nadi" value="{{ $data['patient_transfusions'][0]->a15m_suhu }}"/></td>
                            <td><input style="width:50px" type="text" name="a15m_nadi" value="{{ $data['patient_transfusions'][0]->a15m_respirasi }}"/></td>
                            <td><input style="width:50px" type="text" name="a15m_jml_cairan_masuk" value="{{ $data['patient_transfusions'][0]->a15m_jml_cairan_masuk }}"/></td>
                            <td><input style="width:50px" type="text" name="a15m_jml_cairan_keluar" value="{{ $data['patient_transfusions'][0]->a15m_jml_cairan_keluar }}"/></td>
                            <td><input style="width:50px" type="text" name="a15m_ada_reaksi" value="{{ $data['patient_transfusions'][0]->a15m_ada_reaksi }}"/></td>
                            <td><input style="width:50px" type="text" name="a15m_tidak_ada_reaksi" value="{{ $data['patient_transfusions'][0]->a15m_tidak_ada_reaksi }}"/></td>
                        </tr>
                        <tr>
                            <td>1 Jam pertama Transfusi</td>
                            <td>{{ $data['patient_transfusions'][0]->a1h_tgl_pemberian }}</td>
                            <td>{{ $data['patient_transfusions'][0]->a1h_jam_pemberian }}</td>
                            <td><input style="width:50px" type="text" name="a1h_td" value="{{ $data['patient_transfusions'][0]->a1h_td }}"/></td>
                            <td><input style="width:50px" type="text" name="a1h_nadi" value="{{ $data['patient_transfusions'][0]->a1h_nadi }}"/></td>
                            <td><input style="width:50px" type="text" name="a1h_nadi" value="{{ $data['patient_transfusions'][0]->a1h_suhu }}"/></td>
                            <td><input style="width:50px" type="text" name="a1h_nadi" value="{{ $data['patient_transfusions'][0]->a1h_respirasi }}"/></td>
                            <td><input style="width:50px" type="text" name="a1h_jml_cairan_masuk" value="{{ $data['patient_transfusions'][0]->a1h_jml_cairan_masuk }}"/></td>
                            <td><input style="width:50px" type="text" name="a1h_jml_cairan_keluar" value="{{ $data['patient_transfusions'][0]->a1h_jml_cairan_keluar }}"/></td>
                            <td><input style="width:50px" type="text" name="a1h_ada_reaksi" value="{{ $data['patient_transfusions'][0]->a1h_ada_reaksi }}"/></td>
                            <td><input style="width:50px" type="text" name="a1h_tidak_ada_reaksi" value="{{ $data['patient_transfusions'][0]->a1h_tidak_ada_reaksi }}"/></td>
                        </tr>
                        <tr>
                            <td>1 Jam kedua Transfusi</td>
                            <td>{{ $data['patient_transfusions'][0]->a2h_tgl_pemberian }}</td>
                            <td>{{ $data['patient_transfusions'][0]->a2h_jam_pemberian }}</td>
                            <td><input style="width:50px" type="text" name="a2h_td" value="{{ $data['patient_transfusions'][0]->a2h_td }}"/></td>
                            <td><input style="width:50px" type="text" name="a2h_nadi" value="{{ $data['patient_transfusions'][0]->a2h_nadi }}"/></td>
                            <td><input style="width:50px" type="text" name="a2h_nadi" value="{{ $data['patient_transfusions'][0]->a2h_suhu }}"/></td>
                            <td><input style="width:50px" type="text" name="a2h_nadi" value="{{ $data['patient_transfusions'][0]->a2h_respirasi }}"/></td>
                            <td><input style="width:50px" type="text" name="a2h_jml_cairan_masuk" value="{{ $data['patient_transfusions'][0]->a2h_jml_cairan_masuk }}"/></td>
                            <td><input style="width:50px" type="text" name="a2h_jml_cairan_keluar" value="{{ $data['patient_transfusions'][0]->a2h_jml_cairan_keluar }}"/></td>
                            <td><input style="width:50px" type="text" name="a2h_ada_reaksi" value="{{ $data['patient_transfusions'][0]->a2h_ada_reaksi }}"/></td>
                            <td><input style="width:50px" type="text" name="a2h_tidak_ada_reaksi" value="{{ $data['patient_transfusions'][0]->a2h_tidak_ada_reaksi }}"/></td>
                        </tr>
                        <tr>
                            <td>1 jam ketiga Transfusi</td>
                            <td>{{ $data['patient_transfusions'][0]->a3h_tgl_pemberian }}</td>
                            <td>{{ $data['patient_transfusions'][0]->a3h_jam_pemberian }}</td>
                            <td><input style="width:50px" type="text" name="a3h_td" value="{{ $data['patient_transfusions'][0]->a3h_td }}"/></td>
                            <td><input style="width:50px" type="text" name="a3h_nadi" value="{{ $data['patient_transfusions'][0]->a3h_nadi }}"/></td>
                            <td><input style="width:50px" type="text" name="a3h_nadi" value="{{ $data['patient_transfusions'][0]->a3h_suhu }}"/></td>
                            <td><input style="width:50px" type="text" name="a3h_nadi" value="{{ $data['patient_transfusions'][0]->a3h_respirasi }}"/></td>
                            <td><input style="width:50px" type="text" name="a3h_jml_cairan_masuk" value="{{ $data['patient_transfusions'][0]->a3h_jml_cairan_masuk }}"/></td>
                            <td><input style="width:50px" type="text" name="a3h_jml_cairan_keluar" value="{{ $data['patient_transfusions'][0]->a3h_jml_cairan_keluar }}"/></td>
                            <td><input style="width:50px" type="text" name="a3h_ada_reaksi" value="{{ $data['patient_transfusions'][0]->a3h_ada_reaksi }}"/></td>
                            <td><input style="width:50px" type="text" name="a3h_tidak_ada_reaksi" value="{{ $data['patient_transfusions'][0]->a3h_tidak_ada_reaksi }}"/></td>
                        </tr>
                        <tr>
                            <td>1 jam keempat Transfusi</td>
                            <td><input style="width:50px" type="text" name="a4h_tgl_pemberian" value="{{ $data['patient_transfusions'][0]->a4h_tgl_pemberian }}"/></td>
                            <td><input style="width:50px" type="text" name="a4h_jam_pemberian" value="{{ $data['patient_transfusions'][0]->a4h_jam_pemberian }}"/></td>
                            <td><input style="width:50px" type="text" name="a4h_td" value="{{ $data['patient_transfusions'][0]->a4h_td }}"/></td>
                            <td><input style="width:50px" type="text" name="a4h_nadi" value="{{ $data['patient_transfusions'][0]->a4h_nadi }}"/></td>
                            <td><input style="width:50px" type="text" name="a4h_nadi" value="{{ $data['patient_transfusions'][0]->a4h_suhu }}"/></td>
                            <td><input style="width:50px" type="text" name="a4h_nadi" value="{{ $data['patient_transfusions'][0]->a4h_respirasi }}"/></td>
                            <td><input style="width:50px" type="text" name="a4h_jml_cairan_masuk" value="{{ $data['patient_transfusions'][0]->a4h_jml_cairan_masuk }}"/></td>
                            <td><input style="width:50px" type="text" name="a4h_jml_cairan_keluar" value="{{ $data['patient_transfusions'][0]->a4h_jml_cairan_keluar }}"/></td>
                            <td><input style="width:50px" type="text" name="a4h_ada_reaksi" value="{{ $data['patient_transfusions'][0]->a4h_ada_reaksi }}"/></td>
                            <td><input style="width:50px" type="text" name="a4h_tidak_ada_reaksi" value="{{ $data['patient_transfusions'][0]->a4h_tidak_ada_reaksi }}"/></td>
                        </tr>
                        <tr>
                            <td>saat Transfusi selesai</td>
                            <td><input style="width:50px" type="text" name="d_tgl_pemberian" value="{{ $data['patient_transfusions'][0]->d_tgl_pemberian }}"/></td>
                            <td><input style="width:50px" type="text" name="d_jam_pemberian" value="{{ $data['patient_transfusions'][0]->d_jam_pemberian }}"/></td>
                            <td><input style="width:50px" type="text" name="d_td" value="{{ $data['patient_transfusions'][0]->d_td }}"/></td>
                            <td><input style="width:50px" type="text" name="d_nadi" value="{{ $data['patient_transfusions'][0]->d_nadi }}"/></td>
                            <td><input style="width:50px" type="text" name="d_nadi" value="{{ $data['patient_transfusions'][0]->d_suhu }}"/></td>
                            <td><input style="width:50px" type="text" name="d_nadi" value="{{ $data['patient_transfusions'][0]->d_respirasi }}"/></td>
                            <td><input style="width:50px" type="text" name="d_jml_cairan_masuk" value="{{ $data['patient_transfusions'][0]->d_jml_cairan_masuk }}"/></td>
                            <td><input style="width:50px" type="text" name="d_jml_cairan_keluar" value="{{ $data['patient_transfusions'][0]->d_jml_cairan_keluar }}"/></td>
                            <td><input style="width:50px" type="text" name="d_ada_reaksi" value="{{ $data['patient_transfusions'][0]->d_ada_reaksi }}"/></td>
                            <td><input style="width:50px" type="text" name="d_tidak_ada_reaksi" value="{{ $data['patient_transfusions'][0]->d_tidak_ada_reaksi }}"/></td>
                        </tr>
                        <tr>
                            <td>4 jam post Transfusi selesai</td>
                            <td><input style="width:50px" type="text" name="pt4_tgl_pemberian" value="{{ $data['patient_transfusions'][0]->pt4_tgl_pemberian }}"/></td>
                            <td><input style="width:50px" type="text" name="pt4_jam_pemberian" value="{{ $data['patient_transfusions'][0]->pt4_jam_pemberian }}"/></td>
                            <td><input style="width:50px" type="text" name="pt4_td" value="{{ $data['patient_transfusions'][0]->pt4_td }}"/></td>
                            <td><input style="width:50px" type="text" name="pt4_nadi" value="{{ $data['patient_transfusions'][0]->pt4_nadi }}"/></td>
                            <td><input style="width:50px" type="text" name="pt4_nadi" value="{{ $data['patient_transfusions'][0]->pt4_suhu }}"/></td>
                            <td><input style="width:50px" type="text" name="pt4_nadi" value="{{ $data['patient_transfusions'][0]->pt4_respirasi }}"/></td>
                            <td><input style="width:50px" type="text" name="pt4_jml_cairan_masuk" value="{{ $data['patient_transfusions'][0]->pt4_jml_cairan_masuk }}"/></td>
                            <td><input style="width:50px" type="text" name="pt4_jml_cairan_keluar" value="{{ $data['patient_transfusions'][0]->pt4_jml_cairan_keluar }}"/></td>
                            <td><input style="width:50px" type="text" name="pt4_ada_reaksi" value="{{ $data['patient_transfusions'][0]->pt4_ada_reaksi }}"/></td>
                            <td><input style="width:50px" type="text" name="pt4_tidak_ada_reaksi" value="{{ $data['patient_transfusions'][0]->pt4_tidak_ada_reaksi }}"/></td>
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
