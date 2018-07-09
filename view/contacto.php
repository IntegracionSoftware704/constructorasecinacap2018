<!--Envia comantarios de usuarios a un email para consultas-->
<?php
    require_once("header.php");
?>
<div class="container">
<h4>FORMULARIO DE CONTACTO</h4>
<br>
<p>Si tiene alguna consulta, opinion, reclamo o simplemente felicitarnos, puedes ingresar
 tu requerimiento en el siguiente formulario de contacto:</p>
 <br>
<div class="row">
  <div class="col-md-6" style="background-color:#59c355;">
  <br>
  <form method="post" action="../controller/contacto.php" enctype="multipart/form-data">
        <input class="form-control" name="name" placeholder="nombre..."><br>
      <input class="form-control" name="subject" placeholder="asunto..."><br>
      <input class="form-control" name="email" type="email" placeholder="Email..."><br>
      <textarea placeholder="Mensaje..." class="form-control" name="message" style="width: 556px; height: 138px;"></textarea><br>
      <input class="form-control-file" type="file" name="attachment"><br>
      <input class="btn btn-default" name="submit" type="submit" value="Enviar Email">
    </form>
    <br>
  </div>
  <div class="col-md-6">
  <br>
  <p>Direccion: Providencia 5000, Santiago, Chile</p>
  <p>Telefono: +5629854740 - +56287790000</p>
  <p>Horario de atencion: Lunes a Viernes de 10:30 a 20:00 Hrs</p>
  <p>Email: <a href="mailto:constructorasec704@gmail.com">constructorasec704@gmail.com</a></p>
  <div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7694.535005518171!2d-70.6128583031263!3d-33.424523492973385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scl!4v1530935873854" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  </div>
</div>
</div>
<?php
    require_once("footer.php");
?>
