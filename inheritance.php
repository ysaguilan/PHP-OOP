<?php
/*example 1*/
	 class Family {

public  $firstName;
public	$lastName;
public	$gender;
public	$age;
public	$job;

	function __construct($firstName, $lastName, $gender, $age, $job){
		$this->firstName=$firstName;
		$this->lastName=$lastName;
		$this->gender=$gender;
		$this->age=$age;
		$this->job=$job;
	}
	function getPerson(){
		return "This is" . $this->firstName;		}
	}
	class Sister extends Family{
		function greet(){
			return $this->firstName  . $this->lastName;
		}
	}
	class Brother extends Family{
		function intro(){
		return $this->age;
		}
	}
	$sister = new Sister("Monse", "Saguilan", "female", 21, "college tutor");
	print "this is " . $sister->greet(); 

/*example 2*/

class Snake {
public	$type;
public	$scales;
public	$fangs;
	function __construct($type, $scales, $fangs){
		$this->type=$type;
		$this->scales=$scales;
		$this->fangs=$fangs;
	}
	function getSnake(){
		return "This is a " . $this->type;
	}
}
	class Viper extends Snake{
		function snake1(){
			return $this->type;
		}
	}
	class Python extends Snake{
		function snake2(){
			return $this->fangs;
		}
	}
	class Cobra extends Snake{
		function snake3(){
			return $this->scales;
		}
	}

$viper= new Viper("dessert-sand viper", "light brown", "medium size");
print "<p>" . "This is a " . $viper->snake1();

/*example 3*/
class Spider{
public $type;
public $size;
public $color;
	function __construct($type, $size, $color){
		$this->type=$type;
		$this->size=$size;
		$this->color=$color;
	}
	function getSpider() {
		return "A" . $this->type;
	}
}
	class blackWidow extends Spider{
		function spider1(){
			return $this->color;
		}
	}
	class Recluse extends Spider{
		function spider2(){
			return $this->type;
		}
	}
	class Tarantula{
		function spider3(){
			return $this->size;
		}
	}
$blackwidow = new blackWidow("female", "big", "black with a red hourglass");
print "<p>A female black widow is larger than the males and are the ones who are " . $blackwidow->spider1();

/*inheritance part2*/
class 	Reptile{
	public $name;
	public $color;
	public $weight;
	public $size;

	function __construct($name, $color, $weight, $size) {
		$this->name=$name;
		$this->color=$color;
		$this->weight=$weight;
		$this->size=$size;
	}
	function getReptile(){
		return "this is a " . $this->name;
	}
}
class komodoDragon extends Reptile{
	function __construct($name, $color, $weight, $size, $venomous){
		parent::__construct($name, $color, $weight, $size);
		$this->venomous=$venomous;

	}
	function greet(){
		return $this->venomous;
	}
}
class Iguana extends Reptile{
	function __construct($name, $color, $weight, $size, $fangs){
	parent::__construct($name, $color, $weight, $size);
	$this->fangs=$fangs;
	}
function snake1(){
	return $this->fangs;
	}
}
class Chameleon extends Reptile{
	function __construct($name, $color, $weight, $size, $camoflage){
		parent::__construct($name, $color, $weight, $size);
		$this->camoflage=$camoflage;
	}
	function chamo(){
		return $this->camoflage;
	}
}
$komododragon = new komodoDragon("komodo dragon", "green", 123, 50, "true");
print "<p> is a komododragon venomous? " . $komododragon->greet();
/*example 2*/
class Rodent {
	public $type;
	public $color;
	public $gender;

	function __construct($type, $color, $gender){
		$this->type=$type;
		$this->color=$color;
		$this->gender=$gender;
	}
	function getRodent(){
		return "this is a " . $this->type;
	}
}
class Squirrel extends Rodent{
	function __construct($type, $color, $gender, $size){
		parent::__construct($type, $color, $gender);
		$this

	}


}