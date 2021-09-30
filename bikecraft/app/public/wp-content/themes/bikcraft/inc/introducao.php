<style type="text/css">
.introducao-interna {
	background: url("<?php the_field('background_interno', get_the_ID()); ?>") no-repeat center;
	background-size: cover;
}
</style>

<section class="introducao-interna">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<p><?php the_field('subtitulo', get_the_ID()); ?></p>
	</div>
</section>