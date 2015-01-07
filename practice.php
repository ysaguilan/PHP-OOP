<?php

	class Cat{
	public	$name="default name";
	public	$type = "best breed";
	public	$price = 0;

	}
	$cat1=new Cat();
	print $cat1->name;

	class Bird{
	public $name="default name";
	public $color = "best color";
	public $price = 0;
	}
	$bird1= new Bird();
	print $bird1->name;
	
	class Snake{
		public $name="default name";
		public $type="best kind";
		public $price=0;
	}
	$snake1= new Snake();
	print $snake1->name;

	/*exampless for lesson 2*/
	class Cat{
	public	$name="default name";
	public	$type = "best breed";
	public	$price = 0;

		function_construct($name, $type, $price){
			$this->name=$name;
			$this->type=$type;
			$this->price=$price;
		}
		function getName(){
			return "{$this->name}";
		}
	}

	class Bird{
	public	$name="default name";
	public	$color = "best color";
	public	$price = 0;

		function_construct($name, $color, $price){
			$this->name=$name;
			$this->color=$color;
			$this->price=$price;
		}
		function getPrice(){
			return "{$this->price}";
		}
	}

	class Snake{
		public $name="default name";
		public $type="best kind";
		public $price=0;

		function_construct($name, $type, $price){
			$this->name=$name;
			$this->type=$type;
			$this->price=$price;
		}
		function getType(){
			return "{$this->type}";
		}
	$cat1= new Cat("Sass", "Siamese", 120);
	print "Cat 1:{$cat1->getName()}/n";

	$bird1= new Bird("Tweety", "yellow", 50);
	print "Bird 1:{$bird1->getPrice()}/n";

	$snake1= new Snake("Bob","Cobra", 150);
	print "Snake 1:{$snake1->getType()}/n";