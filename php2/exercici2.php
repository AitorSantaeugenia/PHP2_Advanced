<!DOCTYPE html5>
<html>
    <head>

	</head>
		
	<body>
	<!-- 
		Exercici#2 - PHP2; FLOATS EVERYWHERE
			Crea un vector de 15 números decimales 
			Muestra por pantalla sólo aquellos que multiplicados por 100 sean mayores que 500.
			
	-->
	<h1 style="text-align:Center"> Exercici#2 - PHP2: FLOATS EVERYWHERE</h1><br/>
										
							<?php
							$vectorNUM = array(1.3, 1.5, 4.3, 5.5, 6.6, 8.8, 1.9, 7.11, 11.7, 1.2, 2.3, 2.7, 1.33, 2.55, 3.1);
							print_r($vectorNUM);
							echo "</br>";
							echo "</br>";
							
							echo "Numeros que multiplicados * 100 son mayores que 500:"."<br/>";
							
							
							foreach($vectorNUM as $valor)
							{
									if(($valor*100)>500)
									{
											echo $valor."<br/>";
									}
							}
							
							?>
					

	</body>
	

</html>