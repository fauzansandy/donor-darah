@extends('layout.app')

@section('title', 'Dashboard')
@section('bodyClass', 'fixed-header dashboard menu-pin menu-behind')

@section('contentManagementMenuClass', 'active')
@section('contentManagementMasterContentMenuClass', 'active')
@section('contentManagementMasterContentTreeMenuClass', 'sub-menu block')
@section('contentManagementMasterContentPeriodProvisionMenuClass', 'active')

@section('content')
    <div class="jumbotron" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Master Content</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/content/master/period-provision') }}">Ketentuan Periode</a></li>
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
                                    <div class="form-group form-group-default form-group-default-select2">
                                        <label class="">content type</label>
                                        @component('components.form.awesomeSelect', [
                                            'name' => 'content_type',
                                            'items' => [['value' => 'period_provision', 'label' => 'Ketentuan Periode']],
                                            'selected' => ''
                                        ])
                                        @endcomponent
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group form-group-default required">
                                        <label>upload PDF</label>
                                        @component('components.form.dropzone', [
                                            'id' => 'period-provision-content-master-upload-pdf',
                                            'value' => 'Drop files here to upload pdf',
                                            'style' => 'min-height: 100px;'
                                        ])
                                        @endcomponent
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
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
                                <a href="{{ UrlPrevious(url('/content/news')) }}" class="btn btn-block btn-primary btn-cons m-b-10"><i class="fas fa-arrow-left"></i> Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @include('app.content.master.period.new.scripts.index')
@endsection

@section('formValidationScript')
    @include('app.content.master.period.new.scripts.form')
@endsection
