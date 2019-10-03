@extends('layout.app')

@section('title', 'Dashboard')
@section('bodyClass', 'fixed-header dashboard menu-pin menu-behind')

@section('content')
    <div class="jumbotron" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/dealer/verification/request') }}">Verification User</a></li>
                    <li class="breadcrumb-item active">DUMMY_VERIFICATION_USER</li>
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
                                        <label>nama</label>
                                        <input name="nama" value="dummy_nama" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>nama</label>
                                        <input name="nama" value="" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>nama_dealer</label>
                                        <input name="nama_dealer" value="dummy_nama_dealer" class="form-control" type="text" disabled required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>nama_dealer</label>
                                        <input name="nama_dealer" value="" class="form-control" type="text" disabled required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>dealer_id</label>
                                        <input name="dealer_id" value="dummy_dealer_id" class="form-control" type="text" disabled required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>dealer_id</label>
                                        <input name="dealer_id" value="" class="form-control" type="text" disabled required>
                                    </div>
                                </div>
                            </div>
                            <label>#</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>alamat</label>
                                        <input name="alamat" value="dummy_alamat" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>alamat</label>
                                        <input name="alamat" value="" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>kelurahan</label>
                                        <input name="kelurahan" value="dummy_kelurahan" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>kelurahan</label>
                                        <input name="kelurahan" value="" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>kecamatan</label>
                                        <input name="kecamatan" value="dummy_kecamatan" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>kecamatan</label>
                                        <input name="kecamatan" value="" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <label>#</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>username</label>
                                        <input name="username" value="dummy_username" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>username</label>
                                        <input name="username" value="" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default form-group-default-select2 required">
                                        <label class="">tipe_user</label>
                                        @component('components.form.awesomeSelect', [
                                            'name' => 'tipe_user',
                                            'items' => [['value' => 'new', 'label' => 'New'], ['value' => 'used', 'label' => 'Used']],
                                            'selected' => ''
                                        ])
                                        @endcomponent
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default form-group-default-select2 required">
                                        <label class="">tipe_user</label>
                                        @component('components.form.awesomeSelect', [
                                            'name' => 'tipe_user',
                                            'items' => [['value' => 'new', 'label' => 'New'], ['value' => 'used', 'label' => 'Used']],
                                            'selected' => ''
                                        ])
                                        @endcomponent
                                    </div>
                                </div>
                            </div>
                            <label>#</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>kota</label>
                                        <input name="kota" value="dummy_kota" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>kota</label>
                                        <input name="kota" value="" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>provinsi</label>
                                        <input name="provinsi" value="dummy_provinsi" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>provinsi</label>
                                        <input name="provinsi" value="" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>kode_post</label>
                                        <input name="kode_post" value="dummy_kode_post" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>kode_post</label>
                                        <input name="kode_post" value="" class="form-control" type="text" required>
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
                        <a href="{{ url('/dealer/verification/request/1/grab/masterdealer') }}" class="btn btn-block btn-primary btn-cons m-b-10"><i class="fas fa-download"></i> GRAB MASTER DEALER</a>
                        <a href="{{ url('/dealer/verification/request/1/grab/masterinsentifscheme') }}" class="btn btn-block btn-primary btn-cons m-b-10"><i class="fas fa-download"></i> GRAB MASTER SKEMA INSENTIF</a>
                        <a href="{{ UrlPrevious(url('/dealer/verification/request')) }}" class="btn btn-block btn-primary btn-cons m-b-10"><i class="fas fa-arrow-left"></i> Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
