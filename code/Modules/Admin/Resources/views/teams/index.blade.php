@extends('admin::layouts.crud')

@section('module-header')
    @include('admin::components.module-header', ['moduleTitle' => 'Коллектив'])
@stop

@section('table')

<a class="btn btn-info mb-4 mt-3" href="{{ route('admin.teams.create') }}">У нас пополнение</a>

<table class="table table-bordered yajra-datatable" id="crud-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Тип</th>
            <th>Кличка</th>
            <th>Описание</th>
            <th>Фото</th>
            <th>Возраст</th>
            <th>Стерилизована/кастрирован?</th>
            <th>Уже нашёл дом?</th>
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
                order: [[ 0, "desc" ]],
                processing: true,
                serverSide: true,
                autoWidth: true,
                ajax: '{!! route('admin.teams.data') !!}',
                columns: [
                    { data: 'id', name: 'id', width: '10%' },
                    { data: 'type', name: 'type', width: '10%' },
                    { data: 'name', name: 'name', width: '10%' },
                    { data: 'description', name: 'description', width: '20%' },
                    { data: "image", name: 'image', "render": function (data) {return '<img src="' + data + '" />';}, width: '20%'},
                    { data: 'old', name: 'old', width: '15%' },
                    { data: 'sterilization_castration', name: 'sterilization_castration', width: '15%' },
                    { data: 'is_home', name: 'is_home', width: '15%' },
                    { data: 'action', name: 'action', orderable: false, searchable: false, width: '15%' }
                ]
            });
        });
    </script>
@endpush
