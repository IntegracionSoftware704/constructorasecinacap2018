<?php
require_once("header.php");
?>
<div class="container">
  <div class="row">
    <h4>CONTACTO</h4>
    <div>Si desea enviarnos una consulta, porfavor complete el siguiente formulario:</div>
    <div class="col-md-6">
      <div class="form-area">
        <form method="post" action="">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Formulario de contacto</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Nombre Apellido">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" onkeypress="return controltag(event)" id="mobile" name="mobile" placeholder="Telefono - Celular">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto">
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Mensaje" maxlength="300" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Has llegado al limite de caracteres</p></span>
                    </div>

        <button id="submit" name="submit" class="btn btn-primary pull-right" onclick="javascript:alert('Se necesita de un servidor SMTP para poder enviar el formulario de contacto, sorry :( \n\nDanilo');">Enviar</button>
        </form>
    </div>
    </div>
    <div class="col-md-6">
        <h4>Informaciones</h4>
        <div><a href="mailto:contacto@constructorasec.com">contacto@constructorasec.com</a></div>
        <div>Telefono: +63 2232323 / +56 2232323</div>
        <div>Celular: +569 85698745</div>
        <div>Direccion: Av. Vitacura 10151, Vitacura, Santiago</div>
        <div><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6960.804571331352!2d-73.2102507822143!3d-39.80538485966414!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scl!4v1528431854334" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    </div>
  </div>
</div>
<br><br>
<?php
    require_once("footer.php");
?>
