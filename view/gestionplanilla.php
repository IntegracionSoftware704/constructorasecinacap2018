<?php
    require_once("header.php");
    require_once("../modulos/isLogin.php");
    if(!($estado))
    {
        header("Location: ../index.php");
    }
    if(isset($_GET["exagre"]))
    {
        if($_GET["exagre"] == 1)
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

</ul>
</div><!-- /.nav-collapse -->
</nav>
</div>
</div>

<div class="container">
  <div class="">
  <h4>GESTION DE PLANILLAS</h4>
  <table class="table table-striped custab">

    <tbody>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Foto</th>
        <th scope="col">Nombre</th>
        <th scope="col">Costo referencial</th>
        <th scope="col">Estado</th>
        <th scope="col"> <button type="submit" id="reg" name="reg" class="btn btn-success" style="color:#fff;" onclick="javascript:window.open('agregarplanillas.php','','top=50,left=100,width=700,height=500');void 0">Agregar Planilla</button></th>

      </tr>

      <?php
           require_once("../controller/consultarplanilla.php");

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
                window.location.href = '../controller/eliminarplanilla.php?id=<?php echo $dat["id"];?>';
            }
            else
            {

            }
        }
        </script>
        <td style="vertical-align: middle;"><?php echo $dat["id"]?></td>
        <td class="align-middle"><img src="/constructorasecinacap2018/uploads/<?php echo $dat["foto"]?>" alt="Imagen del primer artículo" width="25%"></td>
        <td style="vertical-align: middle;"><?php echo $dat["nombreplantilla"]?></td>
        <td style="vertical-align: middle;"><?php echo $dat["costototal"]?></td>
        <td style="vertical-align: middle;"><?php echo $dat["estado"]?></td>

        <td class="text-center"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" onclick="javascript:window.open('editarplanilla.php?id=<?php echo $dat["id"];?>','','top=50,left=100,width=900,height=500');void 0" data-target="">Editar</button> <button type="button" class="btn btn-danger btn-xs" onclick="javascript:window.open('confirmeliminarplanilla.php?id=<?php echo $dat["id"];?>','','top=50,left=250,width=400,height=220');void 0">Eliminar</button></td>
      </tr>

       <?php
  	  }
  	  ?>


    </tbody>
  </table>
  <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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

<?php
    require_once("footer.php");
?>
