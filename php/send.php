<?php
if (isset($_POST['email'])) {

    $email_to      = "program.alopez@gmail.com";
    $email_subject = "A L X Developer - Web Site Contact";

    if (!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {

        echo 0;
//echo "<b>Ocurrio un error y el formulario no ha sido enviado. </b><br />";
        //echo "Por favor, vuelva atras y verifique la informacion ingresada<br />";

        die();
    }

    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $_POST['name'] . "\n";
    $email_message .= "Correo: " . $_POST['email'] . "\n";
    $email_message .= "Mensaje: " . $_POST['message'] . "\n";

// Ahora se envia el e-mail usando la funcion mail() de PHP

    @mail($email_to, $email_subject, $email_message);

//Si el mensaje se envía muestra una confirmación
    //echo "<center><h1>Tu inscripcion fue realizada con exito!</center> </h1>\n";
    //echo "<center><h2>Espera por favor...</h2></center>";
    echo 1;
//echo "<meta http-equiv='refresh' content='3;URL=contact'>";
}
