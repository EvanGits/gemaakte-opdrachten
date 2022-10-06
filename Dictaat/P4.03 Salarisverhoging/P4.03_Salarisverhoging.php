<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Evan Geerts</title>
</head>
<body>
<?php
if(isset($_POST['oudsalaris'])) 
	$oudsalaris = $_POST['oudsalaris']; 
	else 
	$oudsalaris = null; 

$salarisverhoging = $oudsalaris*0.07;

if($salarisverhoging <= 75)
{
	$salarisverhoging = 75;
}
if($salarisverhoging >= 250)
{
	$salarisverhoging = 250; 	
}
$nieuwsalaris = $oudsalaris+$salarisverhoging; 
?>
<form method = "post" action="">
			<label>Maandsalaris invullen</label>
			<input type="text" name="oudsalaris">
<input type = "submit" name = "Maandsalaris" value="Verstuur waarde">
			 
		</form>
		<?php
echo $oudsalaris; 
echo "<br>"; 
echo $salarisverhoging;
echo "<br>"; 
echo $nieuwsalaris;
		?>
	</body>
</html>
