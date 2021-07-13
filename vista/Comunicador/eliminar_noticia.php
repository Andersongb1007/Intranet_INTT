<?php
  
	include "../../config/conectardb.php"; 
	include "../../modelo/acciones.php"; 
	include "../../modelo/Administrador/administrador.php"; 
	
	    valida_usuario();


 
	
?>





<!DOCTYPE html>
<html>
<head lang="es">

<?php
    include"../MainHead/head.php";
?>
	<title>Modificar Noticias</title>


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


         
			<div class="page-content">
			<div class="container-fluid">

            
            <div class="table-responsive">
            <table id="tablaUsuarios" class="table table-bordered">
            <thead class="thead-dark ">
            <tr>
                <th width="69" height="42">ID noticia</th>
                <th width="106">Nombre</th>
                <th width="109">Apellido</th>
                <th >Descripcion</th>
                <th width="100">Fuente</th>
                <th width="100">Título</th>
               
                <th width="100">imagen</th> 
                <th width="100">Fecha<p>(A/M/D)</p></th>
                <th width="100">Eliminar</th>
            </thead>

            </tr>
            <?php 
            include "../../config/conectardb.php";
            include "../../modelo/comunicador/comunicador.php";
                obtenerNoticias();
            ?>                      
            
    </table>   

		</div>
                    

		</div>
	</div><!--.page-content-->
	       
	
	
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