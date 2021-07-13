<header class="site-header">
	    <div class="container-fluid">
	        <a href="../home/" class="site-logo-text">INTRANET INTT</a>
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="../../public/img/Usuario.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="../MiPerfil/index.php"><span class="font-icon glyphicon glyphicon-user"></span>Mi Perfil.</a>
	                            
	                            <a class="dropdown-item" href="../../public/documentos/Manual de Usuario.pdf" download=""><span class="font-icon glyphicon glyphicon-question-sign"></span>Manual de usuario.</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="../Logout/salir.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Salir.</a>
	                    </div>
	                    </div>
	            </div><!--.site-header-shown-->
	            <div class="mobile-menu-right-overlay"></div>
	            <div class="site-header-collapsed">
                    <div class="dropdown dropdown-typical">
                    <a href="../MiPerfil/" class="dropdown-toggle no-arr">
                        <span class="font-icon font-icon-user"></span>
                <span class="lblcontactonomx"><?php  echo $_SESSION['usuario']['nombres']?> <?php  echo $_SESSION['usuario']['apellidos']?></span>
                    </a>
                </div>
			
				<div class="dropdown dropdown-typical">
                    <a href="#" class="dropdown-toggle no-arr">
                    <span class="lblcontactonomx"><?php if ($_SESSION["usuario"]["idsexo"] == '1' ) {  ?>
		Nivel de acceso:  <?php

			if ($_SESSION["usuario"]["id_rol"] == '1' ) { 
			echo "Usuario "; }
			if ($_SESSION["usuario"]["id_rol"] == '2' ) { 
				echo "Administrador"; }
				if ($_SESSION["usuario"]["id_rol"] == '3' ) { 
					echo "Comunicador."; } 
			?>
                <?php 
            }else{
                ?>  
                
        Nivel de acceso: 			

		<?php if ($_SESSION["usuario"]["id_rol"] == '1' ) { 
		echo "Usuario Comun"; }
		if ($_SESSION["usuario"]["id_rol"] == '2' ) { 
				echo "Administradora"; }
				if ($_SESSION["usuario"]["id_rol"] == '3' ) { 
					echo "Comunicadora."; } 
            }
        ?>
                    </a>
                </div>
	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->