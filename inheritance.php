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
