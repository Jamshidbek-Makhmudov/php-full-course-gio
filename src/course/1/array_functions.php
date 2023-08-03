<?php 
//array_chunk — Split an array into chunks  //arrayni bolimlarga bolib beradi
$arr_chunk=["a","b","c"];
echo "<pre>";
print_r( array_chunk($arr_chunk,2)); 
 echo "<pre>";

// array_combine - 2ta arrayni bir biriga key va value qilib qoshib beradi
$arr_comb1=[1,2,3,];
$arr_comb2=["a","b","c"];
echo "<pre>";
print_r(array_combine($arr_comb1,$arr_comb2));
echo "<pre>";

//arra_filter- arrayni filtrelab beradi: array_filter(array $array, ?callable $callback = null, int $mode = 0): array
//1-parametr arrayni ozi, 2-param callback callback true qaytsa keyin natajiani chiqaradi bomasa yoq,
//3-param mode bu callbackga tegishli ya'ni default xolatda callback arrayni value siga teng agar 3- parametrda ARRAY_FILTER_USE_KEY berilsa calback argumentini key sifatida ishlatadi.
// agar ARRAY_FILTER_USE_BOTH berilsa callabck 2ta argument qabul qiladi ($value, $key)
$arr_filter=[1,2,3,4,5,6,7,8,9];

$even=array_filter($arr_filter,  fn($value)=> $value ==1); 
$even2=array_filter($arr_filter,  fn($value)=> $value ==1,ARRAY_FILTER_USE_KEY); 
array_values($even); //natijani indexlarini ketma ketlikda tartiblab 0 dan boshlab togrilab beradi
echo "<pre>";
print_r($even);

echo "<pre>";

//array_keys: arrayni keylarini ozini chiqarib beradi. lekin agar 2-parametr searcg parametr xisoblanadi key yoki valuni kirgizdirsak boladi:
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));


//array_map: arrayni elementlariga callback sifatida 1ta 1ta kirib chiqadi: filterdan sytax jihatidan ham farq qiladi ,yamni bunda birnchi caalback function keyin array kiritiladid:
	$arr1=[1,2,3,4,5,6,7,8];

	$arr_map=array_map(fn($value)=>$value*2,$arr1);
	echo "<pre>";
	print_r($arr_map);
	echo "<pre>";
	
//array_merge: 1 yoki undan ortiq arraylarni bir biriga qosshib beradi, array_combinedan farqi combine shunchaki key va valu sifatida 2rta arrayni qoshib bersa, array_merge arraylarni birlashtirb alohida 1ta array qilib chiqarib beradi, va agar bu arraylar elementlari ichida takrorlanish bolsa oxirgisi eskisini ustidan overwrite qiladi
	$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);


// array_reduce: arrayni ichidagi elementlarini callabck yordamida itteratsiya qilib qisqartirib 1ta array elemti qilib qayatib beradi
$arr=[1,2,3,4,5];
$arr_reduce=array_reduce($arr,fn($sum,$value)=>$sum+ $value+=$value); // bu yerda callback argumetidagi 1-element bu: return value of the prwvious itteration, ya'ni itterasiya boshlanishidan 1ta oldingi oldingi  qiymat bolib bu eng boshlanishida nullga yoki xech narsaga teng boladi, 3-paramet sifatida shu $sum ni ozini qaytarsak ham boladi bu optional ;
//array_decude mixed type value qaytadi
echo "<br>";
echo $arr_reduce;


//array_search — Searches the array for a given value and returns the first corresponding key if successful
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;



/*
array_keys() - Return all the keys or a subset of the keys of an array
array_values() - Return all the values of an array
array_key_exists() - Checks if the given key or index exists in the array
in_array() - Checks if a value exists in an array
*/



//array_diff : Compares array against one or more other arrays and returns the values in array that are not present in any of the other arrays.
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);

print_r($result); //1-arrayni qolganlariga taqqoslab yoqlarini chiqarib beradi 

//asort() : array value sini sortlab beradi
$arr=[3,4,5,6,1,2,3,2,43,2,2,3,4,2,8,3,];

asort($arr); //kichikdan kattagacha sortlab beradi keylarini joyida qoldiradi
sort($arr);//keylarini ham 0dan boshlab qayta indexlab beradi;
arsort($arr); //kattadan kichiga sortlab beradi
ksort($arr);  // keylari ozini sortlab beradi


//arrayni destrucrure qilish: arraylarni ichida chiqarib alohida variable qilib choiqarib beradi
$arr=[1,2,3];
list($a,$b,$c)=$arr; //bu toliq shakli
[$a,$b,$c]=$arr; // bu qisqartma shakli



phpinfo();





?>