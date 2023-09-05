<?php 
<<<<<<< HEAD
class Test extends Db{
	public function getUsers() {}
=======
namespace Classes;


class Test extends \Classes\Db\Db{
	public function getUsers() {
		$sql="SELECT * FROM users";
		$stmt=$this->connect()->query($sql);
		while($row=$stmt->fetch()){
			return $row["users_firstname"]."<br>";
			
		}
	}
>>>>>>> origin/main
}


?>