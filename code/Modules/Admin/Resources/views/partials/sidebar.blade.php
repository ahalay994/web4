<div class="sidebar sidebar-main sidebar-fixed hidden-print">
	<div class="sidebar-content">

		<!-- User menu -->
		<div class="sidebar-user">
			<div class="category-content">
				<div class="media">
					<a href="{{ route('admin.users.view', ['id'=> Auth::guard('admin')->user()->id ]) }}" class="media-left">
						<img src="{{ Auth::guard('admin')->user()->getAvatarUrl(50,50) }}" class="img-circle img-sm" alt="">
					</a>
					<div class="media-body">
						<span class="media-heading text-semibold">{{ Auth::guard('admin')->user()->username }}</span>
						<div class="text-size-mini text-muted">
							<i class=" icon-user-tie text-size-small"></i> &nbsp; {{ Auth::guard('admin')->user()->role }}
						</div>
					</div>

					<div class="media-right media-middle">
						<ul class="icons-list">
							<li>
								<a href="{{ route('admin.users.view', ['id'=> Auth::guard('admin')->user()->id ]) }}"><i class="icon-cog3"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /user menu -->

		@include('admin::partials.menu')

	</div>
</div>