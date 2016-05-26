
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
    $.post('assets/db/login.php',{
        email:email, pass:pass
    },function (data){
       // alert(data);
            if (data == 1) {         
                    window.location='views/prueba1.php';
                    

            }else{
                    $('.form-top-left').html("<h3>Iniciar sesión</h3><p>Email o Contraseña incorrectos<img src='assets/images/IconError.png' alt='Error' height=19px></img></p>");
                    $('.login-form input[type="text"], .login-form input[type="password"]').addClass('input-error');
            }
    });

}

function sendpass(){
    var email = $('#email').val();
    $.post('assets/db/recovery.php',{
        email:email
    },function (data1){
       // alert(data1);
        if (data1==0) {
            $('.form-top-left').html("<h3>Recuperar contraseña</h3><p>El email no se encuentra registrado<img src='assets/images/IconError.png' alt='Error' height=19px></img></p>");
            $('.login-form input[type="text"]').addClass('input-error');
        }else{
            $('.form-top-left').html("<h3>Recuperar contraseña</h3><p>Email enviado</p>");
        }
    });
}
