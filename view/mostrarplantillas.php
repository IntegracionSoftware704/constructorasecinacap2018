 <?php
            require_once("header.php");
            ?>
 <main role="main">
<section id="jumbotron text-center">
    <div class="container">
        <h5 class="section-title h1">Plantillas</h5>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">

                <?php
            require_once("../controller/mostrarplantilla.php");
            foreach ($plantillas as $filas)
            {
                ?>

                                        <p><img style="height: 225px; width: 100%; display: block;" class="card-img-top" src="/plantilla/uploads/<?php echo $filas["foto"]?>"/></p>
                                        <h4 class="card-title"><?php echo $filas["nombreplantilla"]?></h4>
                                        <p class="card-text">$<?php echo $filas["costototal"]?></p>
                                        <a href="verplantilla.php?id=<?php echo $filas["id"]?>"  class="btn btn-primary btn-sm">Agregar</a>



    <?php
}
?>
                </div>
            </div>
        </div>
        </div>
</section>
 </main>
 <?php
 require_once("footer.php");
 ?>