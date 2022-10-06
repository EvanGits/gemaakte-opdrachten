<?php
$pdo = new PDO("mysql:host=localhost;dbname=assesment;","root","");

$sql = "SELECT * FROM `open`";
$stm = $pdo->query($sql);
//$rows = $stm->fetchAll(PDO::FETCH_NUM);
//$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
$rows = $stm->fetchAll();
echo "<pre>";
print_r($rows);
echo "</pre>"; 

 
?>

<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">  
	<title>Open</title> 
</head> 
<body> 

<form action="insert.php" method="post"> 
<p>
	<label for="Vraag_1">Vraag 1:</label>
	Zitten er amandelen er in een appeltaart? Leg uit waarom wel/niet.

	<br><br>

	<label for="Antwoord_1">Antwoord:</label>
	<input type="text" name="var1" id="Antwoord_1">
<p>


<p>
<label for="Vraag_2">Vraag 2:</label>
	Waarom zijn bananen krom?

	<br><br>

	<label for="Antwoord_2">Antwoord:</label>
	<input type="text" name="varB" id="Antwoord_2">
<p>


<input type="submit" value="Controleren">
</form>
</body>
</html> 


<head>
