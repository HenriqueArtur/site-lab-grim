<article <?php post_class(); ?>>
	<div class="row">
		<div class="col-4">
			<div class="post-thumbnail-rect bg-color"></div>
			<?php the_post_thumbnail( 'labgrim-thumbnail', [ 'class' => 'tumb-post img-fluid' ] ); ?>
		</div>
		
		<div class="post-content col-8">
			<div class="post-title-area">
				<p class="post-category d-inline">[<?php the_category( ' ' ); ?>]</p>
				<h3 class="post-title d-inline"><?php the_title(); ?></h3>
			</div>
			<?php the_excerpt(); ?>
			<div class="post-link text-right">
				<div class="post-link-rect bg-color"></div>
				<a href="<?php the_permalink(); ?>">VER MAIS</a>
			</div>
		</div>
	</div>
</article>