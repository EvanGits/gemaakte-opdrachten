<?php 
//session_start(); 
//include ('db_conn.php'); 

//if(isset($_POST['save_student_btn'])){
//    $menu_naam = $_POST['menu-naam']; 
//    $gerechten = $_POST['gerechten']; 
//    $ingrediënten = $_POST['ingrediënten']; 

//    $query = "INSERT INTO menu's (id, menu_naam, gerechten, ingrediënten) VALUES(:menu_naam, gerechten, ingrediënten)"; 
//    $query_run = $conn->prepare($query); 

//    $data = [
//        'menu_naam' => $menu_naam,
//        'gerechten' => $gerechten,
//        'ingrediënten' => $ingrediënten,
//    ]; 
//   $query_execute = $query_run->execute($data); 

//   if($query_execute){
//        $_SESSION['message'] = "Succesvol ingevoerd"; 
//        header('Location: index.php'); 
//        exit(0); 
//   }
//   else
//   {
//    $_SESSION['message'] = "Invoering mislukt"; 
//    header('Location: index.php'); 
//    exit(0); 
//   }
//}



//db_conn.php

// $servername= "localhost"; 
// $username = "root";
// $password = ""; 
// $database = "project_7"; 

// try {
 
//     $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); 
//    echo "Verbinding succesvol"; 
//     }
// catch(PDOException $e)
//     {
//     echo $e->getMessage();     
    


//    if(isset($_POST['save_student_btn'])) {
//     $menu_naam = filter_input(INPUT_POST,"menu_naam", 
//                                     FILTER_UNSAFE_RAW); 

//     $gerechten = filter_input(INPUT_POST,"gerechten", 
//                                     FILTER_UNSAFE_RAW); 

    
//     $ingrediënten = filter_input(INPUT_POST,"ingrediënten", 
//                                     FILTER_UNSAFE_RAW); 

//     $query = $conn->prepare("INSERT INTO menu's(menu_naam, gerechten, ingrediënten) 
//                                   VALUES (:menu_naam, :gerechten, :ingrediënten"); 
//     $query->bindParam("menu_naam", $menu_naam); 
//     $query->bindParam("gerechten", $gerechten); 
//     $query->bindParam("ingrediënten", $ingrediënten);
//     if($query->execute()) {
//         echo "De nieuwe gegevens zijn toegevoegd."; 
//     }else{
//         echo "Er is een fout opgetreden!";     
//     }
//     echo "<br>"; 
//     }
// }
// catch (PDOException $e) {
//     die("Error!: " . $e->getMessage());
// }




?>