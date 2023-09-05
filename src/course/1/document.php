<!-- grammer:

constants:
define("CONSTANT_NAME","value");         //const yasab beradi;



create buffer;
ob_start(callback, chunk_size, flags);
ob_start();
echo "This content will not be sent to the browser.";
ob_end_clean();
//bufferni yoqib qoysak keyin biz head(); methodiga qolimiz boradsihead methodida esa biza userni qaysidir pagega navigate qilib yuborsak boladi;

echo "This content will be sent to the browser.";




strlen(string); stringni lengthni qaytaradi
in_array(value, array)-> arrayni value si bor yoqligin boleanda qaytaradi
crypt(string $salt) ; -> stringni hash qiladi  :

$password="james";
$salt="james22";
$hashed=crypt($password, $salt);
echo $hashed;



//cookies
setting cookies
setcookie(name, value, expiration, path, domain, secure, httponly);
time() + (60*60*24*7) 1 hafta
setcookie("name","james", time()+(86400*30);

//reading cookies
if(isset($_COOKIE["cookienamehere"])){
  $output=$_COOKIE["cookienamehere"]);
  echo $output;
}else{
  $output="";
}



######session:
in first page
session_start();
$_SESSION["name"]="success";
#####in second page:
$key=$_SESSION["name"];
echo $key;


///////////////
//class:
if(class_exists("clasname")){};
if(method_exists("methodname")){};




class Car{
	var $wheel=4; hamma joyda ishlatamiz
	public $max_speed="255 km/hour"; hamma joyda ishlatsa boladi
	protetced $hood=1; shu class va classni methodida, sub class ni ichidagina ishlaydi
	private=$engine=1; faqat shu class classni ichidagi methoda ishlaydi
	static $radio= "black"; static propertiga togridan togri acces qilib bolmaydi error qaytaradi,
	static propertiga Car::$radio orqali access qilsa boladi



	function goo{
		echo "hi";
		$this->wheel=5;
	}
}
$bmw= new Car;
$merc=new Car;
$bmw->goo();
echo $bmw->wheel;

echo Car::$radio;    // static propertiga shunday access qilinadi

class Plane extends Car{

}

class propertylar bor, methodlar construct bor;
boshqa page dan instance olib class ichidagi properti va methodlarni charishimiz ozgartirishimz mumkin;
construcytni esa chaqirish shart emas biz instance yasashimiz bilian construct auto ishlay ketadi chaqirmasak ham




////////////////////////////////
create file:


$file= "example.txt";
if($handle=fopen($file,"w")){      //create file
	fwrite($handle, "this text in the example.txt");      //  write into file

	echo $content=fread($handle, 10);         //read file 10 character oqidi
	echo $content=fread($handle, filesize($file));         //read whole file


	 
	fclose($handle);          //close file 
}else{
	echo "it is immposible wrtite file!"
}



$file= "example.txt";
if($handle=fopen($file,"r")){      //create file


	echo $content=fread($handle, 10);         //read file 10 character oqidi
	echo $content=fread($handle, filesize($file));         //read whole file


	 
	fclose($handle);          //close file 
}else{
	echo "it is immposible wrtite file!";
}
bu windows da shundayligicha ishlab ketadi lekin maco va linuxda permission berish kerak 
permission ubuntu22.04 da shunday beriladi: sudo chmod 777 /home/james/product/php-crud/cms/admin -R

unlink("example.txt");   //delete file




link orqali 1ta componentda boshqasiga props lar yuborishda <a href="index.php?id=<?=$name?> ></a>"        //qilib yuboriladi, bu ozi nimaga kerak?
malumotlarni ochirib yangilaganda qoshganda pageni rerendir qilish kerak ya'ni update qilish kerak lekin har safar malum bir amalni qilib keyin pageni manual update qilish yaxshimas
shuning uchun shu headerni yozib qoysak page auto update bolib ketadi va biz xoxlagan natijani beradi



mysqli_real_escape_string to clear action to be safe while login and register


session bilan cookie i farqi session serverda saqlanadi



