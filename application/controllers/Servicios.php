<?php
class Servicios extends CI_Controller {
	public function index(){
		$page = 'index';
		if ( ! file_exists(APPPATH.'views/servicios/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$data['titulo'] = 'Nuestros Servicios - EmprendeHub';
		$data['descripcion'] = 'Servicios para emprendedores y empresas de Desarrollo Web, Branding, E-commerce y Merchandising - info@emprendehub.org - (+51) 967678152.';

		$this->load->view('base/header', $data);
		$this->load->view('servicios/'.$page, $data);
		$this->load->view('base/footer', $data);
	}
	
}