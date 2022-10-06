<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if(isset($_SERVER['REDIRECT_URL'])){
    echo $_SERVER['REDIRECT_URL'];
} 


//een foutmelding kan onstaan als je de url index/.php is...., zorg dat dit niet gebeurt


?>