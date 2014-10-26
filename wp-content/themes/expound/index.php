<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Expound
 */

get_header(); ?>

	<header class="page-header">
	<?php 
    echo do_shortcode("[metaslider id=76]"); 
?>
	</header><!-- .page-header -->
	
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php //print do_shortcode("[custom-facebook-feed]");?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php 
			// Show max five posts
			$counter = 0;
			?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					if ($counter < 5) {
						get_template_part( 'content', get_post_format() );
						$counter++;
					}
					
				?>
				
			<?php endwhile; ?>

			<?php //expound_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>
		<div class="facebook-feed">
			<h1 class="widget-title">Facebook Feed</h1>
			<?php echo do_shortcode("[custom-facebook-feed]"); ?>
		</div>

		</div><!-- #content -->
		
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>