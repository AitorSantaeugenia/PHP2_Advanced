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
				$arrayEquipos = array("CHE", "FCB", "R.M", "BAY");
				//ARRAY RM
						//FCB  BAYERN
				$arrayMadrid = array(False, True, False, True);
				$equipLocal = "R.M";
				//ARRAY FCB
						//REAL MADRID  BAYERN
				$arrayFCB = array(False, False, True, True);
				$equipLocal2 = "FCB";
				//ARRAY CHE
						//FCB  BAY
				$equipLocal3 = "CHE";
				$arrayChelsea = array(False, True, False, True);
				//ARRAY BAY
						//CHEL  FCB
				$equipLocal4 = "BAY";
				$arrayBayern = array(True, True, False, False);
				$matchEquiposdone = array();
				$matchEquiposdone2 = array();
				
				//RM: 		FCB BAY			RM-FCB  | 
				//FCB:		RM BAY			FCB-RM  | FCB-BAY
				//CHE:		FCB BAY					| CHE-BAY
				//BAY:		CHEL FCB		BAY-CHE | BAY-FCB
				
				//FOR PER EL MADRID
				for($i=0;$i<count($arrayEquipos);$i++){
					if($arrayMadrid[$i] == true){
						//RM	-	FCB  BAY		
							$arrayMadrid[$i] = $arrayEquipos[$i];
							//Array push per introduir els match al Array buit per partits
							array_push($matchEquiposdone, $equipLocal."-".$arrayMadrid[$i]);
					}
				}
					//Array filter per eliminar 0 i valors vacios, ja que hem queda cert valors del array buits, no se perquè
					$arrayMadrid = (array_filter($arrayMadrid));
					print_r($arrayMadrid);
					
				//FOR PER EL BARÇA
				for($i=0;$i<count($arrayEquipos);$i++){
					if($arrayFCB[$i] == true){
						//FCB	-	REAL MADRID  BAYERN	
							$arrayFCB[$i] = $arrayEquipos[$i];
							//Array push per introduir els match al Array buit per partits
							array_push($matchEquiposdone, $equipLocal2."-".$arrayFCB[$i]);
					}
				}
					//Array filter per eliminar 0 i valors vacios, ja que hem queda cert valors del array buits, no se perquè
					$arrayFCB = (array_filter($arrayFCB));
					echo "<br/>";
					print_r($arrayFCB);
					
				//FOR PER EL CHELSEA
				for($i=0;$i<count($arrayEquipos);$i++){
					if($arrayChelsea[$i] == true){
						//CHE	-	FCB  REAL MADRID		
							$arrayChelsea[$i] = $arrayEquipos[$i];
							//Array push per introduir els match al Array buit per partits
							array_push($matchEquiposdone, $equipLocal3."-".$arrayChelsea[$i]);
					}
				}
					//Array filter per eliminar 0 i valors vacios, ja que hem queda cert valors del array buits, no se perquè
					$arrayChelsea = (array_filter($arrayChelsea));
					echo "<br/>";
					print_r($arrayChelsea);
					
				//FOR PER EL BAYERN
				for($i=0;$i<count($arrayEquipos);$i++){
					if($arrayBayern[$i] == true){
						//FCB  REAL MADRID	
							$arrayBayern[$i] = $arrayEquipos[$i];
							//Array push per introduir els match al Array buit per partits
							array_push($matchEquiposdone, $equipLocal4."-".$arrayBayern[$i]);
					}
				}
					
					//Array filter per eliminar 0 i valors vacios, ja que hem queda cert valors del array buits, no se perquè
					$arrayBayern = (array_filter($arrayBayern));
					echo "<br/>";
					print_r($arrayBayern);
					echo "<br/>";
					echo "<br/>";
					print_r($matchEquiposdone);
					
					//Convertimos a string para hacer ciertas funcionalidades
					//$separado_por_comas = implode(", ",$matchEquiposdone);
					//echo "<br/>";
					//echo "<br/>";
					//echo($separado_por_comas);
				
					
					
				//Fer emparejamientos con el equipo local y el visitante
				//GIRAM VALORS I MIRAM SI ESTA REPETIT I EL PETAM AMB ARRAY_UNIQUE
				//$matchEquiposdone2 = array_reverse($matchEquiposdone);
				//print_r($matchEquiposdone2);
				//substr($matchEquiposdone[0], );
				for($i=0; $i<count($matchEquiposdone); $i++){
					$matchEquiposdone2[$i] = substr($matchEquiposdone[$i], -3).substr($matchEquiposdone[$i], 3, 1).substr($matchEquiposdone[$i], 0, 3);
				}
				echo "<br/>";
				print_r($matchEquiposdone2);
				echo "<br/>";
				echo "<br/>";
				//Sumam tot dins del array 2 i després realitzam un array_unique
				//$matchEquiposdone2=array_merge($matchEquiposdone,$matchEquiposdone2);
				//$matchEquiposdone2=array_unique($matchEquiposdone2);
				$vectorPartidos = array();
				$partitReverso = " ";
				foreach($matchEquiposdone as $partit)
				{
					$partitReverso = substr($partit, -3).substr($partit, 3, 1).substr($partit, 0, 3);
					
					if(in_array($partitReverso,$matchEquiposdone)){
						if(!in_array($partit,$vectorPartidos) and !in_array($partitReverso,$vectorPartidos)){
							$vectorPartidos[] = $partit;
						}
						
					}
				}
				
				$vectorEquiposSeparados = array();
				$vectorEquiposAux= array();
				
				//print_r($vectorPartidos);
				echo "<br/>";
				echo "<br/>";
				
				//TRAMAPA TRAMAPA DE LA GOORRRRRRRRRRRDA
				//Eliminamos el segundo valor, por ser repetido. GL.
				//NO ES FUNCIONAL, ofc.
				unset($vectorPartidos[1]);
				print_r($vectorPartidos);
				
				/* TESTING HERE, ME NIEGO! OTRO DIA Muahahaha
				//Partidos separados en un array [FCB], [RM], etc a partir del $vectorPartidos
				foreach($vectorPartidos as $equiposUnicos){
					$vectorEquiposAux= explode("-", $equiposUnicos);
					$vectorEquiposSeparados[]=  $vectorEquiposAux[0];
					$vectorEquiposSeparados[]=  $vectorEquiposAux[1];
					
				}
				//Equipos que juegan un solo partido y equipos que juegan más de un partido
				$partidosFinal = array();
				$arrayTesting = array();
				//print_r($vectorEquiposSeparados);
				//echo "<br/>";
				$partidosFinal = array_count_values($vectorEquiposSeparados);
				//$resultado = array_unique($entrada);
				//$test = array_unique($partidosFinal);
				$vectorForTesting = array();
				for($i=0; $i<count($partidosFinal); $i++){
					if($partidosFinal == 1){
						$vectorForTesting = array_push($vectorForTesting, $vectorEquiposSeparados[0], $vectorEquiposSeparados[1]);
						
					}
				}
				echo "<br/>";
				//print_r($vectorPartidos);
				print_r($vectorForTesting);
				*/
				
					


			?>
					

	</body>
	

</html>