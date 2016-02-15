<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
	<!-- Resources -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Welcome/style.css") ?>> 
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Welcome/media.css") ?> >
</head>
<body>
	<div class="cuerpo row marginNull">
		<div class="col-lg-3">
			<form class="frmLogin">
				<label>Usuario</label>
				<input class="form-control txtUsuario" name="txtUsuario" >
				<label>Contraseña</label>
				<input class="form-control txtPass" name="txtPass" >
				<button class="btn btn-default btnIniciarSesion">Iniciar sesion</button>
			</form>	
		</div>
		
	</div>
	<footer>
		
	</footer>
	<!-- Otra carga -->
		<?php 
			// scripts universales
			$this->load->view("parts/scripts.php")
		?>
		<script type="text/javascript" src=<?php echo base_url("Content/js/Welcome/functions.js") ?> ></script>
		<script type="text/javascript" src=<?php echo base_url("Content/js/Welcome/script.js") ?> ></script>
</body>
</html>