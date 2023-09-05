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
private propertylar faqat shu class va shu class ichidagi method ichida ishlatilinadi
proteced esa faqat shu class, shu class ichidagui method va shu classdan qaysidir class extend ya'ni inhertance olsa shuni ichida ihlatilinadi.

classda __construct methodi bolmasa, yangi object create qilganda () ni ishlatmasa ham boladi. Ammo __construct bolsa () ishlatish majburiy.



STATIC METHOFDS AND PRPERTIES
static method va propertylar classlarni ichida yoziladi sabab ulari malummbi kategoriyaga tiqish kerakligi uchun
lekin ularni shu class dan yasaladigan objectga xec qanday aloqasi yoq bu objectni yasamasdan ham static methodlarga access qilsa boladi. xosh bu nega kerak? bu shu classdan yasaladigan methodlar uchun hammasiga umumiy bolsin degan manoda ishlatsa boladi.
static method ichida $this keywordi ishlatilinmaydi

classdan extends olinsa child class ichidagi property;
arga self::$ qilib onasi class property si uchun parent::$ ishlatilinadi, lekin const lar uchun $ shart emas 






INTERFACE:
 interfacelar classlarni bir xil qoida solib beradi. agar bir nehcta classlar da 1xil methodlar takrorlanishi kerak bolsa biz shu methodni interfacega chiqarib qoysak boladi. keyin shu interfacedan implements olish kerak boladi va shundan song shu implements ni olgan class lar interface ichidagi methodni ishlatishi majburiy bolib qoladi aks xolda error beradi
 1ta class birnechta interfacelardan implement olsa boladi
 bosqhqa misol:
 bunda constructorni ichidagi icghida LoggerInterface dan qaysi class implemet olgan bolsa shuni qabul qiladi

 interface LoggerInterface
 {
	public function execute();
 }


 class LogtoDb implements LoggerInterface
 {
	 public function execute($message){
	echo "bazaga yozish":$message;
 }
 }


 class UsersController 

 {
	protected $logger;

	public function __construct(LoggerInterface $logger){
		$this->logger = $logger;
	}
	public function show()
	{
		$log= "show method";

	$this->logger->execute($log);

	}
 }
 $log= new LogtoFile();
 $controller= new UsersController($log);

 $controller->show();




 ABSTRACT CLASSES:
 asbtract classlarni oziga yarasha qoidasi bor abstarct classdan obect yasab bolmaydi boshqa bir classga reference berib ishlatish kerak 
yana bir qoida agar 1ta abstact method yasamoqchi bolsa albatta u abstact classini ichida yasalishi kerak va agar abstarct class ichida abstract methodi yozlilgan bolsa boshqa shu classdan extends olgan classlar ham shu abstract methodini olishi majburiy bolmasa error beradi
abstarct class dan meros olib ichidagi methodlar kochirib yozilganda bu hodiasa Polimorphyzm deyiladi



ANONYMOUS CLASSES:
anonymous class: websitemiz otirasidan joy olmaydi, va yengil xisoblanadi. va hammasi- classni yaratish, objectga tenglash, ishlash hammasi bitta pageda boladi. classdan object yasalgandan keyin php ozi bu classni ochirib yuboradi. va bu classdan boshqa joyda ham ishlatib bolmaydi. yasalishda clasdan keyin () ni yozmasa ham boladi, lekin agar shu class ichida constructordan foydalansak ()ni yozib ketish kerak chunki uni ichiga biz argumentlarni joylaymiz

TRAITS:
classlar faqat 1ta classdan meros olishi mumkin lekin agar 2ta classdan meros olmoqchi bolsa buni Traits lar yordamida qilsa bolad:
xusiyatlarni 1ta nechta classlar merso olsa boladi;
Trait dan object hosil qilib bolmaydi faqat meros olsa boladi
methodlari: public, private, protected:
faqat class ichida ishlatsa boladi boshqa joyda emas:

1)
triat MyTrait{
	..
}
class MYClass{
	Mytrait
}
2)
Trait Hello{
	public function hello()
	{
		echo "hello";

	}
}
Trait World{
	public function World()
	{
		echo "world";

	}
}
class Myclass
{
	use Hello,World;

}
$obj=new Myclass();
$obj->hello();
$obj->World(); //hello world





CONST:

__FILE__ file turgan yolni qaytaradi
__DIR__   file turgan papka turgan yolni qaytaradi
__FUNCTION__ function nomini qaytaradi
__CLASS__ class nomini qaytaradi
__TRAIT__ trait nomini qaytaradi
__METHOD__ method nomini qaytaradi
__NAMESPACE__ namespace nomini qaytaradi
Classname::class- class nomini qaytaradi


Namespace:
include "" admin/ConnectDb.php;
include "" oop/ConnectDb.php;
use admin\ConnectDb;
use oop\ConnectDb as MyConnectDb;
$b=new ConnectDb();
$conn=new MyConnectDb();

namaspacelarni shunaqa qilib qayta nomlab ishlatsa boladi



try catch exceptions: errorlarni chiroyli qilib foydalanuvchiga korsatish uchun kerak
if($th<0){
throw new Exception("incorrect number: " . $th);
}
try {
	//code...
} catch (Exception $e) {
	echo $e->getMessage();
}
 misal uchuin try_catch_exception.php ni qara!


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