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
    </li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="javascript:window.open('agregarmaterial.php','','top=50,left=100,width=700,height=500');void 0">Agregar Materiales</a></li>
</ul>
</div><!-- /.nav-collapse -->
</nav>
</div>
</div>

<div class="container">
  <div class="">
  <h4>GESTION MATERIALES</h4>
  <table class="table table-striped custab">

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
        <th scope="col">Tipo de material</th>
        <th scope="col"></th>

      </tr>
      <?php
           require_once("../controller/consultarmateriales.php");

  	  while($dat=$filas->fetch_assoc())
  	  {
  		  ?>
      <tr>
        <script>
        function confirmEliminar() {
            var txt;
            var r = confirm("¿Eliminar elemento seleccionado?");
            if (r == true)
            {
                window.location.href = '../controller/eliminarmaterial.php?id=<?php echo $dat["id"];?>';
            }
            else
            {

            }
        }
        </script>
        <td><?php echo $dat["id"]?></td>
        <td><?php echo $dat["nombre"]?></td>
        <td><?php echo $dat["proveedor"]?></td>
        <td><?php echo $dat["caracteristica"]?></td>
        <td><?php echo $dat["stock"]?></td>
        <td><?php echo $dat["tipodecantidad"]?></td>
        <td><?php echo $dat["preciocompra"]?></td>
        <td><?php echo $dat["precioventa"]?></td>
  	  <td><?php echo $dat["stockminimo"]?></td>
      <td><?php echo $dat["nombrematerial"]?></td>
      <td class="text-center"><a class='btn btn-info btn-xs' href="javascript:window.open('editarmaterial.php?id=<?php echo $dat["id"];?>','','top=50,left=100,width=700,height=500');void 0"><span class="glyphicon glyphicon-edit"></span>Editar</a> <a href="javascript:confirmEliminar()" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Eliminar</a></td>
      </tr>

       <?php
  	  }
  	  ?>

    </tbody>
  </table>
  	</div>
</div>
<?php
    require_once("footer.php");
?>
