<?php //template name: Todos os posts ?>
<?php get_header(); ?>
	<div class="pad-space archive single-z">
		<div class="container">
			<ul class="breadcrumb">
				<li><p>Você está em: </p></li>
				<li><a href="<?php echo home_url(); ?>">Início</a></li>
				<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php the_title(); ?></a></li>
			</ul>
			<div class="mg-bottom">
				<h2 class="font-rochester part-title color-theme">Blog</h2>
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
			</div>
		</div>
	</div>
<?php get_footer(); ?>
