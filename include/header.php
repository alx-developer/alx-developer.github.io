<?php include 'php/script.php';?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      <?php print($titulo);?>
    </title>
    <meta charset="utf-8">
      <meta content="<?php print($descripcion);?>" name="description">
        <meta content="<?php print($palabras);?>" name="keywords">
          <meta content="Alejandro López Arreola" name="author">
            <meta content="Alejandro López Arreola" name="copyright"/>
            <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
            <meta name="google-site-verification" content="WBKEKjqUjBF_ymjqjwEcaZvLue1PgkxJSNnCeW3BzOE" />
            <meta lang="es-MX">
              <meta content="index" name="robots"/>
              <meta content="follow" name="robots"/>
              <meta content="<?php print($titulo);?>" property="og:title">
              </meta>
              <meta content="website" property="og.type"/>
              <meta content="<?php print($descripcion);?>" property="og:description"/>
              <meta content="https://alx-developer.herokuapp.com" property="og:url">
              <meta content="https://alx-developer.herokuapp.com/imagenes/foto.png" property="og:image">
              <meta content="summary_large_image" name="twitter:card">
              <meta content="@ale_developerjr" name="twitter:site">
              <meta content="@ale_developerjr" name="twitter:creator">
              <meta content="<?php print($titulo);?>" name="twitter:title">
              <meta content="https://alx-developer.herokuapp.com" name="twitter:url">
              <meta content="https://alx-developer.herokuapp.com/imagenes/foto.png" name="twitter:image">
              <meta content="<?php print($descripcion);?>" name="twitter:description">
              <link href="css/materialize.min.css" rel="stylesheet" type="text/css">
              <link href="css/alx-developer.min.css" rel="stylesheet" type="text/css">
              <link rel="alternate" hreflang="es-MX" href="https://alx-developer.herokuapp.com" />
              <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                                      <link href="imagenes/icono.ico" rel="shortcut icon" type="image/x-icon"/>
                                      <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
                                      </link>
                                    </link>
                                  </link>
                                </link>
                              </meta>
                            </meta>
                          </meta>
                        </meta>
                      </meta>
                    </meta>
                  </meta>
                </meta>
              </meta>
            </meta>
          </meta>
        </meta>
      </meta>
    </meta>
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Person",
        "name": "Alejandro López Arreola",
        "image": "/imagenes/foto.png",
        "jobTitle": "Programador Junior",
        "email": "program.alopez@gmail.com",
        "description": "Programador Junior con 3 años de experiencia, conoce un poco sobre mí vida profesional.",
        "alternateName": "A L X Developer"
      }
    </script>
  </head>
  <body style="overflow-x: hidden !important;">
    <div class="navbar-fixed">
      <div id="power">
      </div>
      <img alt="Power by A L X Developer" id="power" src="imagenes/power.png" style="position: fixed; z-index:99; top: 0; right: 0; border: 0;">
        <nav>
          <div class="nav-wrapper grey darken-4">
            <a class="brand-logo center font-logo" href="/">
                <div id="logo-div" class="logo-image-header logotipo"></div>
                <h1 id="logo-h1" class="title-page logotipo">
                  A L X D e v e l o p e r
                </h1>
            </a>

            <a class="button-collapse" data-activates="mobile-demo" href="#">
              <i class="material-icons">
                menu
              </i>
            </a>
            <ul class="left hide-on-med-and-down">
              <?php $objet = new Menu();
echo $objet->Navigation();?>
            </ul>
          </div>
        </nav>
      </img>
    </div>
    <ul class="side-nav" id="mobile-demo">
              <?php $objet = new Menu();
echo $objet->Navigation();?>
    </ul>

