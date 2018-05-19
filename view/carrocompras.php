<?php
    require_once("header.php");
    require_once("../modulos/isLogin.php");
    if(!($estado))
    {
        header("Location: ../index.php");
    }
?>
<div class="menu-fila">
    <div class="container">
<nav class="navbar-default">
<div class="navbar-header">
  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Panel de control</a>
</div>

<div class="collapse navbar-collapse js-navbar-collapse">
<ul class="nav navbar-nav">
    <li><a href="panelcontrol.php">Inicio</a></li>
    <li><a href="gestionplanilla.php">Gestion planillas</a></li>
    <li><a href="gestionmateriales.php">Gestion Materiales</a>
    <li><a href="cotizaciones.php">Cotizacion</a>
    </li>
</div><!-- /.nav-collapse -->
</nav>
</div>
</div>
<div class="container">
<div class="row">
    <div>
      <h2>Cotizaciones</h2>
      <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Total</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="col-sm-8 col-md-6">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="media-heading"><a href="#"><strong>Nombre del Producto</strong></a></h5>
                            <h5 class="media-heading"> de <a href="#">Nombre del material</a></h5>
                            <span>Estado: </span><span class="text-success"><strong>Disponible</strong></span>
                        </div>
                    </div></td>
                    <td class="col-sm-1 col-md-1" style="text-align: center">
                    <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                    </td>
                    <td class="col-sm-1 col-md-1 text-center"><strong>$10.000</strong></td>
                    <td class="col-sm-1 col-md-1 text-center"><strong>$15.000</strong></td>
                    <td class="col-sm-1 col-md-1">
                    <button type="button" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove"></span> Remover
                    </button></td>
                </tr>
                <tr>
                    <td class="col-md-6">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="media-heading"><a href="#"><strong>Nombre del Producto</strong></a></h5>
                            <h5 class="media-heading"> de <a href="#">Nombre del material</a></h5>
                            <span>Estado: </span><span class="text-warning"><strong>Pocas unidades</strong></span>
                        </div>
                    </div></td>
                    <td class="col-md-1" style="text-align: center">
                    <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                    </td>
                    <td class="col-md-1 text-center"><strong>$5.500</strong></td>
                    <td class="col-md-1 text-center"><strong>$23.000</strong></td>
                    <td class="col-md-1">
                    <button type="button" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove"></span> Remover
                    </button></td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td><h5>Subtotal</h5></td>
                    <td class="text-right"><h5><strong>$53.000</strong></h5></td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td><h5>IVA 19%</h5></td>
                    <td class="text-right"><h5><strong>$5.900</strong></h5></td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td><h3>Total</h3></td>
                    <td class="text-right"><h3><strong>$60.000</strong></h3></td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-shopping-cart"></span> Continue comprando
                    </button></td>
                    <td>
                    <button type="button" class="btn btn-success">
                        Revisar <span class="glyphicon glyphicon-play"></span>
                    </button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php
    require_once("footer.php");
?>
