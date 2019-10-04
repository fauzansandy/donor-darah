@extends('layout.app')

@section('title', 'Dashboard')
@section('bodyClass', 'fixed-header dashboard menu-pin menu-behind')

@section('contentManagementMenuClass', 'active')
@section('contentManagementMasterContentMenuClass', 'active')
@section('contentManagementMasterContentTreeMenuClass', 'sub-menu block')
@section('contentManagementMasterContentContactMenuClass', 'active')

@section('content')
    <div class="jumbotron" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Master Content</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/content/master/contact') }}">Contact Us</a></li>
                    <li class="breadcrumb-item active">New</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid container-fixed-lg">
        <div class="row">
            <div class="col-9">
                <form id="editCategoryForm">
                    <div class="card card-default">
                        <div class="card-header ">
                            <div class="card-title">
                                New
                            </div>
                        </div>
                        <div class="card-body">
                            
                        <div class="row">
                                <div class="col-12">
                                    <div class="form-group form-group-default required">
                                        <label>title</label>
                                        <input name="title" value="dummy_title" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group form-group-default required">
                                        <label>email</label>
                                        <input name="email" value="dummy_email" class="form-control" type="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group form-group-default required">
                                        <label>alamat</label>
                                        <textarea name="alamat" class="form-control" required style="height: 100px;">Jakarta</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group form-group-default required">
                                        <label>keterangan</label>
                                        <textarea name="keterangan" class="form-control" required style="height: 100px;">Keterangan</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-3">
                <div class="card card-default card-action">
                    <div class="card-body">
                        <button id="saveAction" class="btn btn-block btn-success btn-cons m-b-10"><i class="fas fa-save"></i> Save</button>
                        <div class="row row-button-action">
                            <div class="col-6 act-left">
                                <a href="{{ UrlPrevious(url('/content/master/contact')) }}" class="btn btn-block btn-primary btn-cons m-b-10"><i class="fas fa-arrow-left"></i> Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @include('app.content.master.info.new.scripts.index')
@endsection

@section('formValidationScript')
    @include('app.content.master.info.new.scripts.form')
@endsection
