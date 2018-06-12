<?php
  require_once("../model/transacbd.php");
 $agregar=new transacciones_modelo();
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$proveedor = $_POST['proveedor'];
$caracteristica	= $_POST['caracteristica'];
$stock	= $_POST['stock'];
$tipoCant	= $_POST['tipoCant'];
$preciocompra	= $_POST['preciocompra'];
$precioventa	= $_POST['precioventa'];
$stockMin	= $_POST['stockMin'];
$tipodemat	= $_POST['id_tipo'];

 $resultado = $agregar->actualizarMateriales($id,$nombre,$proveedor,$caracteristica,$stock,$tipoCant,$preciocompra,$precioventa,$stockMin,$tipodemat);
echo "<script>alert('Material editado!'); window.close();</script>";

?>
