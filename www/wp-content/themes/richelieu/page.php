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
		
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content-single', get_post_format() );

						endwhile;

						?>
						<?php
						
				 		else :
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