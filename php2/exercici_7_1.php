<!DOCTYPE HTML>
<HTML>
	<head></head>
	<body>
		<form method="post" action="exercici_7_2.php">
		<?php

			$i=0;
			
			if(isset($_POST['x'])){
				$vector = $_POST['x'];
			}else{
				$vector = 0;
			}	
			
			while($i<$vector){
				echo '<input name="max'.$i.'" /><br><br>';
				
				$i++;
			}
						
		?>
		<input type="submit" value="Max"/> 
		</form>
	</body>
</html>