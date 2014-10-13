	</div>
	<footer>
		<div class="footer-wrapper">
			<div class="footer_left">
				<?php if( dynamic_sidebar( 'footer_left' ) ): ?>

				<?php else: ?>

					<h5>Twitter</h5>
					<p>Install the TwiGet Plugin and place widget here</p>
				<?php endif; ?>
			</div>

			<div class="footer_middle">
				<?php if( dynamic_sidebar( 'footer_middle' ) ): ?>

				<?php else: ?>

					<h5>Instagram</h5>
					<p>Install the Instagram Plugin and place widget here</p>
				<?php endif; ?>
			</div>

			<div class="footer_right">
				<?php if( dynamic_sidebar( 'footer_right' ) ): ?>

				<?php else: ?>

					<h5>Contact</h5>
					<p>Install the Contact Plugin and place widget here</p>
				<?php endif; ?>
			</div>

			<div class="clearfix"></div>

	        <p class="copyright">&copy; Copyright Alisen Hazzard <?php echo date( 'Y' ); ?></p>
    	</div>    
    </footer>
	<?php wp_footer(); ?>	
	</body>
</html>