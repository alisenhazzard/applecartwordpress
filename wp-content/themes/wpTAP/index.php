<?php get_header(); ?>

<div class="content-wrapper">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>

	<?php endwhile; else: ?>

		<p>There are no posts or pages here</p>


	<?php endif; ?>
	
</div>

<?php get_footer(); ?>