<!DOCTYPE html>
<!--Inserta planillas a la base de datos de acuerdo a lo requerido por el usuario-->
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar planilla - Contructora SEC</title>
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
        <h5 style="color:#fff;"><strong>Agregar planilla</strong></h5>
    </div>
</header>
<div class="container-fluid">
  <div class="row">
<table class="table table-condensed">
  <tbody>
    <tr>
      <th scope="col">Foto</th>
      <th scope="col">Nombre</th>
      <th scope="col">Valor referencial</th>
      <th scope="col"></th>

    </tr>
  <form id="form"  role="form" method="post" action="../controller/agregarplanilla.php" enctype="multipart/form-data">
   <tr>

      <td><input class="form-control-file" id="imagen" name="imagen" type="file" maxlength="45" required></td>

      <td><input class="form-control" id="nombre" name="nombre" type="text" maxlength="45" required></td>

    <td><input class="form-control" id="cosotreferencial" name="cosotreferencial" type="text" maxlength="45" required></td>
    <td>


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
