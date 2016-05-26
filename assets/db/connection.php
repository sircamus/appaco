<?php
$con = mysqli_connect("localhost", "root", "", "db_aco");
if ($con==true) {

}
else{
echo "Hay error de conexion: ". mysqli_connect_error();	
exit();
}
?>
