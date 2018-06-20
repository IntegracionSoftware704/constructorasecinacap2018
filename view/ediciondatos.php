<?php
    require_once("header.php");
?>
<div style="background-color: #c0fabe;">
  <div class="container">
    <div class="row">
      <form class="form-horizontal" method="post" action="../controller/agregarUsuario.php">
        <fieldset>
<h4>REGISTRO USUARIO</h4>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="correo">Correo electronico</label>
  <div class="col-md-4">
    <input disabled id="correo" name="correo" maxlength="50" type="text" placeholder="Correo" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="name">Nombres</label>
<div class="col-md-4">
<input id="name" name="name" type="text" maxlength="15" placeholder="Name" class="form-control input-md" required>

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="apellido">Apellidos</label>
<div class="col-md-4">
<input id="apellido" name="apellido" maxlength="25" type="text" placeholder="Apellido" class="form-control input-md" required>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label" for="password">Constraseña</label>
<div class="col-md-4">
<input id="password" name="password" maxlength="10" type="password" placeholder="Password" class="form-control input-md" required>

</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="confirm">Confirmar constraseña</label>
<div class="col-md-4">
<input id="confirm" name="confirm" maxlength="10" type="password" placeholder="Confirm" class="form-control input-md" required>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label" for="telefono">Telefono</label>
<div class="col-md-4">
<input id="telefono" name="telefono" maxlength="9" type="text" placeholder="Telefono" onkeypress="return controltag(event)" class="form-control input-md" required>
</div>
</div>
<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label" for="reg"></label>
<div class="col-md-4">
  <p style="color:red"><button id="reg" name="reg" class="btn btn-primary">Register</button>
</p>
</div>
</div>
</fieldset>
</form>
  </div>
<?php
    require_once("footer.php");
?>
