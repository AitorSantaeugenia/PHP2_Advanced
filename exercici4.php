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
							<form method="post" action="nombres_resultado.php">
								Nombre: <input type="text" name="nombre" id="nombre"/><br>
								Nombre#2: <input type="text" name="nombre2" id="nombre2"/><br>
								Nombre#3: <input type="text" name="nombre3" id="nombre3"/><br>
								Nombre#4: <input type="text" name="nombre4" id="nombre4"/>	
						
							<?php
						
							
							?>
								<br/><br/><input type="submit" name="Enviar" value="Enviar">
							</form>
					

	</body>
	

</html>