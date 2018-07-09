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
  * Controlador encargado de llenar la fila con los datos de los materiales que desea editar
  * @param array $filas de acuerdo con el parametro de entrada $valor
  */
require_once("../model/transacbd.php");
$datos=new transacciones_modelo();
$valor=$_GET["id"];
$filas=$datos->editarMaterial($valor);
?>
