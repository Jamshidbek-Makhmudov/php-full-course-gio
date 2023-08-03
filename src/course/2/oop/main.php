<?php 
//Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.

//OOP-better code structure, easier to maintain, modular & extendable, Polymorphism flexibility, on Demand. OOP programing is good for big project while Procedural programing is good for small projects. 

//OOP !== MVS.   OOP-paradigm   while MVS-patern that uses OOP

//OOP has four main prinsipes:  ENCAPSULATIONS, ABSTRACTIONS, INHERITANCE, POLYMORPHISM

/*in OOP: variable are properties. functions are methods
ya'ni OOPda variablellar property deyiladi yoziladigan functionlar esa harakat keltrish uchun methiodlar deyiladi bu umumiy - ENCAPSULATIONS deyiladi misol:

let salary:100;
let time:10;
let rate:20;

function gateWage(salry, time, rate){
	return salary+(time*rate)
}
 yuqorida Procedural programmingga misol berilgan yani function parametrlari kop va fiunction kopaygan sari parametrlar ham kopayib boraveradi;
  

 let employee={
 salary:100,
 time:10,
 rate:20,
 getWage:function(){
	return this.salary+(this.time*this.rate)
 }
 }
employee.getWage()

yuqorida ENCAPSULATIONS misol berilgan yani 1ta objectni ichida ozini propertiylari bor va 1ta method i bor
metod ya'ni functionni qaraydigan bolsak unga parametr berilmagan chunki hamamsi 1ta umumiy objectga tegishli,

qoida The best functions are those with no parametrs
function da qancha kam parametr bolsa bu function ustida ishlash shuncha oson boladi;


ABSTRACTIONS:
hamma qiyinchilik comlpex narsalar hidden va biz unga ahamiyat berasak ham boladi
biz ham obejctimizda buni qollasak boladi:
objectimizda bazi property va method larni tashqari uchun yashirib qoysak boladi, bu simpler interface uchun juda qulay va biz ABSTRACTIONS reduce the impact of change qilzamiz yani yashirib qoyish orqali uni tashqaridan ozgartirib bolmaydigan ozgartiersa ham bu asl yashiriligan qismlarga ta'sir qilmaydigan va boshqa bolib lardagi kodlarini buzilishiga ta'sir qilmaydigan qilamiz;



INHERITANCE:   meros olish ya'ni htmlda juda kop taglar bor ular ularni birlashtirib turadigan 1ta narsa ular HTMLElemntda inheritance olib uni ichidagi onclick() focus() hiden qismlariga murojat qila oladi;
bu shu onclick kabi methodlarni har birini shu html taglariga 1ta 1ta berib chiqishda qoshiladi merosl iolib ishlatib ketaveriladi



POLYMORPHISM: POLY-many  MORPHISM -form degani
OOP da POLYMORPHISM kop form degani bolib koplab if,else, switch case statemetslardan voz kechishga yordam beradi
ENCAPSULATION: we group related variables and function togather and this way reduce complexity+  and we can use this groups in differnt programs also

ABSTRACTION: we hide details and complexity, and show only esantionls. this reduces complexity and isolate impact of change

INHERITANCE: we eliminate redundant code ya'ni ortiqcha kodni yo'q qilamiz

POLIMORPHISM: we Refactor ugly switch case statements
*/



/*
public propertylar faqat shu class va shu class ichidagi method ichida ishlatilinadi
proteced esa faqat shu class, shu class ichidagui method va shu classdan qaysidir class extend ya'ni inhertance olsa shuni ichida ihlatilinadi.

classda __construct methodi bolasa, yangi object create qilganda () ni ishlatmasa ham boladi. Ammo __construct bolsa () ishlatish majburiy.




static method va propertylar classlarni ichida yoziladi sabab ulari malummbi kategoriyaga tiqish kerakligi uchun
lekin ularni shu class dan yasaladigan objectga xec qanday aloqasi yoq bu objectni yasamasdan ham static methodlarga access qilsa boladi. xosh bu nega kerak? bu shu classdan yasaladigan methodlar uchun hammasiga umumiy bolsin degan manoda ishlatsa boladi


///////////////////////////////
autolaod composer:
"autoload": {
	"psr-4": {
		"App\\": "app/"
	}
	///////////////////////////////
	"autoload": {
		"classmap": [
			"src/app/classes"
			]
		}
		///////////////////////////////
 "autoload": {
            "classmap": ["app/models", "app/services"]
        }

*/
?>