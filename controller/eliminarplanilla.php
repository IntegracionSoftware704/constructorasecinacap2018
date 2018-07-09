<?php
if(!empty($_GET))
{
	$valor=$_GET["id"];
	require_once("../model/transacbd.php");
	$datos=new transacciones_modelo();
	$resultado = $datos->eliminarplanilla($valor);
	if($resultado)
	{
			echo "<script>window.opener.document.location='../view/gestionplanilla.php?exelim=1';</script>";
			echo "<script>window.close();</script>";
	}
}
?>
