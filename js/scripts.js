$( document ).ready( function() {
	$('#banner-wrapper,#banner-wrapper2').layerSlider({
	 	autostart: true,
		skin: 'fullwidth',
		skinsPath: 'http://localhost/skins/',
		responsiveUnder: 960,
		layersContainer: 960
    });

	new WOW().init();

	$('.grouped_elements').fancybox();

} );