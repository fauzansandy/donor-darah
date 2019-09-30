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
                            New #user
                        </div>
                    </div>
                    <div class="card-body">
                        <form autocomplete="off" id="newUserForm">
                            <div class="form-group form-group-default required ">
                                <label>Username</label>
                                <input name="username" class="form-control" type="text" required>
                            </div>
                            <div class="form-group form-group-default required ">
                                <label>Password</label>
                                <input autocomplete="new-password" name="password" class="form-control" type="password" required>
                            </div>
                            <div class="form-group form-group-default required ">
                                <label>Confirmation Password</label>
                                <input name="confirmPassword" class="form-control" type="password" required>
                            </div>
                            <div class="form-group form-group-default form-group-default-select2 required">
                                <label class="">Position</label>
                                @component('components.form.awesomeSelect', [
                                    'name' => 'position',
                                    'items' => $select['positions'],
                                    'selected' => '5'
                                ])
                                @endcomponent
                            </div>
                            <div class="form-group form-group-default form-group-default-select2 required">
                                <label class="">Gender</label>
                                @component('components.form.awesomeSelect', [
                                    'name' => 'gender',
                                    'items' => [['value' => 'male', 'label' => 'Male'], ['value' => 'female', 'label' => 'Female']],
                                    'selected' => null
                                ])
                                @endcomponent
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card card-default card-action">
                    <div class="card-body">
                        <div class="row row-button-action">
                            <div class="col-6 act-left">
                                <button data-url-next="{{ UrlPrevious(url('/user')) }}" class="saveAction btn btn-block btn-success btn-cons m-b-10"><i class="fas fa-save"></i> Save</button>
                            </div>
                            <div class="col-6 act-right">
                                <button data-is-recreate="true" class="saveAction btn btn-block btn-success btn-cons m-b-10"><i class="fas fa-save"></i> Save & New</button>
                            </div>
                        </div>
                        <a href="{{ url('/user') }}" class="btn btn-block btn-primary btn-cons m-b-10"><i class="fas fa-arrow-left"></i> Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @include('app.user.new.scripts.index')
@endsection

@section('formValidationScript')
    @include('app.user.new.scripts.form')
@endsection
