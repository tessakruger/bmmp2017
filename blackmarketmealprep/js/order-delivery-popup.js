$(function() {
	$('#order-delivery-text').css({
		'opacity' : 0
	});

	$(function() {
		if( $(window).width() < 768 ) {
			 	$('#order-popup').hover(
					function(){
					$('#order-delivery-text').stop()
					.css({'width' : ($('.order-steps-wrapper').width())})
					.animate({
						opacity: 1, top: -200}, {queue: false, duration: 250});
					},

					function(){
						$('#order-delivery-text').stop()
						.animate({
							opacity: 0, top: -175}, {queue: false, duration: 250});
					}
				);
	    	} else {
	    		$('#order-popup').hover(
					function(){
					$('#order-delivery-text').stop()
					.css({'width' : ($('.order-steps-wrapper').width())})
					.animate({
						opacity: 1, top: -45}, {queue: false, duration: 250});
					},

					function(){
						$('#order-delivery-text').stop()
						.animate({
							opacity: 0, top: 0}, {queue: false, duration: 250});
					}
				);
	    	}
		})

	$(window).resize(function() {
    	if( $(window).width() < 768 ) {
		 	$('#order-popup').hover(
				function(){
				$('#order-delivery-text').stop()
				.css({'width' : ($('.order-steps-wrapper').width())})
				.animate({
					opacity: 1, top: -200}, {queue: false, duration: 250});
				},

				function(){
					$('#order-delivery-text').stop()
					.animate({
						opacity: 0, top: -175}, {queue: false, duration: 250});
				}
			);
    	} else {
    		$('#order-popup').hover(
				function(){
				$('#order-delivery-text').stop()
				.css({'width' : ($('.order-steps-wrapper').width())})
				.animate({
					opacity: 1, top: -45}, {queue: false, duration: 250});
				},

				function(){
					$('#order-delivery-text').stop()
					.animate({
						opacity: 0, top: 0}, {queue: false, duration: 250});
				}
			);
    	}
	});
});
