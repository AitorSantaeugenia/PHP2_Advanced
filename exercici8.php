<!DOCTYPE html5>
<html>
    <head>

	</head>
		
	<body>
	<!-- 
		Exercici#8 - PHP2; BOOL/INT
			•  Dado un vector de números decimales te devuelva un vector de boleanos 
			•  Si el número decimal de la posición i es positivo entonces en la posición i del vector de 
			boleanos aparece un valor true. En caso contrario aparece el valor false. 
	-->
	<h1 style="text-align:Center"> Exercici#8 - PHP2: Funcion bool/int</h1><br/>

			<?php
			$arrayNumInt = [1,-2,3,-4,5,-6,7,-8,9];
			//1 0 1 0 1 0 1 0 1
			$arrayNumBool = [];
			
			foreach($arrayNumInt as $value){
				if($value<0){
					array_push($arrayNumBool, False);
					
				}else{
					array_push($arrayNumBool, True);
				}
			}
			
			print_r($arrayNumBool);
			
			/* TESTING WITH ECHO FOR BOOLEAN FALSE
			foreach($arrayNumBool as $valueBool){
				echo $valueBool." ";
			}
			*/
			
			?>
					

	</body>
	

</html>