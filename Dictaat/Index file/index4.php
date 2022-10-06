<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_SERVER['REDIRECT_URL'])){
    echo $_SERVER['REDIRECT_URL'];
}
else{
	echo "/home";
}

//als $_SERVER['REDIRECT_URL']) niet bestaat echo dan "/home";
//voeg dus else toe

?>
