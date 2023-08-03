<?php 
date_default_timezone_set('Asia/Seoul');

$current_time=time();
$tomorrow_time=$current_time +1*24*60*60;
echo $current_time;
echo "<br>";
echo $tomorrow_time;
echo "<br>";
echo date("d일 m월 Y년 H:i");
echo "<br>";
echo date("d일 m월 Y년 H:i", time());
echo "<br>";
echo date("d일 m월 Y년 H:i", strtotime("tommorow"));
echo "<br>";

// Today is 07월 30일 2023년  13:00
//echo date();

?>