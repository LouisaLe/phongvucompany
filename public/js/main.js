$(document).ready(function() {

    $('#bannerSlider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        infinite: true,
        dots: true
    });

    $('#productSlider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 3,
        infinite: true,
        dots: true
    });

    if ($('#videoSlider').children().length > 3) {
        $('#videoSlider').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
        });
    }

    if ($('#coperations').children().length > 5) {
        $('#coperations').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 6,
            slidesToScroll: 1,
            infinite: true,
            dots: false
        });
    }





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