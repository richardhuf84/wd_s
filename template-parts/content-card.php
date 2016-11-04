<?php
/**
 * Template part for displaying card content.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article class="card">
	<div class="card-image">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/placeholder.png" alt="">
	</div>

	<header class="card-header">
		<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	</header><!-- .card-header -->

	<div class="card-copy">
		<?php the_excerpt(); ?>
	</div><!-- .card-copy -->

	<footer class="card-footer">
		<?php _s_content_more_link(); ?>
		<!-- <?php _s_entry_footer(); ?> -->
	</footer><!-- .card-footer -->
</article><!-- .card -->
