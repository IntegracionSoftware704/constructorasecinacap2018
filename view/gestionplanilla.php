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
            Tipo de Material
          </h4>
        </div>
        <table class="table table-fixed">
          <thead>
            <tr>
              <th class="col-xs-1">Nombre</th><th class="col-xs-3">Caracteristica</th><th class="col-xs-8">Precio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="col-xs-1">
              <select name="cars">
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="fiat">Fiat</option>
              <option value="audi">Audi</option>
              </select>

            </td>
            <td class="col-xs-3">
                <input type="text" name="caracteristica1" value="">
            </td>
            <td class="col-xs-8">
                <input type="text" name="Precio1" value="">
            </td>
            </tr>
            <tr>
            <td class="col-xs-1">
            <select name="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
            </select>

          </td>
          <td class="col-xs-3">
              <input type="text" name="caracteristica1" value="">
          </td>
          <td class="col-xs-8">
              <input type="text" name="Precio1" value="">
          </td>
          </tr>
          <tr>
          <td class="col-xs-1">
          <select name="cars">
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="fiat">Fiat</option>
          <option value="audi">Audi</option>
          </select>

        </td>
        <td class="col-xs-3">
            <input type="text" name="caracteristica1" value="">
        </td>
        <td class="col-xs-8">
            <input type="text" name="Precio1" value="">
        </td>
        </tr>
        <tr>
        <td class="col-xs-1">
        <select name="cars">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="fiat">Fiat</option>
        <option value="audi">Audi</option>
        </select>

      </td>
      <td class="col-xs-3">
          <input type="text" name="caracteristica1" value="">
      </td>
      <td class="col-xs-8">
          <input type="text" name="Precio1" value="">
      </td>
      </tr>
      <tr>
      <td class="col-xs-1">
      <select name="cars">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
      </select>

    </td>
    <td class="col-xs-3">
        <input type="text" name="caracteristica1" value="">
    </td>
    <td class="col-xs-8">
        <input type="text" name="Precio1" value="">
    </td>
    </tr>
    <tr>
    <td class="col-xs-1">
    <select name="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
    </select>

  </td>
  <td class="col-xs-3">
      <input type="text" name="caracteristica1" value="">
  </td>
  <td class="col-xs-8">
      <input type="text" name="Precio1" value="">
  </td>
  </tr>
  <tr>
  <td class="col-xs-1">
  <select name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
  </select>

</td>
<td class="col-xs-3">
    <input type="text" name="caracteristica1" value="">
</td>
<td class="col-xs-8">
    <input type="text" name="Precio1" value="">
</td>
</tr>
<tr>
<td class="col-xs-1">
<select name="cars">
<option value="volvo">Volvo</option>
<option value="saab">Saab</option>
<option value="fiat">Fiat</option>
<option value="audi">Audi</option>
</select>

</td>
<td class="col-xs-3">
  <input type="text" name="caracteristica1" value="">
</td>
<td class="col-xs-8">
  <input type="text" name="Precio1" value="">
</td>
</tr>
<tr>
<td class="col-xs-1">
<select name="cars">
<option value="volvo">Volvo</option>
<option value="saab">Saab</option>
<option value="fiat">Fiat</option>
<option value="audi">Audi</option>
</select>

</td>
<td class="col-xs-3">
  <input type="text" name="caracteristica1" value="">
</td>
<td class="col-xs-8">
  <input type="text" name="Precio1" value="">
</td>
</tr>
<tr>
<td class="col-xs-1">
<select name="cars">
<option value="volvo">Volvo</option>
<option value="saab">Saab</option>
<option value="fiat">Fiat</option>
<option value="audi">Audi</option>
</select>

</td>
<td class="col-xs-3">
  <input type="text" name="caracteristica1" value="">
</td>
<td class="col-xs-8">
  <input type="text" name="Precio1" value="">
</td>
</tr>
<tr>
<td class="col-xs-1">
<select name="cars">
<option value="volvo">Volvo</option>
<option value="saab">Saab</option>
<option value="fiat">Fiat</option>
<option value="audi">Audi</option>
</select>

</td>
<td class="col-xs-3">
  <input type="text" name="caracteristica1" value="">
</td>
<td class="col-xs-8">
  <input type="text" name="Precio1" value="">
</td>
</tr>
<tr>
<td class="col-xs-1">
<select name="cars">
<option value="volvo">Volvo</option>
<option value="saab">Saab</option>
<option value="fiat">Fiat</option>
<option value="audi">Audi</option>
</select>

</td>
<td class="col-xs-3">
  <input type="text" name="caracteristica1" value="">
</td>
<td class="col-xs-8">
  <input type="text" name="Precio1" value="">
</td>
</tr>

          </tbody>
        </table>
      </div>
      <div class=" gestion row">
      <div class="col-md-9">
      
      </div>
      <div class="col-md-3">
      <label for="male">Costo:</label>
      <input type="text" name="caracteristica1" value="">
      </div>
      </div>

      <div class="botones row">
      <div class="col-md-6">
      
      </div>
      <div class="col-md-4">
      <button type="button" class="btn btn-success">Actualizar</button>
      
      </div>
      <div class="col-md-2">
      <button type="button" class="btn btn-success">Eliminar</button>
      
      </div>

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
