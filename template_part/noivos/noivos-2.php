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
		<div class="hidde space-default">
			<h2 class="font-rochester part-title color-theme a-center mg-bottom">Os noivos</h2>
			<div class="column ">
				<div class="sm-6-12 ">
					<div class="couple-item">
						<div class="couple-img circle-img" style="background-image: url('<?php echo $imgnoiva?>')">
							<img class="hidden" src="<?php echo $imgnoiva?>" alt="">
						</div>
						<p class="font-montserrrat font-dancing couple-name a-center space-title"><?php echo $noiva; ?></p>
						<div class="a-center">
							<?php echo $sobre_noiva; ?>
						</div>
					</div>
				</div>
				<div class="sm-6-12 ">
					<div class="couple-item">
						<div class="couple-img circle-img" style="background-image: url('<?php echo $imgnoivo?>')">
							<img class="hidden" src="<?php echo $imgnoivo?>" alt="">
						</div>
						<p class="font-montserrrat font-dancing couple-name a-center space-title"><?php echo $noivo ?></p>
						<div class="a-center">
							<?php echo $sobre_noivo; ?>
						</div>
					</div>
				</div>
			</div>
		</div>