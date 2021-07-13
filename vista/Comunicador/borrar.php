
<?php
  
  include "../../config/conectardb.php"; 

  include "../../modelo/acciones.php"; 
  include "../../modelo/comunicador/comunicador.php"; 
  
  $alert = eliminarNoticia();
  $idnoticia="";
  $nombre="";
  $apellido="";
  $noticia='';
  $fuente='';
  $estatus='';
  $opcion='';

  $data = obtener1Noticia($_GET['idnoticia']);

  $idnoticia  = $data['idnoticia'];
  $nombre     = $data['nombre'];
  $apellido   = $data['apellido'];
  $noticia    = $data['noticia'];
  $fuente     = $data['fuente'];
  $estatus    = $data['estatus'];
  $rutaimg    = $data['rutaimg'];
  $nombreimg  = $data['nombreimg'];
  $titulo     = $data['titulo'];
  $fecha      = $data['fecha'];
  
?>





<!DOCTYPE html>
<html>
<head lang="es">

<?php
  include"../MainHead/head.php";
?>
  <title>Modificar Noticia la noticia <?php echo $idnoticia ?></title>


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

 
              <h2>Actualizar Noticia</h2>
              
              <section class="card">
				<div class="card-block">
				

					<div class="row m-t-lg">
						<div class="col-md-12">
           
                             <h2><b>¿Está seguro de eliminar la siguiente noticia del sistema?</b></h2><br>
         
         <p>Nombre:   <?php echo $nombre; ?></p>
    
          <p> 
          Apellido:   <?php echo $apellido; ?>

        </p>

          <p> 
         Titulo:  <?php echo $titulo; ?>

          </p>

          <p >

          Descripcion:   <?php echo $noticia; ?>

          </p>

          <p> 

          Subtitulo:  <?php echo $fuente; ?>

          </p>
          <p >

           Fecha: <?php echo $fecha;?>
          
          </p>

          <?php 
            $path = $rutaimg;
                if (file_exists($path)) {
                    $directorio = opendir($path);
                    while ($archivo = readdir($directorio)) {
                        if (!is_dir($archivo)) {
                            echo "<img src='$rutaimg$nombreimg' width='250' />";
                        }
                    }
                }
          ?>
          <br><br>
          <form method="POST" action="">
            <input type="hidden" name="idnoticia" value="<?php echo $idnoticia; ?>">
            <input type="hidden" name="completo" value="<?php echo $rutaimg.''.$nombreimg; ?>">
            <input type="hidden" name="fecha" value="<?php echo $fecha; ?>">
            <input type="hidden" name="titulo" value="<?php echo $titulo; ?>">
              
                <div class="form-group centrar">							
									<input type="hidden" id="tipo" name="tipo" >
           						    <input type="submit"  class="btn btn-rounded btn-inline btn-primary" value="Aceptar">
									<button type="reset" class="btn btn-rounded btn-inline btn-danger-outline"  id="restablecer" value="Borrar">Restablecer</button>
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