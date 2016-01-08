<!DOCTYPE html>
<html>
<head>
	<title>Agregar</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
	<!-- Resources -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Noticias/Agregar/style.css") ?>> 
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Noticias/Agregar/media.css") ?> >
</head>
<body>
	<header>
		
	</header>
	<div class="cuerpo row marginNull">
		<form id="frmNoticia">
			<label>Titulo</label>	
			<input class="form-control" name="txtTitulo" class="txtTitulo">
			<label>Contenido</label>
			<div class="row marginNull">
				<div id="editor">
					<h1>Hello world!</h1>
					<p>I'm an instance of <a href="http://ckeditor.com">CKEditor</a>.</p>
				</div>
			</div>
			<label>Idioma</label>
			<select class="form-control">
				<option value="1">Español</option>
			</select>
			<label>Descripción</label>
			<input class="form-control">
			<button>Agregar</button>
			
		</form>
	</div>
	<footer class='row marginNull'>
		
	</footer>
	<!-- Otra carga -->
		<?php 
			// scripts universales
			$this->load->view("parts/scripts.php")
		?>
		<script type="text/javascript" src=<?php echo base_url("Content/plugins/jquery/ckeditor/ckeditor.js") ?> ></script>
		<script type="text/javascript" src=<?php echo base_url("Content/plugins/jquery/ckeditor/ckeditor.js") ?> ></script>
		<!-- editor -->
		<script type="text/javascript" src=<?php echo base_url("Content/js/Noticias/Agregar/functions.js") ?> ></script>
		<script type="text/javascript" src=<?php echo base_url("Content/js/Noticias/Agregar/script.js") ?> ></script>
</body>
</html>