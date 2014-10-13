<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Rassslin
 * @since Rassslin
 */

$path = "wp-content/themes/rassslin/";
get_header(); ?>

<div id="main-content" class="main-content">



      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-top: 50px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
                <img src="<?php print $path; ?>img/banners/cm_punk_leaves.jpg" alt="CM Punk Leaves WWE">
                <div class="carousel-caption">
                On Monday, CM Punk shockingly and abruptly left the WWE and decided to go home. Is it for real this time?
                </div>
            </div>
            <div class="item">
                <img src="<?php print $path; ?>img/banners/sting_to_wwe.jpg" alt="Sting to WWE">
                <div class="carousel-caption">
                Rumors are that The Stinger is finally making that long walk to WWE. What does this mean for WrestleMania XXX? Are we going to see the Stinger vs. Taker?
                </div>
            </div>
            <div class="item">
                <img src="<?php print $path; ?>img/banners/royal_rumble.jpg" alt="Royal Rumble Review">
                <div class="carousel-caption">
                The Royal Rumble Review.<br>
                Match-by-match reviews and summaries for the entire show. And there is a lot to talk about!
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>

      <!-- POSTS -->

      <div class="articlePostContainer">
        <div class="row">
        	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array( 'post_type' => 'post', 'posts_per_page' => 9, 'paged' => $paged );
					$wp_query = new WP_Query($args);
					while ( have_posts() ) : the_post(); ?>
            			
        	<div class="col-xs-12 col-sm-6 col-md-4 articlePost">
            <a href="<?php print get_permalink(); ?>">
        		<div class="articlePostBox">
        			<div class="dateBox">
        				<?php print the_time('m.d.Y') ?>
        			</div>

				            <figure>
				                <?php print the_post_thumbnail( $size, $attr ); ?>
				            </figure>

				            <div class="title">
				                <h1><?php the_title() ?></h1>
				            </div>

				            <div class="description">
				              <?php print $post->post_excerpt; ?>
                    </div>
					  </div>
          </a>
        	</div>
					<?php endwhile; ?>
      	</div>
      </div>

      
      <!-- END POSTS -->

</div><!-- #main-content -->

<?php
get_footer();
