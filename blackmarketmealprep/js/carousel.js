// Carousel: What People Are Saying

// create the slider
$(document).ready(function($){
  $('.testimonials-wrapper').flexslider({
    selector: ".testimonials > li",
    animation: "slide",
    controlNav: false,
    slideshow: false,
    smoothHeight: true,
    start: function(){
      $('.testimonials').children('li').css({
        'opacity': 1,
        'position': 'relative'
      });
    }
  });
});