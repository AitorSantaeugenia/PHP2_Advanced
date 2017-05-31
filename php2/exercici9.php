<!DOCTYPE html5>
<html>
    <head>

	</head>
		
	<body>
	<!-- 
		Exercici#9 - PHP2; FOOTBALL TEAM!!!!
			Tenemos una lista de 4 equipos de futbol y cada equipo de fútbol tiene una lista de los 
			equipos contra los que no quiere jugar. 
	•  Representa la lista de equipos como un vector 
	•  Representa la lista de equipos contra los que no quieren jugar como un vector de 
	boleanos. 
	•  Crea emparejamientos válidos para el siguiente partido. Puede pasar que un equipo de 
	quede sin jugar. 
	-->
	<h1 style="text-align:Center"> Exercici#9 - PHP2: FOOTBALL TEAM!!!!</h1><br/>

			<?php
				$llistaEquips= array("madrid", "atleti", "liverpool", "osasuna");
				

				$matriu [0]=array(0,1,1,0);
				$matriu [1]=array(1,0,0,1);
				$matriu [2]=array(1,1,0,0);
				$matriu [3]=array(1,1,0,0);

				if ($matriu[0][1]==$matriu[1][0] and $matriu[0][1]==1){
					echo "Partit MAD-ATL"."<br>";}
					
				if ($matriu[0][2]==$matriu[2][0] and $matriu[0][2]==1){
					echo "Partit MAD-LIV"."<br>";}
					
				if ($matriu[0][3]==$matriu[3][0] and $matriu[0][3]==1){
					echo "Partit MAD-OSA"."<br>";}
					
				if ($matriu[1][2]==$matriu[2][1] and $matriu[1][2]==1){
					echo "Partit ATL-LIV"."<br>";}
					
				if ($matriu[1][3]==$matriu[3][1] and $matriu[1][3]==1){
					echo "Partit ATL-OSA"."<br>";}
					
				if ($matriu[2][3]==$matriu[3][2] and $matriu[2][3]==1){
					echo "Partit LIV-OSA"."<br>";}
							
				
				
					


			?>
					

	</body>
	

</html>