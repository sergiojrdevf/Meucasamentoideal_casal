<?php $page_id = 61 ?>
<section class="hidde space-default local with-title">
	<div class="container  max-widt-content">
		<h2 class="font-rochester part-title color-theme a-center mg-bottom">Eventos</h2>
		<div class="column">
		<?php while(has_sub_field('eventos', $page_id)): ?>
			<div class="sm-6-12 border-right">
				<div class="local-item a-center">
					<h2><?php echo  get_sub_field('titulo'); ?></h2>
					<?php $data = get_sub_field('data');?>
					<p class="local-featured open-sans">
						<?php echo utf8_encode(strftime('%d de %B de %Y', strtotime($data))); ?>,
						<?php echo 'ás '.get_sub_field('horario'); ?></p>
					<p><?php echo  get_sub_field('local'); ?></p>
				</div>
				<iframe src="<?php echo get_sub_field('google_maps'); ?>" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		<?php endwhile;	?>
		</div>
	</div>
</section>