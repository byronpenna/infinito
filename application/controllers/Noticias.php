<?php 
class Noticias extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function agregar(){
		$this->load->view("Noticias/agregar.php");
	}
}