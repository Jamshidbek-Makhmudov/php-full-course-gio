<?php 
$x=1;
$y=$x; //value siga tenglash
$y1=&$x; //referencega tenglah siga tenglash
$x=3;
echo $y;
echo $y1;

//varubale with text - shu yollar bilan varuableni displayga chiqarsa boladi

$firstname="Jamshid";
echo "<pre>";
echo "hello, $firstname";
echo "<pre>";
echo 'hello, $firstname'; //not
echo "<pre>";
echo "hello, {$firstname}";
echo "<pre>";
echo "hello " .$firstname;
echo "<pre>";



?>
<!-- ; -->
<?php echo "text" //code bir qator bolsa  ; ni yozmasa hma boladi?>