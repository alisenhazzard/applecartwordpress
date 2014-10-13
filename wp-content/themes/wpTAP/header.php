<!DOCTYPE html>
<html>
	<head>

		<title>
			<?php 
				wp_title( '|', true, 'right' );
				bloginfo( '' );
			?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale= 1.0">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class='content-wrapper'>
			<div class="banner-wrapper">
	            <a href="<?php bloginfo( 'siteurl' )?>">
	                <h1 class="page-title"><?php bloginfo( 'name'); ?></h1>
	            </a>
	            <h2 class="page-tagline"><?php bloginfo( 'description'); ?></h2>
	        	<div class="site-nav">
					<?php 
						
						$args = array(
							'menu' => 'main-menu'
						);

						wp_nav_menu ( $args );

					?>
				</div>
			</div>