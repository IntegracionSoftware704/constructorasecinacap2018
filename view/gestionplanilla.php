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
        <th scope="col"> <button type="submit" id="reg" name="reg" class="btn btn-success"><a style="color:#fff;" href="javascript:window.open('agregarplanillas.php','','top=50,left=100,width=700,height=500');void 0">Agregar Planilla</a></button></th>

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
                window.location.href = '../controller/eliminarmaterial.php?id=<?php echo $dat["id"];?>';
            }
            else
            {

            }
        }
        </script>
        <td><?php echo $dat["id"]?></td>
        <td><img src="/constructorasecinacap2018/uploads/<?php echo $dat["foto"]?>" alt="Imagen del primer artículo" width="25%"></td>
        <td><?php echo $dat["nombreplantilla"]?></td>
        <td><?php echo $dat["costototal"]?></td>
        
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
