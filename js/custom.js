function resize() {
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();

	// STICKY FOOTER
	var footerHeight = $('.page-footer').outerHeight();
	var footerTop = (footerHeight) * -1;
	$('.page-footer').css({marginTop: footerTop});
	$('#main-wrapper').css({paddingBottom: footerHeight});
}

$(window).resize(function() {
	resize();
});

var UI = {};

UI.home_page = function(){
};

$(document).ready(function() {
	resize();

	switch($('body').attr('rel')){
		case 'home-page':
			UI.home_page();
		break;
	}

$(".searchform input#s").attr('placeholder', 'Search keyword eg. Waves, EQ, Reverb');

$('#searchsubmit').val('');


	wow = new WOW(
		{
			animateClass: 'animated',
			offset:       100,
			callback:     function(box) {
				console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
			}
		}
	);
	wow.init();

	$( ".manu-link" ).click(function(e) {
		$(this).siblings(".sub-menu").slideToggle();
		e.stopPropagation();
	});
	$('.sub-menu').click(function(e){
    $(".sub-menu").show();
		e.stopPropagation();
	});
	$(document).click(function(){
    $(".sub-menu").slideUp();
	});

	$( ".super-sub-menu" ).mouseover(function() {
	 	$(this).siblings('a').addClass("active");
	});
	$( ".super-sub-menu" ).mouseout(function() {
	 	$(this).siblings('a').removeClass("active");
	});
	$('#nav-icon4').click(function(){
		$(this).toggleClass('open');
		$('header .nav-holder').slideToggle();
	});

	$( ".datepicker" ).datepicker();

});

$(window).resize(function() {
	var store1 = $('.store .nav-holder').width();
	var store2 = $('.store .nav-holder ul li .sub-menu').width();
	var finalStore =  store1 - store2;
	if($(window).width() < 1066 && $(window).width() > 666 ) {
		$('.store .nav-holder ul li .super-sub-menu').width(finalStore);
	}
	else if($(window).width() < 666) {
		$('.store .nav-holder ul li .sub-menu').width(store1);
		$('.store .nav-holder ul li .super-sub-menu').width(store1);
	}

});


$(window).load(function() {
	$('.slider-holder').flexslider({
    animation: "slide",
		animationSpeed: 2000,
		slideshow:true,
		pauseOnHover: true,
		smoothHeight:true,
		slideshowSpeed:5000,
		animationLoop:true,
		start: function(slider) {
				 slider.removeClass('loading');
			 },
		pauseOnAction: true,
	  after: function(slider) {
	     if (!slider.playing) {
	       slider.play();
	     }
	   }
  });


	resize();
	var store1 = $('.store .nav-holder').width();
	var store2 = $('.store .nav-holder ul li .sub-menu').width();
	var finalStore =  store1 - store2;
	if($(window).width() < 1066 && $(window).width() > 666 ) {
		$('.store .nav-holder ul li .super-sub-menu').width(finalStore);
	}
	else if($(window).width() < 666) {
		$('.store .nav-holder ul li .sub-menu').width(store1);
		$('.store .nav-holder ul li .super-sub-menu').width(store1);
	}


});


/* resize background images */
function backgroundResize(){


	var about = $('.about-holder').outerHeight();
	var footer = $('.page-footer').outerHeight();
	var total = about + footer + 70;
    var windowH = $(window).height() - total;
    $(".bg").each(function(i){
        var path = $(this);
        // variables
        var contW = path.width();
        var contH = path.height();
        var imgW = path.attr("data-img-width");
        var imgH = path.attr("data-img-height");
        var ratio = imgW / imgH;
        // overflowing difference
        var diff = parseFloat(path.attr("data-diff"));
        diff = diff ? diff : 0;
        // remaining height to have fullscreen image only on parallax
        var remainingH = 0;
        if(path.hasClass("parallax")){
            var maxH = contH > windowH ? contH : windowH;
            remainingH = windowH - contH;
        }
        // set img values depending on cont
        imgH = contH + remainingH + diff;
        imgW = imgH * ratio;
        // fix when too large
        if(contW > imgW){
            imgW = contW;
            imgH = imgW / ratio;
        }
        //
        path.data("resized-imgW", imgW);
        path.data("resized-imgH", imgH);
        path.css("background-size", imgW + "px " + imgH + "px");
    });
}




$(window).resize(backgroundResize);
$(window).focus(backgroundResize);

backgroundResize();
(new Image()).src = "<?php bloginfo('template_directory'); ?>/images/check.png";
(new Image()).src =  "<?php bloginfo('template_directory'); ?>/images/checked.png";

(function() {

	// store the slider in a local variable
	var $window = $(window),
			flexslider = { vars:{} };

	// tiny helper function to add breakpoints
	function getGridSize() {
		return (window.innerWidth < 600) ? 1 :
						(window.innerWidth < 700) ? 2 :
					 (window.innerWidth < 921) ? 3 :
					 (window.innerWidth < 1200) ? 4 :
					 (window.innerWidth < 1270) ? 5 :
					 (window.innerWidth > 1270) ? 5 : 2;
	}

	$(document).ready(function() {
		$('.affiliates .slider-holder2').flexslider({
			animation: "slide",
			directionNav:true,
			controlNav:false,
			minItems:getGridSize(),
			maxItems: getGridSize(),
			itemWidth:200,
			pauseOnHover: true,
			move: 1,
			smoothHeight:true,
			slideshowSpeed:5000,
			animationLoop:true,
			animationLoop: false,
			slideshow:true,
			pauseOnAction: true,
			after: function(slider) {
				 if (!slider.playing) {
					 slider.play();
				 }
			 }
		});

		$('.affiliates .slider-holder2 li').each( function() {
		var height = $(this).height();
		var imageHeight = $(this).find('img').height();

		var offset = (height - imageHeight) / 2;

		$(this).find('img').css('margin-top', offset + 'px');

		});
	});



	// check grid size on resize event
	$(window).resize(function() {
		var gridSize = getGridSize();

		flexslider.vars.minItems = gridSize;
		flexslider.vars.maxItems = gridSize;
	});
}());

/** Search widget**/
(function($){

})(jQuery);
