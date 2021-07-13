<?php

session_start();

function validar_login(){
	if(empty($_POST['correo']) and empty($_POST['clave'])){
		header('Location: ../index.php?m=1');
	}else{
	if($_POST['captcha'] <> $_SESSION['captcha_texto']){
		header('Location: ../index.php?m=3');
	}else{	
		include "../config/conectardb.php"; 
		$correo    = $_POST['correo'];
		$clave     =  md5($_POST['clave']);	
		
			session_unset();
			$resultado = pg_query("SELECT * FROM usuarios where correo = '$correo' and clave =  '$clave'");
			while ($row = pg_fetch_array($resultado)) {
				$_SESSION['usuario']=$row;
			}
			pg_free_result($resultado);
			
			if(isset($_SESSION['usuario']['correo'])){
				$data = pg_fetch_array($query);
	
				$_SESSION['nombre']        = $data['nombre'];
				$_SESSION['apellido']      = $data['apellido'];
				$_SESSION['cedula']        = $data['cedula'];
				$_SESSION['correo']        = $data['correo'];
				$_SESSION['id_rol']        = $data['id_rol'];
				$_SESSION['idsexo']        = $data['idsexo'];
				$_SESSION['id_area']       = $data['id_area'];


				header('Location: ../vista/home/');
			}else{
				header('Location: ../index.php?m=2');
			}
	}
  }
}
	

function selectores_registro1(){
	?>
		<p class="input_roles" id="roles" align="left">
        <?php  include_once "config/conectardb.php";
			$query_roles = pg_query($db,"SELECT * FROM roles ORDER BY id_rol ASC");
			pg_close($db);
			$result_roles = pg_num_rows($query_roles);
		?>
	        <select class="select_roles" name="roles" >            
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

<?php }






	function valida_usuario(){

		if(!(isset($_SESSION['usuario']['correo']))){
			header('Location: ../../index.php');
		}
	
	}




	function obtener(){
		include "../../config/conectardb.php";
		$query=pg_query($db, "SELECT * FROM usuarios");
		pg_close($db);
		$result=pg_num_rows($query);
				
		if ($result > 0) {
			while ($data = pg_fetch_array($query)) {

?>

	<tr>
		<td><?php echo $_SESSION["usuario"]["codigo"];?></td>
		<td><?php echo $_SESSION["usuario"]["nombres"];?></td>
		<td><?php echo $_SESSION["usuario"]["apellidos"];?></td>
		<td><?php echo $_SESSION["usuario"]["correo"];?></td>
		<td><?php echo $_SESSION["usuario"]["clave"];?></td>
		<td><?php echo$_SESSION["usuario"]["cedula"];?></td>
		<td><?php echo $_SESSION["usuario"]["id_rol"];?></td>
		<td><?php echo $_SESSION["usuario"]["idsexo"];?></td>
		<td><?php echo$_SESSION["usuario"]["id_area"];?></td>
		
		<td>
			<a class="link_edit" target="_blank" href="editar.php?idusuario=<?php echo$_SESSION["usuario"]["codigo"]; ?>">Editar</a>
			|
			<a class="link_delete" target="_blank" href="borrar.php?idusuario=<?php echo $_SESSION["usuario"]["codigo"]; ?>">Eliminar</a>
		</td>
	</tr>
	<?php
						}
				}
		}




	function obtenerUsuarios1(){
		include "config/conectardb.php"; 
		$usuarios = array();
		$resultado = pg_query($db, "SELECT * FROM codigo, nombres, apellidos, correo, clave, cedula, id_rol, idsexo, id_area");
		pg_close($db);
		while ($row = pg_fetch_array($resultado)) {
			$usuarios[]=$row;
		}

		pg_free_result($resultado);
		return $usuarios;
	}
	
	
	
	function guardar_registro()
	{
		
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
		$clave     =  md5($_POST['clave']);	
		$roles     = $_POST['roles'];

				$resultado = pg_query("INSERT INTO usuarios (nombres, apellidos,correo,clave,cedula,id_rol)
						VALUES ('$nombres','$apellidos','$correo','$clave','$cedula','$roles');");
	
						
						$mensaje = "Su registro fue exitoso, gracias";
						echo'<img src="img/sign-check-icon_34365.png" alt="Exito"  width=" 400px">';
					
					}else{
						$mensaje = "El Correo ya existe, intente con otro";
						echo'<img src="img/sign-error-icon_34362.png" alt="error"  width=" 400px">';
					}
				
			}else{
				$mensaje = "Las contraseñas no coinciden";
				echo'<img src="img/sign-error-icon_34362.png" alt="error"  width=" 400px">';
			}
			return $mensaje;
	}



	function formato_mensaje($texto){

		$nuevo_texto = "<font color='red'>" . $texto . "</font>";
		return $nuevo_texto;
	}
	


?>



