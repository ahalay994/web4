@extends('admin::layouts.form')

@section('module-header')
    @include('admin::components.module-header', ['moduleTitle' => 'Настройки'])
@stop

@section('module-title')
    @include('admin::partials.module-title', ['moduleTitle' => 'Редактировать пункт #' . $entity->id, 'className' => 'mt-4 mb-4'])
@stop

@section('form')
    {{ Form::open(['route' => ['admin.settings.update', $entity->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) }}
        @include('admin::settings.form')
    {{ Form::close() }}
@stop

@include('admin::settings.scripts')
