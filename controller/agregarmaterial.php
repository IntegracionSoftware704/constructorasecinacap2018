<?php
  require_once("../model/transacbd.php");
 $agregar=new transacciones_modelo();
$nombre = $_POST['nombre'];
$proveedor = $_POST['proveedor'];
$caracteristica	= $_POST['caracteristica'];
$stock	= $_POST['stock'];
$tipoCant	= $_POST['tipoCant'];
$preciocompra	= $_POST['preciocompra'];
$precioventa	= $_POST['precioventa'];
$stockMin	= $_POST['stockMin'];
$admin	= $_POST['admin'];
$tipoM	= $_POST['id_tipo'];

 $resultado = $agregar->agregarMateriales($nombre,$proveedor,$caracteristica,$stock,$tipoCant,$preciocompra,$precioventa,$stockMin,$admin,$tipoM);
 echo "<script>window.opener.document.location='../view/gestionmateriales.php?exagre=1';</script>";
 echo "<script>window.close();</script>";
?>
