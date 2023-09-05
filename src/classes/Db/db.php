<?php 
class Db{
private $host="localhost";
private $user="root";
private $pwd="";
private $dbname="oop";

protected function connect(){
	$dsn= "mysql:host=".$this->host.";dbname=".$this->dbname;
	try {
	$pdo=new PDO($dsn,$this->user,$this->pwd);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	return $pdo;
} catch (\PDOException $error) {
  echo $error->getMessage();
}

}


}

?>