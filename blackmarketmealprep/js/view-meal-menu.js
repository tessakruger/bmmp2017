$(function() {
	// Create the dropdown base
	$('nav ul').each(function (){
		var cl = $(this);
	$("<select />", {
		"id" : cl.attr("class"),
		"text" : cl.text()
		}).appendTo("nav");
	})

	// Create default option "Go to..."
	$("<option />", {
	   "selected": "selected",
	   "value"   : "",
	   "text"    : "Select a meal type"
	}).appendTo("nav select");

  	// Populate dropdown with menu items from ul
  	$("nav li").each(function() {
   	var el = $(this);
   	// Take the value of id from the li and add it to the option value
   	$("<option />", {
    	"value"   : el.attr("id"),
       	"text"    : el.text()
   		}).appendTo("nav select");
  	});

   // Making the dropdown work. When the dropdown changes...
  	$("nav select").on('change', function() {
    	$('[id^="meals-"]').hide();
    	// ...only display the menu items of the associated selected meal type
    	$('#meals-'+this.value.slice(5)).show();
  	});

});

// *** For browsers larger than 420px
var arrow = $("<div class=\"selected-arrow\"></div>");
var itemGroup = $('<div class="item-group"></div>');

$(function (){
	 // Set initial display of menu and items
	$('#bmmp-breakfast').addClass('selected').append(arrow).wrap(itemGroup);
	$('[id^="meals-"]').hide();
	$('#meals-breakfast').show();

	$('.shop-navbar-list li').on('click', function(){
		// Wrap selected li in div so .arrow div can position relative to li
		$('.item-group > li').unwrap();
		$(this).wrap(itemGroup);
		// Change selected item's colour
		$('.shop-navbar-list li.selected').removeClass('selected');
		$(this).addClass('selected');
		$(this).append(arrow);
		// Hide all other menu items and only display selected
		$('[id^="meals-"]').hide();
		$('#meals-'+this.id.slice(5)).show();
	});
})