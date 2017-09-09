<?php
	$args = array(
		'posts_per_page' => 3,
		'post_type' => 'post'
	);
	
	$query = new WP_Query($args);
	if($query) { ?>
		<section class="space-default services new-blog">
			<div class=" container">
				<h2 class="font-rochester part-title color-theme a-center">Blog</h2>
				<div class="card column ">
						<?php
							while($query->have_posts()) { $query->the_post(); ?>								
								<div class="sm-4-12">
									<div class="new-blog-item">
										<a href="<?php the_permalink(); ?>">
											<div class="new-blog-img cover-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
												<img class="hidden" src="<?php the_post_thumbnail_url(); ?>">
											</div>
										</a>
										<div class="new-blog-content">
											<h2><?php the_title(); ?></h2>
											<p><?php echo get_the_excerpt(); ?></p>
											<a href="<?php the_permalink(); ?>">Ler mais</a>
										</div>
									</div>
								</div>

							<?php }
						?>
				</div>
				<a href="<?php echo home_url('/recados') ?>" class="btn btn-theme btn-small float-right">Ver Blog</a>
				<div class="mg-bottom clearfix"></div>
			</div>
		</section>
	<?php } ?>