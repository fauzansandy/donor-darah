@extends('layout.app')

@section('bodyClass', 'fixed-header menu-pin menu-behind')

@section('content')
    <div class="jumbotron" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/monitoring') }}">Monitoring</a></li>
                    <li class="breadcrumb-item active">New</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid container-fixed-lg">
        <div class="row">
            <div class="col-9">
                <div class="card card-default">
                    <div class="card-header ">
                        <div class="card-title">
                            Pasien Baru
                        </div>
                    </div>
                    <div class="card-body">
                        <form autocomplete="off" id="newMonitoringForm">
                            <div class="form-group form-group-default required ">
                                <label>Nama Pasien</label>
                                <input name="name" class="form-control" type="text" required>
                            </div>
                            <div class="form-group form-group-default required ">
                                <label>No Rm</label>
                                <input name="no_rm" class="form-control" type="text" required>
                            </div>
                            <div class="form-group form-group-default form-group-default-select2 required">
                                <label class="">Jenis Transfusi</label>
                                @component('components.form.awesomeSelect', [
                                    'name' => 'transfusion',
                                    'items' => $select['transfusions'],
                                    'selected' => '5'
                                ])
                                @endcomponent
                            </div>
                            <div class="form-group form-group-default required ">
                                <label>Transfusion Date</label>
                                <input name="transfusion_date" class="form-control" type="text" id="date_picker" required>
                            </div>
                            <div class="form-group form-group-default required ">
                                <label>Transfusion Time</label>
                                <input name="transfusion_time" class="form-control" type="text" id="time_picker" required>
                            </div>
                            <div class="form-group form-group-default ">
                                <label>Jenis Kelamin</label>
                                <input name="jenis_kelamin" class="form-control" type="text">
                            </div>
                            <div class="form-group form-group-default ">
                                <label>Tanggal Lahir</label>
                                <input name="tgl_lahir" class="form-control" type="text">
                            </div>
                            <div class="form-group form-group-default ">
                                <label>Alamat</label>
                                <input name="alamat" class="form-control" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card card-default card-action">
                    <div class="card-body">
                        <div class="row row-button-action">
                            <button data-url-next="{{ UrlPrevious(url('/monitoring')) }}" class="saveAction btn btn-block btn-success btn-cons m-b-10"><i class="fas fa-save"></i> Save</button>
                            <a href="{{ url('/monitoring') }}" class="btn btn-block btn-primary btn-cons m-b-10"><i class="fas fa-arrow-left"></i> Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @include('app.monitoring.new.scripts.index')
@endsection

@section('formValidationScript')
    @include('app.monitoring.new.scripts.form')
@endsection
