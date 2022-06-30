<?php

$host  = 'localhost';
$user  = 'root';
$pass  = '';
$db    = 'kredit';

$connect = new mysqli($host, $user, $pass, $db);
if($connect->connect_error){
	echo 'Terjadi Kesalahan';
}

?>
