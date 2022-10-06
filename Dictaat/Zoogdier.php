<?php 
class Zoogdier{
	public $naam; 

	function set_naam($woord){
		$this->naam=$woord;
	}

	function set_neus($woord){
		$this->neus = $woord;
	}

	function set_benen($woord){
		$this->benen = $woord;
	}
	function get_zoogdier()
	{
		$string = "dit is een "; 
		$string = $this->naam;
		$string = "het aantal benen dat die heeft is";
		$string = $this->benen; 
		$string = "en van de neus heeft hij/zij er";
		$string = $this->neus;
		return $string; 
	}
}
?>