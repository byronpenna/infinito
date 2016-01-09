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
		public function agregar(){
			$this->load->view("Noticias/agregar.php");
		}
		public function saveNoticia(){
			$frm = $this->getFormularioAjax();
			$retorno = new stdClass();
			$retorno->estado = $this->model->saveNoticia($frm);
			echo json_encode($retorno);
			//print_r($_POST);
		}
}