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
    


  function 	guardar_comunicados(){
    include "../../config/conectardb.php";
	if($_FILES["comunicado"]["error"]>0){
		header('Location:index.php?m=6');
	}else{
				
	if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['titulo']) || empty($_POST['subtitulo']) || empty($_POST['descripcion'])){ 
        	header('Location:index.php?m=3');
	}else{
	
		$nombre    = $_POST['nombre'];
		$apellido  = $_POST['apellido'];
		$titulo    = $_POST['titulo'];
		$subtitulo    = $_POST['subtitulo'];
		$descripcion  = $_POST['descripcion'];
		$nombre_comunicado = $_FILES['comunicado']['name']; //obtiene el nombre
		$comunicado= $_FILES['comunicado']['tmp_name']; //Obtiene el comunicado
		$ruta_comunicado = "../../public/comunicados/".$titulo."/";
		$fecha = fecha_();
		//Verificamos si existe alguna noticia como la que intentamos agregar.
				$query_check = pg_query($db,"SELECT * FROM comunicados WHERE titulo = '$titulo'");
				pg_close($db);
				$result = pg_fetch_array($query_check);
			if ($result > 0) {
					//Si es así, comunicamos que la noticia ya existe.
					header('Location:index.php?m=4');
			}else{
					//Sino, procedemos a guardar.
					if(!is_dir($ruta_comunicado)){
						//Si el directorio no existe, lo creamos.
						mkdir($ruta_comunicado, 0755, true);
					}
					$resultado = move_uploaded_file($comunicado,$ruta_comunicado.$nombre_comunicado);
					include "../../config/conectardb.php";
					$query_insert = pg_query($db, "INSERT INTO comunicados 
					( nombre, apellido, titulo, descripcion, fecha, subtitulo, ruta_img, nombre_img)
					VALUES ('$nombre','$apellido','$titulo','$descripcion','$fecha','$subtitulo','$ruta_comunicado','$nombre_comunicado')");
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


function obtener1Comunicado ($id_comunicado){
	include "../../config/conectardb.php";
	$usuarios = array();
	$resultado = pg_query($db, "SELECT * FROM comunicados WHERE id_comunicado = $id_comunicado");
	pg_close($db);
	while ($row = pg_fetch_array($resultado)) {
		$usuarios=$row;
	}

	pg_free_result($resultado);
	return $usuarios; 
} 



function obtenerComunicado(){
	include "../../config/conectardb.php";
	$query=pg_query($db, "SELECT * FROM comunicados ORDER BY id_comunicado ASC");
	pg_close($db);
	$result=pg_num_rows($query);
			
	if ($result > 0) {
		while ($data = pg_fetch_array($query)) {

?>


<tr>
	<td><?php echo $data['id_comunicado'];?></td>
	<td><?php echo $data['nombre'];?></td>
	<td><?php echo $data['apellido'];?></td>
	<td><?php echo $data['descripcion'];?></td>
	<td><?php echo $data['titulo'];?></td>
	<td><?php echo $data['subtitulo'];?></td>
	
		<td><img width="300px" src="../../vista/Comunicador/<?php echo $data['ruta_img'];?><?php echo $data['nombre_img'];?>"></td>
	<td><?php echo $data['fecha'];?></td>
	<td>
		<a class="link_edit" href="borrar.php?id_comunicado=<?php echo $data['id_comunicado']; ?>">  <p class=" font-icon font-icon-trash  "></p> </a>
		
		
	</td>
	
</tr>
<?php
			
		}return $data;
	}


 
}

function eliminarComunicado(){
	include "../../config/conectardb.php";
  
        if (!empty($_POST)) {
         	$id_comunicado = $_POST['id_comunicado'];
			$titulo  = $_POST['titulo'];

 			
            //El siguiente query eliminará completamente la noticia, sin dejar respaldo.
            $query_delete = pg_query($db,"DELETE FROM comunicados WHERE
			 id_comunicado= '{$_POST["id_comunicado"]}'");
            pg_close($db);
 		 eliminarDir('../../public/comunicados/'.$titulo);
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
	?>