<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Evan Geerts</title>
</head>
<body>
<?php

$Maand = 2; //de variabele Maand is op 2 geinitialiseerd (Februari)

switch ($Maand) {
case "1":
	echo "De maand is januari.";
break; 
case "2":
	echo "De maand is februari.";
break; 
case "3":
	echo "De maand is maart.";
break; 
case "4":
	echo "De maand is april.";
break; 
case "5":
	echo "De maand is mei.";
break; 
case "6":
	echo "De maand is juni.";
break; 
case "7":
	echo "De maand is juli.";
break; 
case "8":
	echo "De maand is augustus.";
break;
case "9":
	echo "De maand is september.";
break; 
case "10":
	echo "De maand is oktober.";
break; 
case "11":
	echo "De maand is november.";
break; 
case "12":
	echo "De maand is december.";
break; 
default; 
echo "Er is nog geen maand gekozen"; 
	} 

?>
</body>
</html>