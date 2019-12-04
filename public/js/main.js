$(document).ready(function() {

    $('#bannerSlider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        dots: true
    });

    $('#productSlider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 3,
        dots: true
    });

    $('#scrollTop').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 800);
    });

    $('.bounce').click(function() {
        $("html, body").animate({ scrollTop: $('#listProducts').offset().top - 15 }, 800);
    });

    $("#productListdID").click(function(e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: $('#listProducts').offset().top - 15 }, 800);
    });

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