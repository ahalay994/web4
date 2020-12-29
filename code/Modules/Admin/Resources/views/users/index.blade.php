@extends('admin::layouts.crud')

@section('module-header')
    @include('admin::components.module-header', ['moduleTitle' => 'Пользователи'])
@stop

@section('table')

<a class="btn btn-info mb-4 mt-3" href="{{ route('admin.users.create') }}">Создать пользователя</a>

<table class="table table-bordered yajra-datatable" id="crud-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Номер телефона</th>
            <th>Активность</th>
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
                ajax: '{!! route('admin.users.data') !!}',
                columns: [
                    { data: 'id', name: 'id', width: '10%' },
                    { data: 'name', name: 'name', width: '20%' },
                    { data: 'email', name: 'email', width: '20%' },
                    { data: 'phone', name: 'phone', width: '20%' },
                    { data: 'isActive', name: 'isActive', width: '15%' },
                    { data: 'action', name: 'action', orderable: false, searchable: false, width: '15%' }
                ]
            });
        });
    </script>
@endpush
