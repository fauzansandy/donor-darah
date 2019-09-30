@extends('layout.app')

@section('title', 'Dashboard')
@section('bodyClass', 'fixed-header dashboard menu-pin menu-behind')

@section('content')
    @include('components.sidebar')
@endsection

@section('script')
    @include('app.home.scripts.index')
@endsection

@section('formValidationScript')
    @include('app.home.scripts.form')
@endsection
