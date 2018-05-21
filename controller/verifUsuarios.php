<?php
    $valid = false;
    $correo = $_POST['usuario'];
    $password = $_POST['passwd'];
    require_once("../model/transacbd.php");
    $usu=new transacciones_modelo();
    if(substr_compare($correo, "constructorasec.com", -19, 19) == 0)
    {
        $datos=$usu->getUsuarios('administrador');
        $grupo = "administrador";
    }
    else
    {
        $datos=$usu->getUsuarios('cliente');
        $grupo = "usuario";
    }
    foreach ($datos as $dato)
    {
        if($correo==$dato["correoelectronico"] && $password==$dato["contrasena"])
        {
            $valid = true;
            $nom = $dato["nombre"];
        }
    }
    if($valid)
    {
        session_start();
        $_SESSION['email'] = $correo;
        $_SESSION['nom'] = $nom;
        $_SESSION['rol'] = $grupo;
        header("Location: ../index.php");
    }
    else
    {
        header("Location: ../view/login.php");
    }
?>
