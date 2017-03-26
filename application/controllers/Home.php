<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		$data['titulo'] = 'EmprendeHub - Desarrollo e Implementación de soluciones Tecnológicas';
		$data['descripcion'] = 'Soluciones para emprendedores y empresas, Desarrollo Web, Branding, E-commerce y Merchandising - info@emprendehub.org - (+51) 967678152';

		$this->load->view('base/header', $data);
		$this->load->view('home');
		$this->load->view('base/footer');
	}
}
