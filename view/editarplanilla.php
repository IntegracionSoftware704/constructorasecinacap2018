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
        <h5 style="color:#fff;"><strong>Editar Planilla</strong></h5>
    </div>
</header>
<div class="container-fluid">
  <div class="row">
  <table class="table table-condensed">
  <tbody>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Tipo de Material</th>
      
    </tr>
    <form role="form" method="post" action="../controller/actualizarplanilla.php">
    <?php
      require_once("../controller/editarmateriales.php");
      while($dat=$filas->fetch_assoc())
      {
    ?>
   <tr>
      <td><input class="form-control" readonly="readonly" id="id" name="id" type="text" value="<?php echo $dat["id"]?>" required  ></td>
      <td><input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $dat["nombre"]?>" maxlength="45" required></td>
      
      
      
     
      
      <td><input class="form-control" id="stock" name="stock" type="text" value="<?php echo $dat["stock"]?>" maxlength="11" onkeypress="return controltag(event);" required></td>
 <td>
      <select class="form-control" style="width:150px;" id="id_tipo" name="id_tipo">
      <?php
         require_once("../controller/consultartipodematerial.php");
        while($dat=$filas->fetch_assoc())
        {
          ?>
          <option id="id_tipo" type="text" value="<?php echo $dat["id"]?>"><?php echo $dat["nombre"]?></option>
          <?php
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
