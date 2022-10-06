<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Evan Geerts </title>
</head>
<body>

<?php
if(isset($_POST['getal']))
			$getal = $_POST['getal'];
		else
		$getal = null;

if($getal >= 31)

{
	echo "Gelukt!";
}
else if(isset($_POST['getal']))
{
	echo "Niet gelukt";
}


if(isset($_POST['getal']))
			$getal = $_POST['getal'];
		else
			$getal = null; 
?>

<form method = "post" action="">
			<label>Getal invullen</label>
			<input type="text" name="getal">
<input type = "submit" name = "Gegevens" value="Verstuur waarde">
			 
		</form>
	</body>
</html>