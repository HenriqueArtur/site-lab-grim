<?php get_header(); ?>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css'>
		<section id="page-producoes" class="overflow-x-hidden">
					
			<!-- begin producoes -->
				<section class="m-t-2p container">
					<div class="producao-title row justify-content-center">
						<h4>PRODUÇÕES</h4>
					</div>
					<p class="m-t-1p text-indent-3"><?php echo get_theme_mod('set_producoes-texto'); ?> </p>
				</section>
			<!-- end producoes -->
			<!-- begin filtro -->
				<section class="m-t-5p container">
					<!-- <div class="row">
						<div class="col-lg-7">
							<div class="row">
						        <div class="col-auto">
						            <button class="btn-search" type="button">
						                <i class="fa fa-search" style="color: #fff;"></i>
						            </button>
						        </div>
						        <div class="col z-index-n-1">
						            <input class="rounded-pill input-search" id="input-search">
						        </div>
						    </div>
					    </div>
					    <div class="col-lg-5">
					    	<div class="btn-group" role="group">
					    		<span class="input-group-text addon-filtro">FILTRAR POR</span>
						    	<div class="styled-select light-gray">
									<select>
										<option>CATEGORIA</option>
										<option>CATEGORIA 2</option>
										<option>CATEGORIA 3</option>
									</select>
								</div>
							</div>
					    </div>
				    </div> -->
				    <div class="row">
						<div class="search-bar col-sm-6 col-md-6 col-12"><?php get_search_form(); ?></div>
						<div class="category-filter col-sm-6 col-md-6 col-12 p-t-3p-xs p-l-6p-xs p-r-6p-md p-r-6p-lg">
							<div class="row right-float">
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
				</section>
			<!-- end filtro -->
			<!-- begin galeria -->
				<section class="m-t-3p container">
					<div class="galeria-title d-flex-sm justify-content-center-sm">
						<h6 class="text-galeria left-float m-t-5p-xs m-t-1p-sm">GALERIA</h6>
					</div>
			        <div class="carousel m-t-1p">
						<?php 
	                		if( is_active_sidebar('page-producoes') ):
	                			dynamic_sidebar('page-producoes');
	                		else: ?>
	                		<div class="container">
								<div class="row m-b-5p">
									<h2 class="attention col-12 text-center">Adicione o Widget "Galeria Produções" na barra "Produções" que se localiza em PAINEL > APARÊNCIA > WIDGETS.</h2>
								</div>
							</div>
						<?php
							endif;
						?>
					</div>
				</section> 
			<!-- end galeria -->

			<!-- begin publicacoes -->
					<section class="m-t-3p m-b-3p container">
						<div class="publicacoes-title d-flex-sm justify-content-center-sm">
							<h6 class="text-publicacoes left-float m-t-5p-xs m-t-1p-sm">PUBLICAÇÕES</h6>
						</div>
						<div class="carousel-publicacoes m-t-1p">
							<!--<div class="publicacoes-post">
			            		<div class="post-text">
			            			<div class="row m-t-1p">
			            				<div class="col-8">
				            				<h5 class="publicacao-title">Título da postagem</h5>
				            			</div>
			            				<div class="col-4 text-right">
				            				<a class="publicacao-link">VER MAIS</a>
				            			</div>
				            		</div>
				            		<p class="post-description">
				            			Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.
				            		</p>
				            	</div>
			            	</div>-->
			            	<?php
							/*
							 * Aqui voce encontra o loop personalizado
							 * pra reornar na pag de noícias
							 */
							$featured = new WP_Query( array('posts_per_page'=>10,
								'post_type'=> 'publicacoes',
                                'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1) );

							if( $featured->have_posts() ):
								while( $featured->have_posts() ): $featured->the_post();
									/*
									 * Aqui é o ele pega o template do resumo do post
									 */
									get_template_part( 'template-parts/publi-resume', 'featured' );
									
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
						</div>
						
					</section>
			<!-- end publicacoes -->
		        <script src='https://code.jquery.com/jquery-1.11.0.min.js'></script>
		        <script src='https://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
		        <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js'></script>
		</section>
<?php get_footer(); ?>