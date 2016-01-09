<?php 
class NoticiasModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	// metodos
		function saveNoticia($frm){
			$retorno = new stdClass();
			$retorno->mensaje = "";
			try{
				$sql 	= "INSERT INTO noticias 
						VALUES(null,now(),now(),'".$frm->txtTitulo."','".$frm->richText."',1,".$frm->cbIdioma.",'".$frm->txtDescripcion."','',0)";
				$flag 	= $this->db->query($sql);
				if($flag){
					$retorno->estado = true;
				}else{
					$retorno->estado = false;
					$retorno->mensaje = "Error no controlado";
				}
			} catch (Exception $e) {
				$retorno->estado = false;
				$retorno->mensaje = $e;
			}
			return $retorno;
		}
}