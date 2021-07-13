<?php
    
	function guardar_reporte()
    {
          $mensaje="";
              
    
            $nombres   = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $titulo   = $_POST['reporte_titulo'];
            $categoria    = $_POST['cat_reporte'];
          
            $descripcion      = $_POST['reporte_descrip'];
       
    
                    $resultado = pg_query("INSERT INTO reporte (nombre, apellido,titulo,descripcion)
            VALUES ('$nombres','$apellidos','$titulo','$categoria','$descripcion')");
        
                            
                            
                            $mensaje = '<div class="page-content">
                            <div class="container-fluid"> 
                            <p class="error">Su registro fue exitoso, gracias</p>  
                             </div>
                             </div>';
                            echo'<div class="result"> <img src="../../public/img/sign-check-icon_34365.png" class="page-content centrar" alt="Exito" class="centrar" width="400px"> </div>';
                        
                        
                    
             
                
                echo" $mensaje";
       
}
?>