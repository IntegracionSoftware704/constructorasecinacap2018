<?php
 $conexion=new mysqli("localhost:3306", "root", "","newsec");
 $conexion->query("SET NAMES 'utf8'");
$user_id=null;
$sql= "select * from material where id = ".$_GET["id"];
$query = $conexion->query($sql);
$material = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $material=$r;
  break;
}
  }

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script> function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }
        </script>
</head>

<body>
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
      <th scope="col">Tipo de Material</th>
      <th scope="col"></th>
      
    </tr> 

<?php if($material!=null):?>
  <form role="form" method="post" action="../controller/actualizarmaterial.php">
   <tr>
      <td><input readonly="readonly" id="id" name="id" type="text" value="<?php echo $material->id; ?>"  ></td>
      <td><input id="nombre" name="nombre" type="text" value="<?php echo $material->nombre;?>" maxlength="45"></td>
      <td><input id="proveedor" name="proveedor" type="text" value="<?php echo $material->proveedor;?>" maxlength="45"></td>
      <td><input id="caracteristica" name="caracteristica" type="text" value="<?php echo $material->caracteristica;?>" maxlength="45"></td>
      <td><input id="stock" name="stock" type="text" value="<?php echo $material->stock;?>" maxlength="11" onkeypress="return justNumbers(event);"></td>
      <td><input id="tipoCant" name="tipoCant" type="text" value="<?php echo $material->tipodecantidad;?>" maxlength="30"></td>
      <td><input id="preciocompra" name="preciocompra" type="text" value="<?php echo $material->preciocompra;?>" maxlength="11" onkeypress="return justNumbers(event);"></td>
      <td><input id="precioventa" name="precioventa" type="text" value="<?php echo $material->precioventa;?>" maxlength="11" onkeypress="return justNumbers(event);"></td>
	    <td><input id="stockMin" name="stockMin" type="text" value="<?php echo $material->stockminimo;?>" maxlength="11" onkeypress="return justNumbers(event);"></td> 

 
 <td> 

      <select id="id_tipo" name="id_tipo">
      <?php  
         require_once("../controller/consultartipodematerial.php");

    while($dat=$filas->fetch_assoc())
    {
      ?>
      <option id="id_tipo" type="text" value="<?php echo $dat["id"]?>"><?php echo $dat["nombre"]?></option> 
      <?php
    }
    ?>
  
      </select>
 </td>

 
      <td class="text-center"> <button type="submit" id="reg" name="reg" class="btn btn-info btn-xs">Guardar</button></td>

    </tr>  
    </form>
    <?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
  </tbody>
</table>
</body>
</html>