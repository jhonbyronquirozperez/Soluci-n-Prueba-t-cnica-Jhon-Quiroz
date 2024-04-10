<?php
/* Template Name: Listado de Libros */

get_header(); ?>

<div class="container libros-container">
    <?php
    $args = array(
        'post_type' => 'libro',
        'posts_per_page' => -1,
    );
    $query_libros = new WP_Query($args);

    if ($query_libros->have_posts()) : 
        while ($query_libros->have_posts()) : $query_libros->the_post(); ?>
            <div class="libro-card">
                <h2><?php the_title(); ?></h2>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="libro-imagen">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>
                <div class="libro-info">
                    <p>Autor: <?php echo get_post_meta(get_the_ID(), '_libro_autor', true); ?></p>
                    <p>Género: <?php echo get_post_meta(get_the_ID(), '_libro_genero', true); ?></p>
                    <p>Año de Publicación: <?php echo get_post_meta(get_the_ID(), '_libro_anio_publicacion', true); ?></p>
                </div>
            </div>
        <?php endwhile;
    else : ?>
        <p>No se encontraron libros.</p>
    <?php endif;
    wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>
