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
  *	Elimina un material de acuerdo con la id del material seleccionado
  */
if(!empty($_GET))
{
	$valor=$_GET["id"];
	require_once("../model/transacbd.php");
	$datos=new transacciones_modelo();
	$resultado = $datos->eliminarMateriales($valor);
	if($resultado)
	{
			echo "<script>window.opener.document.location='../view/gestionmateriales.php?exelim=1';</script>";
			echo "<script>window.close();</script>";
	}
}
?>
