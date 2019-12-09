$(document).ready(function() {

    $('#bannerSlider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        infinite: true,
        dots: true,
        fade: true
    });

    $('#productSlider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 3,
        infinite: true,
        dots: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }]
    });

    if ($('#videoSlider').children().length > 1) {
        $('#videoSlider').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            responsive: [{
                breakpoint: 668,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    }

    if ($('#coperations').children().length > 5) {
        $('#coperations').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 6,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            responsive: [{
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    }

    $('#nav-icon').click(function() {
        $(this).toggleClass('open');
    });

    $('#scrollTop').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 800);
    });

    $('.bounce').click(function() {
        $("html, body").animate({ scrollTop: $('#listProducts').offset().top - 15 }, 800);
    });

    // $("#productListdID").click(function(e) {
    //     e.preventDefault();
    //     $("html, body").animate({ scrollTop: $('#listProducts').offset().top - 15 }, 800);
    // });

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll === 0) {
            $('.bounce').removeClass('hidden');
            $('#scrollTop').addClass('hidden');
        } else {
            $('.bounce').addClass('hidden');
            $('#scrollTop').removeClass('hidden');
        }
    });

});