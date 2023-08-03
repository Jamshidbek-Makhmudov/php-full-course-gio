<?php 
namespace Classes;


class Test extends \Classes\Db\Db{
	public function getUsers() {
		$sql="SELECT * FROM users";
		$stmt=$this->connect()->query($sql);
		while($row=$stmt->fetch()){
			return $row["users_firstname"]."<br>";
			
		}
	}
}


?>