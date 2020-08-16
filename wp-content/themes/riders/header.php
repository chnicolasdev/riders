<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">

		<title>Escuela de Surf Riders</title>
		<?php wp_head(); ?>

		<meta content="" name="descriptison">
		<meta content="" name="keywords">

		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	</head>

	<body>

		<?php
		$url_actual = add_query_arg(array());
		?>
	
		<!-- ======= Header ======= -->
		<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
			
			<div class="container d-flex align-items-center">
				<div class="logo mr-auto">
					<!-- <h1 class="text-light"><a href="index.html">Selecao</a></h1> -->
					<!-- Uncomment below if you prefer to use an image logo -->
					<a href="index.php"><img src="<?php bloginfo('template_url') ?>/img/logo-nav.jpg" alt="" class="img-fluid"></a>
				</div>

				<nav class="nav-menu d-none d-lg-block">
					<ul>
						<li class="active">
							<a href="/riders">Inicio</a>
						</li>
						<li>
							<a href="#quienes_somos">Quiénes Somos</a>
						</li>
						<li>
							<a href="#clases">Clases</a>
						</li>
						<li>
							<a href="#videos">Videos</a>
						</li>
						<!-- <li>
							<a href="#reporte">Reporte</a>
						</li> -->
						<!-- <li>
							<a href="#team">Team</a>
						</li> -->
						<li>
							<a href="#contacto">Contacto</a>
						</li>
					</ul>
				</nav><!-- .nav-menu -->
			</div>
		</header><!-- End Header -->



		<!-- <nav class="navbar navbar-light navbar-expand-md justify-content-center bg-riders">

			<a class="navbar-brand" href="#">
				<img src="<?php bloginfo('template_url') ?>/img/logo-nav.jpg" width="70" height="70" alt="">
			</a>

			<button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
				<ul class="navbar-nav mx-auto text-center">
					<li class="nav-item <?php if($url_actual == '/riders/inicio/' || $url_actual == '/riders/') { echo "active"; } ?>">
						<a class="nav-link" href="inicio">Inicio <span class="sr-only">Inicio</span></a>
					</li>

					<li class="nav-item <?php if($url_actual == '/riders/clases/') { echo "active"; } ?>">
						<a class="nav-link" href="clases">Clases</a>
					</li>
					<li class="nav-item <?php if($url_actual == '/riders/videos/') { echo "active"; } ?>">
						<a class="nav-link" href="videos">Videos</a>
					</li>
					<li class="nav-item <?php if($url_actual == '/riders/contacto/') { echo "active"; } ?>">
						<a class="nav-link" href="contacto">Contacto</a>
					</li>
				</ul>
			</div>
		</nav> -->
