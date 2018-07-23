<?php
require_once("../model/transacbd.php");
$datos=new transacciones_modelo();
$i = $_GET['id'];
$plantillaCliente=$datos->plantillaCliente($i);
?>