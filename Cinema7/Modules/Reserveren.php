<?php
/*
	Opdracht PM05 STAP 1: Reserveren
	Omschrijving: Voer een query uit middels een prepared statement
*/

//SELECT * FROM `films` WHERE `Status` = 'InBios'
$parameters = array(':status'=>'InBios');
$sth = $pdo->prepare('select * FROM `films` WHERE Status= :status');
$sth -> execute ($parameters); 

/*
	Opdracht PM05 STAP 2: Reserveren
	Omschrijving: Zorg er voor dat het result van de query netjes op het scherm wordt getoond. Zorg er voor dat er een knopje "reserveren" is waarmee je doorgestuurd wordt naar de reserveren pagina
*/

?>
Reserveren

<table border = "1">  
<tr> <th>Titel</th> <th>Beschrijving</th> <th>Duur</th> <th>Prijs</th> </tr>

<?php WHILE ($row = $sth -> fetch ()) {
?>
<tr> <td><?php echo $row['Titel']; ?></td> <td><?php echo $row['Beschrijving']; ?></td> <td><?php echo $row['Duur']; ?></td> <td><?php echo $row['Prijs']; ?></td> <td> <a href = "Modules/Data.Tijden.php"> Reserveren</a> </td></tr>
<?php 
} 
?>
</table>