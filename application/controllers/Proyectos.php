<?php
class Proyectos extends CI_Controller {
	public function index(){
		$page = 'index';
		if ( ! file_exists(APPPATH.'views/proyectos/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$data['titulo'] = 'Nuestros Proyectos - EmprendeHub';
		$data['descripcion'] = 'Se52.';

		$this->load->view('base/header', $data);
		$this->load->view('proyectos/'.$page, $data);
		$this->load->view('base/footer', $data);
	}
	
}