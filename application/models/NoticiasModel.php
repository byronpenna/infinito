<?php 
class NoticiasModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	// metodos
		function saveNoticia($frm){
			$sql 	= "INSERT INTO noticias 
						VALUES(null,now(),now(),'".$frm->txtTitulo."','".$frm->richText."',1,".$frm->cbIdioma.",'".$frm->txtDescripcion."','',0)";
			$flag 	= $this->db->query($sql);
			if($flag){
				return true;
			}else{
				return false;
			}
		}
}