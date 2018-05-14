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
</ul>
<ul class="nav navbar-nav navbar-right">
</ul>
</div><!-- /.nav-collapse -->
</nav>
</div>
</div>
<div class="container">
  <h2>Inicio</h2>
  <br>
  <div class="row">
      <div class="col-md-3" style="background:#46d140;">
        <a href="#"><img src="../img/plani1.jpg" class="img-thumbnail" alt="Cinque Terre" width="300"></a>
        <h5>Planilla 1</h5>
        <h5><strong>Costo total: $5.000.000<strong></h5>
      </div>
      <div class="col-md-3" style="background: #73fe5a;">
        <a href="#"><img src="../img/plani1.jpg" class="img-thumbnail" alt="Cinque Terre" width="300"></a>
        <h5>Planilla 2</h5>
        <h5><strong>Costo total: $5.000.000<strong></h5>
      </div>
      <div class="col-md-3" style="background:#46d140;">
        <a href="#"><img src="../img/plani1.jpg" class="img-thumbnail" alt="Cinque Terre" width="300"></a>
        <h5>Planilla 3</h5>
        <h5><strong>Costo total: $5.000.000<strong></h5>
      </div>
      <div class="col-md-3" style="background: #73fe5a;">
        <a href="#"><img src="../img/plani1.jpg" class="img-thumbnail" alt="Cinque Terre" width="300"></a>
        <h5>Planilla 4</h5>
        <h5><strong>Costo total: $5.000.000<strong></h5>
      </div>
      <div class="col-md-3" style="background:#46d140;">
        <a href="#"><img src="../img/plani1.jpg" class="img-thumbnail" alt="Cinque Terre" width="300"></a>
        <h5>Planilla 5</h5>
        <h5><strong>Costo total: $5.000.000<strong></h5>
      </div>
      <div class="col-md-3" style="background: #73fe5a;">
        <a href="#"><img src="../img/plani1.jpg" class="img-thumbnail" alt="Cinque Terre" width="300"></a>
        <h5>Planilla 6</h5>
        <h5><strong>Costo total: $5.000.000<strong></h5>
      </div>
      <div class="col-md-3" style="background:#46d140;">
        <a href="#"><img src="../img/plani1.jpg" class="img-thumbnail" alt="Cinque Terre" width="300"></a>
        <h5>Planilla 5</h5>
        <h5><strong>Costo total: $5.000.000<strong></h5>
      </div>
      <div class="col-md-3" style="background: #73fe5a;">
        <a href="#"><img src="../img/plani1.jpg" class="img-thumbnail" alt="Cinque Terre" width="300"></a>
        <h5>Planilla 6</h5>
        <h5><strong>Costo total: $5.000.000<strong></h5>
      </div>
    </div>
    <div style="text-align: right;">
    <a href="#">1</a> > <a href="#">2</a> > <a href="#">3</a> > ...
  </div>
</div>
<?php
    require_once("footer.php");
?>
