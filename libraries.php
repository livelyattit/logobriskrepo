

<script src="./js/jquery-3.4.1.js" type="application/javascript"></script>
<?php include "jspack.php"; ?>
<script>
    $(document).ready(function() {
        $('.gallery li:lt(9)').show();
        $('.less').hide();
        var items = 100;
        var shown = 4;
        $('.more').click(function() {
            $('.less').show();
            shown = $('.gallery li:visible').length + 3;
            if (shown < items) {
                $('.gallery li:lt(' + shown + ')').show(300);
            } else {
                $('.gallery li:lt(' + items + ')').show(300);
                $('.more').hide();
            }
        });
        $('.less').click(function() {
            $('.gallery li').not(':lt(3)').hide(300);
            $('.more').show();
            $('.less').hide();
        });
    });
</script>

<script>
    jQuery(document).ready(function($) {


        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
      spaceBetween: 50,
      loop: true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
        clickable: true,
      },
    });


        var height_from = $('.height-from').height();
        $('.height-to').css('min-height', height_from + 'px');


        var header_wrapper_height;
        header_wrapper_height = $('.header-wrapper').height() + 40;

        $('.main-wrapper').css('padding-top', header_wrapper_height + 'px');



        $(window).scroll(function() {

            let scroll = $(window).scrollTop();
            if (scroll >= 40) {
                $('body').addClass('scrolling');
                //  $('.main-wrapper').css('padding-top', '360px');
            } else {
                $('body').removeClass('scrolling');
                //    $('.main-wrapper').css('padding-top', header_wrapper_height + 'px');
            }
        });

        var window_width = window.innerWidth;

        console.log(window_width);
        if (window_width > 999) {
            $('header')
                .removeClass('on-mobile')
                .addClass('on-desktop');
        } else {
            $('header')
                .removeClass('on-desktop')
                .addClass('on-mobile');
        }

        $('.responsive-nav .button-toggle').on('click', function() {

            $('.responsive-nav').toggleClass('opened');
            $('html').toggleClass('overflow-hidden');
            $('body').toggleClass('overflow-hidden');


        });



        $('.showcase-side').each(function() {
            $(this).owlCarousel({
                dots: !1,
                autoHeight: !0,
                margin: 20,
                responsive: {
                    0: {
                        items: 3,
                        autoWidth: !0,
                    },
                }
            })
        });


        console.log();








        var filterList = {

            init: function() {

                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixItUp({
                    selectors: {
                        target: '.portfolio',
                        filter: '.filter'
                    },
                    load: {
                        filter: '.app' // show app tab on first load
                    }
                });

            }

        };

        // Run the show!
        filterList.init();




    });

    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
        // ... more custom settings?
    });



    $('.slider').on('beforeChange', function(event, slick, slide, nextSlide) {
        $('.slider-nav-thumbnails').find('.slick-slide').removeClass('slick-current').eq(nextSlide).addClass('slick-current');
    }).slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        asNavFor: '.slider-nav-thumbnails',
    });

    $('.slider-nav-thumbnails').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider',
        dots: true,
        focusOnSelect: true
    });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5d3c71d29b94cd38bbe99d74/1do7g57dv';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->