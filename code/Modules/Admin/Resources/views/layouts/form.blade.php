@extends('admin::layouts.crud', ['body_class' => 'navbar-top'])

@section('content')

	<div class="page-container">

		<div class="page-content">

{{--			@include('admin::partials.sidebar')--}}


			<div class="content-wrapper">

				<div class="page-header">
					@yield('module-header')
					@yield('crumbs')
				</div>

				<div class="content">
					<div class="panel panel-flat">
						@yield('module-title')

						<div class="panel-body">
{{--							@include('admin::partials.flash')--}}
{{--							@include('admin::partials.errors')--}}
							@yield('form')
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
@stop


@push('foot.scripts')
{{--<script type="text/javascript" src="{{ admin_asset('ckeditor-4.9.0/ckeditor.js') }}"></script>--}}
{{--<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>--}}
@endpush
