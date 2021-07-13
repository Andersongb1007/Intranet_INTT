<?php
  
	include "../../config/conectardb.php"; 

	include "../../modelo/acciones.php"; 
	include "../../modelo/Administrador/administrador.php"; 
	$usuarios =obtenerUsuarios();
	


 
	
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


    <?php  if($_SESSION['usuario']['id_rol']==2 ){?>
    
			<div class="page-content">
			<div class="container-fluid">
            <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Modificar Usuarios</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="../home/">Inicio</a></li>
								<li class="active">Modificar Usuarios</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
            
            <div class="table-responsive">
			<table id="tablaUsuarios" class="table table-bordered">
				<thead class="thead-dark ">
					<tr>
						<th>codigo</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Correo</th>
                        <th>Telefono</th>
                        <th>cedula</th>
                        <th>id_rol</th>
                        <th>idsexo</th>
                        <th>id_area</th>     
                        <th>Modificar</th>    
                                      
					</tr>
				</thead>
		<tbody>
        <?php
       obtenerUsuarios();
        ?>
      <?php
								$item = 1;
								foreach($usuarios as $fila){
							?>	
						<tr>
						  
                        <td align="left"><?php  echo $fila ['codigo'];?></td>
                        <td align="left"><?php  echo $fila ['nombres'];?></td>
                        <td align="left"><?php  echo $fila ['apellidos'];?></td>
                        <td align="left"><?php  echo $fila ['correo'];?></td>
                        <td align="left"><?php  echo $fila ['telefono'];?></td>
                        <td align="left"><?php  echo $fila ['cedula'];?></td>
                        <td align="left"><?php  echo $fila ['id_rol'];?></td>
                        <td align="left"><?php  echo $fila ['idsexo'];?></td>
                        <td align="left"><?php  echo $fila ['id_area'];?></td>
                     

					
							<td >
								 <a href="editar.php?cod_usuarios=<?php  echo $fila[ 'codigo'];?>">
                                 <p class=" font-icon font-icon-pencil  "></p>
                                   
                                 </a>
                                 </td>	
                         			
					  	</tr>	
							<?php
								$item++; }
							?>						
				</tbody>
			</table>
		</div>
                    

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