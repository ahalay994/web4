@extends('admin::layouts.content')

@section('module-header')
    @include('admin::partials.module-header', ['moduleTitle' => 'Новости'])
@stop

@section('module-title')
    @include('admin::partials.module-title', ['moduleTitle' => 'Карточка новости #'.$entity->id, 'className' => 'mt-4 mb-4'])
@stop

@section('page-content')
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped" id="info-table">
                <tbody>
                <tr>
                    <td>ID</td>
                    <td>{{ $entity->id }}</td>
                </tr>
                <tr>
                    <td>Изображение</td>
                    <td><img src="{{ $entity->image }}" /></td>
                </tr>
                <tr>
                    <td>Заголовок</td>
                    <td>{{ $entity->title }}</td>
                </tr>
                <tr>
                    <td>Краткое описание</td>
                    <td>{{ strip_tags($entity->short_description) }}</td>
                </tr>
                <tr>
                    <td>Описание</td>
                    <td>{{ strip_tags($entity->description) }}</td>
                </tr>
                <tr>
                    <td>Дата публикации</td>
                    <td>{{ $entity->published_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

@push('head.styles')
    <style>
        img {
            width: 100%;
            max-width: 300px;
            height: auto;
        }
    </style>
@endpush

@push('foot.scripts')
@endpush
