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
  * Controlador el cual ingresa un material a la tabla material
  * Al insertar un nuevo material mostrar un mensaje de exito a la pagina gestionmateriales.php
  * Al terminar el proceso, retorna a la pagina gestionmateriales.php enviando parametros de tipo GET exagre=1
  */
  require_once("../model/transacbd.php");
 $agregar=new transacciones_modelo();
$nombre = $_POST['nombre'];
$proveedor = $_POST['proveedor'];
$caracteristica	= $_POST['caracteristica'];
$stock	= $_POST['stock'];
$tipoCant	= $_POST['tipoCant'];
$preciocompra	= $_POST['preciocompra'];
$precioventa	= $_POST['precioventa'];
$stockMin	= $_POST['stockMin'];
$admin	= $_POST['admin'];
$tipoM	= $_POST['id_tipo'];

 $resultado = $agregar->agregarMateriales($nombre,$proveedor,$caracteristica,$stock,$tipoCant,$preciocompra,$precioventa,$stockMin,$admin,$tipoM);
 echo "<script>window.opener.document.location='../view/gestionmateriales.php?exagre=1';</script>";
 echo "<script>window.close();</script>";
?>
