function frmNoticia(frm){
	actualizarCatalogo(RAIZ+"index.php/Noticias/saveNoticia",frm,function(data){
		console.log(data);
		datos = jQuery.parseJSON(data);
		console.log(datos);
		if(datos.estado){
			alert("Agregada correctamente");
		}else{
			alert("Error");
		}
	})
}