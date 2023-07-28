<?php 
declare(strict_types=1); // typelarga strict beradi agar notogri type bersa eeror qaytaradi
//scalar type
	# bool
    /*
		false ga teng bolganlar: 0, -0, 0.0, -0.0, '', '0', [], null

		*/

	#int
	# float
	#string
//compound type
	#array

	$array=[1,2,3];
	//echo $array;   // agar arrayni shunchaki echo qilib chiqarsa php array ni string ogira olmaydi shuning uchun array sozini ozini chiqarib beradi 

	// array chiqarishni 1ta yoli va qulayrogi:
	print_r($array);

	
	echo "<hr>";
	// 2chini yoli:
	var_dump($array);
	
	echo "<hr>";
	#object
	#callable
	#iterable
//special type
	#resource
	
	#null
	$a=null;
	var_dump(is_null($a)); // check if it is null
	echo "<hr>";
	




$string='name';

echo gettype($string); //typeni chiqarib berdi
// typen chiqarishni ikkinchi yoli :
echo "<hr>";
echo var_dump($string); // bu typeni qiymatigacha chiqarib berdi


echo "<hr>";
// variable larga type hint qilib berish- typescript ga teng
function sum(int $x, int $y){
return $x+$y;
};
$sum=sum(2,5);
echo $sum;



echo "<hr>";



?>