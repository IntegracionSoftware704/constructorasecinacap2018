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
          <li class="active"><a href="#tab1" data-toggle="tab">Lorem ipsum</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">Dolor asit amet</a></li>
          <li class=""><a href="#tab3" data-toggle="tab">Stet clita</a></li>                               
		</ul>
	</nav>
		<div><h2 class="add"> <br><br><br><br><br><br>                </h2></div>
</div>
<!-- tab content -->
<div class="tab-content">
<div class="tab-pane active text-style" id="tab1">
  <h2>Lorem ipsum</h2>
       <p>
         <?php
           require_once("cotizaciones.php");
           ?>
       </p>
       <hr>
      <img src="http://placehold.it/350x250" class="img-rounded pull-right">   
</div>
<div class="tab-pane text-style" id="tab2">
  <h2>Dolor asit amet</h2>
   <p>Dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt 
    ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
    dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore 
    et dolore magna aliquyam erat, sed diam voluptua.</p>
    <hr>
          <img src="http://placehold.it/150x90" class="img-rounded pull-left">
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