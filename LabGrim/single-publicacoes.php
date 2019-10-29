<?php get_header(); ?>
	<div id="primary">
		<div id="main">
			<div class="container">
				<?php 

				while( have_posts() ): the_post();

					get_template_part( 'template-parts/content', 'single-publicacoes' );

					?>

					<!--<div class="row">
						<div class="pages text-left col-6 m-t-5p m-b-3p">
							<a href="#"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i> Voltar para a página de Produções</a>
						</div>
					</div>-->
					<!--<div class="row">
						<div class="pages text-left col-6">
							<?#php next_post_link( '&laquo; %link' ); ?>
						</div>
						<div class="pages text-right col-6">
							<?#php previous_post_link( '%link &raquo;' ); ?>
						</div>
					</div>-->

					<?php
					
				endwhile;

				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>