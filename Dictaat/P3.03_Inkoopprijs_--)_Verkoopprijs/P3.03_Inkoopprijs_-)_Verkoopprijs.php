<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Evan Geerts</title>
	</head>
	<body>
		<?php

		if(isset($_POST['Bereken'])) {

        $inkoopprijs = $_POST['inkoopprijs'];   
		$verkoopprijs= $_POST['inkoopprijs']*1.25; 
		$verkoopprijs= $_POST['inkoopprijs']*1.21; 

		echo $verkoopprijs; 

		}
		else
		{
		?>

		<form method = "post" action="">
			<label>inkoopprijs</label>
			<input type="number" name="inkoopprijs">

			<input type = "submit" name = "Bereken" value="Bereken">
		</form>
		<?php
		}
		?>
	</body>
</html>