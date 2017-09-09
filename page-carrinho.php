<?php get_header(); ?>
<!-- 	<section class="pad-space single-top single-banner">
	</section> -->
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="pad-space archive centered single-z">
		<div class="container">
			<div class="column">
				<div class="single-post p-white">
					<ul class="breadcrumb">
						<li><p>Você está em: </p></li>
						<li><a href="<?php echo home_url(); ?>">Início</a></li>
						<li><a href="<?php echo home_url('/loja'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Lista de Presente</a></li>
						<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php the_title(); ?></a></li>
					</ul>
					<?php
						if(has_post_thumbnail()) { ?>
							<figure class="thumbnail-post">
								<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
							</figure>
						<?php }
					?>
					<div class="describe_title">
						<h2 style="font-weight: bold;"><?php the_title(); ?></h2>
						<p>Agradecemos muito o seu carinho!</p>
						<p>Por favor, confirme os presente e valores antes de fechar a compra.</p>	
					</div>
					<article>
						<?php the_content(); ?>
					</article>
					<br/>

				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>
