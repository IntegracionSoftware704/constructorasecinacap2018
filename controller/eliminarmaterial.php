<?php
if(!empty($_GET))
{
	$valor=$_GET["id"];
	require_once("../model/transacbd.php");
	$datos=new transacciones_modelo();
	$resultado = $datos->eliminarMateriales($valor);
	if($resultado)
	{
		echo "<script>alert('Elemento se elimino correctamente'); location.href='../view/gestionmateriales.php';</script>";
		//header("Location: ../view/gestionmateriales.php?exito=1");
	}
	else
	{
		echo "<script>alert('Hubo un error en eliminar'); location.href='../view/gestionmateriales.php';</script>";
		//header("Location: ../view/gestionmateriales.php?error=1");
	}
}
?>
