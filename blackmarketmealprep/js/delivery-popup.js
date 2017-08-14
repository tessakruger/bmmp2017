$(function() {
	$('#order-btn').on('click', function(e){
		e.stopPropagation();
		$('.modal-window').fadeIn(250);
	})

	$('#close-btn').on('click', function(e){
		e.stopPropagation();
		$('.modal-window').fadeOut(250).css({
			'opacity' : 0
		});;
	});

	$('#how-to-order').on('click', function(e){
	e.stopPropagation();
	$('.modal-window').fadeOut(250).css({
			'opacity' : 0
		});;
	});
})