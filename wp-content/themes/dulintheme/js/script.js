$(function () {
	var $wineMenu  = $('#wine-menu'),
		$vodkaMenu = $('#vodka-menu');

		$wineMenu.on('click', function (e) {
			e.preventDefault();

			var $self = $(this);

			$self.closest('.wrap-menu__main').hide();
			$('.wrap-wine').show().addClass('rollIn animated');
			$('#content').addClass('bounceOutLeft animated').delay(1000).fadeOut('fast', function() {
				$('.wine-kitch-img').show().addClass('tada animated');
			});;

		});


		$vodkaMenu.on('click', function (e) {
			e.preventDefault();

			var $self = $(this);

			$self.closest('.wrap-menu__main').hide();
			$('.wrap-vodka').show().addClass('rollIn animated');
			$('#content').addClass('bounceOutLeft animated').delay(1000).fadeOut('fast', function() {
				$('.vodka-kitch-img').show().addClass('tada animated');
			});
		});
});