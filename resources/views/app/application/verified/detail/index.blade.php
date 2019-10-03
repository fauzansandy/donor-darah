@extends('layout.app')

@section('title', 'Dashboard')
@section('bodyClass', 'fixed-header dashboard menu-pin menu-behind')

@section('ringkasanPengajuanMenuClass', 'active')
@section('ringkasanPengajuanVerifyMenuClass', 'active')

@section('content')
    <div class="jumbotron" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/application/verified') }}">Application Verified</a></li>
                    <li class="breadcrumb-item active">Dummy Application Not Verified</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid container-fixed-lg">
        <div class="row">
            <div class="col-8">
                <div class="card card-default">
                    <div class="card-header ">
                        <div class="card-title">
                            Edit #dummy_id - Last updated at dummy_updated_at
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="editCategoryForm">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>nama_dealer</label>
                                        <input name="nama_dealer" value="dummy_nama_dealer" class="form-control" type="text" disabled required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>nama_user</label>
                                        <input name="nama_user" value="dummy_nama_user" class="form-control" type="text" disabled required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>jabatan</label>
                                        <input name="jabatan" value="dummy_jabatan" class="form-control" type="text" disabled required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>tgl_submit</label>
                                        <input name="tgl_submit" value="dummy_tgl_submit" class="form-control" type="text" disabled required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>status_verifed</label>
                                        <input name="status_verifed" value="dummy_status_verifed" class="form-control" type="text" disabled required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>status_pengajuan_aplikasi</label>
                                        <input name="status_pengajuan_aplikasi" value="dummy_status_pengajuan_aplikasi" class="form-control" type="text" disabled required>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-default card-action">
                    <div class="card-body">
                        <button id="saveAction" class="btn btn-block btn-success btn-cons m-b-10"><i class="fas fa-save"></i> Save</button>
                        <a href="{{ UrlPrevious(url('/dealer/verification/request')) }}" class="btn btn-block btn-primary btn-cons m-b-10"><i class="fas fa-arrow-left"></i> Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
