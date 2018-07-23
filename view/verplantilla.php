<?php
require_once("header.php");
?>

<h3>Ver Plantilla</h3>
<form method="post" action="../controller/cotizar.php" enctype="multipart/form-data">
    <p><img  class="img-fluid" src="/plantilla/uploads/<?php
require_once("../controller/verplantilla.php");
            $foto= $plantillaCliente['0'];
                echo $foto["foto"];
        ?>" alt=""/>
    </p>
<h3><?php
    require_once("../controller/verplantilla.php");
$nombreplantilla=$plantillaCliente['0'];
 echo $nombreplantilla["nombreplantilla"];
?></h3>
<br>
<div class="row">
    <div class="col-md-3 mb-2">
        <label for="validationCustom03">Tipo de material</label>
        <select class="form-control form-control-lg" name="category" id="validationCustom03" onchange="ChangecatList()" required>


                <option value="<?php
                require_once("../controller/verplantilla.php");

                foreach ($plantillaCliente as $filas) {
                    echo $filas["nombretipodematerial"];
                }?>"><?php
                    require_once("../controller/verplantilla.php");
                    $nombreplantilla=$plantillaCliente['0'];
                    echo $nombreplantilla["nombretipodematerial"];
                    ?></option>

        </select>

        <div class="invalid-feedback">
            Please provide a category.
        </div>
    </div>

</div>
<div class="row">
        <div class="col-md-3 mb-2">
            <label for="validationCustom04">Materiales</label>
            <select class="form-control form-control-lg" id="validationCustom04" name="activity" required>
                <?php
                require_once("../controller/verplantilla.php");
                foreach ($plantillaCliente as $f)
                {
                ?>
                    <option value="<?php echo $f["nombrematerial"]?>"><?php echo $f["nombrematerial"]?></option>
                    <?php
                }
                ?>
            </select>
            <div class="invalid-feedback">
                Please provide an activity.
            </div>
        </div>

    <div class="col-md-3 mb-2">
        <label for="validationCustom04">Materiales</label>
        <select class="form-control form-control-lg" id="validationCustom04" name="activity" required>
            <?php
            require_once("../controller/verplantilla.php");
            foreach ($plantillaCliente as $filas)
            {
                ?>
                <option value="<?php echo $filas["caracteristicamaterial"]?>"><?php echo $filas["caracteristicamaterial"]?></option>
                <?php
            }
            ?>

        </select>

    </div>
    <div class="col-md-3 mb-2">
        <label for="validationCustom04">Materiales</label>
        <select class="form-control form-control-lg" id="validationCustom04" name="activity" required>
            <?php
            require_once("../controller/verplantilla.php");
            foreach ($plantillaCliente as $filas)
            {
                ?>
                <option value="<?php echo $filas["valormaterial"]?>"><?php echo $filas["valormaterial"]?></option>
                <?php
            }
            ?>
        </select>
    </div>

</div>
<div class="row">

    <div class="col-md-3 mb-2">
        <h3>Costo Total: <?php
            require_once("../controller/verplantilla.php");
            $costototal= $plantillaCliente['0'];
            echo $costototal["costototal"];
            ?>
        </h3>
    <span class="input-group-btn">
<button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search"></span> Guardar Cambios</button>
</span>
    </div>

</div>

<div class="row">
<div class="col-md-3 mb-2">
    <span class="input-group-btn">
<button  class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span>Enviar Cotización</button>
</span>
</div>
</div>
</form>

<?php
require_once("footer.php");
?>
