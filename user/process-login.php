<?php
include '../core/core.php';

$username = (htmlentities($_POST['username']));
$password = (htmlentities(md5($_POST['password'])));

$query    = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$runquery = $connect->query($query);

if($runquery->num_rows > 0){
	session_start();
	$_SESSION['username'] = $username;
	header("Location: page-index.php");
} else {
	echo "<script>alert('Username atau Kata Sandi Salah!');window.location.href='../user/login.php';</script>";
}

?>
