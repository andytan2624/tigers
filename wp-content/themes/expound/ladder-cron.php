<?php
include("lib/simple_html_dom.php");
$fp = fopen("ladder.txt", "w");
fputs ($fp, "");
fclose ($fp);

// Read Ladder 2
$ladderLink2 = "";
$fp = fopen("ladder-links2.txt", "r");
$ladderLink2 = fread($fp,filesize("ladder-links2.txt"));
fclose ($fp);

if ($ladderLink2 != "") {
    $ladderArray = explode("@",$ladderLink2);

    if (is_array($ladderArray) && count($ladderArray) > 0) {
        for ($i = 0; $i < count($ladderArray); $i++)  {
            $ladderData = $ladderArray[$i];
            if ($ladderData != "") {
                $ladderDataArray = explode("|",$ladderData);
                $html = file_get_html(trim($ladderDataArray[0]));
                // Create let's create the initial table
                $output = "
 			<div class='widget-container sidewidget '>
				<h4 class='widget-title'>".trim($ladderDataArray[1])."</h4>
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

                $fp = fopen("ladder.txt", "a+");
                fputs ($fp, $output);
                fclose ($fp);


            }

        }
    }
}








