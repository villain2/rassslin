<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
$path = "/rassslin/wp-content/themes/rassslin/";
?>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Rassslin' and Rantin' is the internet broadcast vlog (Video Blog) covering professional wrestling from the past and the present. Our video shows cover top ten countdowns, reviews of pay per view events, a weekly Raw Rant, our wrestler icon series and other various topics in WWE, TNA, and Ring of Honor." />
    <meta name="keywords" content="Rassslin' and Rantin, pro wrestling, wrestling, commentary, gossip, reviews, news, wwe, wcw, tna, wwf, old school, john cena, cm punk, daniel bryan, aj styles, samoa joe, the undertaker, brock lesnar, vince mcmahon, dixie carter, triple h, raw, monday night raw, impact, wrestlemania, lockdown, summer slam, survivor series, pro wrestling commentary, pro wrestling talk show, pro wrestling blog, pro wrestling podcast, superstars, rant, royal rumble, wrestling icons" />
    <meta name="author" content="Webchannel24, c. 2014 AOE Studios. All Rights Reserved." />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
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
            		<a class="navbar-brand" href="/rassslin/">
						<img src="<?php print $path; ?>img/rr_logo.svg" alt="Rassslin' and Rantin'" width="32" height="22">
           			</a>
          		</div>

          		<div class="collapse navbar-collapse">
            		<ul class="nav navbar-nav">
              			<li><a href="/rassslin/category/commentary/" title="commentary" id="commentary">Commentary</a></li>
              			<li><a href="/rassslin/category/top_ten/" title="Top Tens" id="top_ten">Top Tens</a></li>
              			<li><a href="/rassslin/category/raw_rant/" title="Raw Rant" id="raw rant">Raw Rant</a></li>
              			<li><a href="/rassslin/category/pay_per_views/" title="Pay Per Views" id="ppv">Pay Per Views</a></li>
              			<li><a href="/rassslin/category/wrestler_profiles/" title="Wrestler Profiles" id="wrestler profiles">Wrestler Profiles</a></li>

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

	<div id="main" class="site-main">
