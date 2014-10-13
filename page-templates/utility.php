<?php
/**
 * Template Name: Utility Pages
 *
 * @package WordPress
 * @subpackage Rassslin
 * @since Rassslin
 */

$path = "wp-content/themes/rassslin/";
get_header(); ?>

<div id="main-content" class="main-content">



      

      <!-- CONTENT -->

        <div class="row">
          <div id="content" class="storyContainer col-xs-12 col-sm-8 col-sm-offset-2" role="main">
            <?php
              // Start the Loop.
              while ( have_posts() ) : the_post();

              // Include the page content template.
              get_template_part( 'content', 'page' );
              endwhile;
            ?>
          </div>
        </div>

      
      <!-- END POSTS -->

</div><!-- #main-content -->

<?php
get_footer();
