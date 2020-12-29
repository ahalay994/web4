@extends('admin::layouts.master')

@section('content')
    <h1 class="align-items-sm-center d-flex h-100 justify-content-center">{{ \Illuminate\Support\Facades\Auth::user()->name }}, добро пожаловать в панель администрирования сайта {{ env('APP_NAME') }}</h1>
@endsection
