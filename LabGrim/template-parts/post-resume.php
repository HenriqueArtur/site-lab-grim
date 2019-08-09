<!-- Adicinando classe no post com WP -->
<article <?php post_class(); ?>>
	<div class="row">
		<div class="col-md-4 col-12">
			<div class="post-thumbnail-rect bg-color"></div>
			<?php
				/*
				 * Aqui ele chama a imagem em destaque do post
				 * Foi criado um tamanho de imagem custom para esse post
				 * Os argumentos da funcção são ( id_do_tamanho da imagem, Class da imagem )
				 */
				the_post_thumbnail( 'labgrim-thumbnail', [ 'class' => 'tumb-post img-fluid' ] );
			?>
		</div>
		
		<div class="post-content col-md-8 col-12">
			<div class="post-title-area">
				<p class="post-category d-inline">[<?php the_category( ' ' ); ?>]</p>
				<h3 class="post-title d-inline"><?php the_title(); ?></h3>
			</div>
			<?php the_excerpt(); ?>
			<div class="post-link text-right">
				<div class="post-link-rect bg-color"></div>
				<!--
				* Aqui se se insere o link permanante do post.
				* Essa função for utlizada dentro do loop do wp
				* não precisa se preocupar, pois ela já pega
				* o link certinho.
				-->
				<a href="<?php the_permalink(); ?>">VER MAIS</a>
			</div>
		</div>
	</div>
</article>