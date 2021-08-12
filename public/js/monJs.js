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

// $('.textcontainer').hide();


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

// Quiz section

var quiz = new Swiper('.quiz-active .swiper-container', {
    speed: 600,
    spaceBetween: 30,
    navigation: {
        nextEl: '.quiz-active .swiper-button-next',
        prevEl: '.quiz-active .swiper-button-prev',
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
