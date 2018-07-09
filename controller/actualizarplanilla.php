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
  * Controlador el cual actualiza la lista de planillas
  * Al actulizar dicha informacion, mostrara un mensaje de confirmacion
  */
  require_once("../model/transacbd.php");
 $agregar=new transacciones_modelo();
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$stock	= $_POST['stock'];
$id_tipo = $_POST['id_tipo'];

 $resultado = $agregar->actualizarMateriales($id,$nombre,$stock,$id_tipo);
 echo "<script>window.opener.document.location='../view/gestionmateriales.php?exedit=1';</script>";
 echo "<script>window.close();</script>";
?>
