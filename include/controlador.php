<?php

if (!isset($_GET['p'])) {
    $contenido   = 'include/inicio.php';
    $titulo      = 'A L X Developer';
    $descripcion = 'Soy Alejandro López Arreola, Programador Junior, durante tres años he aprendido un sinfín de conocimientos en el mundo de la programación, conoce un poco sobre mí y mi formación profesional.';
    $palabras    = 'A L X Developer, Programación, Información, Contacto, Lenguajes';
} else if ($_GET['p'] == 'lenguajes') {
    $contenido   = 'include/lenguajes.php';
    $titulo      = 'A L X Developer | Lenguajes de Programación';
    $descripcion = 'Soy Alejandro López Arreola, Programador Junior, los lenguajes de programación pueden ser más interesantes de lo que crees, estos son los que he aprendido.';
    $palabras    = 'A L X Developer, Lenguajes, Programación, Java, Javascript, CSS3, HTML5, Android';
} else if ($_GET['p'] == 'contacto') {
    $contenido   = 'include/contacto.php';
    $titulo      = 'A L X Developer | Contacto';
    $descripcion = 'Soy Alejandro López Arreola, Programador Junior, en la programación las cosas son más difíciles mientras mas entendemos, permíteme guiarte, este es mi medio de contacto.';
    $palabras    = 'A L X Developer, Contacto, Equipo, Programador, Junior, Trabajo';
} else {
    $contenido   = 'include/404.php';
    $titulo      = 'A L X Developer | Pagina no encontrada - ERROR 404';
    $descripcion = 'A L X Developer | Pagina no encontrada - ERROR 404';
    $palabras    = '';
}
