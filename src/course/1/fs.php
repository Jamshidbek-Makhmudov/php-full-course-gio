<?php 
//scandir — List files and directories inside the specified path
$dir=scandir(__DIR__);
echo "type is ".gettype($dir);

echo "<pre>";
print_r($dir);
echo "<pre>";

var_dump(is_dir($dir[0]));  //directoria mi? true
var_dump(is_file($dir[0])); //filemi?        false
//create new directory: mkdir
//delete directory:   rmdir
//mkdir("utils/io");
//mkdir("help");

if(file_exists("fs.txt")){
	echo filesize("fs.txt");
}else{
	echo "file not found";
}
//yana file haqida qoshimcha malumotlar bor xoxlaseng korib ketseng boladi
?>