<?php
/*
 Template Name: Ground Template
 */
?>

<?php get_header(); ?>

	<div id="" class="blank-area">
		<header class="entry-header">
		<h1 class="entry-title">Ground Locations</h1>
		</header><!-- .entry-header -->
		<p></p>
		<div class="pager-wrap">
	    <?php $loop = new WP_Query( array( 'post_type' => 'ground', 'meta_key' => 'order','orderby' => 'meta_value_num', 'order' => 'ASC' ) ); ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

		    <?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
		
		    <div class="entry-content">
		        <?php the_content(); ?>
		    </div>
		    <div class="article">
				<div class="articleIMG"><?php the_field( 'google_map_link' ); ?></div>
				<div class="article-content">
					<h3><?php the_field( 'name' ); ?></h3>
					<div class="articleText"><?php the_field( 'address' ); ?></div>
				</div>
				<div class="clearBoth"></div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
<?php get_footer(); ?>