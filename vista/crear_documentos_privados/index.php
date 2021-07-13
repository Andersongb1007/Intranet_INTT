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
    <title>Crear Documentos Privados</title>
</head>
<body class="with-side-menu dark-theme dark-theme-blue">
<?php
    include"../MainHeader/header.php";
?>
    <?php
    include"../MainNav/nav.php";
?>
	<div class="mobile-menu-left-overlay"></div>
	
	<?php
                        if (isset($_GET["m"])){
                            switch($_GET["m"]){
								case "4";
                                ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
        <script type="text/javascript">
			
			swal({
					title: "ERROR!!",
					text: "El documento que intenta subir, ya existe!",
					icon: "error",
					button: "Verificar!",
				});
         </script>
                                <?php
                            break;

                                case "3";
                                ?>
       	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	    <script type="text/javascript">
			//swal("ERROR!", "Los campos estan vacios", "error");
			swal({
					title: "ERROR!!",
					text: "Los campos estan vacios!",
					icon: "error",
					button: "Continuar!",
				});
         </script>
                                <?php
                            break;
                                case "2";
                                    ?>
                                    
                                       									
  		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
		
		 swal({
				title: "ERROR!!",
				text: "Error al agregar la documento, puede que el documento sea demasiado pesado!",
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
						swal("Bien!", "Se ha agregado correctamen el documento.", "success");
						</script>

					
                                    <?php
                                break;
                            }
                        }
                    ?>
	<div class="page-content">
			<div class="container-fluid">
		<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Crear Documentos Privados</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/">Inicio</a></li>
								<li class="active">Crear Documentos Privados</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
			<section class="card">
				<div class="card-block">
				
					<div class="row m-t-lg">
						<div class="col-md-12">
						<h2 class="titulo2">Crear Documentos Privados</h2>
						<h3 class="subtitulo">Complete el formulario</h3>
							<form  action="" name="form1"  method="POST" entype="multipart/form-data" enctype="multipart/form-data">
								
								<!-- nombre -->
								<div class="form-group">
									<label class="form-label" for="nombres">Nombre del usuario</label>
									<div class="form-control-wrapper">
										<input id="nombres" class="form-control" name="nombres" type="text" placeholder="Nombre del usuario" maxlength="50" onkeydown="return sololetras(event)"  value="<?php  echo $_SESSION['usuario']['nombres']?>" readonly required="">
									</div>
								</div>

								<!-- apellido -->
								<div class="form-group">
									<label class="form-label" for="apellidos">Apellido del usuario</label>
									<div class="form-control-wrapper">
										<input id="apellidos" class="form-control" name="apellidos" type="text" placeholder="Apellido del usuario" maxlength="50" onkeydown="return sololetras(event)"  value="<?php  echo $_SESSION['usuario']['apellidos']?>" readonly required="">
									</div>
								</div>

                                <!-- Titulo de documento -->
								<div class="form-group">
								  <label class="form-label" for="titulo">Titulo del Documento:</label>
									<div class="form-control-wrapper">
										<input id="titulo" class="form-control" name="titulo"  type="text" placeholder="Titulo del documento" maxlength="20" onkeydown="return sololetras(event)"  >
									</div>
								</div>


                                <!--documento -->
								<div class="form-group">
									<label class="form-label" for="documento">Documento:</label>
									<div class="form-control-wrapper">
										<input id="documento" class="form-control" name="documento" type="file" placeholder="Documento"  >
									</div>
								</div>
							
							
							<div class="form-group centrar">
							
						
								<input type="hidden"  name="estado" value="<?php  echo $_SESSION['usuario']['id_area']?>">
							</div>

							
								<div class="form-group centrar">
									
									<input type="hidden" id="tipo" name="tipo" value="crear">
           						    <input type="submit"  class="btn btn-rounded btn-inline btn-primary" value="Crear Documento">
									<button type="reset" class="btn btn-rounded btn-inline btn-danger-outline"  id="restablecer" value="Restablecer">Restablecer</button>
								</div>
							</form>
						</div>

						
				
			</section>
			

		</div>
	</div><!--.page-content-->


		</div><!--.container-fluid-->
	</div><!--.page-content-->

        <?php
        include"../MainJS/js.php";
    ?>
</body>
</html> 