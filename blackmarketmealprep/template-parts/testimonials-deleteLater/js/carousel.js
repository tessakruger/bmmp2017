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

  // open the testimonials modal page
  $('.c-see-all').on('click', function(){
    $('.testimonials-all').addClass('is-visible');
  });

  // close the testimonials modal page
  $('.testimonials-all .close-btn').on('click', function(){
    $('.testimonials-all').removeClass('is-visible');
  });

  // check if user has pressed 'Esc'
  $(document).keyup(function(event){
    if(event.which=='27'){
      $('.testimonials-all').removeClass('is-visible');	
    }
  });
});