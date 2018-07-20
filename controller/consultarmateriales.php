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
  * Ingresa la informacion de los materiales a gestionmateriales.php
  * @return array con las filas de tabla material
  */
require_once("../model/transacbd.php");
$infoArray = array();
$datos=new transacciones_modelo();
$filas=$datos->consultarMateriales();
?>