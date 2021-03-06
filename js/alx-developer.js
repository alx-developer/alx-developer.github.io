$(document).ready(function() {
  $('.button-collapse').sideNav();
  $('.parallax').parallax();
  $('.materialboxed').materialbox();
  $('.carousel.carousel-slider').carousel({
    fullWidth: true
  });
  $('.modal').modal();
});
$(document).ready(function() {
  var URLactual = window.location.pathname;
  if (URLactual === '/lenguajes') {
    $("logo-div").removeClass("logotipo");
    $("logo-h1").removeClass("logotipo");
    document.getElementById("logo-div").style.display = "block";
    document.getElementById("logo-h1").style.display = "block";
  } else if (URLactual === '/contacto') {
    $("logo-div").removeClass("logotipo");
    $("logo-h1").removeClass("logotipo");
    document.getElementById("logo-div").style.display = "block";
    document.getElementById("logo-h1").style.display = "block";
  } else {
    var scroll;
    $(window).scroll(function() {
      scroll = $(window).scrollTop();
      if (scroll >= 620) {
        $('.logotipo').css({
          "display": "block"
        });
      } else if (scroll >= 244) {
        $('.logotipo').css({
          "display": "none"
        });
      }
    });
  }
});

function validarEmail(email) {
  expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (!expr.test(email)) {
    return false;
  } else {
    return true;
  }
}

function SendMessage() {
  nombre = document.getElementById('name').value;
  correo = document.getElementById('email').value;
  mensaje = document.getElementById('message').value;
  if (nombre.length == 0 || correo.length == 0 || mensaje.length == 0) {
    $('#modal3').modal('open');
  } else if (!validarEmail(correo)) {
    $('#modal4').modal('open');
  } else {
    $.ajax({
      type: 'POST',
      url: 'php/send.php',
      data: $('#form').serialize(),
      success: function(respuesta) {
        if (respuesta == 0) {
          alert("Variables no definidas.")
        } else if (respuesta == 1) {
          $('#modal2').modal('open');
          document.getElementById("form").reset();
        } else if (respuesta == 2) {
          alert("Var. correo no definida.");
        } else {
          alert("Otro error " + respuesta);
        }
      }
    });
  }
}