<?php
    require_once("header.php");
    require_once("../modulos/isLogin.php");
    if($estado)
    {
        header("Location: ../index.php");
    }
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
    <input id="correo" name="correo" maxlength="50" type="text" placeholder="Correo" class="form-control input-md" required>

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
<?php
  if(isset($_GET['error']))
  {
    if($_GET['error'] == 1)
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
    if($_GET['error'] == 2)
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
    if($_GET['error'] == 3)
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
<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
     <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 style="color:black">Registro usuario</h4>
 </div>
     <div class="modal-body">
        Las contraseñas no coinciden, verifique
 </div>
     <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-success">Cerrar</a>
 </div>
  </div>
</div>
</div>
<div class="modal fade" id="mostrarmodal2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
     <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 style="color:black">Registro usuario</h4>
 </div>
     <div class="modal-body">
        Formato de correo electronico incorrecto, vuelve a intentarlo
 </div>
     <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-success">Cerrar</a>
 </div>
  </div>
</div>
</div>
<div class="modal fade" id="mostrarmodal3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
     <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 style="color:black">Registro usuario</h4>
 </div>
     <div class="modal-body">
        Correo electronico ya existe!, recuperar constraseña???
 </div>
     <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-success">Cerrar</a>
 </div>
  </div>
</div>
</div>
  </div>
  </div>
<?php
    require_once("footer.php");
?>
