<?php

require_once __DIR__ . "/../base/distantWarrior.php";


$GLOBALS['warriorID'] = 'Holy Cow';

// Définissez vos class de combattants
abstract class Warrior extends DistantWarrior {
	public $id; 
	public $name; 
	public $speed; 
	public $life; 
	public $shield; 
	public $imageUrl; 
	public $weapon;
	public function __construct($id){
		$this->id = $id;
		$this->speed = 30;
		$this->life = 100;
		$this->shield = 20;
	}
	public function SetWeapon($weapon){
		$this->weapon=$weapon;
	}
	public function SetImageUrl($url){
		$this->imageUrl =$url;
	}

    /**
     * @return array
     */
    public function ToArray(){
	    $features = array( 'nom'=>$this->id,
            'vitesse'=>$this->speed,
            'vie'=>$this->life,
            'bouclier'=>$this->shield);
	    return $features;
    }
};

class StartrekWarrior extends Warrior{
	public $mentalPower;
	public function power(){
		return $this->mentalPower;
	}
	public function __construct($monNom){
		$this->mentalPower = 8;
        Warrior::__construct($monNom);

	}

};
class MarvelWarrior extends Warrior{
	public $superPower;
	public function power(){
		return $this->superPower;
	}
	public function __construct($monNom){
		$this->superPower  = 100;
		Warrior::__construct($monNom);
	}

};
class PokemonWarrior extends Warrior{

	public $level;
	public function power(){
		return $this->level;
	}
	public function __construct($monNom){
		$this->level = 1;
		Warrior::__construct($monNom);

	}
};
class Weapon{
	public $id;
	public $strength;
	public $imageUrl;
	public function __construct($id,$strength){
	$this->id = $id;
	$this->strength = $strength;
	}
	public function SetImageUrl($url){
		$this->imageUrl = $url;
	}
    public function ToArray(){
        $features = array('nom'=>$this->id,
            'Puissance'=>$this->strength);
    }
}