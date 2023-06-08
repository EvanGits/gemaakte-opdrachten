<?php 

//functie url_for= functie om pad te vinden/genereren. Deze wordt gedefinieerd met een string (bijv. $script_path)
// Dit echo je in php om dynamisch een pad te vinden, voor bijv. stylesheets. 
// bijv. href="<?php echo url_for('/stylesheets/admin.css) ? >"/>

function url_for($script_path) {
    // add the leading '/' if not present 
    if($script_path[0] != '/') {
        $script_path = "/" . $script_path; 
}

//pad wordt gegenereerd/gedefinieerd met rootlocatie + pad van script achter '/' (dynamisch). 
return WWW_ROOT . $script_path;  
}

//functie voor urlencode
function u($string=""){
    return urlencode($string); 
}

//functie voor rawurlencode
function u_raw($string=""){
    return rawurlencode($string); 
}

//functie voor htmlspecialchars
function h_char($string=""){
    return htmlspecialchars($string); 
}

function error_404(){
    //superglobal server met aanvraging server protocol. 
    header($_SERVER["SERVER_PROTOCOL"] . "404 Niet Gevonden"); 
    exit(); 
}

function error_500(){
    header($_SERVER["SERVER_PROTOCOL"] . "500 Interne Server Error");
    exit(); 

}

function redirect_to($location){
    header("Location: " . $location); 
    exit;
}    
?>