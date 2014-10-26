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
	<div id="ctl29_Container" class="sponsorsFooter">
		<div class="sponsorsFooter-header">
	    	<h2>Proud Sponsors of the Gosford Tigers</h2>
	    </div>
	    <div class="footer-image-container">
    	    <div class="big-footer-image">
			    <a id=""  href="http://www.grsl.com.au/" target="_blank"><img title="Gosford RSL" src="<?php bloginfo('template_url'); ?>/images/sponsors/rsz_gosfordrsl.jpg" alt="Gosford URL"></a>
	    	</div>
	    	<div class="big-footer-image">
	    		<a id=""  href="http://www.storagecity.com.au/" target="_blank"><img title="Storage City" src="<?php bloginfo('template_url'); ?>/images/sponsors/rsz_11hugestoragecity.png" alt="Storage City"></a>
	    	</div>
	    </div>
	    <div class="footer-image-container">

	    	<div class="footer-image">
			    <a id=""  href="http://www.bendigobank.com.au/public/" target="_blank"><img  title="Bendigo Bank" src="<?php bloginfo('template_url'); ?>/images/sponsors/bending-new.jpg" alt="Bendingo Bank"></a>
	    	</div>
	    	<div class="footer-image">
			    <a id=""  href="http://www.myseafm.com.au/" target="_blank"><img title="Sea FM" src="<?php bloginfo('template_url'); ?>/images/sponsors/seafm-new.jpg" alt="Sea FM"></a>
	    	</div>
	    	<div class="footer-image">
			    <a id=""  href="http://www.nab.com.au/" target="_blank"><img title="NAB" src="<?php bloginfo('template_url'); ?>/images/sponsors/nab-new.jpg" alt="NAB"></a>
	    	</div>    	
	    </div>   
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php //do_action( 'expound_credits' ); ?>
		</div><!-- .site-info -->
			<footer id="colophon" role="contentinfo">
		<div class="footer-links">
			<ul>
				<li><a target="_blank" href="http://www.centralcoastjuniorafl.com.au/">Central Coast Juniors</a> </li>
	            <li><a target="_blank" href="http://www.aflauskick.com.au/">Auskick Website</a> </li>
	            <li><a target="_blank" href="http://www.gosfordafl.com.au/">Gosford Wildcats</a> </li>
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