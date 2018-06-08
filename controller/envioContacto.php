<?php
$email_to = "layozero@gmail.com";
$email_subject = "Contacto constructorasec";

$nombre = $_POST['name'];
$correo = $_POST['email'];
$tel = $_POST['mobile'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

if(true)
{
    if(filter_var($correo, FILTER_VALIDATE_EMAIL))
    {
      $email_message = "Detalles del formulario de contacto:\n\n";
      $email_message .= "Nombre: " . $nombre . "\n";
      $email_message .= "Correo: " . $correo . "\n";
      $email_message .= "Telefono: " . $tel . "\n";
      $email_message .= "Asunto: " . $asunto . "\n";
      $email_message .= "Mensaje: " . $mensaje . "\n\n";

      $headers =  'MIME-Version: 1.0' . "\r\n";
      $headers .= 'From: Danilo Martinez <layozero@gmail.com>' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

      if(mail($email_to, $email_subject, $email_message, $headers))
      {
        header("Location: ../view/contacto.php?exito=1");
      }
      else
      {
          header("Location: ../view/contacto.php?exito=0");
      }
    }
    else
    {
      header("Location: ../view/contacto.php?error=0");
    }
}
else
{
  header("Location: ../view/contacto.php?error=1");
}
?>
