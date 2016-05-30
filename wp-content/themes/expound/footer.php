<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Expound
 */
?>

	</div><!-- #main -->
	<div class="slider-container">
		<div class="sponsorsSlider">
			<div class="sponsorsSlider-header">
				<h2>Proud Sponsors</h2>
			</div>
			<?php
			echo do_shortcode("[metaslider id=948]");
			?>
		</div>

		<div class="bannerSlider">
			<div class="bannerSlider-header">
				<h2>Annoucements</h2>
			</div>
			<?php
			echo do_shortcode("[metaslider id=77]");
			?>
		</div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php //do_action( 'expound_credits' ); ?>
		</div><!-- .site-info -->
			<footer id="colophon" role="contentinfo">
		<div class="footer-links">
			<ul>
				<li><a target="_blank" href="http://www.sportingpulse.com/get_file.cgi?id=2904361">Black Diamond Code of Conduct</a> </li>
				<li><a target="_blank" href="http://www.centralcoastjuniorafl.com.au/">Central Coast Juniors</a> </li>
	            <li><a target="_blank" href="http://www.aflauskick.com.au/">Auskick Website</a> </li>
			</ul>
			<ul>
				<li><a target="_blank" href="http://www.foxsportspulse.com/assoc_page.cgi?client=1-3445-0-0-0">AFL Greater Sydney Juniors</a></li>
				<li><a target="_blank" href="http://www.aflnswact.com.au/">AFL NSW/ACT</a> </li>
            </ul>
            <ul>
                <li><a target="_blank" href="http://www.afl.com.au/">AFL Official Website</a>   </li>
                <li><a href="http://www.aflcommunity.com.au/" target="_blank">AFL Community</a> </li>
            </ul>

		</div><!-- .site-info -->
        <div class="footer-logo"></div>
        <div class="social-logo"></div>
	</footer><!-- #colophon -->
	<p></p>
	<hr/>
	<p >&copy; Gosford Junior Tigers. All Rights reserved. Go The Tigers</p>
</div><!-- #page -->

<?php wp_footer(); ?>
<div id="footerbanner">
		<div class="red">
			<span class="redprop-footer">Web design by Andy Tan </span>
		</div>
	</div>
	

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.tablesorter.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		$(".sortableTable").tablesorter()
	});
</script>
</body>
</html>