<?php 
namespace Classes;
class House
{
private $name;
private $color;

public function __construct($name, $color)
{
	$this->name=$name;
	$this->color=$color;

}

public function setAdress($name){
	$this->name=$name;

}
public function getAdress(){
	return $this->name;

}


}



?>