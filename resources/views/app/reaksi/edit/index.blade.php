@extends('layout.app')

@section('title', 'WhatsApp User')
@section('bodyClass', 'fixed-header menu-pin menu-behind')

@section('content')
    <div class="jumbotron" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/user') }}">User</a></li>
                    <li class="breadcrumb-item active">{{ $data['name'] }}</li>
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
                            Edit #{{ $data['id'] }} - Last updated at {{ $data['updated_at'] }}
                        </div>
                    </div>
                    <div class="card-body">
                        <form autocomplete="off" id="editUserForm">
                            <div class="form-group form-group-default required ">
                                <label>Username</label>
                                <input name="username" value="{{ $data['username'] }}" class="form-control" type="text" required>
                            </div>
                            <div class="form-group form-group-default form-group-default-select2 required">
                                <label class="">Position</label>
                                @component('components.form.awesomeSelect', [
                                    'name' => 'position',
                                    'items' => $select['positions'],
                                    'selected' => $data['position_id']
                                ])
                                @endcomponent
                            </div>
                            <div class="form-group form-group-default form-group-default-select2 required">
                                <label class="">Gender</label>
                                @component('components.form.awesomeSelect', [
                                    'name' => 'gender',
                                    'items' => [['value' => 'male', 'label' => 'Male'], ['value' => 'female', 'label' => 'Female']],
                                    'selected' => $data['gender']
                                ])
                                @endcomponent
                            </div>
                            <div class="form-group form-group-default form-group-default-select2 required">
                                <label class="">Assign Category</label>
                                @component('components.form.awesomeSelect', [
                                    'name' => 'category',
                                    'multiple' => true,
                                    'items' => $select['categories'],
                                    'selected' => $categoryIds
                                ])
                                @endcomponent
                            </div>
                            <div class="form-group form-group-default form-group-default-select2 required">
                                <label class="">Status</label>
                                @component('components.form.awesomeSelect', [
                                    'name' => 'status',
                                    'items' => [['value' => 'inactive', 'label' => 'Inactive'], ['value' => 'active', 'label' => 'Active']],
                                    'selected' => $data['status']
                                ])
                                @endcomponent
                            </div>
                            <label>#Fill this form if you want to change the password</label>
                            <div class="form-group form-group-default">
                                <label>Password</label>
                                <input autocomplete="new-password" name="password" class="form-control" type="password">
                            </div>
                            <div class="form-group form-group-default">
                                <label>Confirmation Password</label>
                                <input name="confirmPassword" class="form-control" type="password">
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
                                <a href="{{ UrlPrevious(url('/user')) }}" class="btn btn-block btn-primary btn-cons m-b-10"><i class="fas fa-arrow-left"></i> Cancel</a>
                            </div>
                            <div class="col-6 act-right">
                                <button id="deleteOpenModal" class="btn btn-block btn-danger btn-cons m-b-10"><i class="fas fa-trash"></i> Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Delete Modal --}}
    <div class="modal fade slide-up disable-scroll" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-md">
            <div class="modal-content-wrapper">
                <div class="modal-content">
                    <div class="modal-header clearfix text-left">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                        </button>
                        <h5>Delete <span class="semi-bold">User</span></h5>
                        <p class="p-b-10">Are you sure you want to delete this entries?</p>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                            </div>
                            <div class="col-md-4 m-t-10 sm-m-t-10">
                                <button id="deleteAction" class="btn btn-block btn-danger btn-cons m-b-10"><i class="fas fa-trash"></i> Yes Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- /.Delete Modal --}}
@endsection

@section('script')
    @include('app.user.edit.scripts.index')
@endsection

@section('formValidationScript')
    @include('app.user.edit.scripts.form')
@endsection
