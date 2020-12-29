<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Module Admin</title>

       {{-- Laravel Mix - CSS File --}}
        <link rel="stylesheet" href="{{ mix('css/admin.css') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

        @stack('head.styles')

    </head>
    <body>
        @include('admin::components.header')
        <div class="container-fluid main-content">
            <div class="row h-100">
                @include('admin::components.menu')

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>

    {{-- Laravel Mix - JS File --}}
     <script src="{{ mix('js/admin.js') }}"></script>
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

    @stack('foot.scripts')
</html>
