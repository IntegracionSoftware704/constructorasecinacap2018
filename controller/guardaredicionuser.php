<?php
    require_once("../model/transacbd.php");
    $datos=new transacciones_modelo();
    session_start();
    $valor=$_SESSION['email'];
    if(substr_compare($valor, "constructorasec.com", -19, 19) == 0)
    {
        $nombre = $_POST['name'];
        $pass = $_POST['password'];
        $confi = $_POST['confirm'];
        if(strcmp($pass,$confi) === 0)
        {
            $resultado=$datos->grabaredicionusuario(1,$valor,$nombre,$pass,0,0);
            header("Location: ../view/ediciondatos.php?message=1");
        }
        else
        {
            header("Location: ../view/ediciondatos.php?message=2");
        }
    }
    else
    {
        $nombre = $_POST['name'];
        $apellido = $_POST['apellido'];
        $pass = $_POST['password'];
        $confi = $_POST['confirm'];
        $telefono = $_POST['telefono'];
        if(strcmp($pass,$confi) === 0)
        {
            $resultado=$datos->grabaredicionusuario(2,$valor,$nombre,$pass,$apellido,$telefono);
            header("Location: ../view/ediciondatos.php?message=1");
        }
        else
        {
            header("Location: ../view/ediciondatos.php?message=2");
        }
    }
?>