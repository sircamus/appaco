
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch("assets/images/background.jpg");
    
    /*
        Form validation
    */
    $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.login-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });
    
    
});
function validar(){
    var email = $('#email').val() , pass =$('#password').val();
    $.post('include/db/login.php',{
        email:email, pass:pass
    },function (data){
<<<<<<< HEAD
        //alert(data);
            if (data==0) {
                window.location='setpass.php?email='+email;

            }else{
                if (data == 1) {
                    window.location='views/home.php';

                }else{
                    if (data== 2) {
                        $('#errorLog').html("<div class='alert alert-danger' role='alert'><p><i class='glyphicon glyphicon-remove'></i> Email o contraseña incorrectos</p></div>");
                        $('.login-form input[type="text"], .login-form input[type="password"]').addClass('input-error');

                    }else{
                        alert(data);
                    }
                }

=======
       // alert(data);
            if (data == 1) {         
                    window.location='views/home.php';
            }else{
                    $('#errorLog').html("<div class='alert alert-danger' role='alert'><p><i class='glyphicon glyphicon-remove'></i> Email o contraseña incorrectos</p></div>");
                    $('.login-form input[type="text"], .login-form input[type="password"]').addClass('input-error');
>>>>>>> master
            }
    });

}

function sendpass(){
    var email = $('#email').val();
    $.post('include/db/recovery.php',{
        email:email
    },function (data1){
       // alert(data1);
        if (data1==0) {
            $('#errorLog').html("<div class='alert alert-danger' role='alert'><p><i class='glyphicon glyphicon-remove'></i> El email indicado no existe, verifícalo nuevamente</p></div>");
            $('.login-form input[type="text"]').addClass('input-error');
        }else{
            $('#errorLog').html("<div class='alert alert-success' role='alert'><p><i class='glyphicon glyphicon-ok'></i> Email enviado correctamente</p></div>");
            $('#btn-enviar').html("<a href='index.php' class='btn white-txt'>INICIAR SESIÓN</a>");
<<<<<<< HEAD
            $('')
=======
>>>>>>> master
        }
    });
}

function nuevacontraseña(){
        var password = $('#pass1').val(), pass = $('#pass2').val();
        var email = $('#hidden').val();

        if (password==pass) {
            $.post('include/db/newpassword.php',{password:password, email:email},function(data2){
                alert(data2);

                if (data2 == 1) {
                    $('#errorLog').html("<div><p>Contraseña creada con éxito. <a href='index.php'>INICIA SESIÓN</a></p></div>");
                }else{                                
                    alert(data);
                }

            });        
        }else{
            
            $('#errorLog').html("<div class='alert alert-danger' role='alert'><p><i class='glyphicon glyphicon-remove'></i> Verifica que las contraseñas sean iguales</p></div>");
            
        }
}
function newuser(){
    var user = $('#email').val();
    $.post('include/db/newuserdb.php',{user:user},function(data3){
        
        if (data3==1) {
            $('#errorLog').html("<div class='alert alert-danger' role='alert'><p><i class='glyphicon glyphicon-remove'></i> El usuario no existe que mas va a realizar?</p></div>");         
        }else{
            if (data3==2) {
                $('#errorLog').html("<div class='alert alert-danger' role='alert'><p><i class='glyphicon glyphicon-remove'></i> El usuario ya existe</p></div>");         
            }else{
                alert(data3);    
            }
        }
    });
}