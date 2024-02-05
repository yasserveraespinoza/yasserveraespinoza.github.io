<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["name"];
  $correo = $_POST["email"];
  $mensaje = $_POST["message"];

  // Dirección de correo electrónico a la que se enviará el mensaje
  $destinatario = "jesus_vera_30@hotmail.com";

  // Asunto del correo electrónico
  $asunto = "Nuevo mensaje de contacto de $nombre";

  // Cuerpo del correo electrónico
  $contenido = "Nombre: $nombre\n";
  $contenido .= "Correo electrónico: $correo\n";
  $contenido .= "Mensaje:\n$mensaje";

  // Cabeceras del correo electrónico
  $headers = "From: $nombre <$correo>";

  // Envío del correo electrónico
  mail($destinatario, $asunto, $contenido, $headers);

  // Redireccionar después del envío (opcional)
  header("Location: gracias.html");
}
?>