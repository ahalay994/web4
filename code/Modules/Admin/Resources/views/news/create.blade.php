@extends('admin::layouts.form')

@section('module-header')
	@include('admin::components.module-header', ['moduleTitle' => 'Коллектив'])
@stop

@section('module-title')
	@include('admin::partials.module-title', ['moduleTitle' => 'Добавить пополнение'])
@stop

@section('form')
<form action="{{ route('admin.news.save') }}" method="post" enctype="multipart/form-data">
	@include('admin::news.form', ['entity' => null, 'mode' => 'create'])
</form>
@stop

@include('admin::news.scripts')
