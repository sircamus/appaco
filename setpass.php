<!DOCTYPE html>
<html lang="es">
    <head>
<<<<<<< HEAD

=======
    	<meta http-equiv="Expires" content="0" /><!--++-->
        <meta http-equiv="Pragma" content="no-cache" /><!--++-->
>>>>>>> master
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iniciar Sesión | Academic Consulting</title>

        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/login/form-elements.css">
        <link rel="stylesheet" href="assets/css/login/style.css">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="top-content">	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Crear contraseña</h3>
                            		<p>Escribe tu nueva contraseña, ambos campos deben coincidir</p>
                        		</div>
                        		<div class="form-top-right" >
                        			<img src="assets/images/Acologo.png" alt="Academic Consulting" class="logo">
                        		</div>
                            </div>
                            <div class="form-bottom">
<<<<<<< HEAD
			                    <form role="form" action="javascript:nuevacontraseña();" method="post" class="login-form">
                                    <div id="errorLog"></div>
			                    	<div class="form-group">
                                        <input type="hidden" id="hidden" value="<?php echo $_GET['email']; ?>"> 
=======
			                    <form role="form" action="setpass.php" method="post" class="login-form">
			                    	<div class="form-group">
>>>>>>> master
			                    		<label class="sr-only" for="email">Contraseña:</label>
			                        	<input type="password" name="pass1" placeholder="Contraseña" class="form-password form-control" id="pass1">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="password">Repite tu contraseña:</label>
			                        	<input type="password" name="pass2" placeholder="Repite tu contraseña" class="form-password form-control" id="pass2">
			                        </div>
			                        <button type="submit" class="btn">TERMINAR</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/jquery-1.12.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
<<<<<<< HEAD
        
        
=======
        <script src="assets/js/scripts.js"></script>
        <script type="text/javascript">  if(history.forward(1)){location.replace( history.forward(1) );}</script>
>>>>>>> master
    </body>
</html>
