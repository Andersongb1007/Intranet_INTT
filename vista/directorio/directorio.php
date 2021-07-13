<?php
	include "../../config/conectardb.php"; 
	include "../../modelo/acciones.php"; 
	include "../../modelo/Administrador/administrador.php"; 
	    valida_usuario();
        $usuarios = obtenerUsuariosDirectorio();

?>

<!DOCTYPE html>
<html>
<head lang="es">
<?php
    include"../MainHead/head.php";
?>
	<title>Directorio</title>
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
							<h3>Directorio</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/">Inicio</a></li>
								<li class="active">Directorio</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
        		    <div class="table-responsive">
         			  <div class="table-responsive">           
				<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab1">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Presidencia</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 1) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><?php  echo $fila ['apellidos'];?></td>
                        <td align="left"><?php  echo $fila ['correo'];?></td>
                        <td align="left"><?php  echo $fila ['telefono'];?></td>
                        <td align="left">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
           <br>
	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab2">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Vicepresidencia</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
   
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 2) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><?php  echo $fila ['apellidos'];?></td>
                        <td align="left"><?php  echo $fila ['correo'];?></td>
                        <td align="left"><?php  echo $fila ['telefono'];?></td>
                        <td align="left">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
           <br>
		   
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab3">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Directorio</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 3) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><?php  echo $fila ['apellidos'];?></td>
                        <td align="left"><?php  echo $fila ['correo'];?></td>
                        <td align="left"><?php  echo $fila ['telefono'];?></td>
                        <td align="left">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
           <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab1">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Oficina de Auditoria Interna</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 4) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><?php  echo $fila ['apellidos'];?></td>
                        <td align="left"><?php  echo $fila ['correo'];?></td>
                        <td align="left"><?php  echo $fila ['telefono'];?></td>
                        <td align="left">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
           <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab2">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Oficina de Atención Ciudadana</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 5) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
		         <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab3">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Oficina de sistemas y Tecnología de la Información</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 6) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
            <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab1">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Oficina de Seguridad</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 7) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
		         <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab2">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Oficina de Recursos Humanos</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 8) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
		         <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab3">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Oficina de Administación</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 9) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
		         <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab1">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Oficina de Enlace del Cuerpo de Investigaciones Científicas Penales y Criminalísticas</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 10) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
		         <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab2">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Consultoría Jurídica</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 11) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
		         <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab3">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Oficina de Relaciones Institucionales</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 12) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
		         <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab1">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Oficina de Planificación y Presupuesto</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] ==13) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
		         <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab2">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Gerencia de Ingeniería</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 14) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
		         <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab3">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Gerencia de Registro de Tránsito </h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 15) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
		         <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab1">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Gerencia de Transporte Terrestre</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 16) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
		         <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab2">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Gerencia de Servicios Conexos</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 17) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
		         <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab3">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Gerencia de VAO</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 18) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
		         <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab1">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Gerencia de Oficinas Regionales</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 19) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>      <br>
		   	<!--****************************** Inicio de la tablaa  ************************************--> 
			<table id="tablaUsuarios" class="table table-bordered tab2">
				<thead class="thead-dark ">
                <h3 class="titulo2">Personal de Oficinas Regionales (74)</h3>
					<tr class="texto">
						<th class="centrar">Nombre</th>
						<th class="centrar">Apellido</th>
						<th class="centrar">Correo</th>
                        <th class="centrar">Teléfono</th>
                        <th class="centrar">Cargo</th>     
					</tr>
				</thead>
		<tbody>
        <?php
     obtenerUsuariosDirectorio(); 
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
                                    if ($fila['id_area'] == 20) {
							?>	
						<tr>
                        <td class="texto"><p class="centrar"><?php  echo $fila ['nombres'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['apellidos'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['correo'];?></p></td>
                        <td align="left"><p class="centrar"><?php  echo $fila ['telefono'];?></p></td>
                        <td align="left"><p class="centrar">
                        <?php  if($fila ['cargo']==1 ){
								echo"Gerente";
							} 
							if($fila ['cargo']==2 ){
								echo"Jefe de Area";
							}
							if($fila ['cargo']==3 ){
								echo"Supervisor";
							} 
                            if($fila ['cargo']==4 ){
								echo"Obrero";
							} 
                            if($fila ['cargo']==5 ){
								echo"Secretaría";
							} ?></p>
                        </td>
                        </td>			
					  	</tr>	
							<?php
								$item++; } }
							?>	 	   			
				</tbody>
			</table> 
			<!--****************************** Cierre de la tablaa  ************************************--> 
           <br>
      
			</div>
		</div>
	</div>
</div><!--.page-content-->
	       
	
	
    <?php
        include"../MainJS/js.php";
    ?>


</body>
</body>
</html>