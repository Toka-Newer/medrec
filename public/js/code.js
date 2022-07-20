$(document).ready(function(){
	
//	loading function
	
	$(".loading-overlay .lds-circle").fadeOut(1000,function(){
		$(".loading-overlay").fadeOut(500,function(){
			$("body").css("overflow","auto");
			$(this).remove();
		});
	});
	
		//menu
		
	$(".main-nav .fa-bars").click(function(){
		$(".main-nav .links").toggle(500);
		$(".main-nav .links").css({"position":"absolute" , "z-index": "2"});
		$(".main-content").css("z-index", "1");
		$(".header-content .about").css("z-index", "1");
	});

		
	// scroll to top

	$(function(){

		var scroll= $("#scroll-up");

		$(window).scroll(function(){
		   if($(this).scrollTop()>=500){
			   scroll.show();
		   } else{
			   scroll.hide();
		   }

		});
		scroll.click(function(){
		   $("html,body").animate({scrollTop : 0},900);
		});

	});
	
//	auto slider
	
	$('.owl-carousel').owlCarousel({
		center: true,
		loop:true,
		margin:30,
		autoplay: true,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});
	
});