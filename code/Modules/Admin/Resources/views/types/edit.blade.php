@extends('admin::layouts.form')

@section('module-header')
    @include('admin::components.module-header', ['moduleTitle' => 'Типы животных'])
@stop

@section('module-title')
    @include('admin::partials.module-title', ['moduleTitle' => 'Редактировать тип #' . $entity->id, 'className' => 'mt-4 mb-4'])
@stop

@section('form')
    {{ Form::open(['route' => ['admin.types.update', $entity->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) }}
        @include('admin::types.form')
    {{ Form::close() }}
@stop

@include('admin::types.scripts')
