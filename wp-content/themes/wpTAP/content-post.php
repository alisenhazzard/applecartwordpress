<div class="blogpost">
<div class="blog-head-wrap">
	<header class="title">
		<h2>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
	</header>

	<ul class="info">
		<li><h3><?php the_time('F j, Y'); ?></h3></li>
		<li class="green">Category: <?php the_category(', '); ?></li>
	</ul>
</div>

<div class="excerpt">

	<?php if(is_single()): ?>

		<?php the_content(); ?>

	<?php else: ?>

	<?php the_excerpt(); ?>
	<p class="continue-reading">
		<a class="post-link" href="<?php the_permalink(); ?>">[Continue Reading]</a>
	</p>

	<?php endif; ?>
</div>
</div>