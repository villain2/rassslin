<!doctype html>
<?php
$path = "wp-content/themes/rassslin/";
get_header();
?>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rassslin' and Rantin' is the internet broadcast vlog (Video Blog) covering professional wrestling from the past and the present. Our video shows cover top ten countdowns, reviews of pay per view events, a weekly Raw Rant, our wrestler icon series and other various topics in WWE, TNA, and Ring of Honor." />
    <meta name="keywords" content="Rassslin' and Rantin, pro wrestling, wrestling, commentary, gossip, reviews, news, wwe, wcw, tna, wwf, old school, john cena, cm punk, daniel bryan, aj styles, samoa joe, the undertaker, brock lesnar, vince mcmahon, dixie carter, triple h, raw, monday night raw, impact, wrestlemania, lockdown, summer slam, survivor series, pro wrestling commentary, pro wrestling talk show, pro wrestling blog, pro wrestling podcast, superstars, rant, royal rumble, wrestling icons" />
    <meta name="author" content="Webchannel24, c. 2014 AOE Studios. All Rights Reserved." />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
	<title>Rassslin' and Rantin'</title>
	<link href="<?php print $path; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php print $path; ?>css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="mainContainer" id="wrap">
		<!-- navbar --><!-- Fixed navbar -->
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">

				<div class="navbar-header">
            		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              			<span class="sr-only">Toggle navigation</span>
              			<span class="icon-bar"></span>
              			<span class="icon-bar"></span>
              			<span class="icon-bar"></span>
            		</button>
            		<a class="navbar-brand" href="#">
						<img src="<?php print $path; ?>img/rr_logo.svg" alt="Rassslin' and Rantin'" width="32" height="22">
           			</a>
          		</div>

          		<div class="collapse navbar-collapse">
            		<ul class="nav navbar-nav">
              			<li><a href="/wordpress/#/sections/commentary/" title="commentary" id="commentary">Commentary</a></li>
              			<li><a href="/wordpress/#/sections/top_ten/" title="Top Tens" id="top_ten">Top Tens</a></li>
              			<li><a href="/wordpress/#/sections/raw_rant/" title="Raw Rant" id="raw rant">Raw Rant</a></li>
              			<li><a href="/wordpress/#/sections/pay_per_views/" title="Pay Per Views" id="ppv">Pay Per Views</a></li>
              			<li><a href="/wordpress/#/sections/wrestler_profiles/" title="Wrestler Profiles" id="wrestler profiles">Wrestler Profiles</a></li>

			              <!-- <li class="dropdown">
			                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			                <ul class="dropdown-menu">
			                  <li><a href="#">Action</a></li>
			                  <li><a href="#">Another action</a></li>
			                  <li><a href="#">Something else here</a></li>
			                  <li class="divider"></li>
			                  <li class="dropdown-header">Nav header</li>
			                  <li><a href="#">Separated link</a></li>
			                  <li><a href="#">One more separated link</a></li>
			                </ul>
			              </li> -->
            		</ul>
            		<ul class="nav navbar-nav navbar-right">
            			<li class="socialIcons youtube"><a href="http://www.youtube.com/channel/UCi65rKbsY9_LgdJW0mALDYw" title="YouTube" target="_blank"></a></li>
            			<li class="socialIcons facebook"><a href="https://www.facebook.com/rassslin" title="Facebook" target="_blank"></a></li>
            			<li class="socialIcons twitter"><a href="https://twitter.com/RassslinRantin" title="Twitter" target="_blank"></a></li>
            			<li class="socialIcons googlePlus"><a href="https://plus.google.com/u/0/b/112810557701226109247/112810557701226109247/admin/?tab=XX" title="Google+" target="_blank"></a></li>
            		</ul>
          		</div><!--/.nav-collapse -->
        	</div>
      	</div>
      	<!-- end navbar -->

		<!-- START CONTENT -->
		<div id="main-content" class="main-content">

      <?php
        if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
          // Include the featured content template.
          get_template_part( 'featured-content' );
        }
      ?>

        <div id="primary" class="content-area">
          <div id="content" class="site-content" role="main">

          <?php
            if ( have_posts() ) :
              // Start the Loop.
              while ( have_posts() ) : the_post();

                /*
                 * Include the post format-specific template for the content. If you want to
                 * use this in a child theme, then include a file called called content-___.php
                 * (where ___ is the post format) and that will be used instead.
                 */
                get_template_part( 'content', get_post_format() );

              endwhile;
              // Previous/next post navigation.
              twentyfourteen_paging_nav();

            else :
              // If no content, include the "No posts found" template.
              get_template_part( 'content', 'none' );

            endif;
          ?>

          </div><!-- #content -->
        </div><!-- #primary -->
        <?php get_sidebar( 'content' ); ?>
      </div><!-- #main-content -->
		<!-- END CONTENT -->
	</div>



    <div id="footer">
    	<div class="container">

    		<div class="row">
    			<div class="col-xs-12 col-sm-8 col-md-8">
    				<h1>Rassslin' and Rantin'</h1>
    			</div>
    			<div class="col-xs-12 col-sm-4 col-md-4">
    				<p>&copy; 2014, AOE Studios. All Rights Reserved <br>
    				<a href="/wordpress/#/terms_of_use" title="Terms of Use">Terms of Use</a> |
    				<a href="/wordpress/#/privacy_policy" title="Privacy Policy">Privacy Policy</a></p>
    			</div>

    		</div>
    	</div>
    </div>



	<!-- JAVASCRIPT -->
	<script src="<?php print $path; ?>js/vendors/modernizr.js"></script>
	<script src="<?php print $path; ?>js/vendors/jquery.min.js"></script>
	<script src="<?php print $path; ?>js/vendors/jquery-1.10.2.js"></script>
	<script src="<?php print $path; ?>js/vendors/bootstrap.min.js"></script>
	<script src="<?php print $path; ?>js/vendors/carousel.js"></script>
	<!--
  <script src="<?php print $path; ?>js/vendors/angular.min.js"></script>
	<script src="<?php print $path; ?>js/vendors/angular-route.min.js"></script>
  <script src="<?php print $path; ?>js/vendors/angular-sanitize.min.js"></script>
	<script src="<?php print $path; ?>js/Main.js"></script>
	<script src="<?php print $path; ?>js/general/generalModule.js"></script>
  <script src="<?php print $path; ?>js/general/generalConfig.js"></script>
  <script src="<?php print $path; ?>js/stories/otherStoriesFactory.js"></script>
	<script src="<?php print $path; ?>js/general/generalController.js"></script>
  <script src="<?php print $path; ?>js/navSections/navController.js"></script>
  <script src="<?php print $path; ?>js/stories/storiesController.js"></script>
  <script src="<?php print $path; ?>js/stories/otherStoriesController.js"></script>
  <script src="<?php print $path; ?>js/stories/storiesDirective.js"></script>
	<script src="<?php print $path; ?>js/Start.js"></script>
-->

	<!-- enable if in production
	<script src="<?php print $path; ?>js/rassslin.js"></script>
	-->
	<!-- END JAVASCRIPT -->
</body>
</htmL>