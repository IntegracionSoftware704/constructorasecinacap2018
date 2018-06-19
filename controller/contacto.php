
<?php

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