<?php
$pdo = new PDO("mysql:host=localhost;dbname=assesment;","root","");

//insert assesment
if (isset($_POST['toevoegen'])){
	$var2 = $_POST['var2'];
	$var3 = $_POST['var3'];
	$var4 = $_POST['var4'];
	$var5 = $_POST['var5'];
$sth = $pdo->prepare("CALL assesment_insert_assesment(?,?,?,?)");
	$sth->bindParam(1, $var2);
	$sth->bindParam(2, $var3); 
	$sth->bindParam(3, $var4);
	$sth->bindParam(4, $var5);
	$sth->execute();
}

//insert vragen
if (isset($_POST['toevoegen'])){ 
	$var2 = $_POST['var2'];
	$var3 = $_POST['var3'];
$sth = $pdo->prepare("CALL assesment_insert_vragen(?,?)");
	$sth->bindParam(1, $var2);
	$sth->bindParam(2, $var3);
	$sth->execute();  
}

//insert open 
if (isset($_POST['toevoegen'])){
	$var2 = $_POST['var2'];
	$var3 = $_POST['var3'];
$sth = $pdo->prepare("CALL assesment_insert_open(?,?)");
	$sth->bindParam(1, $var2);
	$sth->bindParam(2, $var3);
	$sth->execute();
} 


//insert multiple-choice
if (isset($_POST['toevoegen'])){
	$var2 = $_POST['var2'];
	$var3 = $_POST['var3']; 
	$var4 = $_POST['var4'];
	$var5 = $_POST['var5'];	
$sth = $pdo->prepare("CALL assesment_insert_multiple-choice(?,?,?,?)");
	$sth->bindParam(1, $var2);
	$sth->bindParam(2, $var3);
	$sth->bindParam(3, $var4);
	$sth->bindParam(4, $var5);	
	$sth->execute();
}

//insert fill-in
if (isset($_POST['toevoegen'])){
	$var2 = $_POST['var2'];
	$var3 = $_POST['var3'];
$sth = $pdo->prepare("CALL assesment_insert_fill-in(?,?)");
	$sth->bindParam(1, $var2);
	$sth->bindParam(2, $var3);
	$sth->execute();
} 

//select vragen

if(isset($_POST['selecteren'])){
$var1 = "vragen";  
$sth = $pdo->prepare("CALL assesment_select(?)");
$sth->bindParam(1, $var1);
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
}

if (isset($_POST['verwijderen'])) {
	if (!empty($_POST['var1'])) {
		$var1 = $_POST['var1'];
	}
	else{
		$var1 = 0;
	}
	$sth = $pdo->prepare("CALL assesment_delete(?)");
	$sth->bindParam(1,$var1);
	$sth->execute();
}

if (isset($_POST['bijwerken'])) {
	if (!empty($_POST['var1'])) {
	$var1 = $_POST['var1'];
	}
	else{
		$var1 = 0;
	}
	if (!empty($_POST['var2'])) {
	$var2 = $_POST['var2'];
	}
	else{
		$var2 = 0;
	}
	if (!empty($_POST['var3'])) {
	$var3 = $_POST['var3'];
	}
	else{
		$var3 = 0;
	}
	$sth = $pdo->prepare("CALL assesment_update(?,?,?)");
	$sth->bindParam(1,$var1);
	$sth->bindParam(2,$var2);
	$sth->bindParam(3,$var3);
	$sth->execute();
}

?>