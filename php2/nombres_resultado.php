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
							
								$contador = 0;
								
								foreach($_POST as $key=>$value)
								{
									//Tratamos mayus and minus
									if(substr($key,0,6)=='nombre' and ((substr($value, -1)) == "o") or ((substr($value, -1)) == "O") ){
										echo $value."<br/>";
										$contador++;
									}
								}
								
								//Pintamos las que hay en el contador
								echo "Hay $contador palabras acabadas en o";
								
								
							
							?>
							

	</body>
	

</html>