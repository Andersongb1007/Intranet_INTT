<?php
	include "../../config/conectardb.php"; 
	include "../../modelo/acciones.php"; 
	valida_usuario();
?>
<!DOCTYPE html>
<html>
<head lang="en">

<?php
    include"../MainHead/head.php";
?>
	<title>Mi perfil</title>


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
								<li class="active">Mi Perfil</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
		<section class="card">
				<div class="card-block ">
				
		

				
<h6 class="subtitulo"> Datos del usuario</h6>
			<table id="table-sm" class="table table-bordered table-hover table-sm">
				<thead>
				<tr>
				<th width="200">Nombre</th>
					<th>Datos</th>				
				</tr>
				</thead>
				<tbody>
				<tr>
					<td >Codigo de usuario:</td>
					<td><?php  echo $_SESSION['usuario']['codigo']?></td>
				</tr>
				<tr>
					<td > Nombre: </td>
					<td><?php  echo $_SESSION['usuario']['nombres']?></td>
				</tr>
					<td>  Apellido: </td>
					<td><?php  echo $_SESSION['usuario']['apellidos']?></td>
				</tr>
					</tr>
					<td> Cedula: </td>
					<td><?php  echo $_SESSION['usuario']['cedula']?></td>
				</tr>
					</tr>
					<td>  Correo electrónico: </td>
					<td><?php  echo $_SESSION['usuario']['correo']?></td>
				</tr>
				</tr>
					<td>  Sexo: </td>
					<td><?php 
							if($_SESSION['usuario']['idsexo']==1 ){
								echo"Hombre";
							} 
							elseif($_SESSION['usuario']['idsexo']==2 ){
								echo"Mujer";
							}
							?>
							
					</td>
					
					</tr>
					<td> Rol de la cuenta: </td>
					<td><?php 
							if($_SESSION['usuario']['id_rol']==1 ){
								echo"Usuario";
							} 
							elseif($_SESSION['usuario']['id_rol']==2 ){
								echo"Administrador";
							}
							elseif($_SESSION['usuario']['id_rol']==3 ){
								echo"Comunicador";
							} ?>
							
					</td>
				</tr>
				</tr>
					<td> Area de trabajo: </td>
					<td><?php  
							if($_SESSION['usuario']['id_area']==1 ){
								echo"Presidencia";
							} 
							elseif($_SESSION['usuario']['id_area']==2 ){
								echo"Vicepresidencia";
							}
							elseif($_SESSION['usuario']['id_area']==3 ){
								echo"Directorio";
							} 
							elseif($_SESSION['usuario']['id_area']==4 ){
								echo"Oficina de Auditoria Interna";
							} 
                            elseif($_SESSION['usuario']['id_area']==5 ){
								echo"Oficina de Atención Ciudadana";
							} 	
							elseif($_SESSION['usuario']['id_area']==6 ){
								echo"Oficina de sistemas y Tecnología de la Información";
							} 
							elseif($_SESSION['usuario']['id_area']==7 ){
								echo"Oficina de Seguridad";
							} 
                            elseif($_SESSION['usuario']['id_area']==8 ){
								echo"Oficina de Recursos Humanos";
							}	
							elseif($_SESSION['usuario']['id_area']==9 ){
								echo"Oficina de Administación";
							} 
							elseif($_SESSION['usuario']['id_area']==10 ){
								echo"Oficina de Enlace del Cuerpo de Investigaciones Científicas Penales y Criminalísticas";
							}				
							elseif($_SESSION['usuario']['id_area']=11 ){
								echo"Consultoría Jurídica";
							}
							elseif($_SESSION['usuario']['id_area']==12 ){
								echo"Oficina de Relaciones Institucionales";
							} 
							elseif($_SESSION['usuario']['id_area']==13 ){
								echo"Oficina de Planificación y Presupuesto";
							} 
                            elseif($_SESSION['usuario']['id_area']==14 ){
								echo"Gerencia de Ingeniería";
							} 	
							elseif($_SESSION['usuario']['id_area']==15 ){
								echo"Gerencia de Registro de Tránsito ";
							} 
							elseif($_SESSION['usuario']['id_area']==16 ){
								echo"Gerencia de Transporte Terrestre";
							} 
                            elseif($_SESSION['usuario']['id_area']==17 ){
								echo"Gerencia de Servicios Conexos";
							}	
							elseif($_SESSION['usuario']['id_area']==18 ){
								echo"Gerencia de VAO";
							} 
							elseif($_SESSION['usuario']['id_area']==19 ){
								echo"OGerencia de Oficinas Regionales";
							}
							elseif($_SESSION['usuario']['id_area']==20 ){
								echo"Oficinas Regionales (74)";
							}  
							?>            
							</td>
				</tr>
				
				<td> Cargo: </td>
					<td><?php
					
							if($_SESSION['usuario']['cargo']==1 ){
								echo"Gerente";
							} 
							elseif($_SESSION['usuario']['cargo']==2 ){
								echo"Jefe de Area";
							}
							elseif($_SESSION['usuario']['cargo']==3 ){
								echo"Supervisor";
							} 
							elseif($_SESSION['usuario']['cargo']==4 ){
								echo"Obrero";
							} 
                            elseif($_SESSION['usuario']['cargo']==5 ){
								echo"Secretaría";
							} 	
							
					
					?></td>
				</tr>
                         				
				</tbody>
			</table>
			 
			 
			 </table>
</section>
			

			</div>


			</div>
	        
	    </div><!--.container-fluid-->
	</div><!--.page-content-->

	
    <?php
        include"../MainJS/js.php";
    ?>
</body>
</body>
</html>