//register
$row=mysqli_fetch_array($result);
$salt=$row['rantSalt];
$password=crypt($password,$salt);





//adding javascript into php:

  // echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='posts.php?delete={$post_id}'>Delete</a></td>";



	mysqli_real_escape_string     // it uses from mysql injection doing harmful things to our mysql




	 $stmt1 = mysqli_prepare($connection, "SELECT post_id, post_title, post_author, post_date, post_image, post_content FROM posts WHERE post_category_id = ?");

 $row = mysqli_fetch_array($result);
	 Fetches one row of data from the result set and returns it as an array. Each subsequent call to this function will return the next row within the result set, or null if there are no more rows.


isset()   bosh mi yoqmi tekshiradi 
Determine if a variable is considered set, this means if a variable is declared and is different than null.

mysqli_stmt_bind_param    bind qilib prepare qilarkan ?


ajaxni page refresh bolmasdan databasadan maulotlarni yukalb userga korsatishga aytiladi

//adding active class adding basenanem:


$category="active";     //add this code into class=""
$registration_class ="";
$pageNAme=basename($_SERVER['PHP_SELF]);      //qaysi pageda turganiligimizni aniqlab beradi


haqiqiy real preject;arda SMTP mail servicedan foydalanish kerak ekan ozimiz uchun esa PHPMAILER ham bolaverdi source:  
link:    https://help.krystal.uk/mail-channels/what-is-php-mail-and-how-does-it-differ-to-smtp#:~:text=Speed%20–%20Emails%20sent%20via%20SMTP,than%20one%20sent%20via%20PHP.&text=Security%20–%20Emails%20sent%20have%20to,with%20a%20username%20and%20password.&text=Deliverability%20–%20As%20the%20emails%20are,to%20a%20PHP%20mail%20address.


SMTP setting: https://www.lifewire.com/what-are-the-gmail-smtp-settings-1170854



PHPMAILER: You install packages by using the command composer require vendor/package Example - composer require phpmailer/phpmailer To install a specific version we need to add a : "colon " separating the package name and version, like so....composer require vendor/package:1.1.1
//
composer require phpmailer/phpmailer:5.2.28

code for dendGrid:  Jamshidbek2171491!@#
mail for send grid:   james@dataprotec.co.kr

API key for dataprotec: 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

// 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





composer hash:  // e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02




No security vulnerability advisories found
PSR-4 autoloading configured. Use "namespace Root\PhpCrud;" in src/
Include the Composer autoloader with: require 'vendor/autoload.php';
root@james:/home/james/product/php-crud# 


composer require phpmailer/phpmailer



In PHP, you can declare constants in two ways:
With define keyword

define('FOO', 1);
Using const keyword

const FOO = 1;







SebdGrid Data Protec API key:   // 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



//send OTP code 


$otp_code=md5(rand(1000,9999));
$query="INSERT INTO users (name,....) VALUES("$name","...")";
$result=mysqli($connection,$query);

if($result){

	$verify_email("$name","$email","$otp_code");   //function
	$_SESSION['status']=success;
	header("location: verify.php");
}else{
	echo "failed";
}



href='/register/$otp_code'





otp verify:
	// skilet: 1- reg qilib databasega malumotlarni joylayabdi, 

	data base
	otp varchar255
	activation_code varchar255
	status varchar255

	//
	str_shuffle(string $string): string
	substr(string $string, int $offset, ?int $length = null): string


	$otp_str=str_shuffle("0123456789");
	$otp=substr($otp_str, 0, 5);
	$act_str = rand(1000, 9999);
	$activation_code = str_shuffle("abcdefghijklmno".$act_str);
















	//simple example for ajax jquery:   yana bu narsa forgot.phpda if else bilan berilgan

		<!DOCTYPE html>
<html>
<head>
  <style>
    .container {
      display: none;
    }
    .container.active {
      display: block;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php
    $activeContainer = 'A';
    if (isset($_POST['toggle'])) {
      $activeContainer = $_POST['toggle'];
    }
  ?>

  <div id="containerA" class="container<?php if ($activeContainer === 'A') echo ' active'; ?>">
    <h2>Container A</h2>
    <button onclick="toggleContainers('B')">Switch to Container B</button>
  </div>
  <div id="containerB" class="container<?php if ($activeContainer === 'B') echo ' active'; ?>">
    <h2>Container B</h2>
    <button onclick="toggleContainers('A')">Switch to Container A</button>
  </div>

  <script>
    function toggleContainers(targetContainer) {
      var containerA = $('#containerA');
      var containerB = $('#containerB');

      $.ajax({
        url: '<?php echo $_SERVER['PHP_SELF']; ?>',
        method: 'POST',
        data: { toggle: targetContainer },
        success: function(response) {
          containerA.toggleClass('active', targetContainer === 'A');
          containerB.toggleClass('active', targetContainer === 'B');
        }
      });
    }
  </script>
</body>
</html>

-->