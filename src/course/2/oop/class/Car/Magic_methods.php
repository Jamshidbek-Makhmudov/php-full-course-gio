<?php 
/*The following method names are considered magical: __construct()
__destruct()
__call()
__callStatic()
__get()
__set()
__isset()
__unset()
__sleep()
__wakeup()
__serialize()
__unserialize()
__toString()
__invoke()
__set_state()
__clone()
 __debugInfo()

*/
class Person{
	public $name="James";
	public $password=12345;
	private $dsn, $username;
	protected $link;
	public function __construct()
	{
		echo "construct is called" . "<br>";
		// $this->dsn = $dsn;
		// $this->username = $username;
		// $this->password = $password;
		// $this->connect();

	}

	public function __destruct()
	{
		echo "__desctruct is called". "<br>";
	}
//__tostring method
	public function __toString()
	{
		return "Name is $this->name.  password is $this->password";
	}


	//__get() //yoq propertylarni chaqirish uchun

	public function __get($props)
	{
		if($props==="username"){
			return $this->name;
		}

		return "Property \"$props \" does nor exist";
		
	}


	//__set() // yoq propetylarni set qiliah uchun
	public function __set($props, $value)
	{
		if($props==="lastname"){
			 $this->name=$value;
		}

	}

	//__call() method yoq methodlarni chaqish uchun

	public function __call($props, $args) //$args for setting mehtod argumets
	{
		if($props==="get_all_passwords"){
			return $this->getPassword();
	 }
	}

	public function getPassword()
	{
		return $this->password;
	}
	

	//__invoke()  // class objectini function ornida ishlatmoqchi bolganda kerak

	public function __invoke()
	{
		echo "invoke is called";

	}

	private function connect()
	{
			$this->link = new PDO($this->dsn, $this->username, $this->password);
	}
	
	public function __sleep()
	{
		return array('dsn', 'username', 'password');

	}

	public function __wakeup()
	{
			$this->connect();
	}

}


?>
<?php 
//__tostring() method
$p=new Person();
echo $p. "<br>";
//__toget() method
echo $p->username;

echo "<br>";
//__togset() method
echo $p->lastname="Makhmudov";

echo "<br>";
//__call() method
echo $p->get_all_passwords();
echo "<br>";

//__invoke()
$p();
echo "<br>";

//__sleep()
echo "<br>";



?>