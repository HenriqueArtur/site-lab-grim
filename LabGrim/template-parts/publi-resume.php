<!-- Adicinando classe no post com WP -->
<article <?php post_class(); ?>>
	<div class="publicacoes-post">
		<div class="post-text">
			<div class="row m-t-1p">
				<div class="col-8">
					<h5 class="publicacao-title"><?php the_title(); ?></h5>
				</div>
				<div class="col-4 text-right">
					<!--
					* Aqui se se insere o link permanente do post.
					* Essa função for utlizada dentro do loop do wp
					* não precisa se preocupar, pois ela já pega
					* o link certinho.
					-->
					<a href="<?php the_permalink(); ?>" class="publicacao-link">VER MAIS</a>
				</div>
			</div>
			<p class="post-description">
				<?php the_excerpt(); ?>
			</p>
		</div>
	</div>
</article>