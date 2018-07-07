<?php
/**
  * @author Danilo Martinez
  * @author Diego Valenzuela
  * @author Aldo Vera
  * 
  * Controlador con las transacciones entre la BD mysql-constructora y la vista
  * Proyecto para asignatura Taller integracion de software INACAP Valdivia
  * Carrera: Ingenieria en Informatica
  * Profesor: Mario Alejandro Navarrete Vergara
  * Julio 2018
  * @link http://portales.inacap.cl/
  * 
  * @package controller
  *
  *	Controlador encargado de validar el tipo de usuario el cual esta realizando el ingreso al portal
  * Si el dominio del correo termina en constructorasec.com, se entendera que es administrador
  * De lo contrario se entendera de que se trata de un usuario registrado en la pagina
  * Si se valida la informacion se registraran las variables globales:
  * @global string email
  * @global string nom -> el nombre del usuario
  * @global string rol -> administrador o usuario
  */
    $valid = false;
    $correo = $_POST['usuario'];
    $password = $_POST['passwd'];
    require_once("../model/transacbd.php");
    $usu=new transacciones_modelo();
    if(substr_compare($correo, "constructorasec.com", -19, 19) == 0) // valida correo si es admin o no
    {
        // admin
        $datos=$usu->getUsuarios('administrador');
        $grupo = "administrador";
    }
    else
    {
        // user
        $datos=$usu->getUsuarios('cliente');
        $grupo = "usuario";
    }
    foreach ($datos as $dato) // se recorre el array datos con un foreach
    {
        // se valida si el correo y la contraseña son la misma de los registros
        if($correo==$dato["correoelectronico"] && $password==$dato["contrasena"])
        {
            $valid = true; // true si coinciden con el registro
            $nom = $dato["nombre"];
        }
    }
    if($valid)
    {
        session_start(); // inicia una nueva sesión o reanudar la existente
        $_SESSION['email'] = $correo;
        $_SESSION['nom'] = $nom;
        $_SESSION['rol'] = $grupo;
        header("Location: ../index.php"); // retorna al index, con el usuario iniciando sesion
        exit;
    }
    else
    {
        header("Location: ../view/login.php?error=1"); // el email y/o contraseña incorrecto
        exit;
    }
?>
