
<!DOCTYPE html>

<html lang="es" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Escuela de Surf Riders</title>
        <?php wp_head(); ?>
    </head>


    <body data-spy="scroll" data-target=".navbar" data-offset="50">


        <?php
        $url_actual = add_query_arg(array());
        ?>

        <nav class="navbar navbar-light navbar-expand-md justify-content-center bg-riders">

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
        </nav>
