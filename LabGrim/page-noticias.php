<?php get_header(); ?>
	<main>
		<section id="noticias" class="">
			<div class="container">

				<div class="row">
					<div class="col-12">
						<h2>NOTÍCIAS</h2>
					</div>
				</div>

				<div class="row">
					<div class="search-bar col-8"><?php get_search_form(); ?></div>
					<div class="category-filter col-4">
						
						<?php
						$categories = get_categories( array(
						    'orderby' => 'name',
						    'parent'  => 0
						) );
						 
						foreach ( $categories as $category ) {
						    printf( '<a href="%1$s">%2$s</a><br />',
						        esc_url( get_category_link( $category->term_id ) ),
						        esc_html( $category->name )
						    );
						}
						?>

					</div>
				</div>

				<div class="row">
					<section class="post-content col-12">
						<?php
							$featured = new WP_Query( array('posts_per_page'=>10,
								'post_type'=> 'post',
                                'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1) );

							if( $featured->have_posts() ):
								while( $featured->have_posts() ): $featured->the_post();

									get_template_part( 'template-parts/post-resume', 'featured' );
									
								endwhile;
								$pagsAmount = 999;
								echo paginate_links( array(
								    'base' => str_replace( $pagsAmount, '%#%', get_pagenum_link( $pagsAmount ) ),
								    'format' => '?paged=%#%',
								    'current' => max( 1, get_query_var('paged') ),
								    'total' => $featured->max_num_pages
								));
								wp_reset_postdata();
							else:	
						?>
							<p>Não há posts para exibir.</p>
						<?php
							endif;
						?>
					</section>
				</div>

			</div>
		</section>
	</main>
<?php get_footer(); ?>