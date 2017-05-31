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
							$vectorNUM_i = array(true, false, true, true, false, false, false, true, true, false, true);
							//6 true
							print_r($vectorNUM);
							echo "</br>";
							echo "</br>";
							
							echo "Valores true dentro del array hay:"."<br/>";
							
							function contarBooleanos($vectorNUM)
							{
								$contador = 0;
								foreach($vectorNUM as $valor)
								{
										if(($valor == true))
										{
												$contador++;
										}
								}
								return $contador;
							}
							
						echo contarBooleanos($vectorNUM_i);
							
							?>
					

	</body>
	

</html>