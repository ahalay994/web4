@extends('admin::layouts.form')

@section('module-header')
    @include('admin::components.module-header', ['moduleTitle' => 'Пользователи'])
@stop

@section('module-title')
    @include('admin::partials.module-title', ['moduleTitle' => 'Редактировать пользователя #' . $entity->id, 'className' => 'mt-4 mb-4'])
@stop

@section('form')
    {{ Form::open(['route' => ['admin.users.update', $entity->id], 'method' => 'patch']) }}
        @include('admin::users.form')
    {{ Form::close() }}
@stop

@include('admin::users.scripts')
