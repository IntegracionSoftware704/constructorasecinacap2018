<?php
    require_once("header.php");
?>
<div class="container">



<div class="row">
<br>
<div class="Titulo">
<h4>
Contacto
</h4>
<br>
<div class="col-md-1">
 
</div>
<div class="col-md-11">
 <p>Si desea enviarnos una consulta, porfavor complete el siguiente formulario </p>
</div>
</div>
</div>

<section class="main row">
<article class="col-md-8">
<div style="background-color: #c0fabe;">
  <div class="container">
    <div class="row">
      <form class="form-horizontal" method="post" action="../controller/envioCorreo.php">
        <fieldset>
		<label class="col-md-8" for="titulo"><h4>Formulario de Contacto</h4></label>
		<br>
		<br>
		<br>
		<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="email">Correo electronico</label>
  <div class="col-md-4">
    <input id="email" name="email" type="text" placeholder="Correo" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-2 control-label" for="nombre">Nombres</label>
<div class="col-md-4">
<input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-2 control-label" for="apellido">Apellidos</label>
<div class="col-md-4">
<input id="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control input-md">

</div>
</div>


<div class="form-group">
<label class="col-md-2 control-label" for="telefono">Telefono</label>
<div class="col-md-4">
<input id="telefono" name="telefono" type="text" placeholder="telefono" class="form-control input-md">

</div>
</div>

<div class="form-group">
<label class="col-md-2 control-label" for="asunto">Tema del mensaje</label>
<div class="col-md-4">
<input id="asunto" name="asunto" type="text" placeholder="tema del mensaje" class="form-control input-md">

</div>
</div>

<div class="form-group">
<label class="col-md-2 control-label" for="mensaje">Escriba su mensaje</label>
<div class="col-md-4">
<textarea cols="40" rows="6" id="comentarios" name="comentarios" placeholder="Escriba su mensaje" class="form-control input-md">
</textarea>
</div>
</div>




<!-- Button -->
<div class="form-group">
<label class="col-md-2 control-label" for="botones"></label>
<div class="col-md-2">
  <button id="envio" name="envio" class="btn btn-success">Enviar correo</button>
</div>
<div class="col-md-2">
  <button id="borrar" name="borrar" class="btn btn-success">Borrar todo</button>
</div>
</div>


</fieldset>
</form>
  </div>
		


</article>
<aside class="col-md-4">
<label class="col-md-2" for="telefono"><h4>Informaciones</h4></label>
<br>
<br>
<br>
<br>

<p>Contacto@constructorasec.cl
</p>
<br>
<br>
<p>
63 2232323 / 63 2232323
</p>
<p>
+569 98765432
</p>
<br>
<br>
<p>
Av. Vitacura 10.151, Vitacura, Santiago
</p>

</aside>

</section>

</div>

</div>







</div>
<br><br>
<?php
    require_once("footer.php");
?>
