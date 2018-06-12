<?php
$mail="aestebanveraz@gmail.com";

$email = $_POST ['email'];
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$telefono = $_POST ['telefono'];
$asunto = $_POST ['asunto'];
$comentarios = $_POST ['comentarios'];

$Thank="http://localhost/constructorasecinacap2018/view/contacto.php";

$message = "

Email: ".$email."
Nombre: ".$nombre."
Apellido: ".$apellido."
Telefono: ".$telefono."
Asunto: ".$asunto."
Comentarios: ".$comentarios."
";

if (mail ($mail,"Nuevo Mensaje", $message))

header ("location: $Thanks");
echo "mensaje enviado correctamente";

?>