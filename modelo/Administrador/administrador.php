
<?php 
	
function selectores_registros(){
	 
	?>
	<div class="form-control-wrapper">
	<div class="form-label">
	<label for="area"> Seleccione el Rol que tendra el Usuario: </label>
	<br>
		<p class="input_roles" id="roles" align="left">
        <?php 		include "../../config/conectardb.php";
			$query_roles = pg_query($db,"SELECT * FROM roles ORDER BY id_rol ASC");
			pg_close($db);
			$result_roles = pg_num_rows($query_roles);
		?>
	    <select class="form-control" aria-label=".form-select-lg example" name="roles">    
			
         
            
          
			<?php 
				if ($result_roles > 0) 
				{
					while ($roles = pg_fetch_array($query_roles)) {
			?>	
				<option value="<?php echo $roles["id_rol"]; ?>"><?php echo $roles["roles"] ?></option>       
            
			<?php 
					}
				}
			?>  
			</p>
</select>
</div> 
</div> 
<?php }
	

	function selectores_sexo(){
		?>
		
		<div class="mb-3">
		<label for="area"> Seleccione Sexo del Usuario:</label>
		<br>
			<p class="input_roles" id="sexo" name="sexo" align="left">
			<?php 	include"../../config/conectardb.php";
				$query_sexo = pg_query($db,"SELECT * FROM sexo ORDER BY idsexo ASC");
				pg_close($db);
				$result_sexo = pg_num_rows($query_sexo);
			?>
			<select class="form-control" aria-label=".form-select-lg example" name="sexo">    
				
			 
				
			
			  
				<?php 
					if ($result_sexo > 0) 
					{
						while ($sexo = pg_fetch_array($query_sexo)) {
				?>	
					<option value="<?php echo $sexo["idsexo"]; ?>"><?php echo $sexo["sexo"] ?></option>       
				
				<?php 
						}
					}
				?>  
				</p>
	</select>
	</div> 
	<?php }		 

function selectores_area(){
	?>
	
	<div class="mb-3">
	<label for="area"> Seleccione el area de trabajo: </label>
	<br>
		<p class="input_area" id="area" name="area" align="left">
		<?php 	include"../../config/conectardb.php";
			$query_area = pg_query($db,"SELECT * FROM area ORDER BY id_area ASC");
			pg_close($db);
			$result_area = pg_num_rows($query_area);
		?>
		<select class="form-control" aria-label=".form-select-lg example" name="area">    
					 
			<?php 
				if ($result_area > 0) 
				{
					while ($area = pg_fetch_array($query_area)) {
			?>	
				<option value="<?php echo $area["id_area"]; ?>"><?php echo $area["area"] ?></option>       
			
			<?php 
					}
				}
			?>  
			</p>
</select>
</div> 
<?php }		 


	function guardar_usuario()
{
	  $mensaje="";
			if($_POST['clave'] == $_POST['clave2']){
				$resultado = pg_query("SELECT count(*) 
				as cantidad FROM usuarios 
				where correo = '".$_POST['correo']."' ");			
				
				while ($row = pg_fetch_array($resultado)) {
					$cuantos=$row['cantidad'];
				}
				pg_free_result($resultado);
			
					if($cuantos==0){	

		$nombres   = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$correo    = $_POST['correo'];
		$cedula    = $_POST['cedula'];
		$clave     = md5($_POST['clave']);	
		$roles     = $_POST['roles'];
		$sexo      = $_POST['sexo'];
		$area      = $_POST['area'];
		$telefono  = $_POST['telefono'];
		$cargo  = $_POST['cargo'];

				$resultado = pg_query("INSERT INTO usuarios (nombres, apellidos,correo,clave,cedula, id_rol, idsexo, id_area, telefono,cargo)
		VALUES ('$nombres','$apellidos','$correo','$clave','$cedula','$roles','$sexo','$area','$telefono','$cargo')");
	
						
						
						
						header('Location:index.php?m=1');
					}else{
						
					
						header('Location:index.php?m=3');
						
					}
				
			}else{
				
			
				header('Location:index.php?m=2');
			}
            
            echo" $mensaje";
	}

	function eliminar(){

		$resultado = pg_query("DELETE FROM 
		usuarios WHERE codigo = ".$_GET['cod_usuarios']);
		return;
	}
	
	function modificar(){

		if(is_string($_GET['nombres']) && is_string($_GET['apellidos'])){
		
			$resultado = pg_query("UPDATE usuarios SET 
									nombres = '".$_GET['nombres']."',
									apellidos = '".$_GET['apellidos']."',
									correo = '".$_GET['correo']."', 
									clave = '".md5($_GET['clave'])."' ,
									cedula = '".$_GET['cedula']."',
									telefono = '".$_GET['telefono']."'  
									WHERE codigo = ".$_GET['codigo']);
			/*echo "UPDATE usuarios SET 
									nombres = '".$_GET['nombres']."',
									apellidos = '".$_GET['apellidos']."',
									correo = '".$_GET['correo']."' 
									WHERE codigo = ".$_GET['codigo'];*/
								
								
		
			$mensaje = formato_mensaje("La información fue actualizada exitosamente");
			echo'<div class="imgen"><img src="../../public/img/sign-check-icon_34365.png" class="page-content centrar" alt="Exito" class="centrar" width=" 400px"> </div>';
		}else{
			$mensaje = formato_mensaje("No se logro actualizar la información del usuario verifique");
			echo'  <div class="imgen"><img src="../../public/img/sign-error-icon_34362.png" alt="error"  class="page-content  centrar"   width=" 400px"></div>';
		}
		return $mensaje;
	}

	function obtenerUsuariosDirectorio(){
		
		$usuarios = array();
		$resultado = pg_query("SELECT * FROM usuarios");
		while ($row = pg_fetch_array($resultado)) {
			$usuarios[]=$row;
		}

		pg_free_result($resultado);
		return $usuarios;
	}
	


	function obtenerUsuarios(){
		
		$usuarios = array();
		$resultado = pg_query("SELECT * FROM usuarios");
		while ($row = pg_fetch_array($resultado)) {
			$usuarios[]=$row;
		}

		pg_free_result($resultado);
		return $usuarios;
	}

	
	
	function obtener1Usuarios ($cod_usuarios){

		$usuarios = array();
		$resultado = pg_query("SELECT * FROM usuarios where 
		codigo = ".$cod_usuarios);
		while ($row = pg_fetch_array($resultado)) {
			$usuarios=$row;
		}

		pg_free_result($resultado);
		return $usuarios; 
	}
	
	return ;
	














	?>