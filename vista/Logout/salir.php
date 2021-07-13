<?php
	
	include "../../config/conectardb.php"; 
	include "../../modelo/acciones.php"; 
  
	valida_usuario();
	
	session_unset ();
	session_destroy ();
	
	header('Location:../../index.php');
?>
