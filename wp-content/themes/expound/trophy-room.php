<?php
/*
 Template Name: Trophy Room
 */
?>

<?php get_header(); ?>
	<div id="" class="trophy-room-area">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>