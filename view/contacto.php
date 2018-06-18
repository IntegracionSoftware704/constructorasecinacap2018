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
<div class="container">
<div class="row justify-content-left">
  <div class="col-md-6 col-md-offset-1" align="center">
    <img src="../img/CONTACTOS.png " height="150px"><br><br>

           

    <form method="post" action="../controller/contacto.php" enctype="multipart/form-data">
        <input class="form-control" name="name" placeholder="name..."><br>
      <input class="form-control" name="subject" placeholder="Subject..."><br>
      <input class="form-control" name="email" type="email" placeholder="Email..."><br>
      <textarea placeholder="Message..." class="form-control" name="message"></textarea><br>
      <input class="form-control" type="file" name="attachment"><br>
      <input class="btn btn-primary" name="submit" type="submit" value="Send Email">
    </form>
  </div>
</div>
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
