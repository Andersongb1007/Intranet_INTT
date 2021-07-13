<?php
  
	include "../../config/conectardb.php"; 
	include "../../modelo/acciones.php"; 
  
	valida_usuario();
  include "../../modelo/comunicados/comunicados.php";
	
?>

<!DOCTYPE html>
<?php
    include"../MainHead/head.php";
?>
    <title>Eliminar Comunicado</title>
</head>
<body class="with-side-menu dark-theme dark-theme-blue">
                <?php
                        if (isset($_GET["m"])){
                            switch($_GET["m"]){
                                case "2";
                                    ?>  									
  		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
		 swal({
				title: "ERROR!!",
				text: "Error al eliminar el comunicado!",
				icon: "error",
				button: "Verificar!",
				});
         </script>
                                    <?php
                                break;
                                case "1";
                                    ?>
                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
						<script type="text/javascript">
						swal("Bien!", "Se ha eliminado sin problemas", "success");
						</script>
                                    <?php
                                break;
                            }
                        }
                    ?>
    <?php
        include"../MainHeader/header.php";
    ?>
    <?php
        include"../MainNav/nav.php";
    ?>
	<div class="mobile-menu-left-overlay"></div>
	<div class="page-content">
    <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Eliminar Comunicados</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/">Inicio</a></li>
								<li class="active">Eliminar Comunicados</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
			<div class="container-fluid">
                 <div class="table-responsive">
				<table id="tablaUsuarios" class="table table-bordered">
				<thead class="thead-dark ">
					<tr>
						<th width="50">Codigo </th>
						<th width="100">Nombre</th>
						<th width="100">Apellido</th>
						<th width="100">Titulo</th>
                        <th width="100">Subtitulo</th>
                        <th width="200">Descripcion</th>
                        <th width="300">Imagen</th>
                        <th width="120">Fecha</th>
                        <th width="20">Eliminar</th>    
                                      
					</tr> 
				</thead>
		<tbody>
			<?php
    
    obtenerComunicado();
?>
				
			


            </div>
		</div><!--.container-fluid-->
	</div><!--.page-content-->

        <?php
        include"../MainJS/js.php";
    ?>
</body>
</html> 