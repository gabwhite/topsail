
// DOC READY
$(function(){
	var num = 600; //number of pixels before modifying styles

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


	$('.carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
   
  $('.slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });

  if ( ($(window).width() > 800)) {

                $('#videobox').html('<video autobuffer autoplay loop id="thevideo"><source src="http://localhost:8888/topsail/wp-content/themes/topsail-underscores/images/Trailer-Park-Boys-Season-8.mp4" type="video/mp4; codecs=avc1.42E01E,mp4a.40.2" /><source src="hhttp://localhost:8888/topsail/wp-content/themes/topsail-underscores/images/Trailer-Park-Boys-Season-8.ogv" type="video/ogv; codecs=theora,vorbis" /><source src="http://localhost:8888/topsail/wp-content/themes/topsail-underscores/images/Trailer-Park-Boys-Season-8.webm" type="video/webm; codecs=vp8,vorbis" /></video>');
        }


   
  $(".fancybox").fancybox({
  	helpers : {
  		overlay : {
  			css : {
  				"background" : "rgba(3,54,73, 0.65)"
  			},
		locked: false
   
  		}

  	}
  });


}); //end doc ready


