$(function () {
	var $wineMenu  = $('#wine-menu'),
		$vodkaMenu = $('#vodka-menu');

		$wineMenu.on('click', function (e) {
			e.preventDefault();

			var $self = $(this);

			$self.closest('.wrap-menu__main').hide();
			$('.wrap-wine').show().addClass('rollIn animated');
		});


		$vodkaMenu.on('click', function (e) {
			e.preventDefault();

			var $self = $(this);

			$self.closest('.wrap-menu__main').hide();
			$('.wrap-vodka').show().addClass('rollIn animated');
		});
});