$(function(){
	var overlay = $('<div class="overlay"><div class="add-btn">Add to cart</div></div>');

	$('.img-container').append(overlay);

	$('.add-btn').on('click', function(){
		var addedItem = $(this)
		// console.log("Do stuff to add to cart");
		// console.log(addedItem);
		var idOfParentDiv = addedItem.closest('div.shop-meal').attr('id')
		console.log(idOfParentDiv);
	})
})