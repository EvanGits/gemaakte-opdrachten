<?php
class Dobbelsteen
{
	public $één = 0;
	public $twee = 0;  
	public $drie = 0; 
	public $vier = 0; 
	public $vijf = 0;
	public $zes = 0; 

	public $dobbelsteen1 = "<img src=\"Afbeeldingen/dobbelsteen(1).png\" alt= \"dobbelsteen 1\" \"Dobbelsteen\" width= \"300\" height=\"300\"/>";

	public $dobbelsteen2 = "<img src=\"Afbeeldingen/dobbelsteen(2).png\" alt= \"dobbelsteen 2\" \"Dobbelsteen\" width= \"300\" height=\"300\"/>";

	public $dobbelsteen3 = "<img src=\"Afbeeldingen/dobbelsteen(3).png\" alt= \"dobbelsteen 3\" \"Dobbelsteen\" width= \"300\" height=\"300\"/>";

	public $dobbelsteen4 = "<img src=\"Afbeeldingen/dobbelsteen(4).png\" alt= \"dobbelsteen 4\" \"Dobbelsteen\" width= \"300\" height=\"300\"/>";

	public $dobbelsteen5 = "<img src=\"Afbeeldingen/dobbelsteen(5).png\" alt= \"dobbelsteen 5\" \"Dobbelsteen\" width= \"300\" height=\"300\"/>";

	public $dobbelsteen6 = "<img src=\"Afbeeldingen/dobbelsteen(6).png\" alt= \"dobbelsteen 6\" \"Dobbelsteen\" width= \"300\" height=\"300\"/>";

	public $verwachting = null; 
	public $afwijking = null; 

function visueelgooien ($visueel)
{
	for ($i=0; $i < $visueel; $i++) { 
		$cijfer = rand(1,6);

		if ($cijfer == 1) {
			echo $this -> dobbelsteen1;
		}
		if ($cijfer == 2) {
			echo $this -> dobbelsteen2;
		}
		if ($cijfer == 3) {
			echo $this -> dobbelsteen3;
		}
		if ($cijfer == 4) {
			echo $this -> dobbelsteen4;
		}
		if ($cijfer == 5) {
			echo $this -> dobbelsteen5;
		}
		if ($cijfer == 6) {
			echo $this -> dobbelsteen6;
		}
	}
}

  function gooien ($aantal)
  {
  	for ($i=0; $i < $aantal ; $i++) { 
  		$ogen = rand(1,6);

  		if ($ogen == 1) {
  			$this -> één++;
  		}
  		if ($ogen == 2) {
  			$this -> twee++;
  		}
  		if ($ogen == 3) {
  			$this -> drie++;
  		}
  		if ($ogen == 4) {
  			$this -> vier++;
  		}
  		if ($ogen == 5) {
  			$this -> vijf++;
  		}
  		if ($ogen == 6) {
  			$this -> zes++;
  		}
  		$this -> verwachting = $aantal/6; 
  		
  	}


  }

  function getVlakje ()
  {
  	$string = $this -> vlakje;
  	return $string;    
  }

  function getUitslag ()
  {
  	$string = "<br><br>";
  	$string .= "Hier komt de uitslag.";
  	$string .= "<br></br>"; 
  	$string .= "Het aantal keren één gegooid is ";
  	$string .= $this -> één;
  	$string .= ". Het aantal verwachte keren was "; 
  	$string .= $this -> verwachting;
  	$string .= " afwijking: ";
  	$string .= abs($this -> één - $this -> verwachting);

  	$string .= "<br></br>";
  	$string .= "Het aantal keren twee gegooid is ";
  	$string .= $this -> twee;
  	$string .= ". Het aantal verwachte keren was "; 
  	$string .= $this -> verwachting;
  	$string .= " afwijking: ";
  	$string .= abs($this -> twee - $this -> verwachting);

  	$string .= "<br></br>"; 
  	$string .= "Het aantal keren drie gegooid is ";
  	$string .= $this -> drie;
  	$string .= ". Het aantal verwachte keren was "; 
  	$string .= $this -> verwachting;
  	$string .= " afwijking: ";
  	$string .= abs($this -> drie - $this -> verwachting);

  	$string .= "<br></br>"; 
  	$string .= "Het aantal keren vier gegooid is ";
  	$string .= $this -> vier;
  	$string .= ". Het aantal verwachte keren was "; 
  	$string .= $this -> verwachting;
  	$string .= " afwijking: ";
  	$string .= abs($this -> vier - $this -> verwachting);

  	$string .= "<br></br>"; 
  	$string .= "Het aantal keren vijf gegooid is ";
  	$string .= $this -> vijf;
  	$string .= ". Het aantal verwachte keren was "; 
  	$string .= $this -> verwachting;
  	$string .= " afwijking: ";
  	$string .= abs($this -> vijf - $this -> verwachting);

  	$string .= "<br></br>"; 
  	$string .= "Het aantal keren zes gegooid is ";
  	$string .= $this -> zes;
  	$string .= ". Het aantal verwachte keren was "; 
  	$string .= $this -> verwachting;
  	$string .= " afwijking: ";
  	$string .= abs($this -> zes - $this -> verwachting);

  	 $string .= "<br></br>"; 

  	return $string; 


  }
}

?>