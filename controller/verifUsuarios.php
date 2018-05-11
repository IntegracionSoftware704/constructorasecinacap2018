<?php
    $valid = false;
    $usuario = $_POST['usuario'];
    $password = $_POST['passwd'];
    require_once("../model/transacbd.php");
    $usu=new transacciones_modelo();
    $datos=$usu->getUsuarios();
    foreach ($datos as $dato)
    {
        if($usuario==$dato["user"] && $password==$dato["pass"])
        {
            $valid = true;
            $grupo = $dato["grupo"];
        }
    }
    if($valid)
    {
        session_start();
        $_SESSION['nom'] = $usuario;
        $_SESSION['rol'] = $grupo;
        header("Location: ../index.php");
    }
    else
    {
        header("Location: ../view/login.php");
    }
?>
