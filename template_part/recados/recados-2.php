<?php
	$args = array(
		'posts_per_page' => 4,
		'post_type' => 'recados'
	);
	
	$query = new WP_Query($args);
	if($query->have_posts()) { ?>
		<section class="hidde space-default notes overlay box ">
			<div class="container ">
				<h2 class="font-rochester part-title color-theme a-center color-white">Mural de Recados</h2>
				<div class="notes-group owl-carousel colum slidertestimonial owl-theme">
						<?php
							
							while($query->have_posts()) { $query->the_post(); ?>
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p"><?php echo get_the_content(); ?></p>
										<p class="notes-author"><?php echo get_the_title(); ?> </p>
										<p class="notes-connect">-<?php the_field('aproximidade')?></p>
									</div>
								</div>
							<?php }	?>
				</div>
				<a href="<?php echo home_url('/recados') ?>" class="btn btn-theme btn-small float-right">Ver todos recados</a>
				<div class="clearfix"></div>
			</div>
		</section>
<?php } 
	wp_reset_postdata(); ?>