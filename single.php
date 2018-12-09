<?php
/*
Template Name: Single Post
*/
?>
<?php get_header(); ?>

<section class="wrapper">
<div class="primary">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<p><em><?php the_time('l, F jS, Y'); ?></em></p>

	  	<?php the_content(); ?>

	  	<hr>
		<?php comments_template(); ?>

	<?php endwhile; else: ?>

  <p><?php _e( 'Aint nutthin here! (Yes, the single quotes are missing from that line, WordPress is kinda strict with that.' ); ?></p>

<?php endif; ?>

</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>