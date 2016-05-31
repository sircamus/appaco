<?php
include("connection.php");
$email=$_POST['email'];
$query ="call sendemail('$email');";
$res=mysqli_query($con, $query);
$row=mysqli_fetch_assoc($res);
if ($row==true) {
//	echo 1;
		$asunto = 'Academic Consulting Datos de recuperación de cuenta';
$mail_contacto=$_POST["email"];
require_once('../bin/class.phpmailer.php');

include("../bin/class.smtp.php");
$mail = new PHPMailer();
$mail->IsSMTP();                            // telling the class to use SMTP
$mail->SMTPAuth   = true;                    // enable SMTP authentication
$mail->SMTPSecure = "ssl";                    // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";        // sets GMAIL as the SMTP server
$mail->SMTPDebug  = 2;                        // enables SMTP debug information (for testing)
                                            // 1 = errors and messages
                                            // 2 = messages only
$mail->Port       = 465;                    // set the SMTP port
$mail->Username   = "dread1692@gmail.com";    // GMAIL username
$mail->Password   = "dreadlock16";            // GMAIL password
$mail->SetFrom = "AcademicConsulting@cuenta.com";
$mail->FromName = "Academic Consulting";
$mail->Subject    = "AcademicConsulting datos de recuperación";
//$mail->AltBody    = "This is the body when user views in plain text format"; //Text Body
$mail->WordWrap   = 50; // set word wrap

$mail->MsgHTML("
	<html> 
<head> 
   <title>Academic Consulting Datos de recuperación de cuenta</title> 
</head> 
<body> 
<div>
<a href=''><img src='../assets/images/Acologo.png' alt='Academic Consulting' class='logo'></a>
</div>
<div>
<h1>-----------------------------------------</h1> 
<p>
<strong> Email:</strong> 
".$_POST['email']."
<br>
<strong>Contraseña:</strong>
".$row['password']."
<br>
</p> 
</div>
</body> 
</html> 
	");


$mail->AddReplyTo($mail_contacto,$row['nombre']);//Mail dejado en el comentario

$mail->AddAddress($mail_contacto,$row['nombre']);//Destinatario

$mail->IsHTML(true); // send as HTML
$mail->CharSet = 'UTF-8';
if(!$mail->Send()) {
  echo ('<span style="color:#FF0000">Error: No se pudo enviar el email de validación.</span><br>');
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  //echo "Se envió un email de validación a su dirección de correo electrónico.";
	echo 1;
}
//################################################################################################
end:

	
}
else{
		echo 0;
}
?>
