<?php get_header(); ?>
	<div class="pad-space">
		<div class="container">
			<ul class="breadcrumb">
				<li><p>Você está em: </p></li>
				<li><a href="<?php echo home_url(); ?>">Início</a></li>
				<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Recados</a></li>
			</ul>
		</div>
	</div>
	<div class="pad-space archive-recados centered single-z">
		<div class="container">
			<div class="column">
				<div class="md-8-12">
					<h2 class="font-rochester part-title color-theme">Resultado da busca</h2>
					<ul class="social-shared" style="margin-top: 0;">
						<?php
							$page_id = 61;
							$noiva = get_field('nome_noiva', $page_id);
							$noivo = get_field('nome_noivo', $page_id);
						?>
						<li><p class="post_date">Compartilhar</p></li>
						<li><a class="whatsapp"  target="_blank" href="whatsapp://send?text=Olá! Veja isso sobre o casamento da <?php echo $noiva ?> com <?php echo $noivo ?> ;) <?php echo get_permalink(); ?>" data-action="share/whatsapp/share"><i class="size-md fa fa-whatsapp" aria-hidden="true"></i></a></li>
						<li><a class="facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=#<?php echo get_permalink();?>"><i class="size-md fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="twitter" target="_blank" href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php echo get_permalink(); ?>&hashtags=MeuCasamentoIdeal"><i class="size-md fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
					<div class="column">
						<div class="search">

							<?php 
								$args = array(
									's' => $_GET['s'],
									'post_type' => ['post'],
								);

								$query = new WP_Query( $args );
								if($query->have_posts()) {
									while($query->have_posts()) { $query->the_post(); ?>
										<a href="<?php the_permalink(); ?>">
											<div class="search-item">
												<div class="search-title">
													<h2><?php the_title(); ?></h2>
												</div>
												<div class="search-content">
													<?php the_excerpt(); ?>
												</div>
												<div class="search-found">
													<?php
														switch (get_post_type()) {
															case 'page':
																$type = 'Página';
																break;
															case 'post':
																$type = 'Post';
																break;
															case 'slider':
																$type = 'Slider';
																break;
															case 'testemunho':
																$type = 'Testemunhos';
																break;
														}
													?>
													<p>Encontrado em: <span><?php echo $type; ?></span></p>
												</div>
											</div>
										</a>
									<?php }
								} else {
									echo 'Nenhum resultado encontrado.';
								}
							?>

						</div>
					</div>
				</div>
				<div class="md-4-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
	<?php /*
		<section class="single single-content section-area abou-us ">
			<div class="container column">
				<div class="with-sidebar">
					<article class="content-post content-page">
						<div class="title">
							<div class="title">
								<h2><i class="fa fa-search" aria-hidden="true"></i> Resultados de busca por: <?php echo $_GET['s']; ?></h2>
							</div>
						</div>
						
						<div class="search">

							<?php 
								$args = array(
									's' => $_GET['s'],
									'post_type' => ['post', 'page'],
								);

								$query = new WP_Query( $args );
								if($query->have_posts()) {
									while($query->have_posts()) { $query->the_post(); ?>
										<a href="<?php the_permalink(); ?>">
											<div class="search-item">
												<div class="search-title">
													<h2><?php the_title(); ?></h2>
												</div>
												<div class="search-content">
													<?php the_excerpt(); ?>
												</div>
												<div class="search-found">
													<?php
														switch (get_post_type()) {
															case 'page':
																$type = 'Página';
																break;
															case 'post':
																$type = 'Notícias';
																break;
															case 'slider':
																$type = 'Slider';
																break;
															case 'testemunho':
																$type = 'Testemunhos';
																break;
														}
													?>
													<p>Encontrado em: <span><?php echo $type; ?></span></p>
												</div>
											</div>
										</a>
									<?php }
								} else {
									echo 'Nenhum resultado encontrado.';
								}
							?>

						</div>
					</article>
				</div>
				<?php 
					get_sidebar('default');
				?>
			</div>
		</section>
	*/




 include('footer.php'); ?>