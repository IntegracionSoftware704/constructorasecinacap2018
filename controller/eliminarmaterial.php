<?php

if(!empty($_GET)){
	
	$conexion=new mysqli("localhost:3306", "root", "","newsec");
 $conexion->query("SET NAMES 'utf8'");
			$sql = "DELETE FROM material WHERE id=".$_GET["id"];
			$query = $conexion->query($sql);
			if($query!=null){
				header("Location:/constructorasecinacap2018/view/mostrarmateriales.php");
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../ver.php';</script>";

			}
}
?>