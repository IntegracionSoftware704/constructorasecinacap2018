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
  <br>
  
    <table class="table table-condensed">
    <thead>
    <div class="plantilla">
    <div class="row">
      <div class="col-md-3" style="background:#46d140;">
        <a href="http://localhost/constructorasecinacap2018/view/gestionplanilla.php?id=1"><img src="../img/plani1.jpg" class="img-thumbnail" alt="Cinque Terre" width="300"></a>
        <h5>Planilla 1</h5>
        <h5><strong>Costo total: $5.000.000<strong></h5>
      </div>

      <div class="row">
      <div class="col-md-1" style="background:#1cb715;">
      <a class='btn btn-succes' href=http://localhost/constructorasecinacap2018/view/panelcontrol.php>
      <span class="glyphicon glyphicon-edit">
          </span>Volver</a>
           
      </div>
      
      </div>
      <br>
      <br>
      
      <tr>
            <th>ID</th>
            <th>Tipo de Material</th>
            <th>Nombre</th>
            <th>Caracteristica</th>
            <th>Precio</th>
            <th>Dato 6</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
            <tr>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td class="text-center">
                    <a class='btn btn-info btn-xs' href="javascript:window.open('agregarplanillas.php','','top=50,left=100,width=700,height=500');void 0">
                        <span class="glyphicon glyphicon-edit">
                            </span>Editar</a>
                             <a href="javascript:confirmEliminar()" class="btn btn-danger btn-xs">
                                 <span class="glyphicon glyphicon-remove">
                                     </span>Eliminar</a>
                                    </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Products</td>
                <td>Main Products</td>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="javascript:window.open('agregarplanillas.php','','top=50,left=100,width=700,height=500');void 0"><span class="glyphicon glyphicon-edit"></span>Editar</a> <a href="javascript:confirmEliminar()" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Eliminar</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Blogs</td>
                <td>Parent Blogs</td>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="javascript:window.open('agregarplanillas.php','','top=50,left=100,width=700,height=500');void 0"><span class="glyphicon glyphicon-edit"></span>Editar</a> <a href="javascript:confirmEliminar()" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Eliminar</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Blogs</td>
                <td>Parent Blogs</td>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="javascript:window.open('agregarplanillas.php','','top=50,left=100,width=700,height=500');void 0"><span class="glyphicon glyphicon-edit"></span>Editar</a> <a href="javascript:confirmEliminar()" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Eliminar</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Blogs</td>
                <td>Parent Blogs</td>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="javascript:window.open('agregarplanillas.php','','top=50,left=100,width=700,height=500');void 0"><span class="glyphicon glyphicon-edit"></span>Editar</a> <a href="javascript:confirmEliminar()" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Eliminar</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Blogs</td>
                <td>Parent Blogs</td>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="javascript:window.open('agregarplanillas.php','','top=50,left=100,width=700,height=500');void 0"><span class="glyphicon glyphicon-edit"></span>Editar</a> <a href="javascript:confirmEliminar()" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Eliminar</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Blogs</td>
                <td>Parent Blogs</td>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="javascript:window.open('agregarplanillas.php','','top=50,left=100,width=700,height=500');void 0"><span class="glyphicon glyphicon-edit"></span>Editar</a> <a href="javascript:confirmEliminar()" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Eliminar</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Blogs</td>
                <td>Parent Blogs</td>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="javascript:window.open('agregarplanillas.php','','top=50,left=100,width=700,height=500');void 0"><span class="glyphicon glyphicon-edit"></span>Editar</a> <a href="javascript:confirmEliminar()" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Eliminar</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Blogs</td>
                <td>Parent Blogs</td>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="javascript:window.open('agregarplanillas.php','','top=50,left=100,width=700,height=500');void 0"><span class="glyphicon glyphicon-edit"></span>Editar</a> <a href="javascript:confirmEliminar()" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Eliminar</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Blogs</td>
                <td>Parent Blogs</td>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="javascript:window.open('agregarplanillas.php','','top=50,left=100,width=700,height=500');void 0"><span class="glyphicon glyphicon-edit"></span>Editar</a> <a href="javascript:confirmEliminar()" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Eliminar</a></td>
            </tr>
	
      


      
    </table>
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
