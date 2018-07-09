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
  *	Ingresa los tipo de materiales al combobox al momento de agregar o editar materiales
  *	@return array con las filas de la tabla tipodematerial
  */
require_once("../model/transacbd.php");
$datos=new transacciones_modelo();
$filas=$datos->consultarTipoMaterial();
?>