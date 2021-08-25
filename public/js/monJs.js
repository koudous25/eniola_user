(function ($) {
    "use strict";

    /*--
        coursText
    -----------------------------------*/
    var courstxt = new Swiper('.chap-active .swiper-container', {
        speed: 600,
        spaceBetween: 30,
        navigation: {
            nextEl: '.chap-active .swiper-button-next',
            prevEl: '.chap-active .swiper-button-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            1600: {
                slidesPerView: 1,
            }
        },
    });

    /*--
    		Course Chapter Active
    	-----------------------------------*/
    $('.chap-list .link').on('click', function (event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
    });

    /*--
    		Quiz Active
    	-----------------------------------
    */
    $('.courses-quiz').hide();
    $('.courses-quiz-response').hide();
    $('.video-playlist .quiz').on('click', function (event) {
        $('.courses-video-player').hide();
        $('.courses-quiz').show();
        event.preventDefault();
    });

})(jQuery);











var vid = $('#textcontainer');

//default video source
$(vid).attr("src", $("a.link:first").attr("href"));

// addClass playing to first video link
$("a.link:first").addClass("playing");


$("a.link").on("click", function (event) {

    // prevent link default
    event.preventDefault();

    // change video source
    var lien = $(this).attr("href");
    $('.textcontainer').show();
    if (lien.startsWith('#')) {
        $('.vidcontainer').hide();
        $('.textcontainer').show();

    } else {

        $('.textcontainer').hide();

        $(vid).attr("src", lien);

        // remouve class playing from unplayed video href
        $(".vids a").removeClass("playing");

        // add class playing to video href
        $(this).addClass("playing");

        // add class paused to give the play/pause button the right look  
        $('.btnPlay').addClass('paused');

        // play the video
        vid[0].play();

        // adjust prev button state
        if ($("a.link:first").hasClass("playing")) {
            $(".prevvid").addClass("disabled");
        } else {
            $(".prevvid").removeClass("disabled");
        }

        // adjust next button state
        if ($("a.link:last").hasClass("playing")) {
            $(".nextvid").addClass("disabled");
        } else {
            $(".nextvid").removeClass("disabled");
        }
    }

});
