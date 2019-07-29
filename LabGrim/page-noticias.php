<?php get_header(); ?>
		<section id="page-noticias" class="overflow-x-hidden">
					
			<!-- begin producoes -->
				<section class="m-t-2p container">
					<div class="producao-title row justify-content-center">
						<h4>PRODUÇÕES</h4>
					</div>
					<p class="m-t-1p"><?php echo get_theme_mod('set_producoes-texto'); ?> </p>
				</section>
			<!-- end producoes -->
			<!-- begin galeria -->
				<section class="m-t-2p container">
					<div class="row">
						<div class="input-group col-lg-7 mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">@</span>
							</div>
							<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
				</section>
			<!-- end galeria -->
		</section>
<?php get_footer(); ?>