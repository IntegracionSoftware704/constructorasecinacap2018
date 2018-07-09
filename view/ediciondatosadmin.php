<?php
    require_once("header.php");
?>
<div style="background-color: #c0fabe;">
  <div class="container">
    <div class="row">
      <form class="form-horizontal" method="post" action="">
        <fieldset>
<h4>EDICION DATOS</h4>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="correo">Correo electronico</label>
  <div class="col-md-4">
    <input disabled id="correo" name="correo" maxlength="50" type="text" value="<?php echo $_SESSION['email']; ?>" placeholder="Correo" class="form-control input-md">
    <?php 
    require_once("../controller/edicioninfo.php");
    while($dat=$filas->fetch_assoc())
    {
    ?>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="name">Nombre</label>
<div class="col-md-4">
<input id="name" name="name" type="text" value="<?php echo $dat["nombre"]; ?>" maxlength="15" placeholder="Name" class="form-control input-md" required>

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="password">Constraseña</label>
<div class="col-md-4">
<input id="password" name="password" value="<?php echo $dat["contrasena"]; ?>" maxlength="10" type="password" placeholder="Password" class="form-control input-md" required>

</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="confirm">Confirmar constraseña</label>
<div class="col-md-4">
<input id="confirm" name="confirm" value="<?php echo $dat["contrasena"]; ?>" maxlength="10" type="password" placeholder="Confirm" class="form-control input-md" required>
</div>
</div>
<?php
}
?>
<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label" for="reg"></label>
<div class="col-md-4">
  <p style="color:red"><button id="reg" name="reg" class="btn btn-primary">Actualizar</button>
</p>
</div>
</div>
</fieldset>
</form>
  </div>
<?php
    require_once("footer.php");
?>
