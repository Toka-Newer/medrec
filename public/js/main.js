/*global $*/

$(document).ready(function () {

    "use strict";

 	$(".step-prog-layout .step-item.active").prevAll(".step-item").addClass("item-complete");



});

/* Scroll
=========================== */

$(document).ready(function() {
    "use strict";
    $(".scroll-sec").click(function(e) {
        e.preventDefault();
        $.scrollTo(e.target.hash, 600, {
            offset: -100
        });
    });
});

/*Parallax
==========================*/
$(document).ready(function () {

    "use strict";

    var scene = document.getElementById('parallax-1');

    if (scene) {
        var parallax = new Parallax(scene);
    }

    var scene = document.getElementById('parallax-2');

    if (scene) {
        var parallax = new Parallax(scene);
    }



});


$(window).load(function() {
    "use strict";
    $("#loading").fadeOut(500, function() {
        $("body").css({
            position: "static",
            top: "auto",
            bottom: "auto",
            height: "auto"
        });
        $(this).parent().fadeOut(500, function() {
            $(this).remove();
        });
    });
});


/* Sliphover
========================*/

$(document).ready(function () {

    "use strict";

    $("#services").sliphover({
        target: '.icon-box',
        backgroundColor: '#2591fd',
        caption: 'title'
    });
	$("#about").sliphover({
        target: '.feature-box',
        backgroundColor: '#2591fd',
        caption: 'title'
    });

	$("#transport-feat").sliphover({
        target: '.icon-box',
        backgroundColor: '#2591fd',
        caption: 'title'
    });


});


/* Nice Scroll
===============================*/
$(document).ready(function () {

    "use strict";

	$("html").niceScroll({
        scrollspeed: 60,
        mousescrollstep: 35,
        cursorwidth: 5,
        cursorcolor: '#2591fd',
        cursorborder: 'none',
        background: 'rgba(255,255,255,0.3)',
        cursorborderradius: 3,
        autohidemode: false,
        cursoropacitymin: 0.1,
        cursoropacitymax: 1,
        zindex: "999",
        horizrailenabled: false
	});

});



/*Overlay Drop
==========================*/
$(document).ready(function () {

    $(".overlay-drop").on("click",function (e){
        e.preventDefault();
        $("#overlay").toggleClass("in");
		$(".main").toggleClass("win");

    });

});


/*Header
============================*/
$(document).ready(function () {
    "use strict";


    /*Colored Header*/
    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }
    var b = 20;
    $(window).scroll(function () {
        var a = getCurrentScroll();
        if (a >= b) {
            $('.header').addClass('colored');

        } else {
            $('.header').removeClass('colored');
        }

    });


});


/*Owl Carousel
=============================*/
$(document).ready(function () {
    "use strict";

    var partners_carousel = $("#partners-carousel");
    if (partners_carousel.length) {
        partners_carousel.owlCarousel({
            items : 4,
            itemsDesktopSmall : [991, 2],
            itemsDesktop : [1199, 4],
            itemsMobile : [767, 1],
            navigation : true,
            pagination : false,
            autoPlay : true,
            loop : true,
			navigationText: ["<i class='fa fa-chevron-right'></i>", "<i class='fa fa-chevron-left'></i>"]
        });
    }


});

// $(document).ready(function() {
//     "use strict";
//       const { createApp } = Vue

//       createApp({
//         data() {
//           return {
//             message: 'Hello Vue!'
//           }
//         }
//       }).mount('#app')
// });
