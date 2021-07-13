<?php
  
	include "../../config/conectardb.php"; 
	include "../../modelo/acciones.php"; 
    include "../../modelo/eventos/eventos.php";
	valida_usuario();
	
?>

<!DOCTYPE html>
<?php
    include"../MainHead/head.php";
?>
    <title>Eventos</title>
</head>
<body class="with-side-menu dark-theme dark-theme-blue b_evento">
<?php
    include"../MainHeader/header.php";
?>


	<div class="mobile-menu-left-overlay"></div>
    <?php
    include"../MainNav/nav.php";
?>
	<div class="page-content">
	<div class="container-fluid">			
    <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Eventos</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/">Inicio</a></li>
								<li class="active">Eventos</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
		    <?php 
				obtenerTodasEventos();
            ?>    

	    	</div><!--.container-fluid-->

	</div><!--.page-content-->

        <?php
        include"../MainJS/js.php";
    ?>

</body>
</html>