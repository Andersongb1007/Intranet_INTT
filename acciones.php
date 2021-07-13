<?php

session_start();

function validar_login(){
	if(empty($_POST['correo']) and empty($_POST['clave'])){
		header('Location: index.php?m=1');
	}else{
	if($_POST['captcha'] <> $_SESSION['captcha_texto']){
		header('Location: index.php?m=3');
	}else{	
		require "../config/conectardb.php"; 
		$correo    = $_POST['correo'];
		$clave     =  md5($_POST['clave']);	
		$roles     = $_POST['roles'];
			session_unset();
			$resultado = pg_query("SELECT * FROM usuarios where correo = '$correo' and clave =  '$clave' and id_rol = '$roles'");
			while ($row = pg_fetch_array($resultado)) {
				$_SESSION['usuario']=$row;
			}
			pg_free_result($resultado);
			
			if(isset($_SESSION['usuario']['correo'])){
				$data = pg_fetch_array($query);
				$_SESSION['nombre']        = $data['codigo'];	
				$_SESSION['nombre']        = $data['nombre'];
				$_SESSION['apellido']      = $data['apellido'];
				$_SESSION['cedula']        = $data['cedula'];
				$_SESSION['correo']        = $data['correo'];
				$_SESSION['nombre']        = $data['telefono'];
				$_SESSION['nombre']        = $data['idsexo'];
				$_SESSION['nombre']        = $data['id_area'];
				$_SESSION['id_rol']        = $data['id_rol'];


				header('Location: ../vista/home/');
			}else{
				header('Location:index.php?m=2');
			}
	}
  }
}
	

function selectores_registro(){
	?>
		<p class="input_roles" id="roles" align="left">
        <?php  require "config/conectardb.php";
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


	

?>



