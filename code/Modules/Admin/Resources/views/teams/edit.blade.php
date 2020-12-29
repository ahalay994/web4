@extends('admin::layouts.form')

@section('module-header')
    @include('admin::components.module-header', ['moduleTitle' => 'Коллектив'])
@stop

@section('module-title')
    @include('admin::partials.module-title', ['moduleTitle' => 'Редактировать данные о питомце #' . $entity->id, 'className' => 'mt-4 mb-4'])
@stop

@section('form')
    {{ Form::open(['route' => ['admin.teams.update', $entity->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) }}
        @include('admin::teams.form')
    {{ Form::close() }}
@stop

@include('admin::teams.scripts')
