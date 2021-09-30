<?php $sobre = get_page_by_title('sobre')->ID;?>
<section class="qualidade container">
	<h2 class="subtitulo"> <?php the_field('titulo-qualidade', $sobre);?> </h2>
	<img src="<?php the_field('img-qualidade', $sobre)?>" alt="Bikcraft">
	<ul class="qualidade_lista">
		<?php
            $cards_qualidade = get_field('cards_qualidade', $sobre); 
            if (isset($cards_qualidade)) { foreach ($cards_qualidade as $card) { ?>
                <li class="grid-1-3">
					<h3><?php echo $card['titulo-card']?></h3>
					<p><?php echo $card['texto-card']?></p>
				</li>
		<?php } } ?>
	<?php if(!is_page('sobre')) { ?>
	<div class="call">
		<p><?php the_field('chamada-sobre', $sobre)?></p>
		<a href="sobre.html" class="btn btn-preto">Sobre</a>
	</div>
	<?php } ?>
</section>