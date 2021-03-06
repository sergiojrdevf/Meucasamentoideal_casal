<?php
	$args = array(
		'posts_per_page' => 4,
		'post_type' => 'recados'
	);
	
	$query = new WP_Query($args);
	if($query->have_posts()) { ?>
		<section class="space-defaul notes">
			<div class="container">
				<h2 class="font-rochester part-title color-theme a-center">Mural de recados</h2>
				<div class="notes-group ">
					<div class="owl-carousel colum slidertestimonial owl-theme">
						<?php while($query->have_posts()) { $query->the_post(); ?>
							<div class="sm-6-12">
								<div class="notes-item">
									<p class="notes-p first-letter"><?php echo get_the_content(); ?></p>
									<p class="notes-author"><?php echo get_the_title(); ?> </p>
									<p class="notes-connect">-<?php the_field('aproximidade')?></p>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<a href="<?php echo home_url('/recados') ?>" class="btn btn-theme btn-small float-right">Ver todos recados</a>
				<div class="mg-bottom clearfix"></div>
			</div>
		</section>
	<?php } 
	wp_reset_postdata(); ?>