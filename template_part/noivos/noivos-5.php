<?php
	$page_id = get_page_by_path( 'Sobre o Casal' )->ID;
	$imgnoiva = get_field('imagem_noiva', $page_id);
	$imgnoivo = get_field('imagem_noivo', $page_id);
	$imgcasal = get_field('imagem_do_casal', $page_id);
	$sobre_noiva = get_field('sobre_a_noiva', $page_id);
	$sobre_noivo = get_field('sobre_o_noivo', $page_id);
	$historia = get_field('nossa_historia', $page_id);
	$pedido = get_field('o_pedido', $page_id);

	$page_id = get_page_by_path( 'Pagina Inicial' )->ID;
	$noiva = get_field('nome_noiva', $page_id);
	$noivo = get_field('nome_noivo', $page_id);
	$img = get_field('background', $page_id);
?>
<div class="couple space-default block">
	<div class="containe max-width-content">
		<h2 class="a-center font-dancing color-theme section-title ">Os Noivos</h2>
		<div class="column">
			<div class="sm-6-12 ">
				<div class="couple-item">
					<div class="couple-img " style="background-image: url('<?php echo $imgnoiva ?>')">
						<img class="hidden" src="<?php echo $imgnoiva ?>" alt="">
					</div>
				</div>
			</div>
			<div class="sm-6-12 ">
				<div class="couple-item a-ceter">
					<p class="font-dancing couple-name"><?php echo $noiva; ?></p>
					<span class="write-by font-dancing">Escrito pelo noivo</span>
					<p class="h"><?php echo $sobre_noiva  ?></p>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="sm-6-12 ">
				<div class="couple-item aright">
					<p class="font-dancing couple-name "><?php echo $noivo ?></p>
					<span class="write-by font-dancing">Escrito pela noiva</span>
					<p class="h"><?php echo $sobre_noivo  ?></p>
				</div>
			</div>
			<div class="sm-6-12 ">
				<div class="couple-item">
					<div class="couple-img " style="background-image: url('<?php echo $imgnoivo ?>')">
						<img class="hidden" src="<?php echo $imgnoivo ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>