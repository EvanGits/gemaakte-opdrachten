<?php 
require ('dummy_2.php');
?>

<!DOCTYPE html>
<html>
  
<head>
    <title>Insert pagina</title>
</head>

<body>
    <center> 

 <?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;assesment;","root","");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e){
    die("ERROR: Kon geen verbinding maken. " . $e->getMessage());
} 

// Taking all 5 values from the form data(input) 
    
 
// Attempt insert query execution if (isset($_POST['toevoegen'])){  
    $var1 = $_POST[''];
    $var2 = $_POST['']; 
    $var3 = $_POST[''];
    $var4 = $_POST[''];
$sth = $pdo->prepare("CALL assesment_insert_gebruikersantwoord(?, ?, ?, ?)");
    $sth->bindParam(1, $var1);
    $sth->bindParam(2, $var2);
    $sth->bindParam(3, $var3); 
    $sth->bindParam(4, $var4);
    $sth->execute();


try {
echo "Antwoorden succesvol verzonden."; 
 
echo "De gegevens zijn opgeslagen in de database."; 

}
catch(PDOException $e){ 
    die("ERROR: Kon $sql niet uitvoeren. " . $e->getMessage());
 }


// Close connection
unset($pdo);
?>
    </center> 
</body>
  
</html>

