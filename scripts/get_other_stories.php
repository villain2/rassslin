<?php
$path 			= '/rassslin/';

include_once '../../../../wp-config.php';
include_once '../../../..//wp-load.php';
include_once '../../../..//wp-includes/wp-db.php';
include_once '../../../../wp-includes/pluggable.php';

$args = array (
    'meta_key'    => '_thumbnail_id',
    'orderby'     => 'rand',
    'order'       => 'DESC',
    'posts_per_page' => 5 
);
// The Query
query_posts($args);
$counter                = 0;
$queryResults           = get_posts($args);

foreach($queryResults as $post) : setup_postdata( $post );
    $postThumbnail                          = get_the_post_thumbnail($post->ID);
    $displayDate                            = "";
    $queryResults[$counter]->thumburl       = $postThumbnail;
    $queryResults[$counter]->post_date      = "" . get_the_date("m.d.Y") . "";
    $counter++;
endforeach;
echo json_encode($queryResults);
wp_reset_postdata();
?>