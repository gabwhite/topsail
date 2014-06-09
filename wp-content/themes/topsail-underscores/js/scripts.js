
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

//sticky nav

var stickyNavTop = $('nav.main-navigation').offset().top;  
  
var stickyNav = function(){  
	var scrollTop = $(window).scrollTop();  
	       
	if (scrollTop > stickyNavTop) {   
		$("nav.main-navigation").removeClass("absolute");
	    $('nav.main-navigation').addClass('sticky');
	    } else {
	        $('nav.main-navigation').removeClass('sticky');
	    } 
	};  

$(window).on('scroll', function () {
    $("nav.main-navigation").removeClass("fixed");
    $("nav.main-navigation").addClass("absolute");
    stickyNav();
});

//menu toggle
$(".menu-toggle").on("click", function(){
	$("ul.menu").slideToggle();
}); 


//smooth scroll
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });


}); //end doc ready


