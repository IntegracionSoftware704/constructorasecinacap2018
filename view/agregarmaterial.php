<!DOCTYPE html>
<!--Posibilita el ingreso de materiales con sus respectivos detalles-->
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar material - Contructora SEC</title>
    <link rel=stylesheet href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/gestionplanilla.css">
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link href="../css/siderbar.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/carousel.js"></script>
    <script src="../js/login.js"></script>
    <script src="../js/solonumeros.js"></script>
</head>
<body>
  <header>
    <div class="container-fluid">
        <h1>Constructora SEC</h1>
        <h5 style="color:#fff;"><strong>Agregar materiales</strong></h5>
    </div>
</header>
<div class="container-fluid">
  <div class="row">
<table class="table table-condensed">
  <tbody>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Caracteristica</th>
      <th scope="col">Stock</th>
      <th scope="col">Tipo de cantidad</th>
      <th scope="col">Precio Compra</th>
      <th scope="col">Precio de venta</th>
      <th scope="col">Stock minimo</th>
      <th scope="col">ID Administrador</th>
      <th scope="col">Tipo de Material</th>
      <th scope="col"></th>

    </tr>
  <form id="form"  role="form" method="post" action="../controller/agregarmaterial.php">
   <tr>
      <td><input class="form-control" id="nombre" name="nombre" type="text" maxlength="45" required></td>
      <td><input class="form-control" id="proveedor" name="proveedor" type="text" maxlength="45" required></td>
      <td><input class="form-control" id="caracteristica" name="caracteristica" type="text" maxlength="45" required></td>
      <td><input class="form-control" id="stock" name="stock" type="text" maxlength="11" onkeypress="return controltag(event);" required></td>
      <td><input class="form-control" id="tipoCant" name="tipoCant" type="text" maxlength="30"></td>
      <td><input class="form-control" id="preciocompra" name="preciocompra" type="text" maxlength="11" onkeypress="return controltag(event);" required></td>
      <td><input class="form-control" id="precioventa" name="precioventa" type="text" maxlength="11" onkeypress="return controltag(event);" required></td>
	  <td><input class="form-control" id="stockMin" name="stockMin" type="text" maxlength="11" onkeypress="return controltag(event);" required></td>
    <td><input class="form-control" readonly="readonly" id="admin" name="admin" type="text" maxlength="11" onkeypress="return controltag(event);" value="1" required></td>
    <td>

      <select class="form-control" style="width:150px;" id="id_tipo" name="id_tipo">
      <?php
        /**
         * @author Danilo Martinez
         * @author Diego Valenzuela
         * Ejecuta el controlador consultartipodematerial para mediante un ciclo
         * devolver los datos del material
         */
         require_once("../controller/consultartipodematerial.php");

    foreach($filas as $dato=>$value)
    {
      $valid = true;
      foreach($value as $dato=>$value)
      {
        if($valid)
        {
          $id = $value;
          $valid = false;
        }
        else
        {
          ?>
          <option id="id_tipo" type="text" value="<?php echo $id?>"><?php echo $value?></option>
          <?php
        }
      }
    }
    ?>

      </select>
 </td>
      <td class="text-center"> <button type="submit" id="reg" name="reg" class="btn btn-info btn-xs">Agregar</button></td>
    </tr>
    </form>

  </tbody>
</table>
</div>
</div>
</body>
</html>
