<?php
	$args = array(
		'posts_per_page' => 4,
		'post_type' => 'recados'
	);
	
	$query = new WP_Query($args);
	if($query->posts) { ?>
		<section class="space-default testimonial">
			<div class="container ">
				<h2 class="font-rochester part-title color-theme a-center">Mural de Recados</h2>
				<div class="owl-carousel slidertestimonial owl-theme">
					<?php 
						while($query->have_posts()) { $query->the_post(); ?>
                            <div class="sm-6-12">
                                <div class="holder">
                                    <p class="font-playfair messages"><?php echo get_the_content(); ?></p>
                                    <p class="author"><?php echo get_the_title(); ?>, <span style="font-size: 14px;"><?php the_field('aproximidade')?></span></p>
                                </div>
                            </div>
					<?php }	?>
				</div>
				<a href="<?php echo home_url('/recados') ?>" class="btn btn-theme btn-small float-right">Ver todos recados</a>
				<div class="mg-bottom clearfix"></div>
			</div>
		</section>
<?php } wp_reset_postdata(); ?>