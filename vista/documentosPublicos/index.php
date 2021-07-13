<?php
  
	include "../../config/conectardb.php"; 
	include "../../modelo/acciones.php"; 
  
	valida_usuario();
    if(isset($_POST["tipo"]) and $_POST["tipo"]=="crear"){
        require_once("../../modelo/documentos/documentos.php");
		guardar_documento();
      
    }
	
?>

<!DOCTYPE html>
<?php
    include"../MainHead/head.php";
?>
    <title>Documentos Públicos</title>
</head>
<body class="with-side-menu dark-theme dark-theme-blue">
<?php
    include"../MainHeader/header.php";
?>



    <?php
    include"../MainNav/nav.php";
?>
	<div class="mobile-menu-left-overlay"></div>
	<div class="page-content">
			<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Documentos Públicos</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/">Inicio</a></li>
								<li class="active">Documentos Públicos</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
			<?php
    include"../../modelo/documentos/documentos.php";
   obtenerDocumentosPublicos();
?>
				
			

		</div>
	</div><!--.page-content-->


		</div><!--.container-fluid-->
	</div><!--.page-content-->

        <?php
        include"../MainJS/js.php";
    ?>
</body>
</html> 