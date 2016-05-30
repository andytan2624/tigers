<?php
/*
 Template Name: Clearance
 */
?>
<?php get_header(); ?>
    <div id="main" class="site-main">
        <div id="" class="blank-area">
            <?php
            echo file_get_contents(TEMPLATEPATH."/clearance-data.txt");
            ?>
        </div>

    </div>
<?php get_footer(); ?>