<!DOCTYPE HTML>
<HTML>
	<head></head>
	<form method="post" action="exercici7.php">
	<body>
		<?php
		
			echo "El valor maximo es ".max($_POST).'<br><br>';
			
		?>
		<input type="submit" value="Reset"/>
		</form>
	</body>
</html>