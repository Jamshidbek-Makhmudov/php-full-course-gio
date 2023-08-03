<?php 
interface MyInterface
{
	const TEXT=1;

	public function method1();
	public function method2();

}
//class
abstract class MyClass implements MyInterface
{
	public function method2()
	{
		# code...
	}
}

//class2

class Myclass2 extends MyClass
{
	public function method1()
	{
		# code...
	}
}
echo MyInterface::TEXT;

$myClass = new Myclass2();

?>