<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Inicia sesión</title>

	<link href="public/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="public/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="public/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="public/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="public/img/favicon.png" rel="icon" type="image/png">
	<link href="public/img/favicon.ico" rel="shortcut icon">
    <link rel="shortcut icon" href="public/img/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/estilos.css">
	<script language="javascript">
		function validar_formulario(){
			
			if(document.form1.correo.value=='' 
			|| document.form1.clave.value=='' 
			|| document.form1.captcha.value==''){
			
				alert("Todos los campos son obligatorios");
			
			} else {
				
		document.form1.action= "modelo/validar_usuario.php";
    document.form1.method= 'POST';
    document.form1.submit();
			}

		}
	</script>	
</head>
<body class="b_lr">

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
			
            <form class="sign-box" action="" name="form1"  method="post" id="form1">
                    <div class="sign-logo">
                        <img src="public/img/logo nuevo 2017-01.jpg" alt="Logo INTT">
                    </div>
                    <header class="sign-title">Intranet INTT</header>
                  
                    <?php
                        if (isset($_GET["m"])){
                            switch($_GET["m"]){
                                case "3";
                                ?>
                                  <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <i class="font-icon font-icon-warning"></i>
                                            !Error de validacion de captcha¡ vuelve a intentarlo 
                                        </div>
                 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal("ERROR!", "   !Error de validacion de captcha¡ vuelve a intentarlo¡", "error");
    </script>
                                        
                                <?php
                            break;
                                case "2";
                                    ?>
                                    
                                        <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <i class="font-icon font-icon-warning"></i>
                                            El correo y/o Contraseña son incorrectos.
                                        </div>
                                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal("ERROR!", "  El correo y/o Contraseña son incorrectos..", "error");
    </script>
               
                                    <?php
                                break;

                                case "1";
                                    ?>
         <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                    </button>
                 <i class="font-icon font-icon-warning"></i>
                                          Los campos estan vacios.
                     </div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript">
    swal("ERROR!", " Los campos estan vacios..", "error");
    </script>
                                    <?php
                                break;
                            }
                        }
                    ?>
                    
                    
                    <div class="form-group">
                        <input type="text" id="correo" name="correo" class="form-control" placeholder="Correo Electronico"/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="clave" name="clave" class="form-control" placeholder="Contraseña"/>
                    </div>
                   
                    <div >
				<br>
				<label>Captcha:<img class="captcha" src="captcha.php"></label>
				<br>
				<input name="captcha" type="text" id="captcha" value="" class="form-control" placeholder="captcha">
			</div>
            <br>
          
         

               
                <div class="float-right reset">
                            <a target="_blank" href="Solicitud/index.php">Planilla para crear nuevo usuario</a>
                        </div> 

<br>
                    <input type="hidden" id="tipo"  value="crear" class="form-control">
                    <input type="submit" onClick="validar_formulario()" class="btn btn-rounded"  value="Iniciar sesión">
					<p class="text-muted">&copy; INTT Todos los derechos reservados 2021</p>
                </form>

            </div>
        </div>
    </div>


    <script src="public/js/lib/jquery/jquery.min.js"></script>
    <script src="public/js/lib/tether/tether.min.js"></script>
    <script src="public/js/lib/bootstrap/bootstrap.min.js"></script>
    <script src="public/js/plugins.js"></script>
    <script type="text/javascript" src="public/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
    
<script src="public/js/app.js"></script>
</body>
</html>

