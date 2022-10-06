<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php
        // servername => localhost
        // username => root
        // password => empty 
        // database name => staff
        $conn = new PDO("mysql:host=localhost;dbname=assesment;","root","");
 
          
        // Check connection
        if($conn === false){
            die("ERROR: Kan niet verbinden. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $Antwoord_1 =  $_REQUEST['Antwoord_1'];
        $Antwoord_2 = $_REQUEST['Antwoord_2']; 
    

        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO college  VALUES ('$Antwoord_1', 
            '$Antwoord_2')";
            
        if($conn && $sql){
            echo "<h3>Uw antwoorden zijn verzonden.</h3>";  
            echo "<h3>De gegeven antwoorden worden opgeslagen in de database.</h3>";  
                
  
        //echo nl2br("\n$Antwoord_1\n $Antwoord_2");
        } else{
            echo "ERROR: Probeer het de volgende keer opnieuw. " 
                . mysqli_error($conn); 
        }
        // Close connection
        //mysqli_close($conn);

/*
Dummy 2 code:

<textarea rows="4" cols="50" font-family= "Arial, Helvetica, sans-serif"></textarea>

*/

        ?>
    </center> 
</body>
  
</html>