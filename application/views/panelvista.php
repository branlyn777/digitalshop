<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<center>
		<title>Panel de Usuarios</title>
	</center>
</head>
<body>
	<h1>Panel de Control</h1>
	<a href="<?php echo base_url(); ?>index.php/usuarios/logout">Cerrar Sesión</a>
	<h2>Hola <?php echo $this->session->userdata('usuario'); ?></h2>
</body>
</html>