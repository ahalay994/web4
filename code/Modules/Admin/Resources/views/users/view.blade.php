@extends('admin::layouts.content')

@section('module-header')
    @include('admin::partials.module-header', ['moduleTitle' => 'Пользователи'])
@stop

@section('module-title')
    @include('admin::partials.module-title', ['moduleTitle' => 'Карточка пользователя "'.$entity->name.'"', 'className' => 'mt-4 mb-4'])
@stop

@section('page-content')
    <!-- User profile -->
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped" id="info-table">
                <tbody>
                <tr>
                    <td>ID</td>
                    <td>{{ $entity->id }}</td>
                </tr>
                <tr>
                    <td>Имя</td>
                    <td>{{ $entity->name }}</td>
                </tr>
                <tr>
                    <td>Номер телефона</td>
                    <td>
                        @if ($entity->phone)
                            <a href="tel:{{ $entity->phone }}">{{ $entity->phone }}</a>
                        @else
                            -
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td>
                        @if ($entity->email)
                            <a href="mailto:{{ $entity->email }}">{{ $entity->email }}</a>
                        @else
                            -
                        @endif
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /user profile -->
@stop

@push('foot.scripts')
@endpush
