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

		<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
		<!-- <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">  -->

		<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
		
	
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


