<?php 
class NoticiasModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	// metodos
		// get 
			function getNoticiaById($idNoticia){
				try{
					$sql 	= "SELECT * FROM noticias WHERE idNoticia = $idNoticia";
					$query 	= $this->db->query($sql);
					return $query->result();
				}catch (Exception $e) {

				}
			}
		// do it 
			function editNoticia($frm){
				$retorno = new stdClass();
				$retorno->mensaje = "";
				try
				{
					$sql = "UPDATE noticias 
							set titulo='".$frm->txtTitulo."',contenido='".$frm->richText."',id_idioma_fk='".$frm->cbIdioma."',breve_descripcion='".$frm->txtDescripcion."' where idNoticia = ".$frm->txtHdIdNoticia." ";
					$flag = $this->db->query($sql);
					if($flag){
						$retorno->estado 	= true;
						$retorno->sql 		= $sql;
					}else{
						$retorno->estado = false;
						$retorno->mensaje = "Error no controlado";
					}		
				}
				catch (Exception $e) {
					$retorno->estado = false;
					$retorno->mensaje = $e;
				}
				return $retorno;
			}
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