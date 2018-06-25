<?php
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
        header("Location: ../view/login.php?registro=1");
      }

    }
    else
    {
      header("Location: ../view/registro.php?error=1");
    }
  }
  else
  {
      header("Location: ../view/registro.php?error=2");
  }
?>
