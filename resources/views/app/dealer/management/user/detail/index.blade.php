@extends('layout.app')

@section('title', 'Dashboard')
@section('bodyClass', 'fixed-header dashboard menu-pin menu-behind')

@section('dealerManagementMenuClass', 'active')
@section('dealerManagementUserDealerMenuClass', 'active')

@section('content')
    <div class="jumbotron" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/dealer/user') }}">Dealer User</a></li>
                    <li class="breadcrumb-item active">DUMMY_USER</li>
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
                            Edit #dummy_id - Last updated at dummy_updated_at
                        </div>
                        @component('components.form.checkbox', [
                            'label' => 'Verified',
                            'value' => 'isVerified',
                            'checked' => true
                        ])
                        @endcomponent
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
                                        <label>username</label>
                                        <input name="username" value="dummy_username" class="form-control" type="text" disabled required>
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
                                        <label>dealer_id</label>
                                        <input name="dealer_id" value="dummy_dealer_id" class="form-control" type="text" disabled required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default form-group-default-select2 required">
                                        <label class="">jabatan</label>
                                        @component('components.form.awesomeSelect', [
                                            'name' => 'jabatan',
                                            'items' => [['value' => 'owner', 'label' => 'Owner'], ['value' => 'manager', 'label' => 'Manager'], ['value' => 'sales', 'label' => 'Sales']],
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
                                        <label>alamat</label>
                                        <input name="alamat" value="dummy_alamat" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>kota</label>
                                        <input name="kota" value="dummy_kota" class="form-control" type="text" required>
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
                                        <label>provinsi</label>
                                        <input name="provinsi" value="dummy_provinsi" class="form-control" type="text" required>
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
                                        <label>kode_pos</label>
                                        <input name="kode_pos" value="dummy_kode_pos" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <label>#</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>nomor_handphone</label>
                                        <input name="nomor_handphone" value="dummy_nomor_handphone" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>nama_dealer_aol</label>
                                        <input name="nama_dealer_aol" value="dummy_nama_dealer_aol" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>email</label>
                                        <input name="email" value="dummy_email" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default form-group-default-select2 required">
                                        <label class="">status_active</label>
                                        @component('components.form.awesomeSelect', [
                                            'name' => 'status_active',
                                            'items' => [['value' => 'active', 'label' => 'Active'], ['value' => 'notactive', 'label' => 'Not Active']],
                                            'selected' => ''
                                        ])
                                        @endcomponent
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>last_submit</label>
                                        <input name="last_submit" value="dummy_last_submit" class="form-control" type="text" disabled required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>last_log_in</label>
                                        <input name="last_log_in" value="dummy_last_log_in" class="form-control" type="text" disabled required>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card card-default card-action">
                    <div class="card-body">
                        <button id="saveAction" class="btn btn-block btn-success btn-cons m-b-10"><i class="fas fa-save"></i> Save</button>
                        <div class="row row-button-action">
                            <div class="col-6 act-left">
                                <a href="{{ UrlPrevious(url('/dealer/user')) }}" class="btn btn-block btn-primary btn-cons m-b-10"><i class="fas fa-arrow-left"></i> Cancel</a>
                            </div>
                            <div class="col-6 act-right">
                                <button id="deleteOpenModal" class="btn btn-block btn-danger btn-cons m-b-10"><i class="fas fa-trash"></i> Delete</button>
                            </div>
                        </div>
                        <button id="saveAction" class="btn btn-block btn-info btn-cons m-b-10"><i class="fas fa-envelope"></i> RESEND EMAIL</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
