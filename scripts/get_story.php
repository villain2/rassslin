<?php
$storyID 		= $_REQUEST['storyID'];
$path           = '/rassslin/';

include_once '../../../../wp-config.php';
include_once '../../../..//wp-load.php';
include_once '../../../..//wp-includes/wp-db.php';
include_once '../../../../wp-includes/pluggable.php';

$args = array (
    'meta_key'    => '_thumbnail_id',
    'orderby'     => 'date',
    'order'       => 'DESC',
    'name' 	  => $storyID,
    'posts_per_page' => 1 
);
// The Query
query_posts($args);
$counter                = 0;
$queryResults           = get_posts($args);

foreach($queryResults as $post) : setup_postdata( $post );
    $postThumbnail                          = get_the_post_thumbnail($post->ID);
    $displayDate                            = "";
    $queryResults[$counter]->thumburl       = $postThumbnail;
    $queryResults[$counter]->post_date      = "" . get_the_date("M d, Y") . "";
    $queryResults[$counter]->tag_list       = strip_tags(get_the_tag_list('',' : ',''));
    $counter++;
endforeach;
echo json_encode($queryResults);
wp_reset_postdata();

?>