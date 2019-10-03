@extends('layout.app')

@section('title', 'Dashboard')
@section('bodyClass', 'fixed-header dashboard menu-pin menu-behind')

@section('contentManagementMenuClass', 'active')
@section('contentManagementNewsMenuClass', 'active')

@section('content')
    <div class="jumbotron" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/content/news') }}">Content News</a></li>
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
                                Edit #dummy_id - Last updated at dummy_updated_at
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>title</label>
                                        <input name="title" value="dummy_title" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default form-group-default-select2 required">
                                        <label class="">role</label>
                                        @component('components.form.awesomeSelect', [
                                            'name' => 'role',
                                            'items' => [['value' => 'owner', 'label' => 'Owner'], ['value' => 'manager', 'label' => 'Manager'], ['value' => 'sales', 'label' => 'Sales']],
                                            'selected' => ''
                                        ])
                                        @endcomponent
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>tgl_update</label>
                                        <input name="tgl_update" value="dummy_tgl_update" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group form-group-default required">
                                        <label>status</label>
                                        <input name="status" value="dummy_status" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-body">
                            <label class="">Banner</label>
                            @component('components.form.dropzone', [
                                'id' => 'news-content-master-upload-banner',
                                'value' => 'Drop files here to upload',
                                'style' => 'min-height: 100px;'
                            ])
                            @endcomponent
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-body">
                            <label class="">Deskripsi</label>
                            @component('components.form.summernote', [
                                'id' => 'news-content-master-new',
                                'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
                            ])
                            @endcomponent
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

@section('script')
    @include('app.content.news.new.scripts.index')
@endsection

@section('formValidationScript')
    @include('app.content.news.new.scripts.form')
@endsection
