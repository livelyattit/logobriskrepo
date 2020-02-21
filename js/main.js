jQuery(document).ready(function ($) {

    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        slidesPerColumn: 2,
        spaceBetween: 0,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

});