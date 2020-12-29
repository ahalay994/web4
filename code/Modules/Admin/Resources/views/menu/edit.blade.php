@extends('admin::layouts.form')

@section('module-header')
    @include('admin::components.module-header', ['moduleTitle' => 'Меню'])
@stop

@section('module-title')
    @include('admin::partials.module-title', ['moduleTitle' => 'Редактировать пункт меню #' . $entity->id, 'className' => 'mt-4 mb-4'])
@stop

@section('form')
    {{ Form::open(['route' => ['admin.menu.update', $entity->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) }}
        @include('admin::menu.form')
    {{ Form::close() }}
@stop

@include('admin::menu.scripts')
