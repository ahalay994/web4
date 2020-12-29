<div class="navbar navbar-default navbar-fixed-top header-highlight">
	<div class="navbar-header">
		<a class="navbar-brand text-white" href="{{ route('admin.index') }}">
			{{-- <img src="{{ admin_asset('assets/images/abws_arcom_logo.png') }}" alt="" style="display: inline-block; margin-top: 0px;" class="sidebar-xs-hidden"> --}}
			<span class="sidebar-xs-hidden" style="vertical-align: middle;">Distributor App</span>
		</a>

		<ul class="nav navbar-nav pull-right visible-xs-block">
			<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
		</ul>
	</div>

	<div class="navbar-collapse collapse" id="navbar-mobile">
		<ul class="nav navbar-nav">
			<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

			@if (\Settings::get('siteUrl', false))
				<li><a href="{{ \Settings::get('siteUrl') }}" target="_blank">
					<i class="icon-earth"></i>&nbsp;
					Открыть {{ str_ireplace(['http://', 'https://'], '', \Settings::get('siteUrl')) }}</a>
				</li>
			@endif
		</ul>

		<ul class="nav navbar-nav navbar-right">

			@if (!empty($reviewCount))
				<li class="nav-item">
					<a href="{{ route('admin.performances.index', ['status' => 0]) }}" class="navbar-nav-link dropdown-toggle caret-0 admin_header_badges_menu">
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">{{ $reviewCount }}</span>
						<span class="icon-theater"></span>
						<div data-toggle="tooltip" class="tooltip__item" data-placement="bottom" title="Мероприятия на ревью"></div>
					</a>
				</li>
			@endif

			@if (!empty($reviewCommentsCount))
				<li class="nav-item">
					<a href="{{ route('admin.comments.index', ['status' => 0]) }}" class="navbar-nav-link dropdown-toggle caret-0 admin_header_badges_menu">
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">{{ $reviewCommentsCount }}</span>
						<span class="icon-bubbles4"></span>
						<div data-toggle="tooltip" class="tooltip__item" data-placement="bottom" title="Комментарии на ревью"></div>
					</a>
				</li>
			@endif

			@if (!empty($reviewObjectsCount))
				<li class="nav-item">
					<a href="{{ route('admin.objects.index', ['status' => 0]) }}" class="navbar-nav-link dropdown-toggle caret-0 admin_header_badges_menu">
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">{{ $reviewObjectsCount }}</span>
						<span class="icon-home2"></span>
						<div data-toggle="tooltip" class="tooltip__item" data-placement="bottom" title="Объекты на ревью"></div>
					</a>
				</li>
			@endif
			
			<li class="dropdown dropdown-user">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<img src="{{ Auth::guard('admin')->user()->getAvatarUrl(50,50) }}" alt="">
					<span>{{ Auth::guard('admin')->user()->username }}</span>
					<i class="caret"></i>
				</a>

				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="{{ route('admin.profile') }}"><i class="icon-user-plus"></i> Мой профиль</a></li>
					{{--  <li><a href="{{ route('admin.users.view', ['id'=> Auth::guard('admin')->user()->id ]) }}"><i class="icon-coins"></i> Мой баланс</a></li>  --}}
					<li class="divider"></li>
					<li><a href="{{ route('admin.logout') }}"><i class="icon-switch2"></i> Выход</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>