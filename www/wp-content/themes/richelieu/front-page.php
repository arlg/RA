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
	<?php 

		echo get_field( "home_phrase" );

	?>
	<p>We are a business development agency<br>
		aiming to identify and seize opportunities<br>
		for our customers on Indian and Western markets.</p>

	<div class="red_cover"></div>
	
	<div class="video_wrapper">
		<video loop muted autoplay poster="<?php bloginfo('template_directory'); ?>/video/home_video_cover.jpg">
			<source src="<?php bloginfo('template_directory'); ?>/video/home_video.webm" type="video/webm">
			<source src="<?php bloginfo('template_directory'); ?>/video/home_video.mp4" type="video/mp4">
			<source src="<?php bloginfo('template_directory'); ?>/video/home_video.ogv" type="video/ogv">
	    </video>
	</div>
	
</section>

<section id="home_want" class="main_section">

	<div class="grid_container">
		<h3>You want to</h3>
		<div class="elements_wrapper">
			<div class="row">
	            <div class="col_4">
					<div class="icon-loupe"></div>
					<p>Look for reliable<br>local partner</p>
	            </div>
	            <div class="col_4">
					<div class="icon-papier"></div>
					<p>Identify & participate<br >to a tender</p>
	            </div>
	            <div class="col_4">
					<div class="icon-fusee"></div>
					<p>Assess / Explore<br >a market opportunity</p>
	            </div>
	            <div class="col_4">
					<div class="icon-king"></div>
					<p>Reach key people<br >in your industry</p>
	            </div>
	            <div class="col_4">
					<div class="icon-awareness"></div>
					<p>Train your team on cultural<br>and business awareness</p>
	            </div>
	            <div class="col_4">
					<div class="icon-ribbon"></div>
					<p>Hire local best suited<br>top manager</p>
	            </div>
	         </div>
         </div>
	</div>

</section>

<section id="" class="parallax_image_wrapper mod_before_pan mod_after_pan mod_bot_2_white mod_top_grey">
	<div class="parallax_image tajmahal">
		<p>Service</p>
		<h4>Strategy & Market<br>Stat intelligence</h4>
	</div>
</section>

<section class="section_service">
	<div class="grid_container">
		<div class="row">
			<div class="col_6">
				<div class="icon icon-1"></div>
				<div class="content">
					<p class="bold">Opportunity studies</p>
					<p>We analyze of the investment potential, assess risks on a
						geographical area, related industry policies promoted by
						the authorities, any structural problems of the industry.</p>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-2"></div>
				<div class="content">
					<p class="bold">Opportunity studies</p>
					<p>We analyze of the investment potential, assess risks on a
						geographical area, related industry policies promoted by
						the authorities, any structural problems of the industry.</p>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-3"></div>
				<div class="content">
					<p class="bold">Opportunity studies</p>
					<p>We analyze of the investment potential, assess risks on a
						geographical area, related industry policies promoted by
						the authorities, any structural problems of the industry.</p>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-4"></div>
				<div class="content">
					<p class="bold">Opportunity studies</p>
					<p>We analyze of the investment potential, assess risks on a
						geographical area, related industry policies promoted by
						the authorities, any structural problems of the industry.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="" class="parallax_image_wrapper mod_before_pan mod_after_pan mod_bot_grey mod_top_grey">
	<div class="parallax_image man ">
		<p>Service</p>
		<h4>Local operations<br>Support</h4>
	</div>
</section>

