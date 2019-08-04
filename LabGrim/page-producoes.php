<?php get_header(); ?>
		<section id="page-producoes" class="overflow-x-hidden">
					
			<!-- begin producoes -->
				<section class="m-t-2p container">
					<div class="producao-title row justify-content-center">
						<h4>PRODUÇÕES</h4>
					</div>
					<p class="m-t-1p"><?php echo get_theme_mod('set_producoes-texto'); ?> </p>
				</section>
			<!-- end producoes -->
			<!-- begin filtro -->
				<section class="m-t-5p container">
					<div class="row">
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
					    	<!--<div class="btn-group" role="group">
								<span class="input-group-text addon-filtro">FILTRAR POR</span>

								<div class="btn-group" role="group">
									<button id="dropdown-galeria" type="button" class="dropdown-filtro" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  		CATEGORIA <i class="fa fa-angle-down"></i>
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdown-galeria">
									 	<a class="dropdown-item" href="#">CATEGORIA</a>
									  	<a class="dropdown-item" href="#">Dropdown link</a>
									</div>
								</div>
							</div>-->
					    </div>
				    </div>
				</section>
			<!-- end filtro -->
			<!-- begin galeria -->
				<!-- <section class="m-t-3p container" style="margin-bottom: 15%;">
					<div class="galeria-title d-flex-sm justify-content-center-sm">
						<h6 class="text-galeria left-float m-t-5p-xs m-t-1p-sm">GALERIA</h6>
					</div>
					<div class="container">
					  <div class="row">
					    <div id="carousel" class="carousel slide" data-ride="carousel">
					      <div class="carousel-inner">
					        <div class="carousel-item active">
					          <div class="d-none d-lg-block">
					            <div class="slide-box">
					              <img src="https://picsum.photos/285/200/?image=0&random" alt="First slide">
					              <img src="https://picsum.photos/285/200/?image=1&random" alt="First slide">
					              <img src="https://picsum.photos/285/200/?image=2&random" alt="First slide">
					            </div>
					          </div>
					          <div class="d-none d-md-block d-lg-none">
					            <div class="slide-box">
					              <img src="https://picsum.photos/240/200/?image=0&random" alt="First slide">
					              <img src="https://picsum.photos/240/200/?image=1&random" alt="First slide">
					              <img src="https://picsum.photos/240/200/?image=2&random" alt="First slide">
					            </div>
					          </div>
					          <div class="d-none d-sm-block d-md-none">
					            <div class="slide-box">
					              <img src="https://picsum.photos/270/200/?image=0&random" alt="First slide">
					              <img src="https://picsum.photos/270/200/?image=1&random" alt="First slide">
					            </div>
					          </div>
					          <div class="d-block d-sm-none">
					            <img class="d-block w-100" src="https://picsum.photos/600/400/?image=0&random" alt="First slide">
					          </div>
					        </div>
					        <div class="carousel-item">
					          <div class="d-none d-lg-block">
					            <div class="slide-box">
					              <img src="https://picsum.photos/285/200/?image=4&random" alt="Second slide">
					              <img src="https://picsum.photos/285/200/?image=5&random" alt="Second slide">
					              <img src="https://picsum.photos/285/200/?image=6&random" alt="Second slide">
					            </div>
					          </div>
					          <div class="d-none d-md-block d-lg-none">
					            <div class="slide-box">
					              <img src="https://picsum.photos/240/200/?image=3&random" alt="Second slide">
					              <img src="https://picsum.photos/240/200/?image=4&random" alt="Second slide">
					              <img src="https://picsum.photos/240/200/?image=5&random" alt="Second slide">
					            </div>
					          </div>
					          <div class="d-none d-sm-block d-md-none">
					            <div class="slide-box">
					              <img src="https://picsum.photos/270/200/?image=2&random" alt="Second slide">
					              <img src="https://picsum.photos/270/200/?image=3&random" alt="Second slide">
					            </div>
					          </div>
					          <div class="d-block d-sm-none">
					            <img class="d-block w-100" src="https://picsum.photos/600/400/?image=1&random" alt="Second slide">
					          </div>
					        </div>
					      </div>
					      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
					        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					        <span class="sr-only">Previous</span>
					      </a>
					      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
					        <span class="carousel-control-next-icon" aria-hidden="true"></span>
					        <span class="sr-only">Next</span>
					      </a>
					    </div>
					  </div>
					</div>
				</section> -->
				<div class="container text-center my-3" id="Multi-img-carousel">
		            <div class="row mx-auto my-auto">
		                <div id="recipeCarousel" class="carousel slide w-100 d-flex" data-ride="carousel">
		                    <div class="carousel-inner w-100" role="listbox">
		                        <div class="carousel-item active">
		                        	<div class="gallery-post">
		                        		<iframe width="250" height="200" src="https://www.youtube.com/embed/av5JD1dfj_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                        		<h5 class="post-title m-t-1p">Título da postagem</h5>
		                        		<p class="post-description">Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
		                        	</div>

		                        	<div class="gallery-post">
		                        		<iframe width="250" height="200" src="https://www.youtube.com/embed/av5JD1dfj_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                        		<h5 class="post-title m-t-1p">Título da postagem 2</h5>
		                        		<p class="post-description">Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
		                        	</div>

		                        	<div class="gallery-post">
		                        		<iframe width="250" height="200" src="https://www.youtube.com/embed/av5JD1dfj_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                        		<h5 class="post-title m-t-1p">Título da postagem 3</h5>
		                        		<p class="post-description">Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
		                        	</div>
		                        </div>
		                        <div class="carousel-item ">
		                            <img class="d-flex col-md-4 img-fluid" src="http://placehold.it/350x180?text=2">
		                        </div>
		                        <div class="carousel-item ">
		                            <img class="d-flex col-md-4 img-fluid" src="http://placehold.it/350x180?text=3">
		                        </div>
		                        <div class="carousel-item">
		                            <img class="d-flex col-md-4 img-fluid" src="http://placehold.it/350x180?text=4">
		                        </div>
		                        <div class="carousel-item">
		                            <img class="d-flex col-md-4 img-fluid" src="http://placehold.it/350x180?text=5">
		                        </div>
		                        <div class="carousel-item">
		                            <img class="d-block col-md-4 img-fluid" src="http://placehold.it/350x180?text=6">
		                        </div>
		                    </div>
		                    <a class="carousel-control-prev control-button" href="#recipeCarousel" role="button" data-slide="prev">
		                        <i class="fa fa-angle-left carousel-icon" aria-hidden="true"></i>
		                        <span class="sr-only">Previous</span>
		                    </a>
		                    <a class="carousel-control-next control-button" href="#recipeCarousel" role="button" data-slide="next">
		                        <i class="fa fa-angle-right carousel-icon" aria-hidden="true"></i>
		                        <span class="sr-only">Next</span>
		                    </a>
		                </div>
		            </div>
		        </div>

		    </div>
			<!-- end galeria -->

			<!-- begin publicacoes -->
					<section class="m-t-3p container" style="margin-bottom: 15%;">
						<div class="publicacoes-title d-flex-sm justify-content-center-sm">
							<h6 class="text-publicacoes left-float m-t-5p-xs m-t-1p-sm">PUBLICAÇÕES</h6>
						</div>
					</section>
			<!-- end publicacoes -->
		</section>
<?php get_footer(); ?>