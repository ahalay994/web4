@extends('admin::layouts.form')

@section('module-header')
	@include('admin::components.module-header', ['moduleTitle' => 'Слайдер'])
@stop

@section('module-title')
	@include('admin::partials.module-title', ['moduleTitle' => 'Добавить изображения'])
@stop

@section('form')
<form action="{{ route('admin.slider.save') }}" method="post" enctype="multipart/form-data">
	@include('admin::slider.form', ['entity' => null, 'mode' => 'create'])
</form>
@stop

