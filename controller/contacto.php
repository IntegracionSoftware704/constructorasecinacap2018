
<?php
/**
  * @author Danilo Martinez
  * @author Diego Valenzuela
  * @author Aldo Vera
  * 
  * Controlador con las transacciones entre la BD mysql-constructora y la vista
  * Proyecto para asignatura Taller integracion de software INACAP Valdivia
  * Carrera: Ingenieria en Informatica
  * Profesor: Mario Alejandro Navarrete Vergara
  * Julio 2018
  * @link http://portales.inacap.cl/
  * 
  * @package controller
  *
  * De acuerdo con el nombre, correo, asunto y el mensaje, al presionar el boton envia a un email la informacion ingresada
  * Lo cual lo consigue a traves de los parametros SMTP
  */
include "class.phpmailer.php";
include "class.smtp.php";

$email_user = "constructorasec704@gmail.com";
$email_password = "DaniloDiegoAldo";

$address_to = "constructorasec704@gmail.com";
$from_name = "Aldo";

if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {
        $file = "attachment/" . basename($_FILES['attachment']['name']);
        move_uploaded_file($_FILES['attachment']['tmp_name'], $file);
    } else
        $file = "";

$phpmailer = new PHPMailer();

// ---------- datos de la cuenta de Gmail -------------------------------
$phpmailer->Username = $email_user;
$phpmailer->Password = $email_password; 
//-----------------------------------------------------------------------
// $phpmailer->SMTPDebug = 1;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "smtp.gmail.com"; // GMail
$phpmailer->Port = 465;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;

$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress($address_to); // recipients email

$phpmailer->Subject = $subject;
$phpmailer->Body = $message;
$phpmailer->addAttachment($file);
$phpmailer->IsHTML(true);

$phpmailer->Send();
}
?>
<?php
    if("../controller/contacto.php")
    {
        header("Location: ../view/contacto.php");
    }
?>