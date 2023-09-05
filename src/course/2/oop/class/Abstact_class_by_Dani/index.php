<?php 
include "payment_type_abstract_class.php";
include "BuyProduct_reg_class.php";







$buyProduct=new BuyProduct();
echo $buyProduct->getPayment();
?>

<!-- asbtract classlarni oziga yarasha qoidasi bor abstarct classdan obect yasab bolmaydi boshqa bir classga reference berib ishlatish kerak 
yana bir qoida agar 1ta abstact method yasamoqchi bolsa albatta u abstact classini ichida yasalishi kerak va agar abstarct class ichida abstract methodi yozlilgan bolsa boshqa shu classdan extends olgan classlar ham shu abstract methodini olishi majburiy bolmasa error beradi

-->