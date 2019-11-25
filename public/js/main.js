$(document).ready(function() {

    $('#bannerSlider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        dots: true
    });

    $('#scrollTop').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 800);
    });

    $('.bounce').click(function() {

        $("html, body").animate({ scrollTop: $('#listProducts').offset().top - 15 }, 800);
    });

});