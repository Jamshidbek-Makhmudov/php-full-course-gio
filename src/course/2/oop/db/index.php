<?php 
declare(strict_types=1);
$site_path=$_SERVER["DOCUMENT_ROOT"];
$autoload="/pdo/vendor/autoload.php";
require $site_path.$autoload;

<<<<<<< HEAD

echo $site_path.$autoload;
=======
//include $site_path."/pdo/src/classes/Db/db.php";
//include $site_path."/pdo/src/classes/test.php";

use Classes\Test;

>>>>>>> origin/main




?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Title</title>
</head>

<body>

<<<<<<< HEAD
=======
	<?php 
$testObj=new Test();
echo $testObj->getUsers();

?>

>>>>>>> origin/main
</body>

</html>