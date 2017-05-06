<?php

	$numeros = array(1,2,3,4,5,6,7,8,9,10);

	for ($i=0; $i < 10; $i++) { 
		
			$par = $numeros[$i] % 2;
			if ($par == 0) {
				print "$numeros[$i] e par \n";
			}else{
				print "$numeros[$i] e impar\n";
			}

		}
		


?>