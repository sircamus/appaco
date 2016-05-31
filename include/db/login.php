<?php
include("connection.php");
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $query_valida ="call users('$email');";
$res_val=mysqli_query($con, $query_valida);
$row_val=mysqli_fetch_assoc($res_val);
if ($row_val==true) {
	if ($row_val['password']=="") {
		//echo "Ingresa una nueva contraseña";
			echo 0;
	}else{
		if ($row_val['password']== $pass) {
			session_start();
  			$_SESSION['login'] = $email;
				echo 1;
			}else{
				echo 2;
			}	
	}
}
else{
	echo 2;
}
?>
