
    <?php
             
	function fecha_(){
	$mes = array("","01", 
					"02", 
					"03", 
					"04", 
					"05", 
					"06", 
					"07", 
					"08", 
					"09", 
					"10", 
					"11", 
					"12");
	return date('Y')."-". $mes[date('n')] . "-" .date('d');
	}
    
function AgregarEvento(){
	include "../../config/conectardb.php";
		if($_FILES["archivo"]["error"]>0){
			header('Location:index.php?m=4');
		}else{
		if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['titulo']) || empty($_POST['subtitulo']) || empty($_POST['descripcion']) || empty($_FILES['archivo'])) {
				header('Location:index.php?m=5');
	}else{
			$nombre    = $_POST['nombre'];
			$apellido  = $_POST['apellido'];
			$subtitulo    = $_POST['subtitulo'];
			$descripcion   = $_POST['descripcion'];
			$titulo    = $_POST['titulo'];
			$fecha     = fecha_();
			$nombreimg = $_FILES['archivo']['name']; 
			$archivo   = $_FILES['archivo']['tmp_name'];
			$ruta_img  = "../../public/eventos/".$titulo."/";
			//Verificamos si existe alguna noticia como la que intentamos agregar.
			$query_check = pg_query($db,"SELECT * FROM eventos WHERE titulo = '$titulo'");
			pg_close($db);
			$result = pg_fetch_array($query_check);
			if ($result > 0) {
				//Si es así, comunicamos que la noticia ya existe.
				header('Location:index.php?m=3');
			}else{
				//Sino, procedemos a guardar.
				if(!is_dir($ruta_img)){
					//Si el directorio no existe, lo creamos.
					mkdir($ruta_img, 0755, true);
				}
				$resultado = move_uploaded_file($archivo,$ruta_img.$nombreimg);
				include "../../config/conectardb.php";
				$query_insert = pg_query($db, "INSERT INTO eventos (nombre, apellido, titulo, subtitulo, fecha, nombre_img, ruta_img, descripcion) VALUES ('$nombre','$apellido','$titulo','$subtitulo','$fecha','$nombreimg','$ruta_img','$descripcion')");      
                pg_close($db);
				if ($query_insert && $resultado) {
					header('Location:index.php?m=1');
				}else{
					header('Location:index.php?m=2');
				}
			}
		}
	}

}


function obtenerEvento(){
	include "../../config/conectardb.php";
	$query=pg_query($db, "SELECT * FROM eventos ORDER BY id_evento ASC");
	pg_close($db);
	$result=pg_num_rows($query);
			
	if ($result > 0) {
		while ($data = pg_fetch_array($query)) {

?>


<tr>
	<td><?php echo $data['id_evento'];?></td>
	<td><?php echo $data['nombre'];?></td>
	<td><?php echo $data['apellido'];?></td>
	<td><?php echo $data['descripcion'];?></td>
	<td><?php echo $data['titulo'];?></td>
	<td><?php echo $data['subtitulo'];?></td>
	<td><img width="300px" src="../../vista/Comunicador/<?php echo $data['ruta_img'];?><?php echo $data['nombre_img'];?>"></td>
	<td><?php echo $data['fecha'];?></td>
	<td>
		<a class="link_edit" href="borrar.php?id_evento=<?php echo $data['id_evento']; ?>">  <p class=" font-icon font-icon-trash  "> Eliminar</p> </a>
	</td>
</tr> 
<?php	
		}return $data;
	}
}
	function eliminarDire($carpeta){
		foreach(glob($carpeta."/*") as $archivos_carpeta){
			if (is_dir($archivos_carpeta)){
				eliminarDir($archivos_carpeta);
			}else{
				unlink($archivos_carpeta);
			}
			rmdir($carpeta);
		}
	}


function eliminarEvento(){
	include "../../config/conectardb.php";
        if (!empty($_POST)) {
         $titulo  = $_POST['titulo'];
            //El siguiente query eliminará completamente la noticia, sin dejar respaldo.
            $query_delete = pg_query($db,"DELETE FROM eventos WHERE
			 id_evento= '{$_POST["id_evento"]}'");
            pg_close($db);
 		 eliminarDire('../../public/eventos/'.$titulo);
            if ($query_delete) {
					header('Location:index.php?m=1');
            }else{	
					header('Location:index.php?m=2');
            }
        }
    }

	
function obtener1Evento ($idnoticia){
	include "../../config/conectardb.php";
	$usuarios = array();
	$resultado = pg_query($db, "SELECT * FROM eventos WHERE id_evento= $idnoticia");
	pg_close($db);
	while ($row = pg_fetch_array($resultado)) {
		$usuarios=$row;
	}
	pg_free_result($resultado);
	return $usuarios; 
} 



function obtenerTodasEventos(){
	include "../../config/conectardb.php";
	$query=pg_query($db, "SELECT * FROM eventos  ORDER BY id_evento DESC ");
	pg_close($db);
	$result=pg_num_rows($query);
			
	if ($result > 0) {
		while ($data = pg_fetch_array($query)) {	?>
			<section class="card">
				<div class="card-block">
						<h5 class="centrar">Escrito por: <?php echo $data['nombre'];?> <?php echo $data['apellido'];?></h5>
						<h6 class="centrar">Fue escrito el dia: <span class="fecha"> <?php echo $data['fecha'];?></span> </h6>
						<h4 class="titulo">	<?php echo $data['titulo'];?></h4>
						<div class="divimg">
							<img  src="../../vista/Comunicador/<?php echo $data['ruta_img'];?><?php echo $data['nombre_img'];?>">
						</div>
					<br>
					<h4 class="subtitulo"><?php echo $data['subtitulo'];?></h4>
						<div class="cont-in">
						<p class="noticia"><?php echo $data["descripcion"];?></p>
						</div>
					<div class="cont-in">		
					</div>
				</div>
			</section>
						<?php
					
					}
				}
			}
		
	



?>




    ?>