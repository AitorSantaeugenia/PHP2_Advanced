<!DOCTYPE HTML5>
<html>
	<head></head>
	<body>
	<!-- EXERCICI 10 versió amb vectors fashion
	Vector i matriu i dir si es 1 true o false i imprimir
	-->
		<?php
		
			$vectorMadrid[0] = array(0,1,0,0);
			$vectorBcn[1] = array(1,0,1,0);
			$vectorChel[2]= array(1,0,0,1);
			$vectorBayer[3] = array(1,0,1,0);
			
			
			if($vectorMadrid[0][1] == 1 AND $vectorBcn[1][0] == 1){
					
					echo "RM - BCN<br>";
				}else{
					echo " ";
				}
			
			if($vectorChel[2][3]== 1 AND $vectorBayer[3][2] == 1){
				echo "CHEL - BAY<br>";
			}else{
					echo " ";
			}
											
		?>
	</body>
</html>