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
  * Inserta nuevo usuario a la tabla cliente para el uso de la plataforma de planillas
  * Se valida el email y que su dominio no sea constructorasec.com
  * Se valida que los textbox contraseña y repitir contraseña sean iguales
  * Se valida si el correo ya existe en la tabla clientes, si existe se indica que debe escojer otro
  * Una vez validado se envia a login.php con un mensaje de exito
  */
  require_once("../model/transacbd.php");
  $agregar=new transacciones_modelo();
  $correo = $_POST['correo'];
  $nombres = $_POST['name'];
  $ap_paterno = $_POST['apellido'];
  $password = $_POST['password'];
  $verif_pass = $_POST['confirm'];
  $telefono = $_POST['telefono'];
  if(filter_var($correo, FILTER_VALIDATE_EMAIL) && !(substr_compare($correo, "constructorasec.com", -19, 19) == 0))
  {
    if(strcmp($password,$verif_pass) === 0)
    {
      $resultado = $agregar->agregarUsuario($correo,$nombres,$ap_paterno,$password,$telefono);
      if($resultado == -2)
      {
        header("Location: ../view/registro.php?error=3"); // correo existe
      }
      else
      {
        header("Location: ../view/login.php?registro=1"); // registro exitoso
      }

    }
    else
    {
      header("Location: ../view/registro.php?error=1"); // contraseñas no coinciden
    }
  }
  else
  {
      header("Location: ../view/registro.php?error=2"); // formato de correo incorrecto
  }
?>
