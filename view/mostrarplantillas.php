
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/plantillas.css">
<title>Pag 1</title>
</head>
<body>

<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Plantillas</h5>

        <div class="row">
            <?php
            require_once("../controller/mostrarplantilla.php");

            while($dat=$filas->fetch_assoc())
            {
                ?>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="/plantilla/uploads/<?php echo $dat["foto"]?>"alt="card image"/></p>
                                        <h4 class="card-title"><?php echo $dat["nombreplantilla"]?></h4>
                                        <p class="card-text">$<?php echo $dat["costototal"]?></p>
                                        <a href="#" class="btn btn-primary btn-sm">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title"><?php echo $dat["nombreplantilla"]?></h4>
                                        <a href="verplantilla.php"><img  class=" img-fluid" src="/plantilla/uploads/<?php echo $dat["foto"]?>"alt="card image"/></a>
                                        <a href="#" class="btn btn-sm">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php
}
?>

        </div>
    </div>
</section>
</body>


</html>
