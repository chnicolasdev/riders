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
		<!-- <link href="assets/img/favicon.png" rel="icon">
		<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

		<link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">  
		<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
		
	
	</head>

	<body>

		<?php
		$url_actual = add_query_arg(array());
		?>
	
		<!-- ======= Header ======= -->
		<?php /*
		<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
			
			<div class="container d-flex align-items-center">
				<div class="logo mr-auto">
					<!-- <h1 class="text-light"><a href="index.html">Selecao</a></h1> -->
					<!-- Uncomment below if you prefer to use an image logo -->
					<a href="index.php"><img src="<?php bloginfo('template_url') ?>/img/logo-nav.jpg" alt="" class="img-fluid"></a>
				</div>

				<nav class="nav-menu d-none d-lg-block bg-dark">
					<ul>
						<li class="nav-item <?php if($url_actual == '/riders/inicio/' || $url_actual == '/riders/') { echo "active"; } ?>">
							<a class="nav-link" href="inicio">Inicio <span class="sr-only">Inicio</span></a>
						</li>
						<li class="nav-item <?php if($url_actual == '/riders/escuela/') { echo "active"; } ?>">
							<a class="nav-link" href="escuela">Escuela Surf</a>
						</li>
						<li class="nav-item <?php if($url_actual == '/riders/surfcamp/') { echo "active"; } ?>">
							<a class="nav-link" href="surfcamp">Surf-Camp</a>
						</li>
						<li class="nav-item <?php if($url_actual == '/riders/ubicacion/') { echo "active"; } ?>">
							<a class="nav-link" href="ubicacion">Ubicación</a>
						</li>
						<li class="nav-item <?php if($url_actual == '/riders/contacto/') { echo "active"; } ?>">
							<a class="nav-link" href="contacto">Contacto</a>
						</li>						
					</ul>
				</nav>
			</div>
		</header>
		<?php */ ?>

		<header class="header bg-dark">
			<?php /*
			<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark">

				<!-- <a class="navbar-brand" href="index.php"><img src="<?php bloginfo('template_url') ?>/img/logo-nav1.png" alt="" class="img-fluid w-25"></a> -->
				
				<a class="navbar-brand" href="#">
					<img src="<?php bloginfo('template_url') ?>/img/logo-nav1.png" alt="" class="img-fluid" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
				</a>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Escuela</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Surf-Camp</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Ubicación</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contacto</a>
						</li>
					</ul>
				</div>
			</nav> */ ?>

			<nav class="navbar navbar-expand-lg navbar-light container fixed-top">
				<!-- <a class="navbar-brand" href="#">Navbar</a> -->
				<a class="navbar-brand" href="inicio">
					<img src="<?php bloginfo('template_url') ?>/img/logo-nav1.png" alt="" class="img-fluid" width="100" height="100" class="d-inline-block align-top" alt="" loading="lazy">
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						
						<li class="nav-item <?php if($url_actual == '/riders/inicio/' || $url_actual == '/riders/') { echo "active"; } ?>">
							<a class="nav-link" href="inicio">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item <?php if($url_actual == '/riders/escuela/') { echo "active"; } ?>">
							<a class="nav-link" href="escuela">Escuela</a>
						</li>
						<!-- <li class="nav-item <?php if($url_actual == '/riders/surfcamp/') { echo "active"; } ?>">
							<a class="nav-link" href="surfcamp">Surf-Camp</a>
						</li>
						<li class="nav-item <?php if($url_actual == '/riders/ubicacion/') { echo "active"; } ?>">
							<a class="nav-link" href="ubicacion">Ubicación</a>
						</li> -->
						<li class="nav-item <?php if($url_actual == '/riders/contacto/') { echo "active"; } ?>">
							<a class="nav-link" href="contacto">Ubicación / Contacto</a>
						</li>

					</ul>
				</div>
			</nav>


		</header>


