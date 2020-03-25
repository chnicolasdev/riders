

<?php get_header(); ?>



<!-- SECCION PRIMERA VISTA -->
<section id="contacto" class="bg-light">
    <div class="row">
        <div class="col-12 m-auto p-5">
            <div class="offset-md-3 col-md-6 text-left p-5">
                <?php
                $argsProyecto = array(
                        'cat' => 12,
                        'type' => 'post',
                        'posts_per_page' => 1,
                );

                query_posts($argsProyecto);

                $ultimaProyecto = new WP_Query($argsProyecto);
                if ( $ultimaProyecto->have_posts() ):

                    while($ultimaProyecto->have_posts() ): $ultimaProyecto->the_post(); ?>
                        <h1 class="text-center text-white display-5 celeste font-weight-bold"><?php the_title(); ?></h1>
                    <?php endwhile; ?>
                <?php endif;
                wp_reset_postdata();
                ?>
            </div>  
            <div class="row my-5">
                <div class="offset-md-2 col-md-4">
                    <?php
                    $argsProyecto = array(
                            'cat' => 24,
                            'type' => 'post',
                            'posts_per_page' => 1,
                    );

                    query_posts($argsProyecto);

                    $ultimaProyecto = new WP_Query($argsProyecto);
                    if ( $ultimaProyecto->have_posts() ):

                        while($ultimaProyecto->have_posts() ): $ultimaProyecto->the_post(); ?>
                            <p class="pt-3 text-left"><?php the_content(); ?></p>
                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </div>  
                <div class="col-md-4 bg-dark">
                    
                </div>  
            </div>
        </div>
    </div>
</section>
<!-- FIN SECCION PRIMERA VISTA -->




<?php get_footer(); ?>
