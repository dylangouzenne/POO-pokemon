<?php  
class Pokemon
{
	public $nom;
	public $type;
	public $pv;
	public $niveau;
	public $evolution;

	public function __construct( $nom, $type, $pv, $niveau){
		
		$this->nom = $nom;
		$this->type = $type;
		$this->pv = $pv;
		$this->niveau = $niveau;
		
	}

	public function afficher(){
		
		echo

		"<div class=carte-".$this->type.">

		<div class='zone-niveau'>".$this->niveau."</div>".
		"<div class='zone-nom'>".$this->nom."</div>".
		"<div class='zone-pv'>".$this->pv."</div>".
		"<div class='zone-type'><img id='type' src=img/type/".$this->type.".png></div>".
		"<div class='zone-main'><img id='ilustration' src=img/pokemon/".$this->nom.".png></div>

		</div>";
		
	}

	public function ataque1(){

	}

	public function ataque2(){

	}

}

?>