<section class="section_service">
	<div class="grid_container">
		<div class="row">
			<div class="col_6">
				<div class="icon icon-5"></div>
				<div class="content">
					<p class="bold">Opportunity studies</p>
					<p>We analyze of the investment potential, assess risks on a
						geographical area, related industry policies promoted by
						the authorities, any structural problems of the industry.</p>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-6"></div>
				<div class="content">
					<p class="bold">Opportunity studies</p>
					<p>We analyze of the investment potential, assess risks on a
						geographical area, related industry policies promoted by
						the authorities, any structural problems of the industry.</p>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-7"></div>
				<div class="content">
					<p class="bold">Opportunity studies</p>
					<p>We analyze of the investment potential, assess risks on a
						geographical area, related industry policies promoted by
						the authorities, any structural problems of the industry.</p>
				</div>
			</div>
			<div class="col_6">
				<div class="icon icon-8"></div>
				<div class="content">
					<p class="bold">Opportunity studies</p>
					<p>We analyze of the investment potential, assess risks on a
						geographical area, related industry policies promoted by
						the authorities, any structural problems of the industry.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="" class="parallax_image_wrapper mod_before_pan mod_after_pan mod_bot_grey mod_top_all_grey">
	<div class="parallax_image paris">
		<h3>About us</h3>
	</div>
</section>

<section id="about" class="">
	<div class="grid_container">
		<div class="row description_row">
			<div class="col_1"></div>
			<div class="col_10">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo-ra-2.png" alt="">
				<p>Richelieu Advisors Private Limited is an international company, incorporated
in India with permanent teams in New Delhi, Pairs and Montreal, promoting
its customers‘ interests overseas.<br>The team is composed of French and Indian professionals with multidisciplinary backgrounds thus packing the best expertise.</p>
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
					<p class="red_title">Sanjeev Bhadana</p>
					<p>Sanjeev Bhadana leads the office activities in India. For more than ten years he has been promoting the rise of his community in northern India. He has good relations within the Sri Narendra Modi government and the India administration. Born in Delhi from a family of ministers, parliamentarians and India army high-ranked, he graduated from the University of Delhi and hold a MBA from the Hyderabad University (1997). Until 2002, he worked in the medical field.</p>
				</div>
			</div>
			<div class="col_2"></div>
			<div class="col_4">
				<div class="portrait_wrapper">
					<div class="portrait_inner">
						<img src="<?php bloginfo('template_directory'); ?>/img/portrait.png" alt="">
					</div>
					<p class="red_title">Sanjeev Bhadana</p>
					<p>Sanjeev Bhadana leads the office activities in India. For more than ten years he has been promoting the rise of his community in northern India. He has good relations within the Sri Narendra Modi government and the India administration. Born in Delhi from a family of ministers, parliamentarians and India army high-ranked, he graduated from the University of Delhi and hold a MBA from the Hyderabad University (1997). Until 2002, he worked in the medical field.</p>
				</div>
			</div>
			<div class="col_1"></div>

		</div>
	</div>
</section>

<section id="" class="parallax_image_wrapper mod_before_pan mod_bot_2_white">
	<div class="parallax_image tajmahal2">
		<h3>Contact</h3>
	</div>
</section>

<section id="contact" class="">
	
	<div class="grid_container">
		<div class="row">
			<div class="col_1"></div>
			<div class="col_6">
				<p class="red_title">Contact us</p>
				<p class="contact_form_title">Receive a free confidential consultation.</p>
				<?php 
				if ( function_exists( 'ccf_output_form' ) ) {
    				ccf_output_form( 45 );
				}
				?>
			</div>
			<div class="col_1"></div>
			<div class="col_4">
				<p class="red_title">Headquarters</p>
				<p class="subtitle">India</p>
				<p class="address">1/33 A-1, 3rd Floor, Moti Bagh</p>
				<p class="address">New Delhi, 110021</p>
				<p class="address">Tel. : 	<span>+91 97 11 011 002</span></p>
				<p class="address">Email : 	<a href="">info@richelieuadvisors.in</a></p>
				<p class="address">Website : 	<a href="">richelieuadvisors.in</a></p>

				<p class="red_title">Headquarters</p>
				<p class="subtitle">India</p>
				<p class="address">1/33 A-1, 3rd Floor, Moti Bagh</p>
				<p class="address">New Delhi, 110021</p>
				<p class="address">Tel. : 	<span>+91 97 11 011 002</span></p>
				<p class="address">Email : 	<a href="">info@richelieuadvisors.in</a></p>
				<p class="address">Website : 	<a href="">richelieuadvisors.in</a></p>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>