<div class="row portraits_row">
	<div class="col_1"></div>
	<div class="col_3">
		<div class="portrait_wrapper">
			<div class="portrait_inner">
			<?php if( get_field('about_image_1') ): ?>
				<img src="<?php the_field( "about_image_1" ); ?>" alt="<?php the_field( "about_name_1" ); ?>">
			<?php else: ?>
				<img src="<?php bloginfo('template_directory'); ?>/img/portrait.png">
			<?php endif; ?>
			</div>
			<p class="red_title"><?php the_field( "about_name_1" ); ?></p>
			<p class="red_title job"><?php the_field( "about_statut_1" ); ?></p>
			<?php the_field( "about_bio_1" ); ?>
		</div>
	</div>
	<div class="col_1"></div>
	<div class="col_3">
		<div class="portrait_wrapper">
			<div class="portrait_inner">
			<?php if( get_field('about_image_2') ): ?>
				<img src="<?php the_field( "about_image_2" ); ?>" alt="<?php the_field( "about_name_2" ); ?>">
			<?php else: ?>
				<img src="<?php bloginfo('template_directory'); ?>/img/portrait2.png">
			<?php endif; ?>
			</div>
			<p class="red_title"><?php the_field( "about_name_2" ); ?></p>
			<p class="red_title job"><?php the_field( "about_statut_2" ); ?></p>
			<?php the_field( "about_bio_2" ); ?>
		</div>
	</div>
	<div class="col_1"></div>
	<div class="col_3">
		<div class="portrait_wrapper">
			<div class="portrait_inner">
				<?php if( get_field('about_image_2') ): ?>
				<img src="<?php the_field( "about_image_3" ); ?>" alt="<?php the_field( "about_name_3" ); ?>">
				<?php else: ?>
				<img src="<?php bloginfo('template_directory'); ?>/img/portrait.png">
				<?php endif; ?>
			</div>
			<p class="red_title"><?php the_field( "about_name_3" ); ?></p>
			<p class="red_title job"><?php the_field( "about_statut_3" ); ?></p>
			<?php the_field( "about_bio_3" ); ?>
		</div>
	</div>
</div>