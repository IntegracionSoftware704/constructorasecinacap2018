<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contructora SEC</title>
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
        <h5 style="color:#fff;"><strong>Editar materiales</strong></h5>
    </div>
</header>
<div class="container-fluid">
  <div class="row">
  <table class="table table-condensed">
  <tbody>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Caracteristica</th>
      <th scope="col">Stock</th>
      <th scope="col">Tipo de cantidad</th>
      <th scope="col">Precio Compra</th>
      <th scope="col">Precio de venta</th>
      <th scope="col">Stock minimo</th>
      <th scope="col">Tipo de Material</th>
      <th scope="col"></th>
    </tr>
    <form role="form" method="post" action="../controller/actualizarmaterial.php">
    <?php
      require_once("../controller/editarmateriales.php");
      foreach($filas as $dato=>$value)
      {
        $info = array();
    ?>
   <tr>
   <?php
        foreach($value as $dato=>$value)
        {
          array_push($info,$value);
        } 
      ?>
      <td><input class="form-control" readonly="readonly" id="id" name="id" type="text" value="<?php echo $info[0]?>" required  ></td>
      <td><input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $info[1]?>" maxlength="45" required></td>
      <td><input class="form-control" id="proveedor" name="proveedor" type="text" value="<?php echo $info[2]?>" maxlength="45"></td>
      <td><input class="form-control" id="caracteristica" name="caracteristica" type="text" value="<?php echo $info[3]?>" maxlength="45" required></td>
      <td><input class="form-control" id="stock" name="stock" type="text" value="<?php echo $info[4]?>" maxlength="11" onkeypress="return controltag(event);" required></td>
      <td><input class="form-control" id="tipoCant" name="tipoCant" type="text" value="<?php echo $info[5]?>" maxlength="30" required></td>
      <td><input class="form-control" id="preciocompra" name="preciocompra" type="text" value="<?php echo $info[6]?>" maxlength="11" onkeypress="return controltag(event);" required></td>
      <td><input class="form-control" id="precioventa" name="precioventa" type="text" value="<?php echo $info[7]?>" maxlength="11" onkeypress="return controltag(event);" required></td>
	    <td><input class="form-control" id="stockMin" name="stockMin" type="text" value="<?php echo $info[8]?>" maxlength="11" onkeypress="return controltag(event);" required></td>
      <?php $tipomaterial = $info[9];?>
 <td>
      <select class="form-control" style="width:150px;" id="id_tipo" name="id_tipo">
      <?php
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
                if(strcmp($value,$tipomaterial) === 0)
                {
                  ?>
                  <option id="id_tipo" type="text" selected="selected" value="<?php echo $id;?>"><?php echo $value;?></option>
                  <?php
                }
                else
                {
                  ?>
                  <option id="id_tipo" type="text" value="<?php echo $id;?>"><?php echo $value;?></option>
                  <?php
                }
              }
            }
          }
      ?>
      </select>
 </td>
      <td class="text-center"> <button type="submit" id="reg" name="reg" class="btn btn-info btn-xs">Guardar</button></td>
    </tr>
        <?php } ?>
    </form>
  </tbody>
</table>
<div>
</div>
</body>
</html>
