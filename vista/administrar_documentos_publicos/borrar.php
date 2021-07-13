
<?php
  
  include "../../config/conectardb.php"; 

  include "../../modelo/acciones.php"; 
  include "../../modelo/documentos/documentos.php"; 
  
  $alert = eliminardocumento();
  $id_documento="";
  $nombre="";
  $apellido="";
  $titulo='';
  $nombre_documento='';
  $ruta_documento='';
 
  $data = obtener1documento($_GET['id_documento']);

  $id_documento  = $data['id_documento'];
  $nombre     = $data['nombre'];
  $apellido   = $data['apellido'];
  $titulo    = $data['titulo'];
  $nombre_documento     = $data['nombre_documento'];
  $ruta_documento    = $data['ruta_documento'];


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
  <title>Eliminar Documento titulo <?php echo $titulo ?></title>


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
           
                             <h2><b>¿Está seguro de eliminar el siguiente documento del sistema?</b></h2><br>
                <p> Identificador del documento:   <?php echo $id_documento; ?></p>
         <p> Nombre:   <?php echo $nombre; ?></p>
    
          <p> 
            Apellido:   <?php echo $apellido; ?>
         </p>

          <p> 
         Titulo:  <?php echo $titulo; ?>

          </p>

        
          <p >

           Nombre del documento: <?php echo $nombre_documento;?>
          
          </p>

     
     
          <br><br>

          <form method="POST" action="">
              <input type="hidden" name="id_documento" value="<?php echo $id_documento; ?>">
            <input type="hidden" name="nombre_documento" value="<?php echo $nombre_documento; ?>">
             <input type="hidden" name="ruta_docomento" value="<?php echo $ruta_documento; ?>">
              <input type="hidden" name="titulo" value="<?php echo $titulo; ?>">
           
       
              
                <div class="form-group centrar">							
									<input type="hidden" id="tipo" name="tipo" >
           						    <input type="submit"  class="btn btn-rounded btn-inline btn-primary" value="Eliminar">
									<button class="btn btn-rounded btn-inline btn-danger-outline none"><a  href="../administrar_documentos_publicos/index.php" class="none">volver</a></button>
                
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
s


</body>
</body>
</html>