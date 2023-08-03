<?php 
//include "src/course/1/index.php";
//include "src/course/2/oop/index.php";
//include "src/course/includes/autoloader.inc.php";
//include 'src/app/classes/Person/person.class.php';
//include 'src/app/classes/House/house.class.php';
require __DIR__.'/'. 'vendor/autoload.php';
// use App\Classes\House;
use Acme\Auth\User as User;
use Classes\House;
use Classes\Person\Person;




?>


<?php  
$person1=new Person("Jamshid", 28);
echo $person1->getPerson();
echo "<br>";

// // $id= new UuidFactory();
// // echo $id->uuid4();

$house1=new House("Chilanzar", 20);
echo $house1->getAdress();
echo "<br>";

$user = new User('admin', '$ecurePa$$w0rd1');
 echo $user->getPerson();
 echo "<br>";



?>