<?php 
/*
*	LifeForms-PHP
*	classes.php
*
*/
?>
<?php

interface iLifeForm{
	public function __construct($id);
	public function set_kingdom( $kingdom );
	public function get_kingdom();
	public function set_phylum( $phylum );
	public function get_phylum();
	public function set_class( $class );
	public function get_class();
	public function set_order( $order );
	public function get_order();
	public function set_family( $family );
	public function get_family();
	public function set_genus( $genus );
	public function get_genus();
	public function set_species( $species );
	public function get_species();
}

interface iMammal extends iLifeForm{
	public function set_has_fur($_has_fur);
	public function get_has_fur();
	public function set_fur_color($color);
	public function get_fur_color();
}

class LifeForm implements iLifeForm{
	protected $id;
	protected $kingdom;
	protected $phylum;
	protected $class;
	protected $order;
	protected $family;
	protected $genus;
	protected $species;
	
	public function __construct($id) {
		 gettype($id) == 'integer' ? $this -> id = $id : die( 'LifeForm needs an int ID' );
	}
	public function get_id(){
		return $this -> id;
	}
	public function set_kingdom( $kingdom ) {
		gettype($kingdom) == 'string' ? $this -> kingdom = $kingdom: die("LifeForm(ID=".$this->id.") requires needs a string for its Kingdom");
	}
	
	public function get_kingdom() {
		return $this -> kingdom;
	}
	
	public function set_phylum( $phylum ) {
		gettype($phylum) == 'string' ? $this -> phylum= $phylum: die("LifeForm(ID=".$this->id.") requires needs a string for its Phylum");
	}
	
	public function get_phylum() {
		return $this -> phylum;
	}
	
	public function set_class( $class ) {
		gettype($class) == 'string' ? $this -> class = $class: die("LifeForm(ID=".$this->id.") requires needs a string for its Class");
	}
	
	public function get_class() {
		return $this -> class ;
	}
	
	public function set_order( $order ) {
		gettype($order) == 'string' ? $this -> order = $order: die("LifeForm(ID=".$this->order.") requires needs a string for its Order");
	}
	
	public function get_order() {
		return $this -> order;
	}
	
	public function set_family( $family ) {
		gettype($family) == 'string' ? $this -> family = $family: die("LifeForm(ID=".$this->id.") requires needs a string for its Family");
	}
	
	public function get_family() {
		return $this -> family;
	}
	
	public function set_genus( $genus ) {
		gettype($genus) == 'string' ? $this -> genus= $genus: die("LifeForm(ID=".$this->id.") requires needs a string for its Genus");
	}
	
	public function get_genus() {
		return $this -> genus;
	}
	
	public function set_species( $species ) {
		gettype($species) == 'string' ? $this -> species = $species: die("LifeForm(ID=".$this->id.") requires needs a string for its Species");
	}
	
	public function get_species() {
		return $this -> species;
	}
	
}

class Animal extends LifeForm implements iLifeForm{
	protected $kingdom = 'Animalia';
}

class Vertebrate extends Animal implements iLifeForm{
	protected $phylum = 'Chordata';
}

class Mammal extends Vertebrate implements iMammal{
	protected $class = 'Mammalia';
	protected $has_fur;
	protected $fur_color;
	public function set_has_fur($_has_fur) {
		is_bool( $_has_fur ) === true ? $this -> has_fur = $_has_fur : die( "Mammal(ID=".$this->id.") requires a boolean value for has_fur" );
	}
	public function get_has_fur() {
		return $this -> has_fur;
	}
	public function set_fur_color($color) {
		gettype($color) == 'string' ? $this -> fur_color = $color : die( "Mammal(ID=".$this->id.") requires a string for its Fur Color" );
	}
	public function get_fur_color() {
		$this -> get_has_fur()  ? print( 'LifeForm ID #'. $this->id .' is of is a Mammal with '. $this -> fur_color .' fur<br />' ) : print( 'LifeForm ID #'. $this->id  .' is a Mammal that has no fur.<br />' );
	}
	
}

class Bird extends Vertebrate implements iLifeForm{
	protected $class = 'Avia';
}

class Reptile extends Vertebrate implements iLifeForm{
	protected $class = 'Reptilia';
}
/*

$monkey = new Mammal(0);
$monkey -> get_kingdom(); 
$monkey -> get_phylum();
$monkey -> get_class();
$monkey -> set_has_fur( true );
$monkey -> set_fur_color( 'brown' );
$monkey -> get_fur_color();
var_dump( $monkey );


$eagle = new Bird(1);
$eagle -> get_kingdom();
$eagle -> get_phylum();
$eagle -> get_class();
var_dump( $eagle );

$alligator = new Reptile(2);
$alligator -> get_kingdom();
$alligator -> get_phylum();
$alligator -> get_class();
var_dump( $alligator );

*/

?>

