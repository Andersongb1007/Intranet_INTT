<?php
  
	include "../../config/conectardb.php"; 
	include "../../modelo/acciones.php"; 
  
	valida_usuario();
	
?>

<!DOCTYPE html>
<?php
    include"../MainHead/head.php";
?>
    <title>Comunicados</title>
</head>
<body class="with-side-menu dark-theme dark-theme-blue b_comunicado">
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
							<h3>Comunicados</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/">Inicio</a></li>
								<li class="active">Comunicados</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
		    <?php 
                include "../../config/conectardb.php";
                include "../../modelo/comunicados.php";
				
				obtenerTodosComunicados();
                
              
            ?>    
	    	</div><!--.container-fluid-->

	</div><!--.page-content-->

        <?php
        include"../MainJS/js.php";
    ?>
    

</body>
</html>