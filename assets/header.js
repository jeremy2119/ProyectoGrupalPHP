$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll > 50) {
        $("#menu").css({
            backgroundColor: "#350f1a"
        }, 500);
        $("#blog")
        $(".linkmenu").css({
            color: "#fff"
        }, 500);
        $("#logoheader").slideUp(500);
    } else {
        $("#menu").css({
            backgroundColor: "#fff"
        }, 500);
        $(".linkmenu").css({
            color: "#000"
        }, 500);
        $("#logoheader").slideDown(500);
    }
});
$(document).ready(function () {
    $("nav").click(function () {
        $("ul#menu-header").toggle(500);
    });
});