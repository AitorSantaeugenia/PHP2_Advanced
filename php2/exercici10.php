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
	<h1 style="text-align:Center"> Exercici#10 PHP2:</h1><br/>

			<?php
			//VERSION 1
				function nombreEmpresa($apellido1, $apellido2, $totalPalabras){
					$lin1 = $apellido1;
					$lin2 = $apellido2;
					$total = $totalPalabras;
					
					$randString = "";
					$randString2 = "";
					$randomFTWSuma = "";
					$charactersLength = strlen($lin1);
					$charactersLength2 = strlen($lin2);
					$vectorNombre=array();
					
					for($i=0;$i<=$totalPalabras;$i++)
					{						
						$randString = substr($lin1, 0, rand(0,$charactersLength));
						$randString2 = substr($lin2, -1*rand(-5, $charactersLength2));
						
						if((rand(0,9))>=5)
						{
							$randString = substr($lin1, 0, rand(0,$charactersLength));
							$randString2 = substr($lin2, -1*rand(-5, $charactersLength2));
							
						}
						else{
							$randString = substr($lin2, 0, rand(5,$charactersLength2));
							$randString2 = substr($lin1, -1*rand(-5, $charactersLength));
							 
							
						}  
						
						$randomFTWSuma=strtoupper($randString.$randString2);
						
						if(!in_array($randomFTWSuma,$vectorNombre ) and strlen($randomFTWSuma)>3)$vectorNombre[] = $randomFTWSuma;
						else $i--;
						
						 
					
					}
					 return $vectorNombre;
					
				}
				
				$i=0;
				foreach( nombreEmpresa("Sabelotodo", "Lacasitos", 25) as $item)
				{
					
					echo $i."- ".$item."<br/>";
					$i++;
					
				}


			?>
					

	</body>
	

</html>