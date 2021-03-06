<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contructora SEC</title>
    <link rel=stylesheet href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/gestionplanilla.css">
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="stylesheet" href="../css/planillasmuestra.css">

    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <link href="../css/siderbar.css" rel="stylesheet" type="text/css">

    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>


    <script src="../js/lanzador.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/carousel.js"></script>
    <script src="../js/login.js"></script>
    <script src="../js/solonumeros.js"></script>
    <script src="../js/contacto.js"></script>
    <script src="../js/planillasmuestra.js"></script>

</head>

<body>
    <header>
        <div class="container">
            <h1>Constructora SEC</h1>
        </div>
    </header>
    <!-----------------------MENU PAGINA-------------------------->
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
		<a class="navbar-brand" href="index.php">Constructora SEC</a>
	</div>

	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav">
				<li><a href="laempresa.php">La Empresa</a></li>
				<li><a href="contacto.php">Contactanos</a>
        <li><a href="planillasmuestra.php">Nuestros Proyectos</a>
				</li>
		</ul>
        <?php
            require_once("../modulos/isLogin.php");
            if($estado)
            {
                ?>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="panelcontrol.php">Panel de control</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bienvenido <?php echo $_SESSION['nom']; ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#"><strong>Rol: <?php echo $_SESSION['rol']; ?></strong></a></li>
                    <li><a href="<?php if($_SESSION['rol']=="administrador"){echo "ediciondatosadmin.php";}else{echo "ediciondatos.php";} ?>">Mis datos</a></li>
                    <li><a href="../modulos/logout.php">Cerrar Sesion</a></li>
                  </ul>
                </li>
                </ul>
                <?php
            }
            else
            {
                ?>
                <ul class="nav navbar-nav navbar-right">
                   <li><a href="registro.php">Registrate</a></li>
                    <li><a href="login.php">Iniciar sesion</a></li>
                </ul>
                <?php
            }
        ?>
	</div><!-- /.nav-collapse -->
  </nav>
</div>
    </div>
    <!------------------------------------------------------------>
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <a href="#"><img src="../img/imagen1.jpg" /></a>
          <div class="carousel-caption">
            <h3>Proyectos sociales</h3>
            <p>Comprometidos con los proyectos habitaciones impulsados por el gobierno</p>
          </div>
        </div>
        <div class="item">
          <a href="#"><img src="../img/imagen2.jpg" /></a>
          <div class="carousel-caption">
            <h3>Nos importa el ambiente</h3>
            <p>Marcamos una diferencia en el ambito ambiental de nuestro pais</p>
          </div>
        </div>
        <div class="item">
          <a href="#"><img src="../img/imagen3.jpg" /></a>
          <div class="carousel-caption">
            <h3>Vanguardistas</h3>
            <p>Construcciones modernas y bajo pedido de nuestros clientes y empresas</p>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-example" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
