<?php get_header(); ?>

	<div class="home-wrapper">

		<h5 class="featured-wrapper">Featured Post</h5>

		<?php 

		$args = array (
			'post_type' => 'post',
			'category_name' => 'featured',
			'posts_per_page' => 1,
		);

		$the_query = new WP_Query( $args );

		?>

		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ?>

		<div>
			<article>

				<?php get_template_part( 'content', 'post' ); ?>

			</article>
		</div>

		<?php endwhile; endif; ?>

		<div>
			<div class="recent-post">
				<article>
					<h5>Recent Post</h5>
						<?php 

						$args = array (
							'post_type' => 'post',
							'cat' => -1,
							'posts_per_page' => 1,
						);

						$the_query = new WP_Query( $args );

						?>

						<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ?>

							<?php get_template_part( 'content', 'post' ); ?>

						<?php endwhile; endif; ?>
				</article>
			</div>
			<div class="featured-project">
			<h5>Featured Project</h5>
				<?php 

					$args = array(
						'post_type' => 'work',
						'posts_per_page' => 1,
					);

					$the_query = new WP_Query( $args );

					?>

				<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php get_template_part( 'content', 'work' ); ?>

				<?php endwhile; endif; ?>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>




<?php get_footer(); ?>