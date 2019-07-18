<?php get_header(); ?>
		<section id="home">
			<main>
				<?php
					if ( is_active_sidebar( 'home-pag' ) ):
						dynamic_sidebar( 'home-pag' );
					else: ?>
						<div class="container">
							<div class="row">
								<h2 class="attention col-12 text-center">Adicione o Widget ".Lab Grim Home" na Barra "Home" que se localiza em PAINEL > APARÊNCIA > WIDGETS.</h2>
							</div>
						</div>
				<?php
					endif;
				?>
			</main> <!-- end main -->
		</section> <!-- end content-area -->
<?php get_footer(); ?>