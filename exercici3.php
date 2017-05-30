<!DOCTYPE html5>
<html>
    <head>

	</head>
		
	<body>
	<!-- 
		Exercici#3 - PHP2; BOOLEAN NUMBER
			Dado un array de boleanos 
			Cuente cuantos valores ciertos hay. 
			
	-->
	<h1 style="text-align:Center"> Exercici#3 - PHP2: BOOLEAN ARRAY</h1><br/>
										
							<?php
							$vectorNUM = array(true, false, true, true, false, false, false, true, true, false, true);
							//6 true
							echo "Si es 1 es true, si no sale nada o 0 es false, ¡al loro! que no estamos tan mal"."<br/>";
							print_r($vectorNUM);
							echo "</br>";
							echo "</br>";
							
							echo "Valores true dentro del array hay:"."<br/>";
							
							$contador = 0;
							foreach($vectorNUM as $valor){
									if(($valor == true)){
											$contador++;
									}
							}
							
							echo $contador;
							
							?>
					

	</body>
	

</html>