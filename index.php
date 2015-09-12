<?php
include 'config.php';
session_start();
function my_autoloader($class) {
    $file = "include/core/" . $class .".php";
	if(file_exists($file)){
		require $file;
	}
}

//include 'smarty/Smarty.class.php';
include 'smarty/SmartyBC.class.php';
spl_autoload_register('my_autoloader');
$page = new Page();
	
?>