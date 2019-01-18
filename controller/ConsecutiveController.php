<?php 

include 'model/Values.php';

/**
* El controlador muestra el resultado a la vista  
*/
class ConsecutiveController
{
	public function index($values)
	{		
		$result =  Values::isStraight($values);

		switch ($result) {	   
	    case 1:
	        echo "<div class='alert alert-danger' role='alert'>
	        		No es una escalera
	        	  </div>";
	        break;
        case 2:        	
        	echo "<div class='alert alert-warning' role='alert'>
	        		Seleccione más de <b>3</b> cartas
	        	  </div>";
        	break;
        case 3:        	
        	echo "<div class='alert alert-warning' role='alert'>
	        		Seleccione menos de <b>7</b> cartas
	        	  </div>";
        	break;
	    default:	        
	        echo "<div class='alert alert-primary' role='alert'>
	        		Tienes una escalera
	        	  </div>";
	        break;
		}
		
	}
	 
}	