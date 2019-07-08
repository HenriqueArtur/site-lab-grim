<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Lab Grim</title>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header>
			<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
				$host_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}";
			?>
			<section class="top-bar<?php if ( $actual_link != $host_link . "/lab-grim/" ): echo " notHome"; else: ""; endif; ?>">

				<div class="container">
					<div class="row">
						<div id="space-in-mobile">
							<section class="mobile-menu">
								<a href="javascript:void(0);" class="icon sandwich">
					    			<i class="fa fa-bars"></i>
					  			</a>
								<nav id="my-pags-bar-mobile" class="pags-bar-mobile">
									<a href="javascript:void(0);" class="icon arrow text-right">
										<i class="fa fa-arrow-left" aria-hidden="true"></i>
									</a>
									<?php wp_nav_menu( array( 'theme_location' => 'my_main_menu' ) ); ?>
									<nav id="my-social-media-icons-mobile" class="social-media-icons-mobile">
										<?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
									</nav>
								</nav>
							</section>
						</div>
						<!-- DESKTOP MENU -->
						<section id="my-nav-logo" class="nav-logo col-md-2 col-12 text-center">
							<div class="logo-desktop">
								<?php get_template_part( 'template-parts/logo' ); ?>
							</div>
							<div class="logo-mobile">
								<?php 
									if ( the_title( '', '', false ) != 'Olá, mundo!' ):
										the_title( '<h1 class="nav-logo-title">', '</h1>' );
									else:
										get_template_part( 'template-parts/logo' );
									endif;
								?>
							</div>
						</section>
						<nav id="my-pags-bar" class="pags-bar col-md-8 col-12 text-right">
							<?php wp_nav_menu( array( 'theme_location' => 'my_main_menu' ) ); ?>		
						</nav>
						<nav id="my-social-media-icons" class="social-media-icons col-2 text-center">
							<?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
						</nav>
						<!-- END DESKTOP MENU -->
					</div>
				</div>
				
				<!-- MOBILE MENU -->
				<!-- END MOBILE MENU -->

			</section>
		</header> <!-- end header -->