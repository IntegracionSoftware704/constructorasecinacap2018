
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
      <th scope="col">Nombre</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Caracteristica</th>
      <th scope="col">Stock</th>
      <th scope="col">Tipo de cantidad</th>
      <th scope="col">Precio Compra</th>
      <th scope="col">Precio de venta</th>
      <th scope="col">Stock minimo</th>
      <th scope="col">ID Administrador</th>
      <th scope="col">Tipo de Material</th>
      <th scope="col"></th>
      
    </tr> 
  <form id="form"  role="form" method="post" action="../controller/agregarmaterial.php">
   <tr>
      <td><input id="nombre" name="nombre" type="text" maxlength="45"></td>
      <td><input id="proveedor" name="proveedor" type="text" maxlength="45"></td>
      <td><input id="caracteristica" name="caracteristica" type="text" maxlength="45"></td>
      <td><input id="stock" name="stock" type="text" maxlength="11" onkeypress="return justNumbers(event);"></td>
      <td><input id="tipoCant" name="tipoCant" type="text" maxlength="30"></td>
      <td><input id="preciocompra" name="preciocompra" type="text" maxlength="11" onkeypress="return justNumbers(event);"></td>
      <td><input id="precioventa" name="precioventa" type="text" maxlength="11" onkeypress="return justNumbers(event);"></td>
	  <td><input id="stockMin" name="stockMin" type="text" maxlength="11" onkeypress="return justNumbers(event);"></td>
    <td><input readonly="readonly" id="admin" name="admin" type="text" maxlength="11" onkeypress="return justNumbers(event);" value="1"></td>
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
      <td class="text-center"> <button type="submit" id="reg" name="reg" class="btn btn-info btn-xs">Agregar</button></td>
    </tr>  
    </form>

  </tbody>
</table>
</body>
</html>