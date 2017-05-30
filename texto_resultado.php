<!DOCTYPE html5>
<html>
    <head>

	</head>
		
	<body>
	<!-- 
		Exercici#5 - PHP2; TEXTAREA
			•  Crea un textarea donde escribir texto en un archivollamado texto_inicial.php 
			•  Crea un texto_resultado.php. En este archivo aparece una lista de palabras con el 
			número de apariciones de cada palabra.  
			
	-->
	<h1 style="text-align:Center"> Exercici#5 - PHP2: TEXTAREA texto_resultado.php</h1><br/>
							<?php
							$var_value = $_POST['cadena'];
							$textoUeeee = (explode(" ",$var_value));
							
							//$longArray = count((array(explode(" ",$var_value))));
							echo "Array a mirar:"."<br/>";
							print_r($textoUeeee);
							echo "<br/>";
							echo "<br/>";
							echo "Array con repeticiones:"."<br/>";
							print_r(array_count_values($textoUeeee));
							
							
							
							
							
							
							
							/*
							//Just for testing maaaaaaaaaate
								//Using GET
								$var_value = $_POST['nombre'];

								//Using POST
								$var_value2 = $_POST['nombre2'];

								//Using GET, POST or COOKIE.
								$var_value3 = $_REQUEST['nombre3'];
								
								//Using GET
								$var_value4 = $_POST['nombre4'];
								
								//This sheet is working
								$arraydeValues = array($var_value, $var_value2, $var_value3, $var_value4);
								echo "La cadena de texto es: " . "<br/>";
								print_r($arraydeValues);
								echo "<br/>"."<br/>";
								
								$contador = 0;
								
								foreach($arraydeValues as $value){
									//Tratamos mayus and minus
									if(((substr($value, -1)) == "o") or ((substr($value, -1)) == "O") ){
										echo $value."<br/>";
										$contador++;
									}
								}
								
								//Pintamos las que hay en el contador
								echo "Hay $contador palabras acabadas en o";
								*/
							?>

					

	</body>
	

</html>