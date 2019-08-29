<?php $root = '/bocetos/emweb2/' ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Xander Media</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo $root; ?>assets/css/uikit.min.css" />
		<link rel="stylesheet" href="<?php echo $root; ?>assets/css/custom.css"/>
		<link rel="stylesheet" href="<?php echo $root; ?>assets/font/style.css"/>
		<!-- FontAwesome -->
		<link rel="stylesheet" href="<?php echo $root; ?>assets/font-awesome/css/font-awesome.min.css">
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo $root; ?>assets/img/favicon.ico" />
		<link rel="apple-touch-icon" href="<?php echo $root; ?>assets/img/apple_touch_icon.png">
	</head>

	<body>
		<div class="header-redes">
			<div class="uk-container uk-container-large uk-flex uk-flex-between">
				<div class="info-header-redes">
					<a href="" class="uk-link-reset"><i class="fa fa-envelope" aria-hidden="true"></i></span> soporte@xandermedia.com</a>
				</div>
				<div class="icon-redes-header">
					<a href="#" class="uk-link-reset"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#" class="uk-link-reset"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#" class="uk-link-reset"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
		<header id="header">
			<div class="uk-container uk-container-large">
				<div class="uk-flex uk-flex-between uk-flex-middle">
					<div class="logo-header">
						<a href="<?php echo $root; ?>"><img src="<?php echo $root; ?>assets/img/logo.png" alt="logo-xander" class="logo-"></a>
					</div>
					
					<div id="menu" class="uk-visible@m">
						<nav class="uk-navbar uk-navbar-transparent" uk-navbar>
							<div class="">
								<ul class="uk-navbar-nav ">
									<li class="<?php if ($_SERVER['REQUEST_URI'] == $root): echo "uk-active"; endif;?>"><a href="<?php echo $root ?>">Inicio</a></li>
									<li class="<?php if (strpos($_SERVER['REQUEST_URI'], '/Nosotros')): echo "uk-active"; endif;?>"><a href="<?php echo $root; ?>Nosotros">Nosotros</a></li>
									<li class="<?php if (strpos($_SERVER['REQUEST_URI'], '/Portafolio')): echo "uk-active"; endif;?>"><a href="<?php echo $root; ?>Portafolio">Portafolio</a></li>
									<li class="<?php if (strpos($_SERVER['REQUEST_URI'], '/Servicios')): echo "uk-active"; endif;?>"><a href="<?php echo $root; ?>Servicios">Servicios</a></li>
									<li class="<?php if (strpos($_SERVER['REQUEST_URI'], '/contacto')): echo "uk-active"; endif;?>"><a href="<?php echo $root; ?>contacto">Contactos</a></li>
								</ul>
							</div>
						</nav>
					</div>
					<!-- <a uk-navbar-toggle-icon="" href="#offcanvas-nav" uk-toggle="" class="uk-navbar-toggle uk-icon uk-navbar-toggle-icon uk-hidden@m"></a> -->
					<a href="#offcanvas-nav" uk-toggle="" class="menu-icon uk-link-reset uk-hidden@m"><i class="fa fa-bars"></i></a>
				</div>
			</div>
			
			<div id="offcanvas-nav" uk-offcanvas="overlay: true">
				<div class="uk-offcanvas-bar">
					<ul class="uk-nav uk-nav-default">
						<li class="<?php if ($_SERVER['REQUEST_URI'] == $root): echo "uk-active"; endif;?>"><a href="<?php echo $root ?>">Inicio</a></li>
						<li class="<?php if (strpos($_SERVER['REQUEST_URI'], '/Nosotros')): echo "uk-active"; endif;?>"><a href="<?php echo $root; ?>Nosotros">Nosotros</a></li>
						<li class="<?php if (strpos($_SERVER['REQUEST_URI'], '/Portafolio')): echo "uk-active"; endif;?>"><a href="<?php echo $root; ?>Portafolio">Portafolio</a></li>
						<li class="<?php if (strpos($_SERVER['REQUEST_URI'], '/Servicios')): echo "uk-active"; endif;?>"><a href="<?php echo $root; ?>Servicios">Servicios</a></li>
						<li class="<?php if (strpos($_SERVER['REQUEST_URI'], '/contacto')): echo "uk-active"; endif;?>"><a href="<?php echo $root; ?>contacto">Contactos</a></li>
					</ul>
				</div>
			</div><!-- off-canvas -->

		</header>
		<!-- /Header -->

		