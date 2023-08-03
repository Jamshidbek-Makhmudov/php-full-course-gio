<?php 
namespace Classes\Person;

class Person
{
public $name;
public $age;

public function __construct($name, $age)
{
	$this->name=$name;
	$this->age=$age;

}

public function setPerson($name){
	$this->name=$name;

}
public function getPerson(){
	// return $this->name;
	$person=$this->name . " is ". $this->age . " years old!";
	return $person;

}


}



?>