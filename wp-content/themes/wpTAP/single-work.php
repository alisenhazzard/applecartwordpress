<?php get_header(); ?>

<div class="post-wrapper">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h3><?php the_title(); ?></h3>
		
		<div class="project_images">
			<?php the_field('project_images') ;?>
		</div>

		<div class="intro">
			<p><?php the_field( 'description' ); ?></p>
		</div>

		<p>
			<a class="btn blue" href="<?php the_field( 'url' ); ?>" style="background-color: <?php the_field( 'button_color' ); ?>">
				View Project &rarr;
			</a>
		</p>

	<?php endwhile; else: ?>

		<p>There are no posts or pages here</p>


	<?php endif; ?>

</div>

<?php get_footer(); ?>