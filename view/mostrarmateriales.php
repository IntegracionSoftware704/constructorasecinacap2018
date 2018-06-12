
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contructora SEC</title>
 <link rel=stylesheet href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>

<div class="row col-md-10 col-md-offset-1 custyle">
<div class="container-fluid">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed massa vestibulum, sollicitudin augue vel, finibus mi. Nullam malesuada hendrerit lectus, malesuada laoreet justo efficitur egestas. Morbi arcu massa, venenatis non felis posuere, imperdiet lobortis justo. Curabitur lacus massa, dapibus quis commodo vitae, ullamcorper et nisi. Aliquam in felis sodales, fermentum lacus sit amet, gravida ipsum. Nunc tempor consectetur tortor. Suspendisse semper non dui sed auctor. Pellentesque nec euismod dui, quis hendrerit enim. Nullam dolor velit, placerat eleifend magna et, pretium mattis ex.

 Aliquam rhoncus lectus in interdum commodo. Pellentesque dignissim libero eu lorem tincidunt, vel faucibus nibh dignissim. Aliquam lacinia sollicitudin pulvinar. Aenean velit arcu, finibus at elit in, mollis suscipit leo. Duis a urna vel tellus fermentum placerat. Phasellus sagittis quam pretium, malesuada velit vitae, consectetur est. In ligula ipsum, consequat non velit in, tempus mollis libero.</p>
</div>


<a href="./agregarmaterial.php"><button id="reg" name="reg" class="btn btn-info btn-xs">Nuevo Material</button></a>

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
    <td></td>
		<td class="text-center"> <a href="editarmaterial.php?id=<?php echo $dat["id"];?>"><button id="reg" name="reg" class="btn btn-info btn-xs">Editar</button>
  		</a><a href="../controlador/eliminarmaterial.php?id=<?php echo $dat["id"];?>"> <button id="reg" name="reg" class="btn btn-danger btn-xs">Eliminar</button> </td>
    </tr>
    
     <?php
	  }
	  ?>
    
  </tbody>
</table>
	</div>

</body>
</html>
