@extends('admin::layouts.form')

@section('module-header')
	@include('admin::components.module-header', ['moduleTitle' => 'Пользователи'])
@stop

@section('module-title')
	@include('admin::partials.module-title', ['moduleTitle' => 'Создание пользователя'])
@stop

@section('form')
<form action="{{ route('admin.users.save') }}" method="post">
	@include('admin::users.form', ['entity' => null, 'mode' => 'create'])
</form>
@stop

@include('admin::users.scripts')
