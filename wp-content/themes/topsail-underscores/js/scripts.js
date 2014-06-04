
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

  if ( ($(window).width() > 800)) {

                $('#videobox').html('<video autobuffer autoplay loop id="thevideo"><source src="http://localhost:8888/topsail/wp-content/themes/topsail-underscores/images/Trailer-Park-Boys-Season-8.mp4" type="video/mp4; codecs=avc1.42E01E,mp4a.40.2" /><source src="hhttp://localhost:8888/topsail/wp-content/themes/topsail-underscores/images/Trailer-Park-Boys-Season-8.ogv" type="video/ogv; codecs=theora,vorbis" /><source src="http://localhost:8888/topsail/wp-content/themes/topsail-underscores/images/Trailer-Park-Boys-Season-8.webm" type="video/webm; codecs=vp8,vorbis" /></video>');
        }


  $(".fancybox")
  .attr('rel', 'gallery')

  .fancybox({
  	padding: 0,
  	helpers : {
  		overlay : {
  			css : {
  				"background" : "rgba(3,54,73, 0.65)"
  			},
		  locked: false
  		}
  	},
  	tpl: {
        closeBtn: '<a title="Close" class="fancybox-item fancybox-close myClose" href="javascript:;"></a>',
        next     : '<a title="Next" class="fancybox-nav fancybox-next myNext" href="javascript:;"><span></span></a>',
		prev     : '<a title="Previous" class="fancybox-nav fancybox-prev myPrev" href="javascript:;"><span></span></a>'
    }	
  });


}); //end doc ready


