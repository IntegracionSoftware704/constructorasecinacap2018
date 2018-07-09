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
  * Controlador el cual ingresa un tipo de material a la tabla material
  * Al insertar un nuevo tipo de material mostrar un mensaje de exito a la pagina gestionmateriales.php
  * Al terminar el proceso, retorna a la pagina gestionmateriales.php enviando parametros de tipo GET exagre=1
  */
  require_once("../model/transacbd.php");
 $agregar=new transacciones_modelo();
$nombre = $_POST['nombre'];

 $resultado = $agregar->agregartipoMateriales($nombre);
 echo "<script>window.opener.document.location='../view/gestionmateriales.php?exagre=1';</script>";
 echo "<script>window.close();</script>";
?>