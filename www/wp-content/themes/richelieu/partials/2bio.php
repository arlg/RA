<div class="row portraits_row">
	<div class="col_1"></div>
	<div class="col_4">
		<div class="portrait_wrapper">
			<div class="portrait_inner">
				<img src="<?php the_field( "about_image_1" ); ?>" alt="<?php the_field( "about_name_1" ); ?>">
			</div>
			<p class="red_title"><?php the_field( "about_name_1" ); ?></p>
			<?php the_field( "about_bio_1" ); ?>
		</div>
	</div>
	<div class="col_2"></div>
	<div class="col_4">
		<div class="portrait_wrapper">
			<div class="portrait_inner">
				<img src="<?php the_field( "about_image_2" ); ?>" alt="<?php the_field( "about_name_2" ); ?>">
			</div>
			<p class="red_title"><?php the_field( "about_name_2" ); ?></p>
			<?php the_field( "about_bio_2" ); ?>
		</div>
	</div>
	<div class="col_1"></div>
</div>