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
		<img src="" alt="">
	</div>

	<header class="card-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .card-header -->

	<div class="card-copy">
		<?php the_excerpt(); ?>
	</div><!-- .card-copy -->

	<footer class="card-footer">
		<?php _s_entry_footer(); ?>
	</footer><!-- .card-footer -->
</article><!-- .card -->
