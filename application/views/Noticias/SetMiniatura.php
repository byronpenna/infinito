<!DOCTYPE html>
<html>
<head>
	<title>Set miniatura</title>
	<?php
		// estilos universales
			$this->load->view("parts/estilos.php");
	?>
	<!-- Resources -->
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Noticias/miniatura/style.css") ?>> 
		<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Noticias/miniatura/media.css") ?> >
</head>
<body>
	<div class="row marginNull">
		<form id="frmMiniatura">
			<input type="file">
			<button class="btn btn-default">
				Subir miniatura
			</button>
		</form>
	</div>
</body>
</html>