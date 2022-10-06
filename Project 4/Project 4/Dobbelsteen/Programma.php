<?php
require 'classes/HTMLpagina.php';
require 'classes/Dobbelsteen.php';

$pagina = new HTMLpagina ();
$pagina -> setTitle ("Veulen"); 


$dobbelsteen = new Dobbelsteen ();
$dobbelsteen -> gooien (6000); 
 





$pagina -> setInhoud ($dobbelsteen -> getUitslag().$dobbelsteen -> visueelgooien (1));

echo $pagina -> getPagina();


?>