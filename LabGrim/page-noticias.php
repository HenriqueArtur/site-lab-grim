<?php get_header(); ?>
	<main>
		<section id="noticias" class="">
			<div class="container">

				<div class="row">
					<div class="page-title col-12 d-flex justify-content-center text-center">
						<div class="title-bg-points"></div>
						<h2 class="col-3">NOTÍCIAS</h2>
					</div>
				</div>

				<div class="row">
					<div class="search-bar col-md-8 col-12"><?php get_search_form(); ?></div>
					<div class="category-filter col-md-4 col-12">
						<div class="row float-right">
							<div class="text-category">
								<h4>Filtrar por</h4>
							</div>
							<div class="dropdown show">
								<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    	Categoria
							    	<i class="fas fa-chevron-down"></i>
							  	</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
									<?php
									$categories = get_categories( array(
									    'orderby' => 'name',
									    'parent'  => 0
									) );
									 
									foreach ( $categories as $category ) {
									    printf( '<a class="dropdown-item" href="%1$s">%2$s</a>',
									        esc_url( get_category_link( $category->term_id ) ),
									        esc_html( $category->name )
									    );
									}
									?>
								</div>
							</div>
						</div>
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
								?>
								<div class="pagination-area col-12 text-center">
								<?php
								$pagsAmount = 999;
								echo paginate_links( array(
								    'base' => str_replace( $pagsAmount, '%#%', get_pagenum_link( $pagsAmount ) ),
								    'format' => '?paged=%#%',
								    'current' => max( 1, get_query_var('paged') ),
								    'total' => $featured->max_num_pages
								));
								wp_reset_postdata();
								?>
								</div>
								<?php
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