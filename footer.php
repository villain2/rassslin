<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
$path = "/rassslin/wp-content/themes/rassslin/";
?>

		</div><!-- #main -->

		
	</div><!-- #page -->

	<div id="footer">
    	<div class="container">

    		<div class="row">
    			<div class="col-xs-12 col-sm-8 col-md-8">
    				<div>
                        <a href="/rassslin/" title="Rassslin' and Rantin' Home Page">
                            <img src="<?php print $path; ?>img/rr_logo.png" width="64px" height="64px" alt="Rassslin' and Rantin'">
                        </a>
                    </div>
    			</div>
    			<div class="col-xs-12 col-sm-4 col-md-4">
    				<p>&copy; 2014, AOE Studios. All Rights Reserved <br>
    				<a href="/rassslin/terms-of-use/" title="Terms of Use">Terms of Use</a> |
    				<a href="/rassslin/privacy-policy/" title="Privacy Policy">Privacy Policy</a></p>
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
	<!-- END JAVASCRIPT -->



	<?php wp_footer(); ?>
</body>
</html>