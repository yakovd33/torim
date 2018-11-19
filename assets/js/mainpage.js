


$(window).scroll(function () {
    if ($(window).scrollTop() >= 150) {
        $("#main-nav").addClass("floating");
    } else {
        $("#main-nav").removeClass("floating");
    }
    
});




$.each($(".like"), function () {
    $(this).click(function () {
        $(this).addClass('animated swing');
        $(this).toggleClass("heartClicked");

        setTimeout(function (element) {
            $(element).removeClass('animated swing');
        }, 300, $(this))
    });
});

