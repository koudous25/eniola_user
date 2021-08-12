/*--
    coursText
-----------------------------------*/
var edule = new Swiper('.coursText-active .swiper-container', {
    speed: 600,
    spaceBetween: 30,
    pagination: {
        el: '.coursText-active .swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 1,
        },
        992: {
            slidesPerView: 1,
        }
    },
});

$('.textcontainer').hide();


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
$('courses-quiz').ready(function () {
    $('.reponse1').hide();
    $('.r1').click(function () {
        $('.reponse1').show();
    });
    $('.reponse2').hide();
    $('.r2').click(function () {
        $('.reponse2').show();
    });
    $('.reponse3').hide();
    $('.r3').click(function () {
        $('.reponse3').show();
    });
    $('.reponse4').hide();
    $('.r4').click(function () {
        $('.reponse4').show();
    });
    $('.reponse5').hide();
    $('.r5').click(function () {
        $('.reponse5').show();
    });
    $('.reponse6').hide();
    $('.r6').click(function () {
        $('.reponse6').show();
    });
    $('.reponse7').hide();
    $('.r7').click(function () {
        $('.reponse7').show();
    });
    $('.reponse8').hide();
    $('.r8').click(function () {
        $('.reponse8').show();
    });
    $('.reponse9').hide();
    $('.r9').click(function () {
        $('.reponse9').show();
    });
    $('.reponse10').hide();
    $('.r10').click(function () {
        $('.reponse10').show();
    });
})
