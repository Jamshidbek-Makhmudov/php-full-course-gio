<?php 
spl_autoload_register("myAutoLoader");
function myAutoLoader($className){


	$path="src/course/classes/";
	$extention=".class.php";
	$fullPath=$path . $className . $extention;
	
	
	if(!file_exists($fullPath)){
      
		
		return false;
		
		
	}
	include_once $fullPath;
}
?>

<?php 
// spl_autoload_register(function($class){
// 	$path= __DIR__.'/'. lcfirst(str_replace('\\','/',$class)).'.php';
// 	require $path;
// 	var_dump($path);
	




// })


?>