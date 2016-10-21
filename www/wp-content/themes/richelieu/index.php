<?php
/**
 * The main template file
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Richelieu
 */
?>

<?php get_header(); ?>


<section id="blog" class="main_section">
	
	<div class="grid_container">
		
		<div class="row">
			<div class="col_1"></div>
			<div class="col_10">
				<div id="blog_contents">
					<?php if ( have_posts() ) :
		
						// Start the loop.
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content-single', get_post_format() );

						// End the loop.
						endwhile;

						// Previous/next page navigation.
						the_posts_pagination( array(
							'prev_text'          => __( 'Previous page', 'twentysixteen' ),
							'next_text'          => __( 'Next page', 'twentysixteen' )
						) );

						// If no content, include the "No posts found" template.
				 		else :
							// get_template_part( 'template-parts/content', 'none' );
							echo 'NO POSTS';

					endif;
					?>				
				</div>
			</div>
			<div class="col_1"></div>
		</div>
	</div>

</section>



<?php get_footer(); ?>