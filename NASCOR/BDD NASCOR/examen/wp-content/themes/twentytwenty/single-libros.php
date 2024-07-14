<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			echo '<div class="info_libro">';
			echo '<h4>Titulo: </h4><br>'.get_field('titulo').'<br><br>';
			echo '<h4>Sinopsis: </h4><br>'.get_field('sinopsis').'<br><br>';
			echo '<h4>Ver libro: </h4><br>'.get_field('url_libro').'<br><br>';
			$image_array = get_field('imagen');
			if ($image_array) {
				$image_url = $image_array['sizes']['large']; 
				echo '<h4>Imagen: </h4><br><img src="' . $image_url . '" alt="Imagen del libro"><br><br>';
			}
			echo '<h4>Editorial: </h4><br>'.get_field('editorial').'<br><br>';
			echo '<h4>Autor: </h4><br>'.get_field('autor').'<br><br>';
			echo '</div>';

		}
	}

	?>

</main><!-- #site-content -->

<?php // get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
