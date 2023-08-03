<?php 
class Car{
	private $color="red";
	private $weight;
	private $year;
	private $available_colors=["red","blue","black","white"];

	public function __construct($color)
	{
		$this->color=$color;
		
	}
	

	public function setColor(string $color): void
	{
		if(in_array($color,$this->available_colors)){
			$this->color=$color;
			
		}
	}

	public function getColor()
	{
		return $this->color;
	}

	public function __destruct(){

		echo"<hr> ". "constructor destroyed";
	} 
// bu hamma costructorlarni destroy qilib yuboradi
}

?>



<?php 

$myCar= new Car("red");

$second_car= clone $myCar; //clone yasash

$myCar->setColor("white");

echo $myCar->getColor();

?>