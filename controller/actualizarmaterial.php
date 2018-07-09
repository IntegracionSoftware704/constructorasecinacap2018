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
  * Controlador el cual actualiza la lista de materiales de la tabla materiales
  * Al actulizar dicha informacion, mostrara un mensaje flotante el cual indicara de su actualizacion
  * Retornara a la pagina gestionmateriales.php enviando un valor GET exedit=1 confirmando la actualizacion
  */
  require_once("../model/transacbd.php");
 $agregar=new transacciones_modelo();
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$proveedor = $_POST['proveedor'];
$caracteristica	= $_POST['caracteristica'];
$stock	= $_POST['stock'];
$tipoCant	= $_POST['tipoCant'];
$preciocompra	= $_POST['preciocompra'];
$precioventa	= $_POST['precioventa'];
$stockMin	= $_POST['stockMin'];
$tipodemat	= $_POST['id_tipo'];
 $resultado = $agregar->actualizarMateriales($id,$nombre,$proveedor,$caracteristica,$stock,$tipoCant,$preciocompra,$precioventa,$stockMin,$tipodemat);
 echo "<script>window.opener.document.location='../view/gestionmateriales.php?exedit=1';</script>";
 echo "<script>window.close();</script>";
?>
