<?php
/*
Template Name: Static Page
*/
?>
<?php get_header(); ?>

<section class="wrapper">
<div class="primary">

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  
  <h1><?php the_title(); ?></h1>
  <p><?php the_content(); ?></p>
  
<?php endwhile; else : ?>

  <p><?php _e( 'Aint nutthin here! (Yes, the single quotes are missing from that line, WordPress is kinda strict with that.' ); ?></p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>