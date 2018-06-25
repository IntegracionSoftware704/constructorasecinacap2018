<?php
  require_once("../model/transacbd.php");
 $agregar=new transacciones_modelo();

//$id=$_POST['id'];

$nombre=$_POST['nombre'];
$costo = $_POST['cosotreferencial'];

$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];

if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000))
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/constructorasecinacap2018/uploads/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
    }

}
 $resultado = $agregar->agregarplanilla($nombre_img,$tipo,$tamano,$nombre,$costo);
 echo "<script>window.opener.document.location='../view/gestionplanilla.php?exagre=1';</script>";
 echo "<script>window.close();</script>";

?>
