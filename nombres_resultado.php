<!DOCTYPE html5>
<html>
    <head>

	</head>
		
	<body>
	<!-- 
		Exercici#4 - PHP2; Formulario de 4 campos
			4. Crea un formulario con 4 campos para introducir 4 nombres llamado nombres.php 
			•  Al pulsar enviar se envía a los nombres a un archivo llamado nombres_resultado.php 
			•  Se deben mostrar sólo los nombres tales que acaben en “o” como resultado. 
			•  Debe aparecer un mensaje diciendo que hay X nombre que no acaban en “o”. 
			
	-->
	<h1 style="text-align:Center"> Exercici#4 - PHP2: Formulario de 4 campos</h1><br/>
							
						
							<?php
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
								
								
								
								
							
							?>
							

	</body>
	

</html>