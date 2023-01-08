<?php

// Verifica si se han enviado los datos del formulario
if (isset($_POST['submit'])) {
  // Almacena los datos en variables
  $name = $_POST['name'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];

  // Establece el destinatario del correo
  $to = "serracinkadir@gmail.com";

  // Establece el asunto del correo
  $subject = "Nueva Confirmació XV Gaby";

  // Construye el cuerpo del mensaje
  $body = "Confirmación de $name $apellido \n Correo: $email\n";

  // Establece el remitente del correo
  $header = "From: $email";

  // Envía el correo
  mail($to, $subject, $body, $header);

  // Redirige al usuario a la página de gracias
  header("Location: gracias.html");
}