<?php  
$pdo = new PDO("mysql:host=localhost;dbname=assesment;","root","");

$sql = "SELECT * FROM `fill-in`";
$stm = $pdo->query($sql);
//$rows = $stm->fetchAll(PDO::FETCH_NUM);
//$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
$rows = $stm->fetchAll();
echo "<pre>";
print_r($rows);
echo "<pre>";
print_r($rows);
echo "</pre>"; 
foreach($rows as $row) {

    echo $row[0] . " - " . $row[1] . " - " . $row[2] . "<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fill-in</title>
</head>
<body> 

</body>
</html>  