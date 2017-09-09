<?php
	$args = array(
		'posts_per_page' => 3,
		'post_type' => 'post'
	);
	
	$query = new WP_Query($args);
	if($query) { ?>
	<div class="container">
		<div class="space-default">
			<h2 class="font-rochester part-title color-theme a-center">Blog</h2>
			<div class="blog blog-default column ">
				<?php
					$args = array(
						'posts_per_page' => 3,
						'post_type' => 'post'
					);
					
					$query = new WP_Query($args);
					while($query->have_posts()) { $query->the_post(); ?>
					<div class="sm-4-12">
						<div class="blog_item">
							<a href="<?php the_permalink(); ?>">
								<div class="blog_img bg-img" style="background-image: url('<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : 'https://blog.stylingandroid.com/wp-content/themes/lontano-pro/images/no-image-slide.png' ?>')">
									<figure>
										<img class="hidden" src="<?php the_post_thumbnail_url(); ?>" alt="Imagem <?php echo get_the_title(); ?>">
									</figure>
								</div>
							</a>
							<div class="blog_content">
								<a href="<?php the_permalink(); ?>"><h2 class="blog_content-title"><?php the_title(); ?></h2></a>

								<p class="blog_content-p">
									<?php echo get_the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>" class="a-left">Continuar lendo...</a>
								</p>
							</div>
						</div>
					</div>
					<?php }
				?>
			</div>
			<a href="<?php echo home_url('/recados') ?>" class="btn btn-theme btn-small float-right">Ver Blog</a>
			<div class="mg-bottom clearfix"></div>
		</div>
	</div>
<?php } ?>