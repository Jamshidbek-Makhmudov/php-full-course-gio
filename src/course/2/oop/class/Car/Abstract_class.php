<?php 
abstract class Shape
{
	public $color;

	public function __construct($color)
	{
		return $this->color=$color;
	}
	abstract public function getArea();

	public function getColor()
	{
		return $this->color;
	}
}

?>


<?php 
class Triangle extends Shape
{
 public function getArea()
 {
	return "Triangle";

 }

}

?>

<?php 
$t=new Triangle("red");

echo $t->getArea();

?>