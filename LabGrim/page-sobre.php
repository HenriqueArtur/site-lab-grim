<?php get_header(); ?>
		<section id="page-sobre" class="overflow-x-hidden">
					
			<!-- begin oqe -->
			<section class="m-t-2p container">
				<div class="div-title-1 d-flex-sm justify-content-center-sm">
					<h4 class="text-center left-float m-t-5p-sm">O QUE É?</h4>
				</div>
				<p class="m-t-1p"><?php echo get_theme_mod('set_oqe-texto'); ?> </p>
			</section>
			<!-- end oqe -->

			<!-- begin comocomecou -->
			<section class="m-t-5p container">
				<div class="div-title-2 d-flex-sm justify-content-center-sm">
					<h4 class="text-center left-float m-t-5p-sm">COMO COMEÇOU...</h4>
				</div>

				<p class="m-t-1p"><?php echo get_theme_mod('set_oqe-texto'); ?> </p>

				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim sapien, rutrum eu ultricies nec, eleifend finibus dui. Fusce pretium elit at dui ultricies, in vulputate lorem luctus. Suspendisse ornare orci sed rhoncus lobortis. Nunc ac egestas augue. Morbi et maximus felis, nec ullamcorper lorem. Morbi sit amet augue vehicula, scelerisque elit nec, dapibus sapien. Duis sit amet libero venenatis, consectetur enim non, placerat leo. Cras tortor ex, tincidunt eu malesuada sed, bibendum ac ante.</p> -->
			</section>
			<!-- end comocomecou -->
			
			<!-- begin equipe -->
			<section class="m-t-5p m-b-5p container-sm">
				<div class="row d-flex-sm justify-content-center-sm">
					<div class="col-lg-4 col-md-4 column rect_amarelo d-none d-md-block d-lg-block"></div>
					<div class="col-lg-4 col-md-4 column div-title-3 align-center m-t-3p-md">
						<h4 class="text-center left-float center-sm float-center-md align-items-md-center align-items-xs-center align-items-sm-center m-t-5p-sm">NOSSA EQUIPE</h4>
					</div>
					<div class="col-lg-4 col-md-4 column triang_amarelo d-none d-md-block d-lg-block"></div>
				</div>
				

                <ul class="nav align-center w-100 m-t-3p">
                    <li class="inline-block p-r-1p p-1p-sm">
                        <button class="navbar-button-active" id='pesquisador-senior-button'>PESQUISADORES SÊNIORS</button>
                    </li>
                    <li class="inline-block p-r-1p p-1p-sm">
                        <button class="navbar-button" id='pesquisador-voluntario-button'>PESQUISADORES VOLUNTÁRIOS</button>
                    </li>
                    <li class="inline-block p-r-1p p-1p-sm">
                        <button class="navbar-button" id='pesquisador-anterior-button'>PESQUISADORES ANTERIORES</button>
                    </li>
                    <li class="inline-block p-r-1p p-1p-sm">
                        <button class="navbar-button" id='bolsista-atual-button'>BOLSISTAS ATUAIS</button>
                    </li>
                    <li class="inline-block p-r-1p p-1p-sm">
                        <button class="navbar-button" id='bolsista-anterior-button'>BOLSISTAS ANTERIORES</button>
                    </li>
                </ul>

                <ul class="nav w-100 m-t-5p m-b-5p table-pesquisadores">
                	<?php 
                		if( is_active_sidebar('page-sobre') ):
                			dynamic_sidebar('page-sobre');
                		else: ?>
                		<div class="container">
							<div class="row m-b-5p">
								<h2 class="attention col-12 text-center">Adicione o Widget "Pesquisador Info" na barra "Sobre" que se localiza em PAINEL > APARÊNCIA > WIDGETS.</h2>
							</div>
						</div>
					<?php
						endif;
					?>

                </ul>

			</section>
			<!-- end equipe -->
		</section>
<?php get_footer(); ?>