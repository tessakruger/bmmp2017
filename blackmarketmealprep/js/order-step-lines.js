$(document).ready(function orderLines(){
    $(".order-line").css({'width':(0.5*$(".order-step").width()+'px')});
    $(".order-line.three").css({'width':(0.4*$(".order-step").width()+'px')});

    window.onresize = orderLines;
});