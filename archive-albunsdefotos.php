<?php get_header(); ?>
<!-- 	<section class="pad-space single-top single-banner">
	</section> -->
	<div class="pad-space">
		<div class="container">
			<ul class="breadcrumb">
				<li><p>Você está em: </p></li>
				<li><a href="<?php echo home_url(); ?>">Início</a></li>
				<li><a style="color: #333;" href="<?php echo home_url('/nossas-fotos') ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Nossos álbuns de fotos</a></li>
			</ul>
		</div>
	</div>
	<div class="pad-space archive centered single-z">
		<div class="container">
			<div class="column">
					<div class="md-8-12">
						<h2 class="font-rochester part-title color-theme">Nossos Álbuns de Fotos</h2>
						<ul class="social-shared">
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
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="sm-6-12">
									<?php $fotos = get_field('galeria_de_fotos');	?>
									<a href="<?php the_permalink(); ?>">
										<div class="gallery-group">
											<div class="gallery-item" style="background-image: url('<?php echo $fotos[0]['url']; ?>')">
												<img src="<?php echo $fotos[0]['url']; ?>">
											</div>
											<p class="a-center"><?php the_title(); ?></p>
										</div>
									</a>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				<div class="md-4-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
