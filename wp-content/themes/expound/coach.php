<?php
/*
 Template Name: Coach Template
 */
?>

<?php get_header(); ?>

	<div id="" class="blank-area">
		<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->
		<p></p>
		<div class="pager-wrap">
	    <?php $loop = new WP_Query( array( 'post_type' => 'coach', 'orderby' => 'order', 'order' => 'ASC' ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

		    <div class="article">
				<div class="articleIMG"><img class=" alt="" src="<?php the_field( 'photo' ); ?>" width="100" height="100"></div>
				<div class="article-content">
					<h3><?php the_field( 'name' ); ?></h3>
					<div class="articleText"><?php the_field( 'contact_details' ); ?></div>
				</div>
				<div class="clearBoth"></div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
<?php get_footer(); ?>