@extends('admin::layouts.crud')

@section('module-header')
    @include('admin::components.module-header', ['moduleTitle' => 'Новости'])
@stop

@section('table')

<a class="btn btn-info mb-4 mt-3" href="{{ route('admin.news.create') }}">Добавить новость</a>

<table class="table table-bordered yajra-datatable" id="crud-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Изображение</th>
            <th>Заголовок</th>
            <th>Краткое описание</th>
            <th>Дата публикации</th>
            <th>Автор</th>
            <th class="col-lg-1"></th>
        </tr>
    </thead>
</table>
@stop

@push('head.styles')
<style>
    img {
        width: 100%;
    }
</style>
@endpush

@push('foot.scripts')
    <script type="text/javascript">
        jQuery(function() {
            jQuery('#crud-table').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Russian.json'
                },
                processing: true,
                serverSide: true,
                autoWidth: true,
                ajax: '{!! route('admin.news.data') !!}',
                columns: [
                    { data: 'id', name: 'id', width: '10%' },
                    { data: "image", name: 'image', "render": function (data) {return '<img src="' + data + '" />';}},
                    { data: 'title', name: 'title', width: '20%' },
                    { data: 'short_description', name: 'short_description', width: '25%' },
                    { data: 'published', name: 'published', width: '15%' },
                    { data: 'author', name: 'author', width: '15%' },
                    { data: 'action', name: 'action', orderable: false, searchable: false, width: '15%' }
                ]
            });
        });
    </script>
@endpush
