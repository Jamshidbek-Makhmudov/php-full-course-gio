<?php 
$site_path = $_SERVER['DOCUMENT_ROOT'];
require __DIR__.'/'. 'vendor/autoload.php';
require __DIR__.'/'. "src/libs/header.php";
//include "src/course/1/index.php";
include "src/course/2/oop/index.php";
//include __DIR__.'/'. "src/course/3/index.php";


// use App\Classes\House;
//use Acme\Auth\User as User;
//use Classes\House;
//use Classes\Person\Person;







?>


<?php  

//$calc= new Calc();


// $person1=new Person("Jamshid", 28);
// echo $person1->getPerson();
// echo "<br>";

// // // $id= new UuidFactory();
// // // echo $id->uuid4();

// $house1=new House("Chilanzar", 20);
// echo $house1->getAdress();
// echo "<br>";

// $user = new User('admin', '$ecurePa$$w0rd1');
//  echo $user->getPerson();
//  echo "<br>";



?>

<?php 
include __DIR__.'/'. "src/libs/footer.php";


?>