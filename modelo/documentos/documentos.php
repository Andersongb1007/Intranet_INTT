<?php
  function 	guardar_documento(){
    include "../../config/conectardb.php";
		if (empty($_POST['nombres']) || empty($_POST['apellidos']) || empty($_POST['titulo']) || empty($_FILES['documento'])){ 
        	header('Location:index.php?m=3');
}else{
    $nombre    = $_POST['nombres'];
    $apellido  = $_POST['apellidos'];
    $titulo    = $_POST['titulo'];
    $nombre_documento = $_FILES['documento']['name']; //obtiene el nombre
    $documento= $_FILES['documento']['tmp_name']; //Obtiene el documento
    $ruta_documento = "../../public/documentos/".$titulo."/";
    $ruta_db   = $nombre_documento;
	$estado = $_POST['estado'];
    //Verificamos si existe alguna noticia como la que intentamos agregar.
			$query_check = pg_query($db,"SELECT * FROM documentos WHERE titulo = '$titulo'");
			pg_close($db);
			$result = pg_fetch_array($query_check);
			if ($result > 0) {
				//Si es así, comunicamos que la noticia ya existe.
				header('Location:index.php?m=4');
			}else{
				//Sino, procedemos a guardar.
				if(!is_dir($ruta_documento)){
					//Si el directorio no existe, lo creamos.
					mkdir($ruta_documento, 0755, true);
				}
				$resultado = move_uploaded_file($documento,$ruta_documento.$nombre_documento);
				include "../../config/conectardb.php";
				$query_insert = pg_query($db, "INSERT INTO documentos 
                ( nombre, apellido, titulo, nombre_documento, ruta_documento,estado)
                 VALUES ('$nombre','$apellido','$titulo','$ruta_db','$ruta_documento','$estado')");
				pg_close($db);
				if ($query_insert && $resultado) {
					header('Location:index.php?m=1');
				}else{
					header('Location:index.php?m=2');
				}
			}
        }
    }


	function obtener1documento ($id_documento){
		include "../../config/conectardb.php";
		$usuarios = array();
		$resultado = pg_query($db, "SELECT * FROM documentos WHERE id_documento= '$id_documento'");
		pg_close($db);
		while ($row = pg_fetch_array($resultado)) {
			$usuarios=$row;
		}
	
		pg_free_result($resultado);
		return $usuarios; 
	} 
	
	
	
	
function obtenerDocumentos(){
	include "../../config/conectardb.php";
	$query=pg_query($db, "SELECT * FROM documentos  ORDER BY id_documento ASC");
	pg_close($db);
	$result=pg_num_rows($query);
			
	if ($result > 0) {
		while ($data = pg_fetch_array($query)) {
	
			?> 
						<section class="card">
						<div class="card-block">

							<h5 class="centrar">Creardo por: <?php echo $data['nombre'];?> <?php echo $data['apellido'];?></h5>
						
							
							<h4 class="titulo"><?php echo $data['titulo'];?></h4>
					<a </a>
						 
				
														
					
					<div class="cont-in">
						
							<a download="<?php echo $data['nombre_documento'];?>" href="<?php echo $data['ruta_documento'];?><?php echo $data['nombre_documento'];?>">Enlace de descarga <?php echo $data['nombre_documento'];?></a>
							</div>
						</div>
						</section>

					
					<?php	}
					
	}
}



function eliminardocumento(){
	include "../../config/conectardb.php";
  
        if (!empty($_POST)) {
         	$id_documento = $_POST['id_documento'];
            $ruta_documento  = $_POST['ruta_documento'];
            $nombre_documento  = $_POST['nombre_documento'];
        	$carpeta= $ruta_documento.$nombre_documento;
			 $titulo  = $_POST['titulo'];

			 
			
		
 			
            //El siguiente query eliminará completamente la noticia, sin dejar respaldo.
            $query_delete = pg_query($db,"DELETE FROM documentos WHERE
			 id_documento= '{$_POST["id_documento"]}'");
            pg_close($db);
 		 eliminarDir('../../public/documentos/'.$titulo);
            if ($query_delete) {
           
					header('Location:index.php?m=1');
            }else{
			
					header('Location:index.php?m=2');
            }
        }
       
  
    }

	function eliminarDir($carpeta){

		foreach(glob($carpeta."/*") as $archivos_carpeta){
			if (is_dir($archivos_carpeta)){
				eliminarDir($archivos_carpeta);
			}else{
				unlink($archivos_carpeta);
			}
			rmdir($carpeta);
		}
	}

	function obtenerDocumento(){
		include "../../config/conectardb.php";
		$query=pg_query($db, "SELECT * FROM documentos  ORDER BY id_documento ASC");
		pg_close($db);
		$result=pg_num_rows($query);
				
		if ($result > 0) {
			while ($data = pg_fetch_array($query)) {
	if( $data['estado']==100){
	?>
	
	
	<tr>
		<td><?php echo $data['id_documento'];?></td>
		<td><?php echo $data['nombre'];?></td>
		<td><?php echo $data['apellido'];?></td>
		
		<td><?php echo $data['nombre_documento'];?></td>
		<td><?php echo $data['ruta_documento'];?></td>
		
			
		<td>
			<a   href="borrar.php?id_documento=<?php echo $data['id_documento']; ?>">  <p class="  font-icon-trash"> Eliminar</p> </a>
			
			
		</td>
		
	</tr>
	<?php
	}	
			}return $data;
		}

}
	
	function EliminarDocumentoPrivado(){
		include "../../config/conectardb.php";
		$query=pg_query($db, "SELECT * FROM documentos  ORDER BY id_documento ASC");
		pg_close($db);
		$result=pg_num_rows($query);
				
		if ($result > 0) {
			while ($data = pg_fetch_array($query)) {
		if( $data['estado']==$_SESSION['usuario']['id_area']){
	?>
	
	
	<tr>
		<td><?php echo $data['id_documento'];?></td>
		<td><?php echo $data['nombre'];?></td>
		<td><?php echo $data['apellido'];?></td>
		
		<td><?php echo $data['nombre_documento'];?></td>
		<td><?php echo $data['ruta_documento'];?></td>
		
			
		<td>
			<a   href="borrar.php?id_documento=<?php echo $data['id_documento']; ?>">  <p class="  font-icon-trash  "> Eliminar</p> </a>
			
			
		</td>
		
	</tr>
	<?php
	}	
			}return $data;
		}

}

function obtenerDocumentosPublicos(){
	include "../../config/conectardb.php";
	$query=pg_query($db, "SELECT * FROM documentos  ORDER BY id_documento ASC");
	pg_close($db);
	$result=pg_num_rows($query);
			
	if ($result > 0) {
		while ($data = pg_fetch_array($query)) {
	
		
	if( $data['estado']==100){
			

				?>
						<section class="card">
							<div class="card-block">
							
								<h5 class="centrar">Escrito por: <?php echo $data['nombre'];?> <?php echo $data['apellido'];?></h5>

								<h4 class="titulo">	<?php echo $data['titulo'];?>	</h4>
													
								<img src="	<?php echo $data['ruta_documento'];?><?php echo $data['nombre_documento'];?>" alt="">
							
								<div class="cont-in">
							
								<a download="<?php echo $data['nombre_documento'];?>" href="<?php echo $data['ruta_documento'];?><?php echo $data['nombre_documento'];?>">Enlace de descarga <?php echo $data['nombre_documento'];?></a>
								</div>
							</div>
						</section>

						<?php
					
					}
				}
			}
		}
		
	
function obtenerDocumentosPrivado(){
	include "../../config/conectardb.php";
	$query=pg_query($db, "SELECT * FROM documentos  ORDER BY id_documento ASC");
	pg_close($db);
	$result=pg_num_rows($query);
			
	if ($result > 0) {
		while ($data = pg_fetch_array($query)) {
	
		
	if( $data['estado']==$_SESSION['usuario']['id_area']){
			

				?>
						<section class="card">
						<div class="card-block">
						
							<h5 class="centrar">Escrito por: <?php echo $data['nombre'];?> <?php echo $data  ['apellido'];?></h5>
					

					
							<h4 class="titulo">	<?php echo $data['titulo'];?>	</h4>
					
							
							<img src="	<?php echo $data['ruta_documento'];?><?php echo $data['nombre_documento'];?>" alt="">
						
							<div class="cont-in">
						
							<a download="<?php echo $data['nombre_documento'];?>" href="<?php echo $data['ruta_documento'];?><?php echo $data['nombre_documento'];?>">Enlace de descarga <?php echo $data['nombre_documento'];?></a>
							</div>
						</div>
						</div>
						</section>

						<?php
					
					}
				}
			}
		}
		
	

?>