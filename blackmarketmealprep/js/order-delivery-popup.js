$(function() {
	$('#order-delivery-text').css({'opacity': 1, 'z-index': 0});

	$('#order-popup').hover(
		function(){
		$('#order-delivery-text').stop()
		.animate({
			opacity: 1, top: "-75px"}, {queue: false, duration: 250})
		.css('z-index', 99);
		},

		function(){
			$('#order-delivery-text').stop()
			.animate({
				opacity: 0, top: "-25px"}, {queue: false, duration: 250})
			.css('z-index', 0);
		}
	);
});