// scripts
	function frmLogin(){
		actualizarCatalogo(RAIZ+"index.php/Welcome/ajax_login",frm,function(data){
			if(data.estado){
				// inicia session
			}else{
				// error de credenciales
			}
		})
	}