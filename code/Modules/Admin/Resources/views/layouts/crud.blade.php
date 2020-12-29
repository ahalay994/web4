@extends('admin::layouts.master', ['body_class' => 'navbar-top'])

@section('content')
{{--	@include('admin::partials.navbar')--}}
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

{{--			@include('admin::partials.sidebar')--}}

{{--			@yield('second-sidebar')--}}

			<div class="content-wrapper">

				<div class="page-header">
					@yield('module-header')
					@yield('crumbs')
				</div>

				<div class="content">

					@include('admin::partials.flash')
                    @include('admin::partials.errors')
					@yield('filter')
					<div class="panel panel-flat">
						@yield('module-title')
	                	@yield('module-text')
						@yield('table')
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@push('foot.scripts')
    {{ Html::script(mix('js/delete-handler.js')) }}
@endpush
