<?php 
require ('procedures.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DataBase</title>
</head>
<body>
	<form method="POST">
		<input type="submit" name="select" value="select">
		<input type="submit" name="insert" value="insert">
		<input type="submit" name="delete" value="delete">
		<input type="submit" name="update" value="update">
	</form>
<?php
if (isset($_POST['select'])) {
$sth = $pdo->prepare("CALL assesment_select()"); 
            $sth->execute();
            echo "<pre>";
            print_r($sth->fetchAll()); 
            echo "</pre>"; 
}

else if (isset($_POST['insert'])) { 
?>	
	 <form method="POST">
	 	<input type="text" name="var2" placeholder="aantal"> 
	 	<input type="text" name="var3" placeholder="categorie">
	 	<input type="submit" name="toevoegen" value="toevoegen">
	 </form>
<?php
} 

if (isset($_POST['delete'])) {
?>
	 <form method="POST">
	 	<input type="text" name="var1" placeholder="id">
	 	<input type="submit" name="verwijderen" value="verwijderen">
	 </form>
<?php
}

else if (isset($_POST['update'])) {
?>
	<form method="POST">
		<input type="text" name="var1" placeholder="id">
		<input type="text" name="var2" placeholder="aantal">
		<input type="text" name="var3" placeholder="categorie">
		<input type="submit" name="bijwerken" value="bijwerken">
	</form>
<?php
}
?>

<!--select type-->
<form method="POST">
		<?php
		$var1 = 'type';
		$sth = $pdo->prepare("CALL assesment_select(?)");
		$sth->bindParam(1, $var1);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            echo "<pre>";
            echo "</pre>";
		?>	
	<select name = "type" id = "id">
	<?php
	for ($i=0; $i < count($result); $i++) { 
	echo "<option value='".$result[$i]['id']."'>".$result[$i]['type']."</option>";
	}
	?>
	</select>	
	<input type="submit" name="keuze" value="keuze">
</form>

<!--select richting-->
<form method="POST">
		<?php
		$var1 = 'richting';
		$sth = $pdo->prepare("CALL assesment_select(?)");
		$sth->bindParam(1, $var1);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            echo "<pre>";
            echo "</pre>";
		?>	
	<select name = "richting" id = "id">
	<?php
	for ($i=0; $i < count($result); $i++) { 
	echo "<option value='".$result[$i]['id']."'>".$result[$i]['richting']."</option>";
	}
	?>
	</select>	
	<input type="submit" name="keuze" value="keuze">
</form>

<!--select husselen-->
<form method="POST">
		<?php 
		$var1 = 'husselen';
		$sth = $pdo->prepare("CALL assesment_select(?)");
		$sth->bindParam(1, $var1);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            echo "<pre>";
            echo "</pre>";
		?>	
	<select name = "husselen" id = "id">
	<?php
	for ($i=0; $i < count($result); $i++) { 
	echo "<option value='".$result[$i]['id']."'>".$result[$i]['state']."</option>";
	}
	?>
	</select>	
	<input type="submit" name="keuze" value="keuze">
</form>


</body>
</html>

