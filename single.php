<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
	<div id="primary" class="row">
		<div id="content" class="storyContainer col-xs-12 col-sm-8 col-sm-offset-2" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// Previous/next post navigation.
					//twentyfourteen_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>

			<div class="keywords">
				<?php the_tags(); ?>
			</div>

			<div class="relatedStories">
				<?php
					$orig_post 			= $post;
					global $post;
					$tags 				= wp_get_post_tags($post->ID);

					if($tags)
					{
						$tag_ids 			= array();
						foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
						$args = array(
							'tag__in' => $tag_ids,
							'post__not_in' => array($post->ID),
							'post_per_page' => 4,
							'caller_get_posts'=>1
						);

						$my_query 			= new wp_query($args);

						while($my_query->have_posts())
						{
							$my_query->the_post();
							?>
								<!-- display related posts -->
									<div class="row relatedStory">
										<div class="col-xs-12 col-sm-3 osImage">
											<figure>
												<a rel="external" href="<?php the_permalink()?>">
													<?php the_post_thumbnail(array(150,100)); ?>
												</a>
											</figure>
										</div>
										<div class="col-xs-12 col-sm-9 osTitle">
											<a rel="external" href="<?php the_permalink()?>" title="<?php the_title(); ?>">
												<?php the_title(); ?>
											</a>
											<div class="osDate"><?php the_date();?></div>
										</div>
									</div>
								<!-- end display related posts -->
							<?php
						}
					}
					$post = $orig_post;
					wp_reset_query();
				?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
