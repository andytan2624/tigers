<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Expound
 */
/*
 There is a cron script called ladder-cron.php which fetches the ladder data
 *
 */


$fp = fopen(TEMPLATEPATH . "/ladder-links2.txt", "w");
fputs ($fp, "");
fclose ($fp);
$loop = new WP_Query( array( 'post_type' => 'link', 'meta_key'=>'ladder_order' ,'orderby' => 'meta_value_num', 'order' => 'ASC' ) );
while ( $loop->have_posts() ) : $loop->the_post();
    // Save the links in a text file to read
    $output = "";

    $link = get_field("link");

    $output = $link."|".get_field("name")."@";

    $fp = fopen(TEMPLATEPATH . "/ladder-links2.txt", "a+");
    fputs ($fp, $output);
    fclose ($fp);

endwhile;



function ladder_scheduler(){  // Do something. Anything.}
    $fp = fopen(TEMPLATEPATH . "/ladder.txt", "w");
    fputs ($fp, "");
    fclose ($fp);
    $loop = new WP_Query( array( 'post_type' => 'link', 'meta_key'=>'ladder_order' ,'orderby' => 'meta_value_num', 'order' => 'ASC' ) );
    while ( $loop->have_posts() ) : $loop->the_post();
        // Save the links in a text file to read

        $link = get_field("link");
        $html = file_get_html("$link");
        // Create let's create the initial table
        $output = "
 			<div class='widget-container sidewidget '>
				<h4 class='widget-title'>".get_field("name")."</h4>
				<div class='widget-content sideladder'>
				<table class='tableClass'>
				    <tbody><tr>
				      <th>POS</th>
				      <th>TEAM</th>
				      <th style='width:20px;'>% Won</th>
				    </tr>
	 		";

        // Find all images
        foreach($html->find('tr.odd,tr.even') as $element) {
            $tds = $element->find('td');
            $output .= "<tr>";
            foreach ($tds as $key => $td) {
                if ($key == 0 || $key == 1 || $key == 12) {
                    $output .= "<td>".$td->innertext."</td>";
                }
            }
            $output .= "</tr>";
        }
        $output .= "</tbody></table></div></div>";

        $fp = fopen(TEMPLATEPATH . "/ladder.txt", "a+");
        fputs ($fp, $output);
        fclose ($fp);

    endwhile;
    echo $output;
}

?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php

		echo file_get_contents(TEMPLATEPATH."/ladder.txt");
		?>
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGosford-Tigers-AFC-354537944568916&tabs=timeline&width=300&height=70&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	</div><!-- #secondary -->

