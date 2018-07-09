<?php
  require_once("../model/transacbd.php");
 $agregar=new transacciones_modelo();
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$stock	= $_POST['stock'];
$id_tipo = $_POST['id_tipo'];

 $resultado = $agregar->actualizarMateriales($id,$nombre,$stock,$id_tipo);
 echo "<script>window.opener.document.location='../view/gestionmateriales.php?exedit=1';</script>";
 echo "<script>window.close();</script>";
?>
