<?php
require_once("../../../wp-load.php");
$fp = fopen(TEMPLATEPATH . "/ladder.txt", "w");
fputs ($fp, "");
fclose ($fp);
$loop = new WP_Query( array( 'post_type' => 'link', 'meta_key'=>'ladder_order' ,'orderby' => 'menu_order', 'order' => 'ASC' ) );
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
    foreach($html->find('.tableContainer tr.odd, .tableContainer tr.even') as $element) {
        $tds = $element->find('td');
        $output .= "<tr>";
        foreach ($tds as $key => $td) {
            if ($key == 0 || $key == 1 || $key == 12 || ($key == 9 && strpos(get_field("name"), "Black Diamond") !== false )) {
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
?>