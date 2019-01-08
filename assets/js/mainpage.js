$.each($(".like"), function () {
    $(this).click(function () {
        $(this).addClass('animated swing');
        $(this).toggleClass("heartClicked");

        setTimeout(function (element) {
            $(element).removeClass('animated swing');
        }, 300, $(this))
    });
});

$("#organizations-wrap").slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: true,
    arrow: false,
    rtl: true,
});

$.each($('.count-number'), function () {
    $(this).counterUp({
        // delay: 100,
        time: 1300
    });
})