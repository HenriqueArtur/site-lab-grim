<?php get_header(); ?>
	<main>
		<div class="container">
			<div class="row">
				<section class="post-content col-12">
					<?php
						//$featured = new WP_Query( 'post_type=post&posts_per_page=10' );
						if( have_posts() ):
							while( have_posts() ): the_post();

								get_template_part( 'template-parts/post-resume', 'featured' );
								
							endwhile;

							the_posts_pagination(
								array(
									'prev_text' 		 => 'Anterior',
    								'next_text' 		 => 'Próximo',
    								'screen_reader_text' => ' ',
								)
							);

							wp_reset_postdata();
						else:	
					?>
						<p>Nenhum resultado encontrado.</p>
					<?php
						endif;
					?>
				</section>
			</div>
		</div>
	</main>
<?php get_footer(); ?>