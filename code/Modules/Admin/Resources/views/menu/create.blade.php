@extends('admin::layouts.form')

@section('module-header')
	@include('admin::components.module-header', ['moduleTitle' => 'Меню'])
@stop

@section('module-title')
	@include('admin::partials.module-title', ['moduleTitle' => 'Добавить пункт меню'])
@stop

@section('form')
<form action="{{ route('admin.menu.save') }}" method="post" enctype="multipart/form-data">
	@include('admin::menu.form', ['entity' => null, 'mode' => 'create'])
</form>
@stop

@include('admin::menu.scripts')
