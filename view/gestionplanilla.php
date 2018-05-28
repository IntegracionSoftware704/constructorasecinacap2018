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
<li><a href="javascript:window.open('agregarplanillas.php','','top=50,left=100,width=700,height=500');void 0">Agregar planilla</a></li>
</ul>
</div><!-- /.nav-collapse -->
</nav>
</div>
</div>

<div class="container">
<h2>Gestion Planillas</h2>
  
    <section class="main row">
        <article class="col-md-9">
            
        <div class="col-md-3" style="background:#46d140;">
        <a href="http://localhost/constructorasecinacap2018/view/gestionplanilla.php?id=1"><img src="../img/plani1.jpg" class="img-thumbnail" alt="Cinque Terre" width="300"></a>
        <h5>Planilla 1</h5>
        <h5><strong>Costo total: $5.000.000<strong></h5>
      </div>

        </article>
        <aside class="col-md-3">

        <a class='btn btn-succes' href="http://localhost/constructorasecinacap2018/view/panelcontrol.php">
                    <button type="button" class="btn btn-success">
                        Volver</button>
                        </a>
            
        </aside>

    </section>
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>
            Fixed Header Scrolling Table 
          </h4>
        </div>
        <table class="table table-fixed">
          <thead>
            <tr>
              <th class="col-xs-2">#</th><th class="col-xs-8">Name</th><th class="col-xs-2">Points</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="col-xs-2">1</td><td class="col-xs-8">Mike Adams</td><td class="col-xs-2">23</td>
            </tr>
            <tr>
              <td class="col-xs-2">2</td><td class="col-xs-8">Holly Galivan</td><td class="col-xs-2">44</td>
            </tr>
            <tr>
              <td class="col-xs-2">3</td><td class="col-xs-8">Mary Shea</td><td class="col-xs-2">86</td>
            </tr>
            <tr>
              <td class="col-xs-2">4</td><td class="col-xs-8">Jim Adams</td><td>23</td>
            </tr>
            <tr>
              <td class="col-xs-2">5</td><td class="col-xs-8">Henry Galivan</td><td class="col-xs-2">44</td>
            </tr>
            <tr>
              <td class="col-xs-2">6</td><td class="col-xs-8">Bob Shea</td><td class="col-xs-2">26</td>
            </tr>
            <tr>
              <td class="col-xs-2">7</td><td class="col-xs-8">Andy Parks</td><td class="col-xs-2">56</td>
            </tr>
            <tr>
              <td class="col-xs-2">8</td><td class="col-xs-8">Bob Skelly</td><td class="col-xs-2">96</td>
            </tr>
            <tr>
              <td class="col-xs-2">9</td><td class="col-xs-8">William Defoe</td><td class="col-xs-2">13</td>
            </tr>
            <tr>
              <td class="col-xs-2">10</td><td class="col-xs-8">Will Tripp</td><td class="col-xs-2">16</td>
            </tr>
            <tr>
              <td class="col-xs-2">11</td><td class="col-xs-8">Bill Champion</td><td class="col-xs-2">44</td>
            </tr>
            <tr>
              <td class="col-xs-2">12</td><td class="col-xs-8">Lastly Jane</td><td class="col-xs-2">6</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
</div>

<script>
function confirmEliminar() {
    var txt;
    var r = confirm("¿Eliminar elemento seleccionado?");
    if (r == true) {

    } else {

    }
}
</script>
<?php
    require_once("footer.php");
?>
