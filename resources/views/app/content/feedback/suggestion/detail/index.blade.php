@extends('layout.app')

@section('title', 'Dashboard')
@section('bodyClass', 'fixed-header dashboard menu-pin menu-behind')

@section('contentManagementMenuClass', 'active')
@section('contentManagementFeedbackMenuClass', 'active')
@section('contentManagementFeedbackTreeMenuClass', 'sub-menu block')
@section('contentManagementFeedbackKritikMenuClass', 'active')

@section('content')
    <div class="jumbotron" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Feedback</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/content/feedback/suggestion') }}">Saran</a></li>
                    <li class="breadcrumb-item active">DUMMY_SARAN_TITLE</li>
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
                                Edit #dummy_id - Last updated at dummy_updated_at
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group form-group-default required">
                                        <label>customer name</label>
                                        <input name="nama" value="customer_name" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group form-group-default required">
                                        <label>email</label>
                                        <input name="email" value="email@mail.com" class="form-control" type="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group form-group-default required">
                                        <label>report</label>
                                        <input name="report" value="report" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group form-group-default required">
                                        <label>submit date</label>
                                        <input name="submit" class="form-control" type="date" required>
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
                                <a href="{{ UrlPrevious(url('/content/feedback/suggestion')) }}" class="btn btn-block btn-primary btn-cons m-b-10"><i class="fas fa-arrow-left"></i> Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    @include('app.content.feedback.suggestion.detail.scripts.index')
@endsection

@section('formValidationScript')
    @include('app.content.feedback.suggestion.detail.scripts.form')
@endsection
