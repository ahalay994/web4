@extends('admin::layouts.form')

@section('module-header')
	@include('admin::components.module-header', ['moduleTitle' => 'Типы животных'])
@stop

@section('module-title')
	@include('admin::partials.module-title', ['moduleTitle' => 'Создать тип'])
@stop

@section('form')
<form action="{{ route('admin.types.save') }}" method="post" enctype="multipart/form-data">
	@include('admin::types.form', ['entity' => null, 'mode' => 'create'])
</form>
@stop

@include('admin::types.scripts')
