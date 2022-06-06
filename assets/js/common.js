//back to top

/* Back to Top Scroll S */
$(window).scroll(function() {
    if ($(this).scrollTop() > 80) {
        $('#back-top').show();
    } else {
        $('#back-top').hide();
    }
});
$('#back-top').click(function() {
    $('body,html').animate({
        scrollTop: 0
    }, 2500);
    return false;
});
/* Back to Top Scroll E */



//scroll header

$(window).scroll(function() {
    if ($(window).scrollTop() >= 1) {
        $('header').addClass('fixed animated fadeInDown slow');
    } else {
        $('header').removeClass('fixed animated fadeInDown slow');
    }
});

/* Bootstrap Select S */

$(window).on("load resize", function() {
    var owl = $('.info-slider-main.owl-carousel');
    owl.owlCarousel({
        margin: 30,
        loop: false,
        nav: true,
        dots: false,
        lazyLoad: true,
        autoplay: true,
        smartSpeed: 1000,
        autoHeight: true,
        mouseDrag: false,
        navText: ["<i class='icon-left-arrow' title='Previous'></i>", "<i class='icon-right-arrow' title='Next'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
                margin: 15,
            },
            1024: {
                items: 3,
            },
            1200: {
                items: 3,
            }
        }
    });
});

// calender S
moment.locale("en", {
    week: { dow: 1 } // Monday is the first day of the week
});

// $("#datetimepicker12").datetimepicker({
//     inline: true,
//     sideBySide: true,
//     format: "DD-MM-YY",
//     stepping: 30,
//     minDate: moment()
// });
// calender E


// video auto play S
// $(window).on("load", function() {
//     var deviceAgent = navigator.userAgent.toLowerCase();
//     var agentID = deviceAgent.match(/(iphone|ipod|ipad)/);
//     var vid = document.getElementById("video");
//     var isAndroid = /(android)/i.test(navigator.userAgent);
//     if (agentID) {
//         window.setInterval(function() {
//             if (vid.paused) {
//                 //alert("paused");
//                 $('#rotate-video').removeClass('pause');
//             }
//         }, 100);
//         $('#rotate-video').on("click", function() {
//             if ($(this).hasClass("pause")) {
//                 $(this).removeClass('pause');
//                 vid.pause();
//             } else {
//                 $(this).addClass('pause');
//                 vid.play();
//             }
//         });
//     }
//     if (isAndroid) {
//         $('#rotate-video').addClass('noAndroid');
//     }
// });
// video auto play E