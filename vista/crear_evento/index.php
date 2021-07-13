<?php
	include "../../config/conectardb.php"; 
	include "../../modelo/acciones.php"; 
	valida_usuario();
    if(isset($_POST["tipo"]) and $_POST["tipo"]=="crear"){
        require_once("../../modelo/eventos/eventos.php");
		AgregarEvento();
    }
?>
<!DOCTYPE html>
<html>
<head lang="es">

<?php
    include"../MainHead/head.php";
?>
	<title>Crear Evento</title>
</head>
<body class="with-side-menu dark-theme dark-theme-blue">
<?php
    include"../MainHeader/header.php";
?>


	
    <?php
    include"../MainNav/nav.php";
?>

         
			<div class="page-content">
			<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Crear Eventos</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/">Inicio</a></li>
								<li class="active">Crear Eventos</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
<?php
			   if (isset($_GET["m"])){
				   switch($_GET["m"]){
					case "5";
					?>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
		swal("ERROR!", " Rellenar todos los campos.", "error");
		</script>
							<?php
						break;
						case "4";
						?>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
		swal("ERROR!", " Error al cargar la imágen", "error");
		</script>
						<?php
					break;
					   case "3";
					   ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
   swal("ERROR!", " El título del evento ya ha sido creado.", "error");
</script>
					   <?php
				   break;
					   case "2";
						   ?>
						   
																  
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
swal("ERROR!", "Error al agregar el evento.", "error");
</script>
						   <?php
					   break;

					   case "1";
						   ?>
			   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			   <script type="text/javascript">
			   swal("Bien!", "Se ha agregado satifactoriamente el evento.", "success");
			   </script>

		   
						   <?php
					   break;
				   }
			   }
		   ?>
			<section class="card">
				<div class="card-block">
				

					<div class="row m-t-lg">
						<div class="col-md-6">
						<h2 class="titulo2">crear Evento</h2>
						<h3 class="subtitulo">Complete el formulario</h3>
							<form  action="" name="form1" name="registro_noticia" method="POST"  entype="multipart/form-data" enctype="multipart/form-data">
								
                         
				

					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Nombre</label>
							<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="nombre" name="nombre" value="<?php  echo $_SESSION['usuario']['nombres']?>" readonly placeholder="Fuente "></p>
						</div>
					</div>	<div class="form-group row">
						<label class="col-sm-2 form-control-label" for="apellido">Apellido</label>
							<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="apellido" name="apellido" value="<?php  echo $_SESSION['usuario']['apellidos']?>" readonly placeholder="Fuente "></p>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Título</label>
							<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo "></p>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Subtitulo </label>
							<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Subtitulo "></p>
						</div>
					</div>

					
					<div class="row">
						<div class="col-xs-12">
							<fieldset class="form-group">
								<label class="form-label" for="descripcion">Descripcion</label>
								<textarea rows="4" name="descripcion" id="descripcion" class="form-control" placeholder="Descripcion" data-autosize="" style="overflow: hidden; overflow-wrap: break-word; height: 2178px;"></textarea>
							</fieldset>
						</div>
                     </div><!--.row-->
				
<!--.imagen-->
                     <div class="row">
                        <input type="file" class="form-control col-sm-10" id="archivo" name="archivo" >
                    </div><br>
    						<div class="form-group centrar">						
									<input type="hidden" id="tipo" name="tipo" value="crear">
           						    <input type="submit"  class="btn btn-rounded btn-inline btn-primary" value="Crear ">
									<button type="reset" class="btn btn-rounded btn-inline btn-danger-outline"  id="restablecer" value="Restablecer">Restablecer</button>
								</div>
							</form>
						</div>

						<div class="col-md-6">
						<h5 class="subtitulo"> Pequeña guia de cómo crear algún evento</h5>
						
							<p class="texto"><li> Es necesario que el título <span class="negrita">no</span> sea igual a otro evento ya creado, de lo contrario se mostrará un error.</p></li>
							<p class="texto"><li> Es obligatorio ingresar una imágen.</p></li>
							<p class="texto"><li> La descripción suministrada no puede ser la misma a la de otro evento.</p></li>
						
							<p class="texto">Al seguir estos pasos el sistema creará dicho evento automaticamente sin ningún error.</p>
						</div>
					</div><!--.row-->
					
				</div>
				
			</section>
			

		</div>
	</div><!--.page-content-->
	       
	

	
    <?php
        include"../MainJS/js.php";
    ?>


<script>
		$(function() {
			autosize($('textarea[data-autosize]'));
		});
	</script>
<script type="text/javascript">
  function sololetras(e) {
    tecla = (document.all) ? e.keyCode : e.which; 
    if (tecla==8) return true; // backspace
        if (tecla==32) return true; // espacio
        if (e.ctrlKey && tecla==86) { return true;} //Ctrl v
        if (e.ctrlKey && tecla==67) { return true;} //Ctrl c
        if (e.ctrlKey && tecla==88) { return true;} //Ctrl x
 
        patron = /^[a-zA-z\s\ñ\Ñ]+$/; //patron
 
        te = String.fromCharCode(tecla); 
        return patron.test(te); // prueba de patron
}
</script>     
</body>
</body>
</html>