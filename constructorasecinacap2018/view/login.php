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
        <h4>INTRANET CORPORATIVA</h4>
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="../controller/verifUsuarios.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" name="passwd" class="form-control" placeholder="Contraseña" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recuerdame
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</div>
<?php
    require_once("footer.php");
?>