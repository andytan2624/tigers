<?php
/**
 * @package Expound
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
	<div class="entry-thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<?php endif; ?>

	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<span class="read_more"><a class="linkbutton" href="<?php the_permalink(); ?>">Read More</a></span>
	</div><!-- .entry-summary -->

	<footer class="entry-meta">
		<?php expound_posted_in(); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
