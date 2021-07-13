
<?php
	include "../../config/conectardb.php"; 
    include "../../modelo/acciones.php"; 
    include "../../modelo/Administrador/administrador.php"; 
    $codigo    ="";
    $nombres   ="";
    $apellidos ="";
    $correo    ="";
    $telefono  ="";
    $cedula    ="";
    
    $fila = obtener1Usuarios($_GET['cod_usuarios']); 
    $codigo    =  $fila['codigo'];
    $nombres   =  $fila['nombres'];
    $apellidos =  $fila['apellidos'];
    $telefono  =  $fila['telefono'];
    $cedula    =  $fila['cedula'];
    $correo    =  $fila['correo'];
    $clave     =  $fila['clave'];  
  //echo "<pre>";
  //print_r($articulos[$_GET['cod_usuarios']]['codigo']);
?>
<!DOCTYPE html>
<html>
<head lang="es">
<?php
    include"../MainHead/head.php";
?>
    <title>Modificar Usuarios</title>
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
          <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Mi perfil</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/">Inicio</a></li>
								<li class="active">Actualizar Usuarios</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
 
              <h2>Actualizar Usuarios</h2>
              
              <section class="card">
				<div class="card-block">
				

					<div class="row m-t-lg">
						<div class="col-md-6">
                      <form action="gracias_editar.php" name="form1" method="get">
                          
                         
                          <!-- codigo -->
								<div class="form-group">
									<label class="form-label" for="nombres">Codigo del usuario</label>
									<div class="form-control-wrapper">
										<input id="codigo" class="form-control" name="codigo" type="text" placeholder="Nombre del usuario" value="<?php echo $codigo;?>" maxlength="50"  required="">
									</div>
								</div>

                          <!-- nombre -->
								<div class="form-group">
									<label class="form-label" for="nombres">Nombre del usuario</label>
									<div class="form-control-wrapper">
										<input id="nombres" class="form-control" name="nombres" type="text" placeholder="Nombre del usuario" value="<?php echo $nombres;?>" maxlength="50" onkeydown="return sololetras(event)" required="">
									</div>
								</div>
                        		<!-- Apellido -->
								<div class="form-group">
									<label class="form-label" for="nombres">Apellido del usuario</label>
									<div class="form-control-wrapper">
										<input id="apellidos" class="form-control" name="apellidos" type="text" placeholder="Apellido del usuario" value="<?php echo $apellidos;?>" maxlength="50" onkeydown="return sololetras(event)" required="">
									</div>
								</div>
                            	<!-- Telefono -->
								<div class="form-group">
									<label class="form-label" for="nombres">Telefono del usuario</label>
									<div class="form-control-wrapper">
										<input id="Telefono" class="form-control" name="telefono" ttype="number" placeholder="Telefono del usuario" value="<?php echo $telefono;?>" maxlength="50"  required="">
									</div>
								</div>
                                <!-- Cedula -->
								<div class="form-group">
									<label class="form-label" for="nombres">Cedula del usuario</label>
									<div class="form-control-wrapper">
										<input id="cedula" class="form-control" name="cedula" ttype="number" placeholder="Cedula del usuario" value="<?php echo $cedula;?>" maxlength="50"  required="">
									</div>
								</div>
                                <!-- Correo -->
								<div class="form-group">
									<label class="form-label" for="nombres">Correo del usuario</label>
									<div class="form-control-wrapper">
										<input id="correo" class="form-control" name="correo" type="text" placeholder="Correo del usuario" value="<?php echo $correo;?>" maxlength="50" onkeydown="return sololetras(event)" required="">
									</div>
								</div>
                        		<!-- clave -->
								<div class="form-group">
									<label class="form-label" for="nombres">Nueva contraseña del usuario</label>
									<div class="form-control-wrapper">
										<input id="clave" class="form-control" name="clave" type="text" placeholder="Contraseña del usuario"   required="">
									</div>
								</div>
                    	<div class="form-group centrar">
									
									<input type="hidden" id="tipo" name="tipo" value="crear">
    <input type="submit"  class="btn btn-rounded btn-inline btn-primary" value="Aceptar">
									<button type="reset" class="btn btn-rounded btn-inline btn-danger-outline"  id="restablecer" value="Borrar">Restablecer</button>
								</div>					
                        </form>     
</div>


                        <div class="col-md-6">
							<h5>Nota </h5>
							<p>*   Todos los datos son obligatorios</p>
							<p>*   verifique bien los datos</p>
							<p>*   seleccione el sexo, rol del usuario y area de trabajo correctamente para que pueda acceder bien a sus respectivos modulos</p>
						</div>
					</div><!--.row-->
                    </section>
                </div>
            </div><!--.page-content--> 						
        </div>
		</div><!--.page-content-->

<?php
    include"../MainJS/js.php";
?>


<script type="text/javascript">
function sololetras(e) {
tecla = (document.all) ? e.keyCode : e.which; 
  if (tecla==8) return true; // backspace
      if (tecla==32) return true; // espacio
      if (e.ctrlKey && tecla==86) { return true;} //Ctrl v
      if (e.ctrlKey && tecla==67) { return true;} //Ctrl c
      if (e.ctrlKey && tecla==88) { return true;} //Ctrl xa
      patron = /^[a-zA-z\s\ñ\Ñ]+$/; //patron
te = String.fromCharCode(tecla); 
      return patron.test(te); // prueba de patron
}
</script>     
</body>
</body>
</html>