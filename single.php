<?php get_header(); ?>
<!-- 	<section class="pad-space single-top single-banner">
	</section> -->
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="pad-space">
		<div class="container">
			<ul class="breadcrumb">
				<li><p>Você está em: </p></li>
				<li><a href="<?php echo home_url(); ?>">Início</a></li>
				<li><a href="<?php echo home_url('/todos-os-posts'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Blog</a></li>
				<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php the_title(); ?></a></li>
			</ul>
		</div>
	</div>
	<div class="pad-space archive centered single-z">
		<div class="container">
			<div class="column">
				<div class="md-8-12">
					<div class="single-content-post p-white">
						<?php
							if(has_post_thumbnail()) { ?>
								<figure class="thumbnail-post">
									<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
								</figure>
							<?php }
						?>
						<div class="describe_title">
							<h2 class="single-title"><?php the_title(); ?></h2>
						</div>

						<time class="single_box_date date-post">Publicado em <?php echo get_the_date('d/m/Y'); ?></time>

						<article>
							<?php the_content(); ?>
						</article>
						<br/>
						<div class="share">
							<div class="holder">
								<p>Compartilhar</p>
								<div class="share-list share-whatsapp"><a class="share-link" target="_blank" href="whatsapp://send?text=Olá! Encontrei a matéria <?php the_title(); ?> e gostaria de compartilhar com vc ;) <?php echo get_permalink(); ?>" data-action="share/whatsapp/share">Whatsapp</a></div>
								<div class="share-list share-facebook"><a class="share-link" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=#<?php echo get_permalink();?>">Facebook</a></div>
								<div class="share-list share-twitter"><a class="share-link" target="_blank" href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php echo get_permalink(); ?>&hashtags=DII,DoencaDeCrohn,DiarioDeUmCrohnista">Twitter</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="md-4-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>
