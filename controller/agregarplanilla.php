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
  * Inserta una nueva planilla a la tabla planilla
  * Al agregar una planilla, la imagen insertada se mueve a la ruta ../uploads
  * Al agregar la imagen a la nueva ruta, se inserta el nombre de la imagen a la tabla planilla
  * Al insertar la planilla, se envia un mensaje de exito a la pagina gestionplanilla.php
  * Envia como parametro GET exegre=1
  */
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
