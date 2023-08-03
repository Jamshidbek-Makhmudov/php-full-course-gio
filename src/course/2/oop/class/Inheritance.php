<?php 
class Parent_class
{
	public $p1="1";
	protected $p2="2";
	private $p3="3";

}


?>

<?php 
class Child_class extends Parent_class
{

	
}


?>


<?php 
$obj=new Child_class();


echo $obj->p1;


?>