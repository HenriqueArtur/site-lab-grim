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
			<section class="top-bar">

				<div class="container">
					<div class="row">
						<section class="nav-logo col-md-2 col-12 text-center">Logo</section>
						<nav class="pags-bar col-md-8 col-12 text-right"><?php wp_nav_menu( array( 'theme_location' => 'my_main_menu' ) ); ?></nav>
						<nav class="social-media-icons col-md-2 col-12 text-center">
							<?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
						</nav>
					</div> <!-- END ROW -->
				</div> <!-- END CONTAINER -->

			</section><!-- end top-bar -->
		</header> <!-- end header -->