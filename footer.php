
<?php
if(is_home()) {
	$page_id = 61;
	$field = get_field('eventos', $page_id);
	foreach ($field as $event) {
		if($event['titulo'] === 'Cerimônia') {
			$data = strtotime($event['data']); ?>
			<script>		
				console.log('so');
				var countDownDate = new Date("<?php echo strftime('%Y-%m-%d', $data); ?>T20:00:00").getTime();
	
				var x = setInterval(function() {
	
					var now = new Date().getTime();
					var distance = countDownDate - now;
					var days = Math.floor(distance / (1000 * 60 * 60 * 24));
					var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
					var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
					var seconds = Math.floor((distance % (1000 * 60)) / 1000);
				
				
					if (distance < 0) {
						days = days.toString().replace('-', '');
						hours = hours.toString().replace('-', '');
						minutes = minutes.toString().replace('-', '');
						seconds = seconds.toString().replace('-', '');
						$('#title-time').text('Nosso grande dia já passou há...')
					}
	
					$('.number-days').text(days);
					$('.number-hours').text(hours);
					$('.number-minutes').text(minutes);
					$('.number-seconds').text(seconds);
				}, 1000);
			</script>
			<?php 
		};
	}
}
?>

<?php
	$page_id = 61;
	$google_maps = get_field('google_maps', $page_id);
	if(is_home()) {
?>
		<div class="acf-map">
			<div class="marker" data-lat="<?php echo $google_maps['lat']; ?>" data-lng="<?php echo $google_maps['lng']; ?>"></div>
		</div>
		<?php } ?>
		<footer class="space-default footer default">
			<div class="container">
				<div class="column">
					<div class="sm-4-12">
						<div class="footer-item">
							<h2>Contribua Conosco</h2>
							<p>Você pode fazer uma doação para nossa lua de mel dos sonhos ou comprando da nossa lista de presente virtual.</p>
							<a href="#">Ver lista de presentes</a>
						</div>
					</div>

					<div class="sm-4-12">
						<div class="footer-item">
							<h2>Informações sobre o casamento</h2>
							<?php while(has_sub_field('eventos', $page_id)): ?>
								<div class="footer-local">
									<div class="local-contet">
										<h3><?php echo get_sub_field('titulo'); ?></h3>
										<?php $data = get_sub_field('data');?>
										<p class="local-featured open-sans">Local: <?php echo utf8_encode(strftime('%d de %B de %Y', strtotime($data))); ?></p>
										<p class="local-featured open-sans">Data: <?php echo  get_sub_field('local'); ?></p>
									</div>
								</div>
							<?php endwhile;	?>
						</div>
					</div>
					<div class="sm-4-12">
						<div class="footer-item">
							<h2>Mapa do site</h2>
							<?php $let = array(
								'menu' => 'primary',
								'menu_class' => 'nav-list',
								'container' => 'nav',
								'container_class' => 'nav-content'
							);
							wp_nav_menu($let);
							?>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="credits a-center">
			<div class="container">
				Feito por <a target="_blank" href="http://www.meucasamentoideal.com.br/">Meu casamento ideal</a>
			</div>
		</div>
 		<?php wp_footer(); ?>
	</body>
</html>

