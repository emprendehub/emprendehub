<?php
class Branding extends CI_Controller {
	
	public function index(){
		$page = 'index';
		if ( ! file_exists(APPPATH.'views/branding/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'Branding (Marca) - EmprendeHub';
		$data['descripcion'] = 'Creación y el desarrollo de Marcas para emprendedores y empresas.';

		$this->load->view('base/header', $data);
		$this->load->view('branding/'.$page);
		$this->load->view('base/footer');
	}

	function disenomarca(){
		$page = 'disenomarca';
		if ( ! file_exists(APPPATH.'views/branding/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'Diseño de Marcas - EmprendeHub';
		$data['descripcion'] = 'Diseño y Creación de la marca.';

		$this->load->view('base/header', $data);
		$this->load->view('branding/'.$page);
		$this->load->view('base/footer');
	}

	function icorp(){
		$page = 'icorp';
		if ( ! file_exists(APPPATH.'views/branding/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'Identidad Corporativa - EmprendeHub';
		$data['descripcion'] = 'Identidad Corporativa para empresas, pymes y emprendedores.';

		$this->load->view('base/header', $data);
		$this->load->view('branding/'.$page);
		$this->load->view('base/footer');
	}

	function ecorp(){
		$page = 'ecorp';
		if ( ! file_exists(APPPATH.'views/branding/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'Estrategia Corporativa- EmprendeHub';
		$data['descripcion'] = 'Estrategias de como llevar su marca y hacerla creceren internet.';

		$this->load->view('base/header', $data);
		$this->load->view('branding/'.$page);
		$this->load->view('base/footer');
	}
}