@extends('admin::layouts.form')

@section('module-header')
	@include('admin::components.module-header', ['moduleTitle' => 'Фото питомца #' . $id])
@stop

@section('module-title')
	@include('admin::partials.module-title', ['moduleTitle' => 'Добавить изображения'])
@stop

@section('form')
<form action="{{ route('admin.teams.gallery.save', ['id' => $id]) }}" method="post" enctype="multipart/form-data">
	@include('admin::teams.gallery.form', ['entity' => null, 'mode' => 'create'])
</form>
@stop

