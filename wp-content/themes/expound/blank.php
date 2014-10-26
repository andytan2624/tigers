<?php
/*
 Template Name: Blank Template
 */
?>

<?php get_header(); ?>

	<div id="" class="blank-area">
		<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->
		<p></p>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>