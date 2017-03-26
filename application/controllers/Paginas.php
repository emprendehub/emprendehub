<?php
class Paginas extends CI_Controller {

	function contacto(){
		$page = 'contacto';
		if ( ! file_exists(APPPATH.'views/paginas/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'Contactenos - EmprendeHub';
		$data['descripcion'] = 'Soluciones e Implemtaciones de Desarrollo Web, Branding, E-commerce y Merchandising - info@emprendehub.org - (+51) 967678152.';

		$this->load->view('base/header', $data);
		$this->load->view('paginas/'.$page);
		$this->load->view('base/footer');
	}

	function nosotros(){
		$page = 'nosotros';
		if ( ! file_exists(APPPATH.'views/paginas/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'Nosotros - EmprendeHub (Equipo de Emprendedores)';
		$data['descripcion'] = 'Emprendedores, desarolladores y diseñadores al servicio de ustedes bindando soluciones de Desarrollo Web, Branding, E-commerce y Merchandising.';

		$this->load->view('base/header', $data);
		$this->load->view('paginas/'.$page);
		$this->load->view('base/footer');
	}
}