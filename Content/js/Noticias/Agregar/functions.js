function frmNoticia(frm){
	var url;
	if(frm.txtHdEstado == 1){
		url = RAIZ+"index.php/Noticias/saveNoticia";	
	}else{
		url = RAIZ+"index.php/Noticias/editNoticia";	
	}
	console.log("frm es",frm);
	console.log("la url es",url);
	actualizarCatalogo(url,frm,function(data){
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