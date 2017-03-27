<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
		<meta name="description" content="<?php echo $descripcion; ?>">
		<meta name="author" content="emprendehub.org">
		<base href="http://localhost/emprendehub/" target="_blank"> <!-- codigo provicional para la base-->

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<!--<link rel="shortcut icon" href="static/images/favicon.ico">-->
		<link rel="icon" type="image/png" href="static/images/logo/favicon.png">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<link href="static/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="static/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
		<link href="static/fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="static/plugins/rs-plugin/css/settings.css" media="screen" rel="stylesheet">
		<link href="static/plugins/rs-plugin/css/extralayers.css" media="screen" rel="stylesheet">
		<link href="static/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="static/css/animations.css" rel="stylesheet">
		<link href="static/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

		<!-- iDea core CSS file -->
		<link href="static/css/style.css" rel="stylesheet">

		<!-- Custom css -->
		<link href="static/css/custom.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="front no-trans">
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>
		<div class="page-wrapper">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-2 col-sm-6">
							<div class="header-top-first clearfix">
								<ul class="social-links clearfix hidden-xs">
									<li class="twitter"><a target="_blank" href="https://twitter.com/emprendehub"><i class="fa fa-twitter"></i></a></li>
									<li class="github"><a target="_blank" href="https://github.com/emprendehub"><i class="fa fa-github"></i></a></li>
									<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/emprendehub"><i class="fa fa-linkedin"></i></a></li>
									<li class="googleplus"><a target="_blank" href="https://plus.google.com/108155995109406532333"><i class="fa fa-google-plus"></i></a></li>
									<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCV6oAOwgRpHP3hUr512iPZA"><i class="fa fa-youtube-play"></i></a></li>
									<li class="instagram"><a target="_blank" href="https://www.instagram.com/emprendehub/"><i class="fa fa-instagram"></i></a></li>
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/EmprendeHub.org"><i class="fa fa-facebook"></i></a></li>
								</ul>
								<div class="social-links hidden-lg hidden-md hidden-sm">
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
										<ul class="dropdown-menu dropdown-animation">
											<li class="twitter"><a target="_blank" href="https://twitter.com/emprendehub"><i class="fa fa-twitter"></i></a></li>
											<li class="github"><a target="_blank" href="https://github.com/emprendehub"><i class="fa fa-github"></i></a></li>
											<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/emprendehub"><i class="fa fa-linkedin"></i></a></li>
											<li class="googleplus"><a target="_blank" href="https://plus.google.com/108155995109406532333"><i class="fa fa-google-plus"></i></a></li>
											<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCV6oAOwgRpHP3hUr512iPZA"><i class="fa fa-youtube-play"></i></a></li>
											<li class="instagram"><a target="_blank" href="https://www.instagram.com/emprendehub/"><i class="fa fa-instagram"></i></a></li>
											<li class="facebook"><a target="_blank" href="https://www.facebook.com/EmprendeHub.org"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-10 col-sm-6">
							<div id="header-top-second"  class="clearfix">
								<div class="header-top-dropdown">
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle"><a href="mailto:info@emprendehub.org">info@emprendehub.org</a></button>
									</div>
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle">(+51) 967 678 152</button>
									</div>

									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i> Search</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
											<li>
												<form role="search" class="search-box">
													<div class="form-group has-feedback">
														<input type="text" class="form-control" placeholder="Search">
														<i class="fa fa-search form-control-feedback"></i>
													</div>
												</form>
											</li>
										</ul>
									</div>
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Login</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
											<li>
												<form class="login-form">
													<div class="form-group has-feedback">
														<label class="control-label">Username</label>
														<input type="text" class="form-control" placeholder="">
														<i class="fa fa-user form-control-feedback"></i>
													</div>
													<div class="form-group has-feedback">
														<label class="control-label">Password</label>
														<input type="password" class="form-control" placeholder="">
														<i class="fa fa-lock form-control-feedback"></i>
													</div>
													<button type="submit" class="btn btn-group btn-dark btn-sm">Log In</button>
													<span>or</span>
													<button type="submit" class="btn btn-group btn-default btn-sm">Sign Up</button>

													<ul>
														<li><a href="#">Forgot your password?</a></li>
													</ul>
													<div class="divider"></div>
													<span class="text-center">Login with</span>
													<ul class="social-links clearfix">
														<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
														<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
														<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
													</ul>
												</form>
											</li>
										</ul>
									</div>
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> Cart (8)</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
											<li>
												<table class="table table-hover">
													<thead>
														<tr>
															<th class="quantity">QTY</th>
															<th class="product">Product</th>
															<th class="amount">Subtotal</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="quantity">2 x</td>
															<td class="product"><a href="shop-product.html">Android 4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span></td>
															<td class="amount">$199.00</td>
														</tr>
														<tr>
															<td class="quantity">3 x</td>
															<td class="product"><a href="shop-product.html">Android 4.2 Tablet</a><span class="small">7.3" Quad Core 2GB</span></td>
															<td class="amount">$299.00</td>
														</tr>
														<tr>
															<td class="quantity">3 x</td>
															<td class="product"><a href="shop-product.html">Desktop PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span></td>
															<td class="amount">$1499.00</td>
														</tr>
														<tr>
															<td class="total-quantity" colspan="2">Total 8 Items</td>
															<td class="total-amount">$1997.00</td>
														</tr>
													</tbody>
												</table>
												<div class="panel-body text-right">
												<a href="shop-cart.html" class="btn btn-group btn-default btn-sm">View Cart</a>
												<a href="shop-checkout.html" class="btn btn-group btn-default btn-sm">Checkout</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<header class="header fixed clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="header-left clearfix">
								<div class="logo">
									<a href="index.html"><img id="logo" src="static/images/logo/logo-empredehub.svg" alt="Logo emprendehub"></a>
								</div>
								<div class="site-slogan">
									Desarrollo &amp; Diseño a medida
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="header-right clearfix">
								<div class="main-navigation animated">
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>

											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<ul class="nav navbar-nav navbar-right">
													<li class="dropdown active"><a href="index.html" class="dropdown-toggle">Inicio</a></li>
													<li class="dropdown"><a href="nosotros" class="dropdown-toggle">Nosotros</a></li>

													<li class="dropdown mega-menu">
														<a href="servicios" class="dropdown-toggle" data-toggle="dropdown">Servicios</a>
														<ul class="dropdown-menu">
															<li>
																<div class="row">
																	<div class="col-lg-4 col-md-3 hidden-sm">
																		<h4>Premium HTML5 Template</h4>
																		<p>iDea is perfectly suitable for corporate, business and company webpages.</p>
																		<img src="static/images/section-image-3.png" alt="iDea">
																	</div>
																	<div class="col-lg-8 col-md-9">
																		<div class="row">
																			<div class="col-sm-4">
																				<h4>Desarrollo Web</h4>
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="desarrollo-web"><i class="icon-right-open"></i>Desarrollo Web</a></li>
																					<li><a href="rediseno-web"><i class="icon-right-open"></i>Rediseño Web</a></li>
																					<li><a href="desarrollo-de-web-informativa"><i class="icon-right-open"></i>Desarrollo de Web Informativa</a></li>
																					<li><a href="desarrollo-mejor-solucion"><i class="icon-right-open"></i>Desarrollo de Mejor Solución</a></li>
																				</ul>
																			</div>
																			<div class="col-sm-4">
																				<h4>Identidad de Marca</h4>
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="identidad-de-marca"><i class="icon-right-open"></i>Identidad de Marca</a></li>
																					<li><a href="diseno-de-marcas-y-logotipos"><i class="icon-right-open"></i>Diseño de Marcas y Logotipos</a></li>
																					<li><a href="identidad-corporativa"><i class="icon-right-open"></i>Identidad Corporativa</a></li>
																					<li><a href="estrategia-corporativa"><i class="icon-right-open"></i>Estrategia Corporativa</a></li>
																				</ul>
																			</div>
																			<div class="col-sm-4">
																				<h4>Comercio Electronico</h4>
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="comercio-electronico"><i class="icon-right-open"></i> Comercio Electronico <span class="badge">v1.1</span> </a></li>
																				</ul>

																				<h4>Articulos para empresas</h4>
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="articulos-para-empresas"><i class="icon-right-open"></i> Articulos para Empresas</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>

													<li class="dropdown mega-menu">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">Proyectos</a>
														<ul class="dropdown-menu">
															<li>
																<div class="row">
																	<div class="col-sm-4 col-md-6">
																		<h4>iDea - Powerful Bootstrap Theme</h4>
																		<p>iDea is a Clean and Super Flexible Bootstrap Theme with many Features and Unlimited options.</p>
																		<img src="static/images/section-image-1.png" alt="image-1">
																	</div>
																	<div class="col-sm-8 col-md-6">
																		<h4>Proyectos</h4>
																		<div class="row">
																			<div class="col-sm-6">
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="#"><i class="icon-right-open"></i>La Noche</a></li>
																					<li><a href="#"><i class="icon-right-open"></i>Comunidad Verde</a></li>
																					<li><a href="#"><i class="icon-right-open"></i>Construzet</a></li>
																					<li><a href="#"><i class="icon-right-open"></i>Buttons</a></li>
																					<li><a href="#"><i class="icon-right-open"></i>Forms</a></li>
																					<li><a href="#"><i class="icon-right-open"></i>Progress bars</a></li>
																					<li><a href="#"><i class="icon-right-open"></i>Alerts &amp; Callouts</a></li>
																					<li><a href="#"><i class="icon-right-open"></i>Content Sliders</a></li>
																					<li><a href="#"><i class="icon-right-open"></i>Text Rotators  <span class="badge">v1.3</span></a></li>
																					<li><a href="#tml"><i class="icon-right-open"></i>Lightbox</a></li>
																				</ul>
																			</div>
																			<div class="col-sm-6">
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="components-icon-boxes.html"><i class="icon-right-open"></i>Icon Boxes</a></li>
																					<li><a href="components-image-boxes.html"><i class="icon-right-open"></i>Image Boxes</a></li>
																					<li><a href="components-video-and-audio.html"><i class="icon-right-open"></i>Video &amp; Audio</a></li>
																					<li><a href="components-modals.html"><i class="icon-right-open"></i>Modals</a></li>
																					<li><a href="components-animations.html"><i class="icon-right-open"></i>Animations</a></li>
																					<li><a href="components-counters.html"><i class="icon-right-open"></i>Counters</a></li>
																					<li><a href="components-tables.html"><i class="icon-right-open"></i>Tables</a></li>
																					<li><a href="components-charts.html"><i class="icon-right-open"></i>Charts <span class="badge">v1.3</span></a></li>
																					<li><a href="components-announcement-default.html"><i class="icon-megaphone"></i>Announcements <span class="badge">New</span></a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>

													<li class="dropdown"><a href="contacto" class="dropdown-toggle">Contactenos</a></li>
												</ul>
											</div>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
