<?php 
//isset — Determine if a variable is declared and is different than null
//var_dump()
//print_r()
//isset()   //set qilinganimi? boolean qaytaradi
//is_array() // arraymi? boolean qaytaradi
//count()      // arrayni elentlarini sanab beradi : int qaytaradi
$array=['php', 'java', 'jaavscript'];
//arrayni oxiriga push qilish
//1
$array[]="'nodejs";
//2 
array_push($array, 'express');  //birinvhi param qaysi arrayga qoshish , 2 - param nimani qoshish

echo "<pre>";
print_r($array);

echo "<pre>";
echo count($array);
echo "<hr>";
///////////////////////////////
$a=[
   null=>"null", // null is equall to empty string
	"php"=>"5",
	"node"=>"6",
	"java"=>"7",
	"creator"=>[
		"name"=>"Jamshid",
		"email"=>"Jamshid@,ail.com",
		"password"=>"123",
		"car"=>["BMW","FERRARY"],
		"country"=>[
			"home"=>"Tashkent",
			"work"=>"South Korea",
		]
	]
];
$a["jaavscript"]="8";



echo "<pre>";
print_r($a);
echo "<pre>";
///////////////////
echo "<br>";
print_r($a['php']);
echo "<br>";
///////////////////
print_r($a['creator']['car'][0]);

// 
$arr=[true=>1,1=>2,'1'=>3,1.8=>4]; //output is faqat bitta array key va value bor hammasi bir birini override qilgan

echo "<pre>";
print_r($arr);
echo "<pre>";
echo $a[''];

//delete array values:
// array_pop($array); //oxiridan 1ta
// array_shift($array); //boshidan 1ta
// unset($array[''], $array['php']);  // 

 

//
array_key_exists('php',$array); //key bor yoqligini tekshiardi
isset($array['php']); //key bor yoqligini va shu key null ga teng yoki teng emasligigacha aniqlab beradi



?>