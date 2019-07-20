		<footer>
			<?php
				$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
				$host_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}";
			?>
			<section class="lg-footer fixed-bottom<?php if ( $actual_link != $host_link . "/lab-grim/" ): echo " notHome"; else: ""; endif; ?>">
				<div class="container">
					<div class="row">
						<div class="lg-address col-lg-6 col-md-12 text-left">
							<p><?php echo get_theme_mod( 'set_endereco-1' ); ?></p>
							<p><?php echo get_theme_mod( 'set_endereco-2' ); ?></p>
						</div>
						<div class="lg-orgs col-lg-6 col-md-12 text-right">
							<a href="<?php echo get_theme_mod( 'set_url_ufc' ); ?>" target="_blank" >
								<img class="lg-orgs-img" src="<?php echo get_theme_mod( 'set_logo_ufc' ); ?>" alt="Site UFC"></img>
							</a>
							<a href="<?php echo get_theme_mod( 'set_url_ica' ); ?>" target="_blank">
								<img class="lg-orgs-img" src="<?php echo get_theme_mod( 'set_logo_ica' ); ?>" alt="Site ICA"></img>
							</a>
							<a href="<?php echo get_theme_mod( 'set_url_virtual' ); ?>" target="_blank">
								<img class="lg-orgs-img" src="<?php echo get_theme_mod( 'set_logo_virtual' ); ?>" alt="Site Instituto UFC Virtual"></img>
							</a>
						</div>
					</div>
				</div>
			</section>
		</footer> <!-- end footer -->
		<?php wp_footer(); ?>
	</body>
</html>