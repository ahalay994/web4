@extends('admin::layouts.master', ['body_class' => 'navbar-top'])

@section('content')

	<div class="page-container">

		<div class="page-content">

			<div class="content-wrapper">

				<div class="page-header">
					@yield('module-header')
					@yield('module-title')
				</div>

				<div class="content">
					@include('admin::partials.flash')
					@include('admin::partials.errors')
					@yield('page-content')
				</div>
			</div>

		</div>
	</div>
@stop


@push('foot.scripts')
@endpush
