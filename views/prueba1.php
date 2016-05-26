<?php 

session_start();

	if(isset($_SESSION['login'])){
?>
<html>
<head>
	<title>Prueba inicio</title>
</head>
<body>
	<a href="">Bienvenido <?php echo $_SESSION['login'];?></a>
	<br>
	<a href="../assets/db/logout.php">Cerrar</a>

</body>
</html>
<?php
}
else{
	header("Location:../");
}


?>