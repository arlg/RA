<?php
/**
 * Homepage template file
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 * home.php
 * @package Richelieu
 */
?>


<?php get_header(); ?>

<section id="home_video" class="main_section mod_after_pan mod_bot_white">
	
	<p><?php echo get_field( "video_text" ); ?></p>

	<div class="red_cover"></div>
	
	<div class="video_wrapper">
		<video loop muted autoplay preload poster="<?php bloginfo('template_directory'); ?>/video/home_video_cover.jpg">
			<source src="<?php bloginfo('template_directory'); ?>/video/home_video.webm" type="video/webm">
			<source src="<?php bloginfo('template_directory'); ?>/video/home_video.mp4" type="video/mp4">
			<source src="<?php bloginfo('template_directory'); ?>/video/home_video.ogv" type="video/ogv">
	    </video>
	</div>
	
</section>

<section id="home_want" class="main_section">

	<div class="grid_container">
		<h3><?php echo get_field( "home_want" ); ?></h3>
		<div class="elements_wrapper">
			<div class="row">
	            <div class="col_4">
					<div class="icon-loupe"></div>
					<p><?php echo get_field( "home_1" ); ?></p>
	            </div>
	            <div class="col_4">
					<div class="icon-papier"></div>
					<p><?php echo get_field( "home_2" ); ?></p>
	            </div>
	            <div class="col_4">
					<div class="icon-fusee"></div>
					<p><?php echo get_field( "home_3" ); ?></p>
	            </div>
	            <div class="col_4">
					<div class="icon-king"></div>
					<p><?php echo get_field( "home_4" ); ?></p>
	            </div>
	            <div class="col_4">
					<div class="icon-awareness"></div>
					<p><?php echo get_field( "home_5" ); ?></p>
	            </div>
	            <div class="col_4">
					<div class="icon-ribbon"></div>
					<p><?php echo get_field( "home_6" ); ?></p>
	            </div>
	         </div>
         </div>
	</div>

</section>

<section id="" class="parallax_image_wrapper mod_before_pan mod_after_pan mod_bot_2_white mod_top_grey">
	<div class="parallax_image tajmahal">
		<?php echo get_field( "image_text_1" ); ?>
	</div>
</section>

<section class="section_service">
	<div class="grid_container">
		<div class="row">
			<div class="col_6">
				<div class="icon icon-1"></div>
				<div class="content">
					<?php echo get_field( "service_1" ); ?>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-2"></div>
				<div class="content">
					<?php echo get_field( "service_2" ); ?>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-3"></div>
				<div class="content">
					<?php echo get_field( "service_3" ); ?>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-4"></div>
				<div class="content">
					<?php echo get_field( "service_4" ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="" class="parallax_image_wrapper mod_before_pan mod_after_pan mod_bot_grey mod_top_grey">
	<div class="parallax_image man ">
		<?php echo get_field( "image_text_2" ); ?>
	</div>
</section>

<section class="section_service">
	<div class="grid_container">
		<div class="row">
			<div class="col_6">
				<div class="icon icon-5"></div>
				<div class="content">
					<?php echo get_field( "service_5" ); ?>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-6"></div>
				<div class="content">
					<?php echo get_field( "service_6" ); ?>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-7"></div>
				<div class="content">
					<?php echo get_field( "service_7" ); ?>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-8"></div>
				<div class="content">
					<?php echo get_field( "service_8" ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="" class="parallax_image_wrapper mod_before_pan mod_after_pan mod_bot_grey mod_top_all_grey">
	<div class="parallax_image paris">
		<?php echo get_field( "image_text_3" ); ?>
	</div>
</section>

<section id="about" class="">
	<div class="grid_container">
		<div class="row description_row">
			<div class="col_1"></div>
			<div class="col_10">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo-ra-2.png" alt="">
				<p>
					<?php echo get_field( "about" ); ?>
				</p>
			</div>
			<div class="col_1"></div>
		</div>
		<div class="row portraits_row">
			<div class="col_1"></div>
			<div class="col_4">
				<div class="portrait_wrapper">
					<div class="portrait_inner">
						<img src="<?php bloginfo('template_directory'); ?>/img/portrait.png" alt="">
					</div>
					<p class="red_title"><?php echo get_field( "about_name_1" ); ?></p>
					<?php echo get_field( "about_bio_1" ); ?>
				</div>
			</div>
			<div class="col_2"></div>
			<div class="col_4">
				<div class="portrait_wrapper">
					<div class="portrait_inner">
						<img src="<?php bloginfo('template_directory'); ?>/img/portrait.png" alt="">
					</div>
					<p class="red_title"><?php echo get_field( "about_name_2" ); ?></p>
					<?php echo get_field( "about_bio_2" ); ?>
				</div>
			</div>
			<div class="col_1"></div>

		</div>
	</div>
</section>

<section id="" class="parallax_image_wrapper mod_before_pan mod_after_pan mod_bot_2_white mod_bot_contact">
	<div class="parallax_image tajmahal2">
		<?php echo get_field( "image_text_4" ); ?>
	</div>
</section>

<section id="contact" class="">
	
	<div class="grid_container">
		<div class="row">
			<div class="col_1"></div>
			<div class="col_6">
				<p class="red_title"><?php echo get_field( "contact_title" ); ?></p>
				<p class="contact_form_title"><?php echo get_field( "contact_description" ); ?></p>
				<?php 
				if ( function_exists( 'ccf_output_form' ) ) {
    				ccf_output_form( 45 );
				}
				?>
			</div>
			<div class="col_1"></div>
			<div class="col_4">
				<p class="red_title"><?php echo get_field( "contact_headquarters_title" ); ?></p>
				<?php echo get_field( "contact_headquarters_address" ); ?>
				<p class="red_title"><?php echo get_field( "contact_offices_title" ); ?></p>
				<?php echo get_field( "contact_offices_address" ); ?>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>