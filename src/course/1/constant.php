<?php 
//constants
//constantlarni yartish yollari
//1 bu yol bilan yasal constanta oldidan $ belgisini qoyish shart emas
define("STATUS_PAID", "paid"); 


echo defined("STATUS_PAID"); // defined bilan const yaratilganmi yoqmi tekshiramiz
echo "<hr>";
echo STATUS_PAID;

//2 
const NOT_PAID ='not paid';
echo "<hr>";
echo NOT_PAID;
// ikalasini farqi define bilan belgilanganlarni if, fro loop bilan ishlatsa boladi

//predefine constants ular ozlari belgilangan nodejs da code_modeulga oxshab:
echo PHP_VERSION;  //php version



//magic constant:
echo __FILE__;  //path

?>