<div class="sidebar-category sidebar-category-visible">
	<div class="category-content no-padding">
		{!! Menu::get('admin.sidebar')->asUl(['class' => 'navigation navigation-main navigation-accordion']) !!}
	</div>
</div>

<script>
$(function() {
	// alert(

	var $active = $('.sidebar .menu-section.active')
	var section = $active.attr('data-section');

	var ico = {
		open: 'icon-diff-added',
		close: 'icon-diff-removed'
	}

	function toggleSection(section)
	{
		$('.sidebar .menu-section[data-section="'+section+'"]').toggleClass('show');
	}

	console.log('active section: ', section);

	$('.sidebar .menu-section[data-section="'+section+'"]').addClass('show');

	$('.sidebar .menu-section.navigation-header span').append('<a href="#" class="menu-section-toggle"><i class="'+ ico.open + '"></i></a>');

	$('.sidebar .menu-section.navigation-header.show .menu-section-toggle > i').removeClass(ico.open);
	$('.sidebar .menu-section.navigation-header.show .menu-section-toggle > i').addClass(ico.close);

	// $(document).on('click', '.navigation-header .menu-section-toggle', function(e){
	$(document).on('click', '.menu-section.navigation-header', function (e) {
		e.preventDefault();

		console.log($(this).children('.menu-section-toggle'));
		var s = $(this).attr('data-section')
		// console.log('click', s);
		toggleSection(s);

		$ico = $('.sidebar .menu-section[data-section="'+s+'"] .menu-section-toggle > i')
		console.log($(this).hasClass('show'));
		if ($(this).hasClass('show')) {
			$ico.removeClass(ico.open);
			$ico.addClass(ico.close);
			// .removeClass(ico.close);
			// $('.sidebar .menu-section.navigation-header.show .menu-section-toggle > i').toggleClass(ico.open);
			// $('.sidebar .menu-section.navigation-header.show .menu-section-toggle > i').toggleClass(ico.close);
		} else {
			$ico.removeClass(ico.close);
			$ico.addClass(ico.open);
		}



	//	$(this).children('.menu-section-toggle').children('i').toggleClass(ico.open);
	//	$(this).children('.menu-section-toggle').children('i').toggleClass(ico.close);
		// $(this).children('.menu-section-toggle > i').toggleClass(ico.close);
		// var s = $(this).parents('.navigation-header').attr('data-section')

	})
})
</script>