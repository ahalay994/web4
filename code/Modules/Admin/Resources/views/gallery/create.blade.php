@extends('admin::layouts.form')

@section('module-header')
	@include('admin::components.module-header', ['moduleTitle' => 'Галлерея'])
@stop

@section('module-title')
	@include('admin::partials.module-title', ['moduleTitle' => 'Добавить изображения'])
@stop

@section('form')
<form action="{{ route('admin.gallery.save') }}" method="post" enctype="multipart/form-data">
	@include('admin::gallery.form', ['entity' => null, 'mode' => 'create'])
</form>
@stop

@include('admin::gallery.scripts')
