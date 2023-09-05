<?php 
include "simple_class.php";

$obj=new SimpleClass();
$obj->helloWorld();

//anonymous class
$newObj=new class(){
	public function helloWorld() {
		echo "Hello World";

	}
};


$newObj->helloWorld();





?>
<!-- 
anonymous class: websitemiz otirasidan joy olmaydi, va yengil xisoblanadi. va hammasi- classni yaratish, objectga tenglash, ishlash hammasi bitta pageda boladi. classdan object yasalgandan keyin php ozi bu classni ochirib yuboradi. va bu classdan boshqa joyda ham ishlatib bolmaydi. yasalishda clasdan keyin () ni yozmasa ham boladi, lekin agar shu class ichida constructordan foydalansak ()ni yozib ketish kerak chunki uni ichiga biz argumentlarni joylaymiz

 -->