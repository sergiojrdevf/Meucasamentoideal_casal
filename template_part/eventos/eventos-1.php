<section class="space-default hidde local with-img ">
	<?php $page_id = get_page_by_path( 'Pagina Inicial' )->ID; ?>
	<h2 class="font-rochester part-title a-center color-theme mg-bottom">Eventos</h2>
	<div class="container max-width-content ">
		<div class="column">
		<?php while(has_sub_field('eventos', $page_id)): ?>
				<div class="sm-6-12">
					<div class="local-item a-center">
						<?php if(get_sub_field('titulo') == 'Cerimônia') {?>
							<div class="local-img bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/local/wedding.jpg')">
								<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/local/party.jpg">
							</div>
						<?php } ?>
						<?php if(get_sub_field('titulo') == 'Festa') {?>
							<div class="local-img bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/local/party.jpg')">
								<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/local/party.jpg">
							</div>
						<?php } ?>
						<div class="local-content">
							<h2 ><?php echo  get_sub_field('titulo'); ?></h2>
							<p><?php echo  get_sub_field('descrição'); ?></p>
							<?php $data = get_sub_field('data');?>
							<p class="local-featured open-sans"><?php echo utf8_encode(strftime('%A, %d de %B de %Y', strtotime($data))); ?></p>
							<p class="local-featured open-sans"><?php echo  get_sub_field('local'); ?></p>
						</div>
					</div>
				</div>
		<?php endwhile;	?>
		</div>
	</div>
</section>