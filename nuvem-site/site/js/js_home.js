$(document).ready(function () {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false,
        keyboard: false,
        prevText: "<span class='glyphicon glyphicon-chevron-left'></span>",
        nextText: "<span class='glyphicon glyphicon-chevron-right'></span>"

    });
    if($("#slider_pause").length){
    	$("#slider_pause").flexslider('stop');
    }

});