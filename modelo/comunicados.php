<?php

function obtenerTodosComunicados(){
	include "../../config/conectardb.php";
	$query=pg_query($db, "SELECT * FROM comunicados  ORDER BY id_comunicado ASC");
	pg_close($db);
	$result=pg_num_rows($query);
			
	if ($result > 0) {
		while ($data = pg_fetch_array($query)) {
		
		?>
						<section class="card">
						<div class="card-block">
						<div class="logocomunicado"><img src="../../public/img//logo nuevo 2017-01.jpg" alt=""></div>
					
						<h2 class="centrar negrita">Comunicado</h2>
						<div class="barra"><p></p></div><br>
						
							<h5 class="negrita">DE: <?php echo $data['nombre'];?> <?php echo $data['apellido'];?></h5>
							<h6 class="negrita">Asunto: <span class="fecha"> <?php echo $data['titulo'];?></span> </h6>
							<h6 class="negrita">FECHA: <span class="fecha"> <?php echo $data['fecha'];?></span> </h6>
					<div class="barra"><p></p></div>
							<br>

							<div class="divimg">
							<img src="../../vista/Comunicador/<?php echo $data['ruta_img'];?><?php echo $data['nombre_img'];?>">
							</div>
							<h4 class="subtitulo"><?php echo $data['subtitulo'];?></h4>

							<div class="cont-in">
							<p class="noticia"><?php echo $data["descripcion"];?></p>
							</div>
							<div class="cont-in">
					
							</div>
							<div class="pie"><img src="../../public/img/Cintillo MPPT con 200 Carabobo-03 (2).jpg" alt=""></div>
						</div>
						</section>

					
					<?php	
					}
	}
}





?>