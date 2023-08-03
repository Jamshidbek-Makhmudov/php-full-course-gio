<?php 
/*
 Traits reduces code duplication
 Trait lar static property, static method, abstarct method, normal property larni qabul qila oladi;
 Trait lar const larni qabul qila olmaydi
 */
trait FlyTrait
{
	public function fly()
	{
		echo "I am flying";
	}
	
}
trait EngineTrait
{
	public function engine()
	{
		echo "I have an engine";
	}
	
}



class Plain 
{
	use FlyTrait, EngineTrait;


}


class Helicopter
{
	use FlyTrait, EngineTrait;
	
}

class Car
{
use EngineTrait;

}




$plain=new Plain();
$helicopter= new Helicopter();
$car= new Car();

$plain->fly();
echo "<br>";
$helicopter->fly();
echo "<br>";
$car->engine();

?>