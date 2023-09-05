<?php 
include "../oop/class/Validator.php";
class User{
	public $name;
	public $email;
	public function save() {
		$validator = new Validator();
		$validator->validate_email($this->email);
		echo "user saved";
		return true;
	}
	
	
}

try {
	$user = new User();
	$user->name="james";
	$user->email="<EMAIL>";
  $user->save();
} catch (Exception $e) {
	echo "<pre>";

echo "Message: " . $e->getMessage(). "\n\n";
echo "File: " . $e->getFile(). "\n\n";
echo "Line: " . $e->getLine(). "\n\n";
echo "Trace: \n" . $e->getTraceAsString(). "\n\n";
}