<?php
if(!empty($_GET))
{
	$valor=$_GET["id"];
}
 ?>
<link rel=stylesheet href="../css/bootstrap.min.css">
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<div class="modal-dialog modal-sm" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 style="color:black;" class="modal-title">Confirmacion Elimininar</h4>
    </div>
  <div class="modal-body">
    <p>¿Desea eliminar la fila de materiales selecionada?</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:window.close();">Cancelar</button>
    <button type="button" class="btn btn-primary" onclick="window.location.href = '../controller/eliminarmaterial.php?id=<?php echo $valor;?>';">Eliminar</button>
  </div>
  </div>
</div>
