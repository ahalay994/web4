@extends('admin::layouts.form')

@section('module-header')
	@include('admin::components.module-header', ['moduleTitle' => 'Настройки'])
@stop

@section('module-title')
	@include('admin::partials.module-title', ['moduleTitle' => 'Добавить пункт'])
@stop

@section('form')
<form action="{{ route('admin.settings.save') }}" method="post" enctype="multipart/form-data">
	@include('admin::settings.form', ['entity' => null, 'mode' => 'create'])
</form>
@stop

@include('admin::settings.scripts')
