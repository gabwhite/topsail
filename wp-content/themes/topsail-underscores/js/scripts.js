
// DOC READY
$(function(){
	var num = 800; //number of pixels before modifying styles

$(window).on('scroll', function () {
    $("nav.main-navigation").removeClass("fixed");
    $("nav.main-navigation").addClass("relative");
    
    if ($(window).scrollTop() > num) {
    	$("nav.main-navigation").removeClass("relative")
        $('nav.main-navigation').addClass('sticky');
    } else {
        $('nav.main-navigation').removeClass('sticky');
    }
});

$(".fancybox")
	.attr('rel', 'gallery')
	.fancybox({
		padding: 0, 
		helpers : {
			overlay : {
	  	 		css : {
	  	 			"background" : "rgba(3,54,73, 0.65)"
	  	 		},
	  	 		locked : false
	  	 	},	
			
		}
	});
 

}); //end doc ready


