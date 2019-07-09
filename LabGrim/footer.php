		<footer>
			<section class="lg-footer">
				<div class="container">
					<div class="row">
						<div class="lg-address col-lg-6 col-md-6 text-left">
							<p><?php echo get_theme_mod( 'set_endereco-1' ); ?></p>
							<p><?php echo get_theme_mod( 'set_endereco-2' ); ?></p>
						</div>
						<div class="lg-orgs col-lg-6 col-md-6 text-right">
							<a href="<?php echo get_theme_mod( 'set_url_ufc' ); ?>">
								<img class="lg-orgs-img" src="<?php echo get_theme_mod( 'set_logo_ufc' ); ?>"></img>
							</a>
							<a href="<?php echo get_theme_mod( 'set_url_ica' ); ?>">
								<img class="lg-orgs-img" src="<?php echo get_theme_mod( 'set_logo_ica' ); ?>"></img>
							</a>
							<a href="<?php echo get_theme_mod( 'set_url_virtual' ); ?>">
								<img class="lg-orgs-img" src="<?php echo get_theme_mod( 'set_logo_virtual' ); ?>"></img>
							</a>
						</div>
					</div>
				</div>
			</section>
		</footer> <!-- end footer -->
		<?php wp_footer(); ?>
	</body>
</html>