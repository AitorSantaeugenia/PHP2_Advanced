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
			$arrayNumFloat = [1.3,-2.09,3.6,-4.6,5.6,-6.77,7.6,-8.66,9.55];
			 
			
			function floatToBool($arrayNumFloat)
			{
				$arrayNumBool = array();
			
				foreach($arrayNumFloat as $value)
				{
					if($value<0)
					{
						$arrayNumBool []= 0;
						
					}else if($value==0)
					{
						$arrayNumBool []= 1;
					}
					else{
						$arrayNumBool []= 1;
					}
				}
				return $arrayNumBool;
			}
			
			print_r(floatToBool($arrayNumFloat));
			
			
			
			?>
					

	</body>
	

</html>