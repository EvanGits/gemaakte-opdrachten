<!DOCTYPE html>
	<html>
		<head>
			<title>Hoger/Lager</title>
		</head>

<body>
	<?php
	if (isset($_GET['score'])) {
		$score= $_GET['score']; 
	}
	else { 
		$score= 0; 
	}
	echo "Score: ";
	echo $score." <br>"." <br>";
		?>

	<form><input type= "submit" name="knop" value= "Hoger"><input type= "submit" name="knop" value= "Lager"></form>
	<br> </br>
	<?php

$hogerLager= (isset($_GET['knop']));
	if(isset($_GET['knop'])) {
		$hogerLager= $_GET['knop']; 

	$nummer= rand(1,99); 
	echo "Oud getal: ";
	echo $nummer."<br>"." <br>";  

	$nieuwNummer= rand(1,99);
	echo "Nieuw getal: ";
	echo $nieuwNummer."<br>"." <br>";

	if ($nieuwNummer>$nummer){
			echo "Het nieuwe getal is hoger dan het oude getal."."<br>"."<br>"; 
			if ($hogerLager=="Hoger"){
				$score++; 
			}
	}
	if ($nieuwNummer<$nummer){
			echo "Het nieuwe getal is lager dan het oude getal."."<br>"." <br>"; 
			if ($hogerLager=="Lager"){
				$score++; 
			}
	}


}
echo $hogerLager."<br>"."<br>";; 
?>

	<?php
	if ($nieuwNummer==$_GET['knop']) {
		echo "<body style='background-color:green'>";
	}
	else {
		echo "<body style='background-color:red'>";
	}
		?>
	</body>
</html>
