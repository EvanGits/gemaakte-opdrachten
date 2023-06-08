<?php 
try {
    $pdo = new PDO("mysql:host=localhost;dbname=project_7", "root", "");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


