<?php
    require_once("../model/transacbd.php");
    $datos=new transacciones_modelo();
    $valor=$_SESSION['email'];
    if(substr_compare($valor, "constructorasec.com", -19, 19) == 0)
    {
        $nombre = $_POST['name'];
        $pass = $_POST['password'];
        $confi = $_POST['confirm'];
        if(strcmp($password,$confi) === 0)
        {
            $filas=$datos->obtenerDatosEdicion($valor,1);
        }
        else
        {
            // contraseña no coinciden
        }
    }
    else
    {
        $nombre = $_POST['name'];
        $pass = $_POST['password'];
        $confi = $_POST['confirm'];
        if(strcmp($password,$confi) === 0)
        {
            $filas=$datos->obtenerDatosEdicion($valor,2);
        }
        else
        {
            // contraseña no coinciden
        }
    }
?>