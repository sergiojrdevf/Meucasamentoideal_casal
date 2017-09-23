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
<div class="hidde couple space-default under-other single-col">
	<h2 class="font-rochester part-title a-center color-theme mg-bottom">Os noivos</h2>
	<div class="couple-item img-holder ">
		<div class="   couple-img circle-img" style="background-image: url('<?php echo $imgnoiva?>')">
			<img class="hidden" src="<?php echo $imgnoiva?>" alt="">
		</div>
		<div class="   couple-img circle-img" style="background-image: url('<?php echo $imgnoivo?>')">
			<img class="hidden" src="<?php echo $imgnoivo?>" alt="">
		</div>
	</div>
	<div class="a-center   space-title">
		<p class="font-dancing couple-name"><?php echo $noiva; ?> & <?php echo $noivo ?></p>
	</div>
	<div class="couple-item a-center  ">
		<?php echo $historia ?>
	</div>
</div>