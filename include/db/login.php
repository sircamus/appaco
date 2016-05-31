<?php
include("connection.php");
  $email=$_POST['email'];
  $pass=$_POST['pass'];
//$query="SELECT * from usuario where email = '$email' AND password = '$pass';";
  $query="call users('$email','$pass');";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_row($res);
if ($row==true) {
	session_start();
  	$_SESSION['login'] = $email;
  	echo 1;
}else{
	echo 2;
}
?>
