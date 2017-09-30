<section>
  <div class="parallax-container">
    <div class="container grey darken-4 white-text center" style="position: relative; top: 25%;">
      <h2 class="text_parts" style="padding: 15px;">
        Contáctame
      </h2>
    </div>
    <div class="parallax">
      <img src="imagenes/img4.png"/>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12 m9">
        <h2 class="center">
          Preguntame lo que quieras!
        </h2>
        <a href="#developers">
          <h4 class="center">
            ¿Ya eres desarrollador?
          </h4>
        </a>
        <form id="form">
          <div class="row">
            <div class="input-field col s6">
              <input class="validate" id="name" name="name" placeholder="Nombre" type="text">
                <label data-error="Este campo es obligatorio"  for="name">
                  Nombre
                </label>
              </input>
            </div>
            <div class="input-field col s6">
              <input class="validate" id="email" name="email" placeholder="Correo electronico" type="email">
                <label data-error="Correo electronico incorrecto" for="email">
                  Correo electronico
                </label>
                <p>
                </p>
              </input>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea class="materialize-textarea validate" id="message" name="message" placeholder="Escriba su mensaje">
              </textarea>
              <label for="message">
                Escriba su mensaje
              </label>
            </div>
          </div>
          <input class="btn waves-effect waves-light grey darken-4 " onclick="javascript:SendMessage();" type="button" value="Enviar">
          </input>
        </form>
      </div>

      <div class="col s12 m3">
        <h4 class="center">Mis redes sociales</h4>
          <p class="center">
            <a href="https://twitter.com/ale_developerjr" target="blank">
              <img alt="Twitter Page" src="imagenes/twitter.png" style="width: 30%;">
            </a>
            <br>
            <a href="https://www.instagram.com/alejadro.lopez.arreola/" target="blank">
              <img alt="Instagram Page" src="imagenes/instagram.png" style="width: 30%;">
            </a>
          </p>
      </div>
    </div>
    <div class="modal" id="modal2">
      <div class="modal-content">
        <h4>
          Tu mensaje me ha sido enviado correctamente.
        </h4>
        <h5>
          Espera mi respuesta muy pronto. Revisa tu correo electronico en unas horas.
        </h5>
      </div>
      <div class="modal-footer">
        <a class="modal-action modal-close waves-effect waves-green btn-flat" href="#!">
          Cerrar
        </a>
      </div>
    </div>
    <div class="modal" id="modal3">
      <div class="modal-content">
        <h4>
          Por favor, completa todos los campos.
        </h4>
      </div>
      <div class="modal-footer">
        <a class="modal-action modal-close waves-effect waves-green btn-flat" href="#!">
          Aceptar
        </a>
      </div>
    </div>
    <div class="modal" id="modal4">
      <div class="modal-content">
        <h4>
          Por favor, ingresa un correo electronico valido.
        </h4>
      </div>
      <div class="modal-footer">
        <a class="modal-action modal-close waves-effect waves-green btn-flat" href="#!">
          Aceptar
        </a>
      </div>
    </div>
</div>
  <div class="parallax-container" id="developers">
    <div class="container grey darken-4 white-text center" style="position: relative; top: 25%;">
      <h2 class="text_parts" style="padding: 15px;">
        Para desarrolladores
      </h2>
    </div>
    <div class="parallax">
      <img src="imagenes/img6.jpg"/>
    </div>
  </div>
  <div class="container">
    <h3 class="center">
      ¿Eres programador Junior?
    </h3>
    <div class="row">
      <div class="col s12 m6">
        <h4 class="center">
          Puedes trabajar conmigo y juntos formar un equipo.
        </h4>
        <p style="text-align: justify;">
          Si tienes conocimientos en alguno de los
          <a href="lenguajes">
            lenguajes
          </a>
          que yo conozco y estas interesado en trabajar conmigo, envíame un correo en el apartado de arriba con una descripción del tiempo que tienes como programador y los lenguajes que sabes, así como algunas de las herramientas que usas para programar.
        </p>
      </div>
      <div class="col s12 m6">
        <h2 class="header">
          C.A.R. Hoare
        </h2>
        <div class="card horizontal">
          <div class="card-image">
            <img alt="C.A.R. Hoare" src="imagenes/p1.jpg">
            </img>
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p style="text-align:justify;">
                Hay dos formas de construir un diseño de software. Una forma es hacerlo tan simple que es obvio que no hay deficiencias. Y la otra es hacerlo tan complicado que no hay deficiencias obvias.
              </p>
            </div>
            <div class="card-action">
              <a class="black-text" href="https://es.wikipedia.org/wiki/C._A._R._Hoare" target="black">
                Leer más
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-106386058-1', 'auto');
  ga('send', 'pageview');

</script>