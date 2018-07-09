<?php
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