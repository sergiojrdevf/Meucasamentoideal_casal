<?php get_header(); ?>
		<section class="pad-space">
			<div class="container">
				<ul class="breadcrumb">
					<li><p>Você está em: </p></li>
					<li><a href="<?php echo home_url(); ?>">Início</a></li>
					<li><a href="<?php echo home_url('/todos-os-posts'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Todos os Posts</a></li>
					<li><a style="color: #333" href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Categoria: <?php echo get_queried_object()->name ?></a></li>
				</ul>
			</div>
		</section>
		<div class="space-defaul">
			<div class="container">
				<h2>Todos as publicações sobre <?php echo get_queried_object()->name ?></h2>
				<div class="blog blog-default">
					<div class="column event">
						<?php while(have_posts()): the_post(); ?>
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
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>
