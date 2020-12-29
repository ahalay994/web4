@extends('admin::layouts.crud')

@section('module-header')
    @include('admin::components.module-header', ['moduleTitle' => 'Меню'])
@stop

@section('table')

<a class="btn btn-info mb-4 mt-3" href="{{ route('admin.menu.create') }}">Добавить пункт меню</a>

<table class="table table-bordered yajra-datatable" id="crud-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Ссылка</th>
            <th class="col-lg-1"></th>
        </tr>
    </thead>
</table>
@stop

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
                ajax: '{!! route('admin.menu.data') !!}',
                columns: [
                    { data: 'id', name: 'id', width: '10%' },
                    { data: 'title', name: 'title', width: '20%' },
                    { data: 'url', name: 'url', width: '20%' },
                    { data: 'action', name: 'action', orderable: false, searchable: false, width: '15%' }
                ]
            });
        });
    </script>
@endpush
