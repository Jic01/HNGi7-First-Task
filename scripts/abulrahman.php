<?php

$name = "Yusuf Abdulrahman";
$hng_id = "HNG-06182";
$language = "PHP";
$email = "abulrahmanyusuf125@gmail.com";

function show_info(){ 
	global $name, $hng_id, $language, $email;
	return "Hello World, this is $name with HNGi7 ID $hng_id using $language for stage 2 task";
}

echo(show_info());
?>
