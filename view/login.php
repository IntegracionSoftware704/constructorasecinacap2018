<?php
    require_once("header.php");
    require_once("../modulos/isLogin.php");
    if($estado)
    {
        header("Location: ../index.php");
        exit;
    }
    if(isset($_GET['registro']))
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
?>
<div style="background-color: #c0fabe;">
    <div class="container">
        <h4>INGRESO INTRANET</h4>
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="../controller/verifUsuarios.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="usuario" class="form-control" placeholder="Correo electronico" required autofocus>
                <input type="password" name="passwd" class="form-control" placeholder="Contraseña" required>
                <?php
                  if(isset($_GET['error']))
                  {
                      ?>
                      <p style="color:red;">Usuario y/o constraseña erroneo</p>
                      <?php
                  }
                  else
                  {
                      ?>
                      <br>
                      <?php
                  }
                ?>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</div>
<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
     <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 style="color:black">Registro usuario</h4>
 </div>
     <div class="modal-body">
        El registro se realizo correctamente, inicia sesion.
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
