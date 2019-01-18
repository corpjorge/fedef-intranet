<?php  

/**
* El modelo procesa los datos
*/
class Values
{
	public function isStraight($values)
	{

		$count = count($values);		

		if ($count < 3) {
			$result = 2;
			return $result;
		} 
		if ($count > 7) {
			$result = 3;
			return $result;			 
		} 

		sort($values);
		$limit = $count-1;
		
	 	$j=0;
		for ($i=0; $i < $count; $i++) {		 
			$j=$i+1;			
		 
			if ($limit != $i) {				 
			 	 
				$resultado =  $values[$j]-$values[$i];			
			 	 
			 	if ($resultado != 1) {

			 		$result = 1;
			 		return $result;
			 	}
			}
		}
	}

}	