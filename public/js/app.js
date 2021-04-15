$(window).on('scroll', function () {
    if ($(window).scrollTop()) {
        $('nav').addClass('black');
        $('.dropbtn').addClass('black');
        $('#logo').show();
        $('#logo_branco').hide();
    } else {
        $('nav').removeClass('black');
        $('.dropbtn').removeClass('black');
        $('#logo').hide();
        $('#logo_branco').show();
    }
})
/*menu button onclick function*/
$(document).ready(function () {
    $('.menu h4').click(function () {
        $("nav ul").toggleClass("active")
    })
})