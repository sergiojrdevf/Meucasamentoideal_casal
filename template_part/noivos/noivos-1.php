<?php
	$page_id = 61;
	$imgnoiva = get_field('imagem_noiva', $page_id);
	$imgnoivo = get_field('imagem_noivo', $page_id);
	$imgcasal = get_field('imagem_do_casal', $page_id);
	$sobre_noiva = get_field('sobre_a_noiva', $page_id);
	$sobre_noivo = get_field('sobre_o_noivo', $page_id);
	$historia = get_field('nossa_historia', $page_id);
	$pedido = get_field('o_pedido', $page_id);
	$noiva = get_field('nome_noiva', $page_id);
	$noivo = get_field('nome_noivo', $page_id);
	$img = get_field('background', $page_id);
?>
<div class="space-default hidde">
	<h2 class="font-rochester part-title color-theme a-center">Os noivos</h2>
	<div class="column">
		<div class="sm-12-12 ">
			<div class="couple-item">
				<div class="couple-img circle-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/2.jpg')">
					<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/2.jpg" alt="">
				</div>
				<div class="a-center space-title">
					<p class="font-dancing couple-name"><?php echo $noiva; ?> & <?php echo $noivo ?></p>
				</div>
			</div>
		</div>
		<div class="sm-6-12  ">
			<div class="couple-item p-div">
				<h2>Nossa História</h2>
				<?php echo '<p>'.$historia.'</p>'; ?>
			</div>
		</div>
		<div class="sm-6-12  ">
			<div class="couple-item p-div">
				<h2>O pedido</h2>
				<?php echo $pedido ?>
			</div>
		</div>
	</div>
</div>