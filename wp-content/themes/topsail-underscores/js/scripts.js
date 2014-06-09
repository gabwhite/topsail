
// DOC READY
$(function(){

$(".fancybox")
	//.attr('rel', 'gallery')
	.fancybox({
		padding: 0, 
		helpers : {
			overlay : {
	  	 		css : {
	  	 			"background" : "rgba(3,54,73, 0.65)"
	  	 		},
	  	 		locked : false
	  	 	}	
		},
		tpl: {
        	closeBtn: '<a title="Close" class="fancybox-item fancybox-close myClose" href="javascript:;"></a>',
        	next     : '<a title="Next" class="fancybox-nav fancybox-next myNext" href="javascript:;"><span></span></a>',
		    prev     : '<a title="Previous" class="fancybox-nav fancybox-prev myPrev" href="javascript:;"><span></span></a>'
    		}	
	});

var num = 800; //number of pixels before modifying styles

$(window).on('scroll', function () {
    $("nav.main-navigation").removeClass("fixed");
    $("nav.main-navigation").addClass("absolute");
    
    if ($(window).scrollTop() > num) {
    	$("nav.main-navigation").removeClass("absolute")
        $('nav.main-navigation').addClass('sticky');
    } else {
        $('nav.main-navigation').removeClass('sticky');
    } 
});

	


}); //end doc ready


