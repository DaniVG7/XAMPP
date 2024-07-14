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
			echo '<div class="info_portfolio">';
			echo '<strong>URL del proyecto: </strong>'.get_field('url_del_proyecto').'<br>';
			echo '<strong>Empresa: </strong>'.get_field('empresa');
			echo '</div>';

		}
	}

	?>

</main><!-- #site-content -->

<?php // get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
