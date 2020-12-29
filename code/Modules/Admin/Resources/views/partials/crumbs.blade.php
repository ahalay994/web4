@set('hidden_print', !empty($hidden_print) ? true : false)
<div class="breadcrumb-line @if ($hidden_print) hidden-print @endif">
	<ul class="breadcrumb">
		<li><a href="{{ route('admin.index') }}"><i class="icon-home2 position-left"></i> Панель управления</a></li>
		@if (isset($crumbs))
		@foreach ($crumbs as $item)
			<li><a href="{{ $item['url'] }}">{{ $item['title'] }}</a></li>
		@endforeach
		@endif
		<li class="active">{{ $current }}</li>
	</ul>

	{{-- <ul class="breadcrumb-elements">
		<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-gear position-left"></i>
				Settings
				<span class="caret"></span>
			</a>

			<ul class="dropdown-menu dropdown-menu-right">
				<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
				<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
				<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
				<li class="divider"></li>
				<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
			</ul>
		</li>
	</ul> --}}
</div>