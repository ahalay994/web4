@extends('admin::layouts.form')

@section('module-header')
	@include('admin::components.module-header', ['moduleTitle' => 'Коллектив'])
@stop

@section('module-title')
	@include('admin::partials.module-title', ['moduleTitle' => 'Добавить питомца'])
@stop

@section('form')
<form action="{{ route('admin.teams.save') }}" method="post" enctype="multipart/form-data">
	@include('admin::teams.form', ['entity' => null, 'mode' => 'create'])
</form>
@stop

@include('admin::teams.scripts')
