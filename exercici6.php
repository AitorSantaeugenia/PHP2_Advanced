<!DOCTYPE html5>
<html>
    <head>

	</head>
		
	<body>
	<!-- 
		Exercici#6 - PHP2; PASAPALABRA
			Te permita poder rellenar los caracteres a la palabra PASAPALABRA 
			PAS[ ]BALA[ ]RA 
			[ ] indica que debe mostrar un input text. 
			Al pulsar en corregir te dice si la palabra oculta es correcta o no.
			-------
			¡OJO! - Esto es cutre que te cagas, pero hace lo que pide el anunciado
			-------
	-->
	<h1 style="text-align:Center"> Exercici#6 - PHP2: PASAPALABRA</h1><br/>
							<form method="post" action="exercici6.php">
							<?php
								
							//THIS SHIT IS WORKING, REALLY BAD ONE, NOT FUNCTIONAL
								$word = "PASAPALABRA";
								echo "PAS"."<input type='text' name='nombre' id='nombre' maxlength='1' size='4'/>"."PALA"."<input type='text' name='nombre2' id='nombre2' maxlength='1' size='4'/>"."RA";
								
								$var_value = $_POST['nombre'];
								$var_value2 = $_POST['nombre2'];
								$hidden1 = "A";
								$hidden2 = "B";
								
								if(($var_value == $hidden1) && ($var_value2 == $hidden2)){
									echo "<br/>"."True";
								}else{
									echo "<br/>"."False";
								}
								
							/* //Más tecnico- WIP (work in progress)
							//PAS [A] PALA [B] RA
							$word = "PASAPALABRA";
							$lenghtWord = strlen($word);
							$hiddenword1 = " ";
							$hiddenword2 = " ";
							
							//A
							$hiddenword1 = substr($word, 3, 1); 
							//B
							$hiddenword2 = substr($word, -3, 1);   
							
							//echo $hiddenword1;
							//echo $hiddenword2;
							
							for($i=0; $i<$lenghtWord; i++){
								
								
							}
							echo "<input type='text' name='nombre' id='nombre' maxlength='1' size='4'/>";
							echo "<input type='text' name='nombre2' id='nombre2' maxlength='1' size='4'/>";
							
								
								
								
								$var_value = $_POST['nombre'];
								$var_value2 = $_POST['nombre2'];
								*/
							
							?>
								<br/><br/><input type="submit" name="Enviar" value="Enviar" >
							</form>
					

	</body>
	

</html>