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
  * Controlador el cual lanza la informacion del usuario para ser editada
  */
    require_once("../model/transacbd.php");
    $datos=new transacciones_modelo();
    $valor=$_SESSION['email'];
    if(substr_compare($valor, "constructorasec.com", -19, 19) == 0)
    {
        $filas=$datos->obtenerDatosEdicion($valor,1);
    }
    else
    {
        $filas=$datos->obtenerDatosEdicion($valor,2);
    }
?>