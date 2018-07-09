<?php
    require_once("header.php");
    require_once("../modulos/isLogin.php");
    if(!($estado))
    {
        header("Location: ../index.php");
    }
    if(isset($_GET["exelim"]))
    {
        if($_GET["exelim"] == 1)
        {
            ?>
            <script>
           $(document).ready(function()
           {
              $("#mostrarmodal").modal("show");
           });
           </script>
            <?php
        }
    }
    if(isset($_GET["exedit"]))
    {
        if($_GET["exedit"] == 1)
        {
            ?>
            <script>
           $(document).ready(function()
           {
              $("#mostrarmodal2").modal("show");
           });
           </script>
            <?php
        }
    }
    if(isset($_GET["exagre"]))
    {
        if($_GET["exagre"] == 1)
        {
            ?>
            <script>
           $(document).ready(function()
           {
              $("#mostrarmodal3").modal("show");
           });
           </script>
            <?php
        }
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
<li><a href="javascript:window.open('agregarmaterial.php','','top=50,left=100,width=900,height=500');void 0">Agregar Materiales</a></li>
<li><a href="javascript:window.open('agregartipomaterial.php','','top=50,left=100,width=900,height=500');void 0">Agregar tipo material</a></li>
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
      <td class="text-center"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" onclick="javascript:window.open('editarmaterial.php?id=<?php echo $dat["id"];?>','','top=50,left=100,width=900,height=500');void 0" data-target="">Editar</button> <button type="button" class="btn btn-danger btn-xs" onclick="javascript:window.open('confirmEliminar.php?id=<?php echo $dat["id"];?>','','top=50,left=250,width=400,height=220');void 0">Eliminar</button></td>
      </tr>
       <?php
  	  }
  	  ?>
    </tbody>
  </table>
  	</div>
    <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 style="color:black">Confirmacion eliminar</h4>
     </div>
         <div class="modal-body">
            Se elimino el elemento correctamente!
     </div>
         <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-success">Cerrar</a>
     </div>
      </div>
   </div>
</div>
<!------------------------------------>
<div class="modal fade" id="mostrarmodal2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
     <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 style="color:black">Confirmacion editar</h4>
 </div>
     <div class="modal-body">
        Se edito el elemento correctamente!
 </div>
     <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-success">Cerrar</a>
 </div>
  </div>
</div>
</div>
<!------------------------------------>
<div class="modal fade" id="mostrarmodal3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
     <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 style="color:black">Confirmacion agregar</h4>
 </div>
     <div class="modal-body">
        Se agrego el elemento correctamente!
 </div>
     <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-success">Cerrar</a>
 </div>
  </div>
</div>
</div>
</div>
<?php
    require_once("footer.php");
?>
