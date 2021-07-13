
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
	function guardar_comunicado(){
		include "../../config/conectardb.php";
			if($_FILES["comunicado"]["error"]>0){
				header('Location:index.php?m=4');
			}else{
			if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['titulo']) || empty($_POST['subtitulo']) || empty($_POST['descripcion'])) {
				header('Location:index.php?m=5');
		}else{
				$nombre    		= $_POST['nombre'];
				$apellido  		= $_POST['apellido'];
				$subtitulo      = $_POST['subtitulo'];
				$descripcion    = $_POST['descripcion'];
				$titulo    		= $_POST['titulo'];
				$fecha     		= fecha_();
				$nombreimg = $_FILES['comunicado']['name']; 
				$archivo   		= $_FILES['comunicado']['tmp_name'];
				$ruta_img  		= "../../public/comunicados/".$titulo."/";
				//Verificamos si existe alguna comunicado como la que intentamos agregar.
				$query_check	= pg_query($db,"SELECT * FROM comunicados WHERE titulo = '$titulo'");
				pg_close($db);
				$result = pg_fetch_array($query_check);
				if ($result > 0) {
					//Si es así, comunicamos que la comunicado ya existe.
					header('Location:index.php?m=3');
					
				}else{
					//Sino, procedemos a guardar.
					if(!is_dir($ruta_img)){
						//Si el directorio no existe, lo creamos.
						mkdir($ruta_img, 0755, true);
					}
					$resultado = move_uploaded_file($archivo,$ruta_img.$nombreimg);
					include "../../config/conectardb.php";
					$query_insert = pg_query($db, "INSERT INTO comunicados (nombre, apellido, titulo, descripcion, fecha, ruta_img, nombre_img, subtitulo)
													 VALUES ('$nombre','$apellido','$titulo','$descripcion','$fecha','$ruta_img','$nombreimg','$subtitulo')");      
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
function eliminarDirc($carpeta){
	foreach(glob($carpeta."/*") as $archivos_carpeta){
		if (is_dir($archivos_carpeta)){
			eliminarDir($archivos_carpeta);
		}else{
			unlink($archivos_carpeta);
		}
		rmdir($carpeta);
	}
}
function eliminarcomunicado(){
	include "../../config/conectardb.php";
        if (!empty($_POST)) {
            $idcomunicado = $_POST['idcomunicado'];
            $completo  = $_POST['completo'];
            $titulo  = $_POST['titulo'];
            $fecha   = $_POST['fecha'];
            $principal = 'imagenes/comunicados/';
            //El siguiente query eliminará completamente la comunicado, sin dejar respaldo.
            $query_delete = pg_query($db,"DELETE FROM comunicados WHERE idcomunicado = '$idcomunicado'");
            pg_close($db);
			eliminarDirc('../../public/comunicados/'.$titulo);
            if ($query_delete) {
              echo  '<p class="msj_save">comunicado eliminada correctamente.</p>';
            }else{
				echo  '<p class="msj_error">Ha ocurrido un error al eliminar la comunicado.</p>';;
            }
        }
        if (empty($_REQUEST['idcomunicado'])) {
            header("Location: index.php");
        }else{
            $idcomunicado = $_REQUEST['idcomunicado'];
			include "../../config/conectardb.php";
            $query = pg_query($db, "SELECT nombre,apellido,fuente,comunicado FROM comunicados WHERE idcomunicado = $idcomunicado");
            pg_close($db);
            $result = pg_num_rows($query);
            if ($result > 0) {
                while ($data = pg_fetch_array($query)) {
                $nombre     = $data['nombre'];
                $apellido   = $data['apellido'];
                $fuente     = $data['fuente'];
                $comunicado    = $data['comunicado'];
                }
            }else{
                header("Location: eliminar_comunicado.php");
            }
        }
  
    }
function obtenercomunicados(){
	include "../../config/conectardb.php";
	$query=pg_query($db, "SELECT * FROM comunicados  ORDER BY idcomunicado ASC");
	pg_close($db);
	$result=pg_num_rows($query);	
	if ($result > 0) {
		while ($data = pg_fetch_array($query)) {
?>
<tr>
	<td><?php echo $data['idcomunicado'];?></td>
	<td><?php echo $data['nombre'];?></td>
	<td><?php echo $data['apellido'];?></td>
	<td><?php echo $data['comunicado'];?></td>
	<td><?php echo $data['titulo'];?></td>
	<td><?php echo $data['fuente'];?></td>
		<td><img width="300px" src="../../vista/Comunicador/<?php echo $data['rutaimg'];?><?php echo $data['nombreimg'];?>"></td>
	<td><?php echo $data['fecha'];?></td>
	<td>
		<a class="link_edit" target="_blank" onclick="cerrar()" href="borrar.php?idcomunicado=<?php echo $data['idcomunicado']; ?>">  <p class=" font-icon font-icon-trash  "> Eliminar</p> </a>
	</td>
	
</tr>
<?php	
		}return $data;
	}
}
function obtener1comunicado ($idcomunicado){
	include "../../config/conectardb.php";
	$usuarios = array();
	$resultado = pg_query($db, "SELECT * FROM comunicados WHERE idcomunicado= $idcomunicado");
	pg_close($db);
	while ($row = pg_fetch_array($resultado)) {
		$usuarios=$row;
	}
	pg_free_result($resultado);
	return $usuarios; 
} 
?>