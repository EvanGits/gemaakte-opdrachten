<?php
/*
	Opdracht PM04 STAP 3: Verwacht in de bioscoop
	Omschrijving: Voer een query uit middels een prepared statement
*/
//SELECT * FROM `films` WHERE Status= "Verwacht"
$parameters = array(':status'=>'Verwacht');
$sth = $pdo->prepare('select * FROM `films` WHERE Status= :status');
$sth -> execute ($parameters);  
/*
	Opdracht PM04 STAP 4: Verwacht in de bioscoop
	Omschrijving: Zorg er voor dat het result van de query netjes op het scherm wordt getoond.
*/

$row = $sth -> fetch ();
print_r ($row);
$row = $sth -> fetch ();
print_r ($row); 
while ($row = $sth -> fetch ()) {
	print_r ($row); 
}



//echo '<table border="0">';
//echo '<tr>';
//echo '<th></th>';
//echo '<td>Titel</td>';
//echo '<td>Duur</td>';
//echo '<td>Genre</td>';
//echo '<td>Leeftijd</td>';
//echo '</tr>';

while($row = $sth->fetch())
{
echo '<tr>';
echo '<td rowspan="2"><img src="./Images/'.$row['Plaatje'].'" alt="'.$row['Titel'].'"</td>';
echo '<td>'.$row['Titel'].'</td>';
echo '<td>'.$row['Duur'].'</td>';
echo '<td>'.$row['Genre'].'</td>';
echo '<td>'.$row['Leeftijd'].'</td>';
echo '</tr>';
echo '<tr>';
echo '<td colspan="4">'.$row['Beschrijving'].'</td>';
echo '</tr>';
}
echo '</table>';

?>

verwacht