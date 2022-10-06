<?php

class HTMLpagina  
{
	public $titel = null; 
	public $inhoud = null; 
	function __construct()
	{
		

	}

	function getPagina ()
	{
		$string = "<!DOCTYPE html>"; 
		$string.= "<html>";
		$string.= "<head>";
		$string.= "<meta charset=\"utf-8\">";
		$string.= "<title>".$this->titel."</title>";
		$string.= "</head>";
		$string.= "<body>";
		$string.= $this ->inhoud;
		$string.= "<input type=\"button\" value=\"Dobbelsteen gooien\" onclick=\"window.location.reaload()\""; 
		$string.= "</body>";
		$string.= "</html>";
		return $string; 

	} 

	function setTitle ($titel)
	{
		$this ->titel = $titel;
	}

	function setInhoud ($inhoud)
	{
		$this ->inhoud = $inhoud;  
	}


}


?>
