<?php 
class Car{
	public $color="red";
	private $weight=2000;
	static $counter=0;
	public $pub_counter=0;

	static private $available_colors=[
		"red","white"
	];
	

	const MY_CONST="JAMSHID";


	public function __construct()
	{
		$this->pub_counter++; // bu ozgarmaydi sababi bu instance har safar qaytsa chaqirilganda yangi object bolib 0 dan qaytaradi
		self::$counter++; // osadi sababi static methodlar classni oziga tenng

		
		
	}

	public static  function getColor()
	{
		return self::$available_colors;
	}


	public function getConst()
	{
		self::MY_CONST;
		
	}

}

?>

<?php 
$my_car = new Car();
echo Car::$counter. " " . $my_car->pub_counter . "<br>";
$new_car= new Car();
echo Car::$counter. " " . $new_car->pub_counter . "<br>";
$colors= Car::getColor();

var_dump($colors);
echo "<hr>";


$my_const=Car::MY_CONST;


echo $my_const;







?>

<?php 
class Person{
	private $name;
	private $color;
	private $age;

	public static $drinkingAge = 21;
	

	public function __construct( $name, $color, $age)
	{
		$this->name=$name;
		$this->color=$color;
		$this->age=$age;

	}
	public function setName($name)
	{
		$this->name=$name;

	}

	public function getDa()
	{
		return self::$drinkingAge;
	}


	public static function setDrinkingAge($newDA)
	{
		self::$drinkingAge=$newDA;
		
	}

}

echo Person::$drinkingAge;
Person::setDrinkingAge(18);

echo Person::$drinkingAge;


$person1=new Person("Jamshid", "blue", 28);
echo $person1-> getDa();

?>