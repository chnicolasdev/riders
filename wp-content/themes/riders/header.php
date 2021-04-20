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

	<body class="bg-dark">

		<?php
		$url_actual = add_query_arg(array());
		?>

		<!-- <header class="header bg-dark"> -->
		<div class="container bg-dark">			
			<nav class="navbar navbar-expand-lg navbar-light bg-dark container fixed-top">
				<a class="navbar-brand" href="inicio">
					<img src="<?php bloginfo('template_url') ?>/img/logo-nav1.png" alt="" class="img-fluid" width="70" height="70" class="d-inline-block align-top" alt="" loading="lazy">
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						
						<li class="nav-item <?php if($url_actual == '/riders/inicio/' || $url_actual == '/riders/') { echo "active"; } ?>">
							<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item <?php if($url_actual == '/riders/escuela/') { echo "active"; } ?>">
							<a class="nav-link" href="#">Escuela</a>
						</li>
						<li class="nav-item <?php if($url_actual == '/riders/coach/') { echo "active"; } ?>">
							<a class="nav-link" href="#">Coach</a>
						</li>
						<li class="nav-item <?php if($url_actual == '/riders/surfcamp/') { echo "active"; } ?>">
							<a class="nav-link" href="#">SurfCamp</a>
						</li>
						<li class="nav-item <?php if($url_actual == '/riders/galeria/') { echo "active"; } ?>">
							<a class="nav-link" href="#">Galería</a>
						</li>
						<li class="nav-item <?php if($url_actual == '/riders/contacto/') { echo "active"; } ?>">
							<a class="nav-link" href="#">Contacto</a>
						</li>

					</ul>
				</div>
			</nav>


		</div>

		<!-- </header> -->


