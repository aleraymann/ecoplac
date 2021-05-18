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

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})

$('#submit').on('click', function (event) {
    if ($('#nome').val() == "") { //usuario
        event.preventDefault();
        $("#nome").addClass("invalid");

    }
    if ($('#email').val() == "") { //senha
        event.preventDefault();
        $("#email").addClass("invalid");

    }
    if ($('#assunto').val() == "") { //nome empresa
        event.preventDefault();
        $("#assunto").addClass("invalid");

    }
    if ($('#mensagem').val() == "") { //nome empresa
        event.preventDefault();
        $("#mensagem").addClass("invalid");
    }
});

$("#nome").blur(function () {
    if ($("#nome").val() == "") {
        $("#nome").addClass("invalid");
        $
    } else {
        $("#nome").removeClass("invalid");

    }
});
$("#email").blur(function () {
    if ($("#email").val() == "") {
        $("#email").addClass("invalid");

    } else {
        $("#email").removeClass("invalid");

    }
});
$("#assunto").blur(function () {
    if ($("#assunto").val() == "") {
        $("#assunto").addClass("invalid");

    } else {
        $("#assunto").removeClass("invalid");

    }
});
$("#mensagem").blur(function () {
    if ($("#mensagem").val() == "") {
        $("#mensagem").addClass("invalid");

    } else {
        $("#mensagem").removeClass("invalid");

    }
});

//load no submit
$("#form").submit(function(event) {
    $("#submit").attr('disabled', 'disabled');
    $("#submit").text('Enviando');
    
    swal({
        title: "Aguarde!",
        text: "Estamos encaminhando seu E-mail !",
        icon: "info",
        button: false,
        closeOnClickOutside: false
      });
});