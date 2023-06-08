<?php 

    ob_start(); //output buffering on


 //Constanten (vaste waardes) van maplocaties.

    //Locatie private path. Bepaald met directory name (dirname) waar dit bestand in zit (initialize.php)
    define("PRIVATE_PATH", dirname(__FILE__)); 

    //Locatie project path. Bepaald met directory name (dirname) van private path. 
    define("PROJECT_PATH", dirname(PRIVATE_PATH)); 

    //locatie public path. Bepaald met project path en /public. 
    define("PUBLIC PATH", PROJECT_PATH. '/public'); 

    //locatie shared path. Bepaald met private path en /shared. 
    define("SHARED_PATH", PRIVATE_PATH. '/shared'); 

    // Assign the root URL to a PHP constant
    // * Do not need to include the domain
    // * Use same document root as webserver
    // * Can set a hardcoded value; 
    // define("WWW_ROOT", '/~kevinskoglund/globe_bank/public'); 
    // define("WWW_ROOT", '');
    // |
    // |
    // !
    // * Can dynamically find everything in URL up to "/public"

    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7; 

    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end); 
    
    //haalt dynamisch rootlocatie op met $doc_root. 
    define("WWW_ROOT", $doc_root); 

    require_once('functions.php'); 

?>