<?php 
	$pdo = new PDO("mysql:host=localhost; dbname=blob_module;", "root", ""); 
	if (isset($_FILES['img']) && isset($_POST['upload']) ) 
	{
		print_r($_FILES);
		$blobdata = fopen($_FILES['img']["tmp_name"], "rb");
		echo "Het is gelukt!"; 

		$EG = $pdo->prepare("CALL pr_insert(?,?)"); 
		//$EG = $pdo->prepare("INSERT INTO `tabel_1` (datatype, bestand) VALUES(?,?)");
		$type = $_FILES['img']['type']; 
		$EG ->bindParam(1, $blobdata, PDO::PARAM_LOB);
		$EG ->bindParam(2, $type);
		
		$EG ->execute(); 

	}
	elseif (isset($_POST['selecteer'])) 
	{
		$id= $_POST['id']; 

		$EG = $pdo->prepare("CALL pr_select(?)"); 
		$EG ->bindParam(1, $id);
		$EG ->execute();
		$result = $EG ->fetch();

		if (!empty($result)) {
			//echo "<img src='data:" . $result["datatype"] . ";base64," . base64_encode($result["bestand"]) . "'>";

			switch ($result['datatype']) {
				case "image/jpg":
				case "image/png": 
				case "image/jpeg":

				echo "<img src='data:" . $result["datatype"] . ";base64," . base64_encode($result["bestand"]) . "'>";

				break;
				
				case "application/pdf": 
				header("content-type:" .$result["datatype"]);
				echo $result["bestand"]; 

				break;


				case "text/plain": 
				header("content-type:" .$result["datatype"]);
				echo $result["bestand"]; 

				break;

			}
		}
		//png, jpg, jpeg, pdf

	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blob</title>
</head>
<body>

<h2>Op deze pagina kunt u een formulier inclusief een bestand meegeven.</h2>

<form method= "post" enctype="multipart/form-data">


  <label for="img">Selecteer een afbeelding/bestand:</label>
  <br><br>

  <input type="file" name="img">
  <br><br>
  <input type="submit" value= "uploaden" name= "upload">
</form>
<br><br>
<form method="post">
<input type="number" name= "id" required>
<input type="submit" value= "selecteer" name= "selecteer">


</form>


</body>
</html>