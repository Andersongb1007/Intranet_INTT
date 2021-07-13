<?php
  
	include "../../config/conectardb.php"; 

	include "../../modelo/acciones.php"; 
	include "../../modelo/comunicador/comunicador.php"; 
	valida_usuario();
	
    if(isset($_POST["tipo"]) and $_POST["tipo"]=="crear"){
        require_once("../../modelo/Administrador/administrador.php");
		guardar_comunicado();
      
    }


    
?>





<!DOCTYPE html>
<html>
<head lang="es">

<?php
    include"../MainHead/head.php";
?>
	<title>Crear Comunicado</title>


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
		
<?php
			   if (isset($_GET["m"])){
				   switch($_GET["m"]){
				
					   case "3";
					   ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
   swal("ERROR!", " todos los campos son obligatorios", "error");
</script>
					   <?php
				   break;
					   case "2";
						   ?>
						   
																  
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
swal("ERROR!", "Error al agregar el comunicado.", "error");
</script>
						   <?php
					   break;

					   case "1";
						   ?>
			   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			   <script type="text/javascript">
			   swal("Bien!", "Se agrego satifactoriamente el contenido, gracias!", "success");
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
						<h2 class="titulo2">crear Comunicados</h2>
						<h3 class="subtitulo">Complete el formulario</h3>
							<form  action="" name="form1" name="registro_noticia" method="POST"  entype="multipart/form-data" enctype="multipart/form-data">
								
                         
				

					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Nombre</label>
							<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="nombre" name="nombre" readonly value="<?php  echo $_SESSION['usuario']['nombres']?>"  placeholder="Fuente "></p>
						</div>
					</div>	<div class="form-group row">
						<label class="col-sm-2 form-control-label">Apellido</label>
							<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="apellido" name="apellido" readonly value="<?php  echo $_SESSION['usuario']['apellidos']?>"  placeholder="Fuente "></p>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Titulo</label>
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
								<label class="form-label" for="exampleInputEmail1">Descripcion</label>
								<textarea rows="4" name="descripcion" id="descripcion" class="form-control" placeholder="Descripcion" data-autosize="" style="overflow: hidden; overflow-wrap: break-word; height: 2178px;"></textarea>
							</fieldset>
						</div>
                     </div><!--.row-->
				
<!--.imagen-->
                     <div class="row">
                        <input type="file" class="form-control col-sm-10" id="comunicado" name="comunicado" >
                    </div>
	 <div class="form-group">
								

                    <br>
								<div class="form-group centrar">
									
									<input type="hidden" id="tipo" name="tipo" value="crear">
           						    <input type="submit"  class="btn btn-rounded btn-inline btn-primary" value="Crear ">
									<button type="reset" class="btn btn-rounded btn-inline btn-danger-outline"  id="restablecer" value="Restablecer">Restablecer</button>
								</div>
							</form>
						</div>

						<div class="col-md-6">
						<h5 class="subtitulo"> Guia de como crear Comunicados.</h5>
						
							<li><p class="texto"> El titulo <span class="negrita">no</span> pueden parecerse al titulo o subtitulo de otra noticia, ya que esto generara error y no se guardara la información    </p></li>
							<li><p class="texto"> La imagen es obligaría.</p></li>
							<li><p class="texto"> La descripción no puede ser exactamente la misma que otra noticia ya que no se guardara.</p></li>
						
							<p class="texto">Siguiendo estos pasos correctamente, la información suministrada se guardara y creara una noticia, comunicado o evento dependiendo de la categoría que haya elegido  </p>
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