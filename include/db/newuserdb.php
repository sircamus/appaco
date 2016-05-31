<?php
include('connection.php');
$user=$_POST['user'];

$query="call users('$user');";
$res=mysqli_query($con, $query);
$row=mysqli_fetch_row($res);
if ($row==true) {
	echo 2;
}else{
	echo 1;
}
?>