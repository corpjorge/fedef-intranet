<?php

include("layouts/head.php");
  
require_once 'controller/ConsecutiveController.php';

//Las imágenes de las cartas
$cartas = array(1,2,3,4,5,6,7,8,9);

?>
 
<section class="jumbotron text-center">
	<div class="container">
	  <h1 class="jumbotron-heading">Ejercicio</h1>          
	</div>
</section> 

<div class="container">
	<h4>Seleccione las cartas deseadas</h4>
</div>		
<div class="album py-5 bg-light">
    <div class="container">
    	<div class="row">
    		<form method="GET" >
    			<?php foreach ($cartas as $carta) { ?> 
					<label class="checkeable">
					  <input type="checkbox" name="cartas[]" value="<?php echo $carta ?>" />
					  <img src="resources/img/<?php echo $carta ?>.jpg" class="img-thumbnail" style="margin: 5px;"/>
					</label>
				<?php } ?> 
				<div class="col-auto">
			      <button type="submit" class="btn btn-primary mb-2">Validar</button>
			    </div>
			</form>
		</div>
	</div>


	<div class="container">
	  <h1 class="jumbotron-heading">
	  	<?php
			if (isset($_GET['cartas'])) {
				$poker = new ConsecutiveController();
				$poker->index($_GET['cartas']);
			}
		?>
	  </h1>          
	</div>


</div>  





 