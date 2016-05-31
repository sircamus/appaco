<!DOCTYPE html>
<html lang="es">
    <head>
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
                        			<h3>Iniciar sesión</h3>
                            		<p>Escribe tu email y contraseña para ingresar</p>
                        		</div>
                        		<div class="form-top-right" >
                        			<img src="assets/images/Acologo.png" alt="Academic Consulting" class="logo">
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="javaScript:validar()" method="post" class="login-form">
                                <div id="errorLog"></div>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="email">Email:</label>
			                        	<input type="text" name="email" placeholder="Email" class="form-username form-control" id="email">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="password">Contraseña:</label>
			                        	<input type="password" name="password" placeholder="Contraseña" class="form-password form-control" id="password">
			                        </div>
			                        <button type="submit" class="btn">INICIAR SESIÓN</button>
                                    <div class="form-group">
                                    <br/>
                                        <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a href="retrieve.php" class="forgot">Olvidé mi contraseña</a>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a href="newuser.php" class="newuser pull-right">Nuevo usuario</a>
                                        </div>
                                        </div>
                                    </div>
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
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
