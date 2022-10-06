<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Evan Geerts</title>
</head>
<body>
<?php 
if (isset($_POST['aantal']))
$aantal = $_POST['aantal']; 
else
$aantal = null; 

if (isset($_POST['brandstof']))
$brandstof = $_POST['brandstof'];
else
$brandstof = null; 

switch ($brandstof) {
case "Euro95": 
	$prijs = 1.649; 
break; 

case"Euro98":
	$prijs = 1.734; 
break; 

case "Diesel":
	$prijs = 1.369; 
break; 
case "LPG":
	$prijs = 0.729;
break; 
default:
echo "Kies uw soort brandstof.";
   
}
$totaalbedrag = $aantal*$prijs;
?>
<form method = "post" action= ""> 
<label>Aantal L
<input type="text" name="aantal"></label>
<label>Type brandstof
<select name ="brandstof">
	<option value="Euro95">Euro 95</option>
	<option value="Euro98">Euro 98</option>
	<option value="Diesel">Diesel</option>
	<option value="LPG">LPG</option>
</select></label>

<input type="submit" name="Verstuur">
</form>

<p> Het gelezen aantal is <?php echo $aantal ?> en de prijs is <?php echo $prijs ?> </p>
<p> De gelezen brandstof is <?php echo $brandstof ?> <p>
<p> Het totale bedrag is <?php echo $totaalbedrag ?> <p>







