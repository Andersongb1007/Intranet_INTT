<nav class="side-menu">
<ul class="side-menu-list">
	<li class="brown">
		<a href="../home/">
		<i class="font-icon font-icon-home"></i>
		<span class="lbl">Inicio</span>
		</a>
	</li>

	<li class="magenta">
		<a href="../MiPerfil/">
		<i class="font-icon font-icon-user"></i>
			<span class="lbl">Mi Perfil</span>
		</a>
	</li>
				<li class="pink">
		<a href="../comunicados/comunicados.php">
		<i class="font-icon font-icon-users-group"></i>
			<span class="lbl">Comunicados</span>
	</a>
	</li>

	<li class="brown">
		<a href="../eventos/eventos.php">
		<i class="font-icon font-icon-event"></i>
			<span class="lbl">Eventos</span>
		</a>
	</li>
<li class="red">
		<a href="../directorio/directorio.php" class="label-right">
		<i class="font-icon font-icon-contacts"></i>
			<span class="lbl">Directorio</span>
		</a>
	</li>
	<li class="red">
		<a href="../documentosPublicos/index.php">
		<i class="font-icon font-icon font-icon-case-2"></i>
		<span class="lbl">Documentos Públicos</span>
	</a>
	</li>  
	<?php
	if ($_SESSION["usuario"]["id_rol"] == '3' ) { ?>
	<li class="red with-sub">
	<span>
	<span class="font-icon font-icon-folder"></span>
	<span class="lbl">Administrar Documentos Públicos</span>
	</span>
	<ul >
	<li><a href="../crear_documentos_publicos/index.php"><span class="lbl">Crear Documentos</span></a></li>
					<li><a href="../administrar_documentos_publicos/index.php"><span class="lbl">Eliminar Documentos</span></a></li>
	</ul>
	</li>
		<?php }?>
<?php
	if ($_SESSION["usuario"]["id_rol"] == '2' ) { 
		?>
	<li class="red with-sub">
	<span>
	<span class="font-icon font-icon-folder"></span>
	<span class="lbl">Administrar Documentos Públicos</span>
	</span>
	<ul >
	<li><a href="../crear_documentos_publicos/index.php"><span class="lbl">Crear Documentos</span></a></li>
					<li><a href="../administrar_documentos_publicos/index.php"><span class="lbl">Eliminar Documentos</span></a></li>
	</ul>
	</li>
		<?php }?>

		<li class="red">
		<a href="../documentosPrivados/index.php">
				<i class="font-icon font-icon font-icon-case-2"></i>
			<span class="lbl">Documentos Privados</span>
		</a>
	</li>

	<li class="red with-sub">
	<span>
	
	<span class="font-icon font-icon-folder"></span>
	<span class="lbl">Administrar Documentos Privados</span>
	</span>
	<ul >
	<li><a href="../crear_documentos_privados/index.php"><span class="lbl">Crear Documentos</span></a></li>
					<li><a href="../administrar_documentos_privados/index.php"><span class="lbl">Eliminar Documentos</span></a></li>
	</ul>
	</li>
	<?php
		if ($_SESSION["usuario"]["id_rol"] == '2' ) {	?>
		<li class="grey with-sub">
	<span>
	<span class="font-icon  font-icon-notebook"></span>
	<span class="lbl">Administrar Eventos</span>
	</span>
	<ul >
				<li><a href="../crear_evento/index.php"><span class="lbl">Crear Evento</span></a></li>
				<li><a href="../eliminar_eventos/index.php"><span class="lbl">Eliminar Evento</span></a></li>
</ul>
	</li>
	<li class="grey with-sub">
	<span>
	<span class="font-icon  font-icon-notebook"></span>
	<span class="lbl">Administrar Comunicados</span>
	</span>
	<ul >
				<li><a href="../crear_comunicados/index.php"><span class="lbl">Crear Comunicados</span></a></li>
				<li><a href="../eliminar_comunicados/index.php"><span class="lbl">Eliminar Comunicados</span></a></li>
	</ul>
	</li>
<?php }?>

<?php
	if ($_SESSION["usuario"]["id_rol"] == '3' ) { 
			?>
		<li class="grey with-sub">
	<span>
	<span class="font-icon  font-icon-notebook"></span>
	<span class="lbl">Administrar Eventos</span>
	</span>
	<ul >
				<li><a href="../crear_evento/index.php"><span class="lbl">Crear Evento</span></a></li>
				<li><a href="../eliminar_eventos/index.php"><span class="lbl">Eliminar Evento</span></a></li>
</ul>
	</li>
	<li class="grey with-sub">
	<span>
	<span class="font-icon  font-icon-notebook"></span>
	<span class="lbl">Administrar Comunicados</span>
	</span>
	<ul >
				<li><a href="../crear_comunicados/index.php"><span class="lbl">Crear Comunicados</span></a></li>
				<li><a href="../eliminar_comunicados/index.php"><span class="lbl">Eliminar Comunicados</span></a></li>
	</ul>
	</li>
<?php }?>

			<?php
	if ($_SESSION["usuario"]["id_rol"] == '2') { 
			?>
	<li class="red with-sub">
	<span>
	<span class="font-icon  font-icon-cogwheel"></span>
	<span class="lbl">Administrar Usuarios</span>
	</span>
	<ul >
	<li><a href="../Crear_Usuario/index.php"><span class="lbl">Crear Usuario</span></a></li>
	<li><a href="../Modificar_Usuario/Modificar_Usuario.php"><span class="lbl">Modificar Usuario</span></a></li>
					<li><a href="../Administrar_Usuarios/Eliminar_Usuario.php"><span class="lbl">Eliminar Usuario</span></a></li>
	</ul>
	</li>
			<?php }?>
</ul>

</nav><!--.side-menu-->