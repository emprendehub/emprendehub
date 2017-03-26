<?php
class Ecommerce extends CI_Controller {
	
	public function index(){
		$page = 'index';
		if ( ! file_exists(APPPATH.'views/ecommerce/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'EmprendeHub - Comercio Electronico';
		$data['descripcion'] = 'xxxx xxxx xxx xxx x x';

		$this->load->view('base/header', $data);
		$this->load->view('ecommerce/'.$page);
		$this->load->view('base/footer');
	}
}