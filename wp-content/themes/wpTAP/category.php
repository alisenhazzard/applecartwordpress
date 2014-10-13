<?php get_header(); ?>

<div class="post-wrapper">

	<h5 class="cat-wrapper">Category: <?php single_cat_title(); ?></h5>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part('content', 'post'); ?>

	<?php endwhile; else: ?>

		<p>There are no posts or pages here</p>


	<?php endif; ?>
	
</div>

<?php get_footer(); ?>