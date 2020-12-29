@extends('admin::layouts.content')

@section('module-header')
    @include('admin::partials.module-header', ['moduleTitle' => 'Коллектив'])
@stop

@section('module-title')
    @include('admin::partials.module-title', ['moduleTitle' => 'Карточка питомца #'.$entity->id, 'className' => 'mt-4 mb-4'])
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
                    <td>Кличка</td>
                    <td>{{ $entity->name }}</td>
                </tr>
                <tr>
                    <td>Изображение</td>
                    <td><img src="{{ $entity->image }}" /></td>
                </tr>
                <tr>
                    <td>Тип</td>
                    <td>{{ \App\Models\Type::getOptions()[$entity->type_id] }}</td>
                </tr>
                <tr>
                    <td>Описание</td>
                    <td>{{ strip_tags($entity->description) }}</td>
                </tr>
                <tr>
                    <td>Возраст</td>
                    <td>{{ $entity->old }}</td>
                </tr>
                <tr>
                    <td>Стерелизация/кастрация</td>
                    <td>{{ $entity->sterilization_castration == 1 ? 'Да' : 'Нет' }}</td>
                </tr>
                <tr>
                    <td>Нашёл дом?</td>
                    <td>{{ $entity->is_home == 1 ? 'Да' : 'Нет' }}</td>
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
