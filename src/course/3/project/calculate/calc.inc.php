<?php 
declare(strict_types=1);
$site_path = $_SERVER['DOCUMENT_ROOT'];
require $site_path.'/pdo'.'/'. 'vendor/autoload.php';
require $site_path.'/pdo'. "/src/libs/header.php";
use Classes\Calc\Calc;


 if (isset($_POST["submit"])) {

	 $oper=$_POST["oper"];
	 $num1=$_POST["num1"];
	 $num2=$_POST["num2"];
	 $calc =new Calc((string)$oper,(int)$num1,(int)$num2);

	 try {
		echo $calc->calculator();
		
	 } catch (TypeError $e) {
		echo "Error!: ".$e->getMessage();

	 }
	 
	}


	
		 


?>