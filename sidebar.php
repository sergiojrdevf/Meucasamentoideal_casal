<div class="sidebar">
	<div class="sidebar-item line-icon ">
		<div class="sidebar-title title-default">
			<h2 class="font-rochester">Pesquisa</h2>
		</div>
		<form action="<?php echo home_url(); ?>" method="get" id="search-form" class="form search-form">

			<input class="input" name="s" id="search-input-id" type="text">
			<button type="submit" id="search-submit" class="search-submit submit"><i class="fa fa-search" aria-hidden="true"></i></button>
		</form>
	
	</div>
	<?php
		$args = array(
			'posts_per_page' => 4,
			'post_type' => 'post'
		);
		
		$query = new WP_Query($args);
		if($query->have_posts()) { ?>
			<div class="sidebar-item line-icon ">
				<div class="sidebar-title">
					<h2 class="font-rochester">Blog</h2>
				</div>
				<div class="column blog">
					<?php
						while($query->have_posts()) { $query->the_post(); ?>
							<div class="sm-6-12 md-12-12">
								<div class="blog-item">
									<?php if(has_post_thumbnail()) { ?>
									<a href="<?php the_permalink(); ?>">
										<div class="blog-img cover-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
											<img class="hidden" src="<?php the_post_thumbnail_url(); ?>">
										</div>
									</a>
									<?php } ?>
									<div class="blog-content">
										<a href="<?php the_permalink(); ?>">
											<h2><?php the_title(); ?></h2>
										</a>
										<span>publicado em <?php echo get_the_date('d/m/Y'); ?></span>
										<a href="<?php the_permalink(); ?>">Ler mais</a>
									</div>
								</div>
							</div>
						<?php }	?>
				</div>
			</div>
	<?php } ?>

	<?php
		$args = array(
			'posts_per_page' => 4,
			'post_type' => 'albunsdefotos'
		);
		
		$query = new WP_Query($args);
		if($query->have_posts()) { ?>
			<div class="sidebar-item line-icon ">
				<div class="sidebar-title">
					<h2 class="font-rochester">Nossas Fotos</h2>
				</div>
				<div class="column blog">
					<?php
						while($query->have_posts()) { $query->the_post(); ?>
							<div class="sm-6-12">
								<?php $fotos = get_field('galeria_de_fotos');	?>
								<a href="<?php the_permalink(); ?>">
									<div class="gallery-sidebar">
										<div class="gallery-item" style="background-image: url('<?php echo $fotos[0]['url']; ?>')">
											<img src="<?php echo $fotos[0]['url']; ?>">
										</div>
										<p class="a-center"><?php the_title(); ?></p>
									</div>
								</a>
							</div>
						<?php }
					?>
				</div>
			</div>
	<?php } ?>

	<?php
		$args = array(
			'posts_per_page' => 4,
			'post_type' => 'product',
			'orderby' => 'rand'
		);
		
		$query = new WP_Query($args);
		if($query->have_posts()) { ?>
			<div class="sidebar-item line-icon ">
				<div class="sidebar-title">
					<h2 class="font-rochester">Lista de Presentes</h2>
				</div>
				<div class="column products woocommerce">
					<?php
						while($query->have_posts()) { $query->the_post(); ?>
							<div class="xs-6-12">
								<div class="product-item a-center">
									<div class="product-image " style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
										<img class="hidden" src="<?php the_post_thumbnail_url(); ?>">
									</div>
									<h2 class="product-name"><?php the_title(); ?></h2>
									<p>R$<?php echo get_post_meta( get_the_ID(), '_regular_price', true); ?></p>
									<a rel="nofollow" href="<?php echo home_url('/loja') ?>?add-to-cart=<?php echo get_the_ID(); ?>" data-quantity="1" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart added">Comprar</a>
								</div>
							</div>
						<?php }
					?>
					<div class="a-center">
						<a href="<?php echo home_url('/loja') ?>" class="btn btn-theme">Ver todos presentes</a>
					</div>
				</div>
			</div>
	<?php } ?>
</div>