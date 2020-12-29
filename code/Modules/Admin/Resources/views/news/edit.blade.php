@extends('admin::layouts.form')

@section('module-header')
    @include('admin::components.module-header', ['moduleTitle' => 'Новости'])
@stop

@section('module-title')
    @include('admin::partials.module-title', ['moduleTitle' => 'Редактировать запись #' . $entity->id, 'className' => 'mt-4 mb-4'])
@stop

@section('form')
    {{ Form::open(['route' => ['admin.news.update', $entity->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) }}
        @include('admin::news.form')
    {{ Form::close() }}
@stop

@include('admin::news.scripts')
