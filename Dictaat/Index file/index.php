<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if(isset($_SERVER['REDIRECT_URL'])){
    $url =  $_SERVER['REDIRECT_URL'];
} else {
    $url = "/home";
}


$pages =["/home","/about","/login"];

if(in_array($url,$pages)){
    echo $url;
} else {
    echo "404";
}




?>