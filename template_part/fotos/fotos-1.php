<?php
	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'albunsdefotos'
	);
	
	$query = new WP_Query($args);
	if($query->have_posts()) { ?>
	<div class="space-default">
		<div class="container">
			<h2 class="font-rochester part-title color-theme a-center">Nossas Fotos</h2>
			<div class="components-item gallery column less-centered">
				<?php
					while($query->have_posts()) { $query->the_post();
						$fotos[] = get_field('galeria_de_fotos');
					}
					wp_reset_postdata();
					$merged = array_merge(... $fotos);
					foreach (array_slice($merged, 0, 6) as $foto) { ?>
						<?php  ?>
						<div class="sm-6-12 md-4-12">
							<a data-fancybox="gallery" href="<?php echo $foto['sizes']['lightbox']; ?>">
								<div class="gallery-item" style="background-image: url('<?php echo $foto['sizes']['lightbox']; ?>')">
									<i class="fa fa-expand" aria-hidden="true"></i>
									<img src="<?php echo $foto['sizes']['lightbox']; ?>" alt="<?php echo $foto['caption'] ?>">
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