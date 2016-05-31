<?php
include('connection.php');
 $pass=$_POST['password'];
 $email=$_POST['email'];

$query="call newpassword('$pass', '$email');";
$res=mysqli_query($con, $query);
if ($res==true) {
	echo 1;
}else{
	mysqli_connect_error();
}

?>