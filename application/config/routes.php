<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Desarrollo Web
$route['desarrollo-web'] = 'desarrolloweb/index';
$route['rediseno-web'] = 'desarrolloweb/rediseno';
$route['desarrollo-de-web-informativa'] = 'desarrolloweb/webinformativa';
$route['desarrollo-mejor-solucion'] = 'desarrolloweb/mejorsolucion';

// Branding (Identidad de Marca)
$route['identidad-de-marca'] = 'branding/index';
$route['diseno-de-marcas-y-logotipos'] = 'branding/disenomarca';
$route['identidad-corporativa'] = 'branding/icorp';
$route['estrategia-corporativa'] = 'branding/ecorp';

// Ecommerce (Comercio Electronico)
$route['comercio-electronico'] = 'ecommerce/index';
 

// Merchandising (Articulos para empresas)
$route['articulos-para-empresas'] = 'merchandising/index';

// Paginas simples
$route['contacto'] = 'paginas/contacto';
$route['nosotros'] = 'paginas/nosotros';


//servicios
$route['servicios'] = 'servicios/index';

//proyectos
$route['proyectos'] = 'proyectos/index';

$route['default_controller'] = 'home';

//$route['(:any)'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
