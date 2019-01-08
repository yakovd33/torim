$(window).scroll(function () {
    if ($(window).scrollTop() >= 150) {
        $("#main-nav").addClass("floating");
    } else {
        $("#main-nav").removeClass("floating");
    }
});