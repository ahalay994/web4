@extends('admin::layouts.crud')

@section('module-header')
    @include('admin::components.module-header', ['moduleTitle' => 'Галерея'])
@stop

@section('table')

<a class="btn btn-info mb-4 mt-3" href="{{ route('admin.gallery.create') }}">Добавить изображения</a>

<table class="table table-bordered yajra-datatable" id="crud-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Изображение</th>
            <th></th>
        </tr>
    </thead>
</table>
@stop

@push('head.styles')
<style>
    img {
        max-width: 400px;
        width: 100%;
        height: auto;
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
                ajax: '{!! route('admin.gallery.data') !!}',
                columns: [
                    { data: 'id', name: 'id'},
                    { data: "image", name: 'image', "render": function (data) {return '<img src="' + data + '" />';}},
                    { data: 'action', name: 'action', orderable: false, searchable: false, width: '15%' }
                ]
            });
        });
    </script>
@endpush
