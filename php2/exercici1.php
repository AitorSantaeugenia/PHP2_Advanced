<!DOCTYPE html5>
<html>
    <head>

	</head>

		
	<body>
	<!-- 
		Exercici#1 - PHP2: 
			script php que cree un vector de nombres de personas
			Recorrido mostrando por pantalla los que tienen más de 4 caracteres
			
	-->
	<h1 style="text-align:Center"> Exercici#1 - PHP2</h1><br/>
										
							<?php
							//Easy peasy with array y un foreach 
								$vectorNombres = array("utrechor", "Javi", "Solana", "Mar", "Ana", "AJ");
								
								foreach($vectorNombres as $valor)
								{
									if(strlen($valor)>4)
									{
											echo $valor."<br/>";
									}
								}
							?>


	</body>
	

</html>