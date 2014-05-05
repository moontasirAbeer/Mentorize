$(document).ready(function() {

	// Calling our splashScreen plugin and
	// passing an array with images to be shown

	$('#promoIMG').splashScreen({

		textLayers : [
			'img/text-logo.png',
			'img/preloader.png',
			'img/text-logo.png'
		]
	});
});