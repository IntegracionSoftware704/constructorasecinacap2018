<?php
require_once("../model/transacbd.php");
$datos=new transacciones_modelo();
$valor=$_GET["id"];
$filas=$datos->editarplanilla($valor);
?>
