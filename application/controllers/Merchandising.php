<?php
class Merchandising extends CI_Controller {
	
	public function index(){
		$page = 'index';
		if ( ! file_exists(APPPATH.'views/merchandising/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'Merchandising - EmprendeHub';
		$data['descripcion'] = 'Porductos de acuerdo a la marca y el logo';

		$this->load->view('base/header', $data);
		$this->load->view('merchandising/'.$page);
		$this->load->view('base/footer');
	}
}