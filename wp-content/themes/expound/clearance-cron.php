<?php
require_once("../../../wp-load.php");
$fp = fopen(TEMPLATEPATH . "/clearance-data.txt", "w");
fputs ($fp, "");
fclose ($fp);
$loop = new WP_Query( array( 'post_type' => 'clearance','orderby' => 'menu_order', 'order' => 'ASC' ) );
while ( $loop->have_posts() ) : $loop->the_post();
    // Save the links in a text file to read
    $link = get_field("link");

    $html = file_get_html("$link");
    // Create let's create the initial table
    $output = "
            <header class=\"entry-header\">
                <h1 class=\"entry-title\">".get_field("name")."</h1>
            </header>
            <p></p>
            <div class=\"table-responsive\">
                <table style=\"width:100%; \" class=\"easy-table easy-table-default sortableTable\" border=\"0\">
                    <thead>
                    <tr><th class=\"header\">Source</th>
                        <th class=\"header\"> Dest</th>
                        <th class=\"header\"> Player</th>
                        <th class=\"header\"> Result</th>
                        <th class=\"header\"> App. Date</th>
                        <th class=\"header\"> Finalisation Date</th>
                    </tr>
                    </thead>
                    <tbody>
	 		";

    // Find all images
    foreach($html->find('.tableContainer tr.odd, .tableContainer tr.even') as $element) {
        $tds = $element->find('td');
        $output .= "<tr>";
        foreach ($tds as $key => $td) {
            $output .= "<td>".$td->innertext."</td>";
        }
        $output .= "</tr>";
    }
    $output .= "</tbody></table></div><p></p>";

    $fp = fopen(TEMPLATEPATH . "/clearance-data.txt", "a+");
    fputs ($fp, $output);
    fclose ($fp);

endwhile;
?>