<?php
	include "../../config/conectardb.php";
	include "../../modelo/acciones.php"; 
	include "../../modelo/Administrador/administrador.php"; 
	
    if(isset($_POST["tipo"]) and $_POST["tipo"]=="crear"){
        require_once("../../modelo/Administrador/administrador.php");
        guardar_usuario();
    }
?>
<!DOCTYPE html>
<html>
<head lang="es">
<?php
    include"../MainHead/head.php";
?>
	<title>Crear Usuarios</title>
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
	<?php  if($_SESSION['usuario']['id_rol']==2 ){?>
         <?php
                        if (isset($_GET["m"])){
                            switch($_GET["m"]){
                                case "3";
                                ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
			swal("ERROR!", "El correo ya existe, intente con otro.", "error");
         </script>
                                <?php
                            break;
                                case "2";
                                    ?>
                                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
									<script type="text/javascript">
	swal("ERROR!", "Las contraseñas no son iguales, intente de nuevo.", "error");
    </script>
                                    <?php
                                break;

                                case "1";
                                    ?>
                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
						<script type="text/javascript">
						swal("Bien!", "Ha sido registrado exitosamente.", "success");
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
							<h3>Crear Usuario</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/">Inicio</a></li>
								<li class="active">Crear Usuario</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
			<section class="card">
				<div class="card-block">
				
					<div class="row m-t-lg">
						<div class="col-md-6">
						<h2 class="titulo2">Agregar nuevos usuarios</h2>
						<h3 class="subtitulo">Complete el formulario</h3>
							<form  action="" name="form1"  method="POST">
								
								<!-- nombre -->
								<div class="form-group">
									<label class="form-label" for="nombres">Nombre:</label>
									<div class="form-control-wrapper">
										<input id="nombres" class="form-control" name="nombres" type="text" placeholder="Ingresar nombre" maxlength="50" onkeydown="return sololetras(event)" required="">
									</div>
								</div>

								<!-- apellido -->
								<div class="form-group">
									<label class="form-label" for="apellidos">Apellido:</label>
									<div class="form-control-wrapper">
										<input id="apellidos" class="form-control" name="apellidos" type="text" placeholder="Ingresar apellido" maxlength="50" onkeydown="return sololetras(event)" required="">
									</div>
								</div>

								<!-- Cedula -->
								<div class="form-group">
									<label class="form-label" for="cedula">Cédula:</label>
									<div class="form-control-wrapper">
										<input id="cedula" class="form-control" name="cedula" type="number" placeholder="Ingresar cédula" maxlength="10"  required="">
									</div>
								</div>

								<!-- Correo -->
								<div class="form-group">
									<label class="form-label" for="correo">Correo electrónico:</label>
									<div class="form-control-wrapper">
										<input id="correo" class="form-control" name="correo" type="email"
										placeholder="Ingresar correo electrónico">
									</div>
								</div>

							<div class="form-group">
								<label class="form-label" for="telefono">Teléfono:</label>
								<div class="input-group">
							
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-earphone"></span>
									</div>
										<input type="number" name="telefono" id="telefono" class="form-control" placeholder="Ingresar número telefónico">
									</div>
								</div>
					
									


								<!-- contraseña -->
								<div class="form-group">
									<label class="form-label" for="clave">Escriba una contraseña:</label>
									<div class="form-control-wrapper">
										<input id="clave" class="form-control" name="clave" type="password" laceholder="Escribir contraseña" required="">
									</div>
								</div>

								<!-- repetir contraseña -->
								<div class="form-group">
									<label class="form-label" for="clave2">Confirmar la contraseña: </label>
									<div class="form-control-wrapper">
									<input id="clave2" class="form-control" name="clave2" type="password" laceholder="Confirmar Contraseña" required="">
									</div>
								</div>

								<div class="form-group">
								<?php
									include"../../config/conectardb.php";
									selectores_registros(); 
								?>
							
							<?php
									include"../../config/conectardb.php";
									selectores_sexo();
								?>
								<?php
									include"../../config/conectardb.php";
									selectores_area();
								?>
							
							</div>  
						
							
							<div class="form-group centrar">
							
							
							<p>Cargo del usuario</p>
							<div class="checkbox-detailed">
								<input type="radio" name="cargo" id="check-det-1"  value="1" checked="">
								<label for="check-det-1">
								<span class="checkbox-detailed-tbl">
									<span class="checkbox-detailed-cell">
										<span class="checkbox-detailed-title">Cargo</span>
										Gerente
									</span>
								</span>
								</label>
							</div>
							<div class="checkbox-detailed">
								<input type="radio" name="cargo" id="Jefe_de_Area" value="2">
								<label for="Jefe_de_Area">
								<span class="checkbox-detailed-tbl">
									<span class="checkbox-detailed-cell">
										<span class="checkbox-detailed-title">Cargo</span>
										Jefe de Area
									</span>
								</span>
								</label>
							</div>
							<div class="checkbox-detailed">
								<input type="radio" name="cargo" id="Supervisor" value="3" checked="">
								<label for="Supervisor">
								<span class="checkbox-detailed-tbl">
									<span class="checkbox-detailed-cell">
										<span class="checkbox-detailed-title">Cargo</span>
										Supervisor  
									</span>
								</span>
								</label>
							</div>
						
							<div class="checkbox-detailed">
								<input type="radio" name="cargo" id="check-det-4" value="4">
								<label for="check-det-4">
								<span class="checkbox-detailed-tbl">
									<span class="checkbox-detailed-cell">
										<span class="checkbox-detailed-title">Cargo</span>
										Obrero
									</span>
								</span>
								</label>
							</div>
							<div class="checkbox-detailed">
									<input type="radio" name="cargo" id="check-det-5" value="5" checked="">
									<label for="check-det-5">
									<span class="checkbox-detailed-tbl">
										<span class="checkbox-detailed-cell">
											<span class="checkbox-detailed-title">Cargo</span>
											Secretaría     
										</span>
									</span>
									</label>
							</div>

							
		
						
						</div>
								<div class="form-group centrar">
									
									<input type="hidden" id="tipo" name="tipo" value="crear">
    	<input type="submit"  class="btn btn-rounded btn-inline btn-primary" value="Crear Usuario">
									<button type="reset" class="btn btn-rounded btn-inline btn-danger-outline"  id="restablecer" value="Restablecer">Restablecer</button>
								</div>
							</form>
						</div>

						<div class="col-md-6">
						
							<h5 class="subtitulo">Guia de como crear usuario</h5>
							<li><p class="texto">Es necesario ingresar todo lo requerido.</p></li>
							<li><p class="texto">Verifique lo ingresado antes de crear el usuario.</p></li>
							<li><p class="texto">El correo electrónico no puede ser el mismo que el de otro usuario.</p></li>
							<li><p class="texto">Se recomienda ingresar una contraseña que contenga entre 8 a 16 caracteres.</p></li>
							<li><p class="texto">Especifique el rol que tendrá el usuario.</p></li>
							<li><p class="texto">Indicar el área a la cual pertenece el usuario.</p></li>
							<br>
							<p class="texto">Siguiendo estos pasos correctamente podrá crear un nuevo usuario sin ningún problema.</p>
						</div>
					</div><!--.row-->
					
				</div>
				
			</section>
			

		</div>
	</div><!--.page-content-->


	<?php } ?>   
	<?php  if($_SESSION['usuario']['id_rol']==1 ){?>

		<?php } ?>  
		<?php  if($_SESSION['usuario']['id_rol']==2 ){?>

<?php } ?>  



    <?php
        include"../MainJS/js.php";
    ?>

<script>
		$(function() {
			$('#tags-editor-textarea').tagEditor();
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