<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_SERVER['REDIRECT_URL'])){
    $url =  $_SERVER['REDIRECT_URL'];
} else {
    $url = "/home";
}

$pages =["/about","/contact","/website"];

if(in_array($url,$pages)){
    echo $url;
} else {
    echo "404";
}

//definieer een array met minstens 3 elementen die corresponderen met urls van jouw website zoals bijvoorbeeld "/about"; 
//controleer vervolgens of de gevraagde url voorkomt in deze array m.b.v. in_array(), als dat het geval is echo dan de url en zo niet echo een "404"; 


?>