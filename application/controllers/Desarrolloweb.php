<?php
class Desarrolloweb extends CI_Controller {
	
	public function index(){
		$page = 'index';
		if ( ! file_exists(APPPATH.'views/desarrolloweb/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('desarrolloweb/'.$page);
		$this->load->view('base/footer');
	}

	function rediseno(){
		$page = 'rediseno';
		if ( ! file_exists(APPPATH.'views/desarrolloweb/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('desarrolloweb/'.$page);
		$this->load->view('base/footer');
	}

	function webinformativa(){
		$page = 'webinformativa';
		if ( ! file_exists(APPPATH.'views/desarrolloweb/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('desarrolloweb/'.$page);
		$this->load->view('base/footer');
	}

	function mejorsolucion(){
		$page = 'mejorsolucion';
		if ( ! file_exists(APPPATH.'views/desarrolloweb/'.$page.'.php')){
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['titulo'] = 'titulo de la pagina';
		$data['descripcion'] = 'descripcion de la pagina';

		$this->load->view('base/header', $data);
		$this->load->view('desarrolloweb/'.$page);
		$this->load->view('base/footer');
	}
}