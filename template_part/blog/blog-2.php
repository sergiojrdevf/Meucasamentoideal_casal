<?php
	$args = array(
		'posts_per_page' => 3,
		'post_type' => 'post',
		'post_status' => 'publish'
	);
	
	$query = new WP_Query($args);
	if($query->posts) { ?>
	<section class="space-default">
		<div class="hidde container ">
			<h2 class="font-rochester part-title color-theme a-center">Blog</h2>
			<div class="blog bg-overlay  column">
					<?php
						
						while($query->have_posts()) { $query->the_post(); ?>
							<div class="sm-4-12">
								<div class="blog_item overlay bg-img" style="background-image: url('<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : 'https://blog.stylingandroid.com/wp-content/themes/lontano-pro/images/no-image-slide.png' ?>')">
									<a href="<?php the_permalink(); ?>">
										<figure>
											<img class="hidden" src="<?php the_post_thumbnail_url(); ?>" alt="">
										</figure>
									</a>
									<div>
										<a href="<?php the_permalink(); ?>">
											<h2><?php the_title(); ?></h2>
										</a>
										<div class="shared-list">
											<ul>
												<li>
													<a class="facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=#<?php echo get_permalink();?>">
														<i class="fa fa-facebook" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="twitter" target="_blank" href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php echo get_permalink(); ?>">
														<i class="fa fa-twitter" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a class="whatsapp"  target="_blank" href="whatsapp://send?text=Olá! Gostaria de compartilhar essa página com vc <?php echo get_permalink(); ?>" data-action="share/whatsapp/share">
														<i class="fa fa-whatsapp" aria-hidden="true"></i>
													</a>
												</li>
											</ul>
										</div>
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