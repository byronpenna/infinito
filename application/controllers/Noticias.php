<?php 
include_once(APPPATH.'controllers/PadreController.php');
class Noticias extends PadreController
{
	
	// variables 
		private $model;
	// funciones magicas
		function __construct()
		{
			parent::__construct();
			$this->load->model("NoticiasModel");
			$this->model = new NoticiasModel();
		}
	// metodos
		// Acciones url
			public function agregar($id=-1){
				// variables
					$data 		= array();
					$noticia 	= null;
				// do it
					if($id != -1){
						// editar noticia
						$noticia 	= $this->model->getNoticiaById($id);
						$noticia 	= $noticia[0];
						$estado 	= 2;
					}else{
						// nueva noticia
						$noticia = new stdClass();
						$noticia->idNoticia = -1;
						$noticia->titulo 	= ""; 		$noticia->contenido 		= "";
						$noticia->idioma 	= 1; 		$noticia->breve_descripcion = "";
						$estado = 1;
					}
					$data["noticia"] 	= $noticia;
					$data["estado"] 	= $estado;
				// view 
					$this->load->view("Noticias/agregar.php",$data);
			}
		// acciones 
			public function editNoticia(){
				$frm = $this->getFormularioAjax();
				$retorno = $this->model->editNoticia($frm);
				echo json_encode($retorno);
			}
			public function saveNoticia(){
				$frm = $this->getFormularioAjax();
				$retorno = $this->model->saveNoticia($frm);
				echo json_encode($retorno);
				//print_r($_POST);
			}

}