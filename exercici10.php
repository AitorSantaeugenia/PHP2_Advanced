<!DOCTYPE html5>
<html>
    <head>

	</head>
		
	<body>
	<!-- 
		Exercici#10 - PHP2; MARIA SABELOTODO i PACO LACASITOS!!!!
			Tenemos una lista de 4 equipos de futbol y cada equipo de fútbol tiene una lista de los 
			equipos contra los que no quiere jugar. 
	•  Representa la lista de equipos como un vector 
	•  Representa la lista de equipos contra los que no quieren jugar como un vector de 
	boleanos. 
	•  Crea emparejamientos válidos para el siguiente partido. Puede pasar que un equipo de 
	quede sin jugar. 
	-->
	<h1 style="text-align:Center"> Exercici#10 PHP2: MARIA SABELOTODO i PACO LACASITOS, era la revés, pero daiguá!!!!</h1><br/>

			<?php
			//VERSION 1
				/*function nombreEmpresa($apellido1, $apellido2, $totalPalabras){
					/*$lin1 = $apellido1;
					$lin2 = $apellido2;
					$total = $totalPalabras;
					$tempMezcla1 = array();
					$tempMezcla2 = array();
					$arrayPalabros = array();
					
					$tempMezcla1 = str_split($lin1);
					$tempMezcla2 = str_split($lin2);
					
					for($i=0;$i<$total;$i++){
						shuffle($tempMezcla1);
						shuffle($tempMezcla2);
						$test = array_merge($tempMezcla1, $tempMezcla2);
					
						shuffle($test);
					//$test = implode($arrayPalabros);
					
					//print_r($test);
					$test2 = implode(",", $test);
					
					print_r($test2);
					}
				}*/
				
				//VERSION 2
				function nombreEmpresa($apellido1, $apellido2, $totalPalabras) { 
					$length = 5;
					
					for($i=0;$i<$totalPalabras;$i++){
						$mezcla1 = substr(str_shuffle($apellido1), 0, $length); 
						$mezcla2 = substr(str_shuffle($apellido2), 0, $length); 
						echo $mezcla1.$mezcla2."<br/>";
					}
				} 
				
				echo nombreEmpresa("Sabelotodo", "Lacasitos", 25);


			?>
					

	</body>
	

</html>