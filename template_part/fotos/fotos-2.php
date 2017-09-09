<?php
	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'albunsdefotos'
	);
	
	$query = new WP_Query($args);
	if($query) { ?>
	<div class="space-default">
		<div class="container">
			<h2 class="font-rochester part-title color-theme a-center">Nossas Fotos</h2>
			<div class="hidde components-item gallery  gallery-tall less-centered">
				<?php
					while($query->have_posts()) { $query->the_post();
						$fotos[] = get_field('galeria_de_fotos');
					}
					wp_reset_postdata();
					$merged = array_merge(... $fotos);
					foreach (array_slice($merged, 0, 4) as $foto) { ?>
						<div class="sm-25">
							<a data-fancybox="gallery" href="<?php echo $foto['url']; ?>">
								<div class="gallery-item" style="background-image: url('<?php echo $foto['url'] ?>')">
									<i class="fa fa-expand" aria-hidden="true"></i>
									<img src="<?php echo $foto['url'] ?>" alt="<?php echo $foto['caption'] ?>">
								</div>
							</a>
						</div>
					<?php } 
				?>
			</div>
			<a href="<?php echo home_url('/nossas-fotos') ?>" class="mg-bottom btn btn-theme btn-small float-right">Ver todas as fotos</a>
			<div class="clearfix"></div>
		</div>
	</div>
<?php } ?>