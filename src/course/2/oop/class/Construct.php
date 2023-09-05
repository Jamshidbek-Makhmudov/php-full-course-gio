<?php 
class Person
{
private $name;
private $color;
private $age;
public function __construct($name, $color, $age)
{
	$this->name=$name;
	$this->color=$color;
	$this->age=$age;

}

public function setName($name){
	$this->name=$name;

}
public function getName(){
	return $this->name;

}

// public function __destruct()
// {
// 	$this->name;
	

// }


}


$person1=new Person("Jamshid","blue","28");
echo $person1->getName();
echo "<br>";




?>



<?php
class NewClass
{

	private $data="data";
	

	public function __construct()
	{
		echo "this is first  <br>";
	}
	public function setNewProperty($newdata)
	{
		$this->data=$newdata;

	}
	public function getProperty()
	{
		return $this->data;

	}
	public function __destruct()
	{
		echo " <br> this is end";
	}
}





$object= new NewClass;
//unset($object);   //deleting objects

echo $object->getProperty();

?>