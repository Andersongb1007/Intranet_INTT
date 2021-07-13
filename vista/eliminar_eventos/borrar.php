
<?php
  
  include "../../config/conectardb.php"; 

  include "../../modelo/acciones.php"; 
  include "../../modelo/eventos/eventos.php"; 
  
  $alert = eliminarEvento();
  $id_evento="";
  $nombre="";
  $apellido="";
  $titulo='';
  $descripcion="";
  $nombre_img='';
  $ruta_img='';
 
  $data = obtener1Evento($_GET['id_evento']);

  $id_evento  = $data['id_evento'];
  $nombre     = $data['nombre'];
  $apellido   = $data['apellido'];
  $titulo    = $data['titulo'];
  $descripcion=$data['descripcion'];
  $nombre_img     = $data['nombre_img'];
  $ruta_img    = $data['ruta_img'];
  	$subtitulo    = $data['subtitulo'];


    if(isset($_POST["tipo"]) and $_POST["tipo"]=="eliminar"){
        require_once("../../modelo/Administrador/administrador.php");
       eliminardocumento();
      }
  
?>





<!DOCTYPE html>
<html>
<head lang="es">

<?php
  include"../MainHead/head.php";
?>
  <title>Eliminar Evento <?php echo $id_evento; ?></title>


</head>

<body class="with-side-menu dark-theme dark-theme-blue">
<?php
  include"../MainHeader/header.php";
?>


  <div class="mobile-menu-left-overlay"></div>
  <?php
  include"../MainNav/nav.php";
?>
  <div class="mobile-menu-left-overlay"></div>


       
          <div class="page-content">
          <div class="container-fluid">

 
              <h2>Eliminar Documento</h2>
              
              <section class="card">
				<div class="card-block">
				

					<div class="row m-t-lg">
						<div class="col-md-12">
           
                             <h2><b>¿Está seguro de eliminar el siguiente evento del sistema?</b></h2><br>
           
          <div class="form-group row">
						<label class="col-sm-2 form-control-label">Codigo del Evento:</label>
							<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" value=" <?php echo $id_evento; ?>" readonly></p>
						</div>
					</div>

          <div class="form-group row">
						<label class="col-sm-2 form-control-label">Nombre:</label>
							<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" value="<?php echo $nombre; ?>" readonly></p>
						</div>
					</div>

         <div class="form-group row">
						<label class="col-sm-2 form-control-label">Apellido:</label>
							<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" value="<?php echo $apellido; ?>" readonly></p>
						</div>
					</div>

             <div class="form-group row">
						<label class="col-sm-2 form-control-label">Titulo:</label>
							<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" value="<?php echo $titulo; ?>" readonly></p>
						</div>
					</div>
          
          <div class="form-group row">
						<label class="col-sm-2 form-control-label">Subtitulo:</label>
							<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" value="<?php echo $subtitulo; ?>" readonly></p>
						</div>
					</div>

        
        
      

          <div class="row">
						<div class="col-xs-12">
							<fieldset class="form-group">
								<label class="form-label" for="descripcion">Descripcion del evento</label>
								<textarea rows="4" name="descripcion" id="descripcion" class="form-control" placeholder="Descripcion" data-autosize="" style="overflow: hidden; overflow-wrap: break-word; height: 2178px;"><?php echo $descripcion; ?></textarea>
							</fieldset>
						</div>
          </div><!--.row-->
           Nombre de la imagen del evento: <?php echo $nombre_img;?>
          
         
 <p>imagen del evento</p>
        <img src="<?php echo $ruta_img;?><?php echo $nombre_img;?>" alt="">
   
          <br><br>

          <form method="POST" action="">
            <input type="hidden" name="id_evento" value="<?php echo $id_evento; ?>">
            <input type="hidden" name="titulo" value="<?php echo $titulo; ?>">
     
              
                <div class="form-group centrar">							
									<input type="hidden" id="tipo" name="tipo" >
           						    <input type="submit"  class="btn btn-rounded btn-inline btn-primary" value="Eliminar">
									<button href="../eliminar_eventos/index.php" class="btn btn-rounded btn-inline btn-danger-outline"  > Volver</button>
								</div>		
          </form>
    </div> 
             			
                        
                  			
			        	</div>


                     
                    </section>
                </div>
            </div><!--.page-content--> 						
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
</body>
</body>
</html>