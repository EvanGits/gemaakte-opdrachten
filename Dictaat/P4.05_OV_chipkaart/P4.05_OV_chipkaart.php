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

if (isset($_POST['leeftijd']))
$leeftijd = $_POST['leeftijd'];
else
$leeftijd = null; 

if($leeftijd >= 4)
{
	$opstaptarief = 0.86 / 1 * 0.66;
	$kilometerprijs = 0.40 / 1 * 0.66;
}
else 
{
	$opstaptarief = 0.86;   
	$kilometerprijs = 0.40;
}
if($leeftijd <= 11)
{
	$opstaptarief = 0.86 / 1 * 0.66;
	$kilometerprijs = 0.40 / 1 * 0.66;	
}
else 
{
	$opstaptarief = 0.86;
	$kilometerprijs = 0.40;
}
if ($leeftijd >= 65)
{
	$opstaptarief = 0.86 / 1 * 0.66;
	$kilometerprijs = 0.40 / 1 * 0.66;
}

$totaalbedrag = ($aantal*$kilometerprijs)+$opstaptarief;
?>
<form method = "post" action= ""> 
<label>Aantal kilometers
<input type="text" name="aantal"></label>

<label>Leeftijd
<input type="text" name="leeftijd"></label>

<input type= "submit" name="Verstuur">

</form>
<p> Het aantal kilometers is <?php echo $aantal ?> <p>
<p> De prijs hiervan is <?php echo $kilometerprijs ?> <p>
<p> De prijs van het opstaptarief is <?php echo $opstaptarief ?> <p>
<p> Het totaalbedrag is <?php echo $totaalbedrag ?> <p>