<?php
    require_once("header.php");
    require_once("../modulos/isLogin.php");
    if(!($estado))
    {
        header("Location: ../index.php");
    }
?>

<div class="container">
	<div class="col-sm-2">
    <nav class="nav-sidebar">
		<ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Cotizaciones</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">Gestion planillas</a></li>
          <li class=""><a href="#tab3" data-toggle="tab">Stet clita</a></li>
		</ul>
	</nav>
		<div style="background-color:#ffffff;"><h2> <br><br><br><br><br><br></h2></div>
</div>
<!-- tab content -->
<div class="tab-content">
<div class="tab-pane active text-style" id="tab1">
  <h2>Cotizaciones</h2>
       <p>
         <?php
           require_once("cotizaciones.php");
           ?>
       </p>
       <hr>
</div>
<div class="tab-pane text-style" id="tab2">
  <h2>Gestion planillas</h2>
    <?php
      require_once("gestionplanilla.php");
     ?>
</div>
<div class="tab-pane text-style" id="tab3">
  <h2>Stet clita</h2>
  <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum
    iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
    facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
    augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,</p>
    <hr>
    <div class="col-xs-6 col-md-3">
      <img src="http://placehold.it/150x150" class="img-rounded pull-right">
  </div>
</div>
</div>


</div>


<?php
    require_once("footer.php");
?>
