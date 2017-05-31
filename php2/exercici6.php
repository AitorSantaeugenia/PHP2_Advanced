<!DOCTYPE html5>
<html>
    <head>

	</head>
		
	<body>
	<?php
								
								$var_value = strtoupper($_POST['nombre']);
								$var_value2 = strtoupper($_POST['nombre2']);
								
								$palabraOculta=$_POST['palabraoculta'];
								
								$words = array("PASAPALABRA","SABELOTODO","LARGOMETRAJE","AUSTRALIANO","PARADISIACO","ENCAMINADOR");
								$pos1=2;
								$pos2=6;
								$random=rand(0,count($words)-1);
								
								while($random==$_GET['randoaplicado'])
								{
									$random=rand(0,count($words)-1);
									
								}
								
								
								$palabraOculta=strtoupper($palabraOculta);
								$palabra=$words[$random];
								
								$long=strlen($palabra);
								$longOculto=strlen($palabraOculta);
								
								$finSegmento2=$long-($pos2+2);
								$finSegmentoOculto=$longOculto-($pos2+2);
								
								$char1=substr($palabraOculta,$pos1,1);
								$char2=substr($palabraOculta,$finSegmentoOculto+3,1);
								
								
								
	?>
								
								
	<h1 style="text-align:Center"> Exercici#6 - PHP2: PASAPALABRA</h1><br/>
							<form method="post" action="exercici6.php?randoaplicado=<?php echo $random;?>">
							<?php
								
							
							if(($var_value == strtoupper($char1)) and ($var_value2 == strtoupper($char2)))
								{
									echo "<br/>"."ACERTADO ".$palabraOculta;
								}else{
									echo "<br/>"."ERROR EN ".$palabraOculta;
								}
								
								echo "<BR/><BR/>SIGUIENTE PALABRA:<BR/><BR/>";
								
								echo '<input type="hidden" value="'.$palabra.'" name="palabraoculta"/>';
								echo substr($palabra,0,$pos1)."<input type='text' name='nombre' id='nombre' maxlength='1' size='4'/>".substr($palabra,$pos1+1,$finSegmento2)."<input type='text' name='nombre2' id='nombre2' maxlength='1' size='4'/>".substr($palabra,$finSegmento2+4,100);
								
								
								
								 
								
								
						
							
							?>
								<br/><br/><input type="submit" name="Enviar" value="Enviar" >
							</form>
					

	</body>
	

</html>