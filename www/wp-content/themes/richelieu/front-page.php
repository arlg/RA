<?php
/**
 * Homepage template file
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 * front-page.php
 * @package Richelieu
 */
?>


<?php get_header(); ?>

<section id="home_video" class="main_section mod_after_pan mod_bot_white">

	<p><?php the_field( "video_text" ); ?></p>

	<div class="red_cover"></div>

	<div class="video_wrapper">
		<video loop muted preload autoplay playsinline>
			<source src="<?php bloginfo('template_directory'); ?>/video/home_video.webm" type="video/webm">
			<source src="<?php bloginfo('template_directory'); ?>/video/home_video.mp4" type="video/mp4">
			<source src="<?php bloginfo('template_directory'); ?>/video/home_video.ogv" type="video/ogv">
	    </video>
	</div>

</section>

<section id="home_want" class="main_section">

	<div class="grid_container">
		<h3><?php the_field( "home_want" ); ?></h3>
		<div class="elements_wrapper">
			<div class="row">
	            <div class="col_4">
					<div class="icon-loupe"></div>
					<p><?php the_field( "home_1" ); ?></p>
	            </div>
	            <div class="col_4">
					<div class="icon-papier"></div>
					<p><?php the_field( "home_2" ); ?></p>
	            </div>
	            <div class="col_4">
					<div class="icon-fusee"></div>
					<p><?php the_field( "home_3" ); ?></p>
	            </div>
	            <div class="col_4">
					<div class="icon-king"></div>
					<p><?php the_field( "home_4" ); ?></p>
	            </div>
	            <div class="col_4">
					<div class="icon-awareness"></div>
					<p><?php the_field( "home_5" ); ?></p>
	            </div>
	            <div class="col_4">
					<div class="icon-ribbon"></div>
					<p><?php the_field( "home_6" ); ?></p>
	            </div>
	         </div>
         </div>
	</div>

</section>

<section id="<?php pll_e("services"); ?>" class="parallax_image_wrapper mod_before_pan mod_after_pan mod_bot_2_white mod_top_grey anchor_offset">
	<div class="parallax_image tajmahal">
		<?php the_field( "image_text_1" ); ?>
	</div>
</section>

<section class="section_service">
	<div class="grid_container">
		<div class="row">
			<div class="col_6">
				<div class="icon icon-1"></div>
				<div class="content">
					<?php the_field( "service_1" ); ?>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-2"></div>
				<div class="content">
					<?php the_field( "service_2" ); ?>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-3"></div>
				<div class="content">
					<?php the_field( "service_3" ); ?>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-4"></div>
				<div class="content">
					<?php the_field( "service_4" ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="" class="parallax_image_wrapper mod_before_pan mod_after_pan mod_bot_grey mod_top_grey">
	<div class="parallax_image man ">
		<?php the_field( "image_text_2" ); ?>
	</div>
</section>

<section class="section_service">
	<div class="grid_container">
		<div class="row">
			<div class="col_6">
				<div class="icon icon-5"></div>
				<div class="content">
					<?php the_field( "service_5" ); ?>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-6"></div>
				<div class="content">
					<?php the_field( "service_6" ); ?>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-7"></div>
				<div class="content">
					<?php the_field( "service_7" ); ?>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-8"></div>
				<div class="content">
					<?php the_field( "service_8" ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="<?php pll_e("about-us"); ?>" class="parallax_image_wrapper mod_before_pan mod_after_pan mod_bot_grey mod_top_all_grey anchor_offset">
	<div class="parallax_image paris">
		<?php the_field( "image_text_3" ); ?>
	</div>
</section>

<section id="about" class="">
	<div class="grid_container">
		<div class="row description_row">
			<div class="col_1"></div>
			<div class="col_10">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo-ra-2.png" alt="">
				<p>
					<?php the_field( "about" ); ?>
				</p>
			</div>
			<div class="col_1"></div>
		</div>

		<?php

		if( get_field('about_name_4') ):
			include("partials/4bio.php");

		elseif( get_field('about_name_3') ):
			include("partials/3bio.php");

		else:
			include("partials/2bio.php");

		endif; ?>


	</div>
</section>

<section id="<?php pll_e("contact"); ?>" class="parallax_image_wrapper mod_before_pan mod_after_pan mod_bot_2_white mod_bot_contact anchor_offset">
	<div class="parallax_image tajmahal2">
		<?php the_field( "image_text_4" ); ?>
	</div>
</section>

<section id="contact_section" class="">

	<div class="grid_container">
		<div class="row">
			<div class="col_1"></div>
			<div class="col_6">
				<p class="red_title"><?php the_field( "contact_title" ); ?></p>
				<p class="contact_form_title"><?php the_field( "contact_description" ); ?></p>
				<?php
				if ( function_exists( 'ccf_output_form' ) ) {

					if( pll_current_language() == "en")
						ccf_output_form( 45 );
					else
						ccf_output_form( 118 );
				}
				?>
			</div>
			<div class="col_1"></div>
			<div class="col_4">

				<div class="row">
					<div class="col_12">
						<p class="red_title"><?php the_field( "contact_headquarters_title" ); ?></p>
						<?php the_field( "contact_headquarters_address" ); ?>
					</div>
					<div class="col_12">
						<p class="red_title"><?php the_field( "contact_offices_title" ); ?></p>
						<?php the_field( "contact_offices_address_1" ); ?>
						<?php the_field( "contact_offices_address_2" ); ?>
					</div>

				</div>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>