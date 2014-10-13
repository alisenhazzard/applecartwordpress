<!-- WORD PAGE -->

<div class="grid_6 spotlight project" style="background-color: <?php the_field( 'background_color' ); ?>">

	<h2>
		<a href="<?php the_field( 'url' ); ?>" target="blank"><?php the_title(); ?></a>
	</h2>
	<a href="<?php the_field( 'url' ); ?>">
		<div class="project_images">
			<?php the_field('project_images'); ?>
		</div>
	</a>

	<p>
		<?php the_field('description'); ?>
	</p>

	<p>
		<a class="btn blue" href="<?php the_field( 'url' ); ?>" style="background-color: <?php the_field( 'button_color' ); ?>" target="blank">
			View Project &rarr;
		</a>
	</p>

</div>