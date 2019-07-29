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
					<section class="m-t-3p container" style="margin-bottom: 15%;">
						<div class="galeria-title d-flex-sm justify-content-center-sm">
							<h6 class="text-galeria left-float m-t-5p-xs m-t-1p-sm">GALERIA</h6>
						</div>
					</section>
			<!-- end galeria -->
		</section>
<?php get_footer(); ?>