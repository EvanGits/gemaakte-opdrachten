<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Evan Geerts</title>
	</head>
	<body>
		<?php


	if(isset($_POST['naam']))
			$naam = $_POST['naam'];
		else
		$naam = null;


  		if(isset($_POST['adres']))
  			$adres = $_POST['adres']; 
  		else
  			$adres = null; 


  		if(isset($_POST['postcode']))
  			$postcode = $_POST['postcode']; 
  		else
  			$postcode = null; 


		if(isset($_POST['plaats']))
  			$plaats = $_POST['plaats']; 
  		else
  			$plaats = null; 


  		if(isset($_POST['telefoonnummer']))
  			$telefoonnummer = $_POST['telefoonnummer']; 
  		else
  			$telefoonnummer = null; 


  		if(isset($_POST['email']))
  			$email = $_POST['email']; 
  		else
  			$email = null; 


  		if(isset($_POST['wachtwoord']))
  			$wachtwoord = $_POST['wachtwoord']; 
  		else
  			$wachtwoord = null; 

  	echo $naam; 
  	echo "<hr>"; 
	echo $adres;
	echo "<hr>";
	echo $postcode;
	echo "<hr>";
	echo $plaats; 
	echo "<hr>";
	echo $telefoonnummer; 
	echo "<hr>";
	echo $email; 
	echo "<hr>";
	echo $wachtwoord;
?>
<form method = "post" action="">
			<label>Naam</label>
			<input type="text" name="naam">
<br><br>
			<label>Adres</label>
			<input type="text" name="adres">
<br><br>
			<label>Postcode</label>
			<input type="text" name="postcode">
<br><br>
			<label>Plaats</label>
			<input type="text" name="plaats">
<br><br>
			<label>Telefoonnummer</label>
			<input type="text" name="telefoonnummer">
<br><br>
			<label>E-mail</label>
			<input type="text" name="email">
<br><br>
			<label>Wachtwoord</label>
			<input type="text" name="wachtwoord">
<br><br>
			<label>Retype wachtwoord</label>
			<input type="text" name="Retype wachtwoord">
<br><br>
			<input type = "submit" name = "Gegevens" value="Verstuur gegevens">
<?php
			if(isset($_POST["Gegevens"]))
			echo "We hebben uw gegevens ontvangen"; 
	?>		
		</form>
	</body>
</html>