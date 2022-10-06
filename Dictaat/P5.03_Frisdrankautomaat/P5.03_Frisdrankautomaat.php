<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Evan Geerts</title>
</head>
<body>
<?php
if (isset($_POST['blikje']))
$aantal = $_POST['blikje']; 
else
$aantal = null; 

switch ($blikje) {
case "Cola": 
	return "Afbeeldingen/Cola_blikje.jpg"; 
break; 

case "Sinas":
	return "Afbeeldingen/Sinas_blikje.jpg"; 
break; 

case "Ice-tea":
	return "Afbeeldingen/Cola_blikje.jpg"; 
break; 

case "Cassis":
	return "Afbeeldingen/Cola_blikje.jpg"; 
break; 
default: 
echo "Kies uw blikje."; 
} 
?>

<form method = "post" action= "">
<input type="button" value= "Cola">
<input type="button" value= "Sinas">
<input type="button" value= "Ice-tea">
<input type="button" value= "Cassis">
</form>




