$(function(){
	let $menu = $('.header-menu-list');

	$('.header-menu-button').click(function(){
		$menu.slideToggle(500, function(){
			if($menu.css('display') == 'none'){
				$menu.removeAttr('style');
			}
		});
	});
});