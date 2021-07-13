
<?php
  
  include "../../config/conectardb.php"; 

  include "../../modelo/acciones.php"; 
  include "../../modelo/Administrador/administrador.php"; 
  
	eliminar(); 

?>


<!DOCTYPE html>
<html>
<head lang="es">

<?php
  include"../MainHead/head.php";
?>
  <title>Borrar Usuarios</title>


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

		  <h2>Se eliminó exitosamente el  usuario.</h2>
		  <button type="button" class="btn font-icon font-icon-answer btn btn-inline btn-primary"><a href="Eliminar_Usuario.php" > Regresar </a></button>
			
	       
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