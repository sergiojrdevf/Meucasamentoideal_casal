<?php get_header(); ?>

	<div class="pad-space archive centered single-z">
		<div class="container">
			<div class="single-post p-white">
				<ul class="breadcrumb">
					<li><p>Você está em: </p></li>
					<li><a href="<?php echo home_url(); ?>">Início</a></li>
					<li><a style="color: #333;" href="<?php echo home_url('/loja'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Lista de Presentes</a></li>
				</ul>
			</div>
			<h2 class="font-rochester part-title color-theme">Nossa lista de presentes</h2>
			<div class="column">
				<div class="sm-3-12 mg-bottom">
					<?php if ( is_active_sidebar( 'sidebar_products' ) ) : ?>
						<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar_products' ); ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="sm-9-12 mg-bottom">
					<div class="column products">
						<?php
							$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
							$args = array(
								'posts_per_page' => 9,
								'post_type' => 'product',
								'paged' => $paged,
							);
							
							$query = new WP_Query($args);
							// woocommerce_content(); 
							while($query->have_posts()) { $query->the_post(); ?>
								<div class="sm-6-12 md-4-12">
									<div class="product-item a-center">
										<div class="product-image " style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
											<img class="hidden" src="<?php the_post_thumbnail_url(); ?>">
										</div>
										<h2 class="product-name"><?php the_title(); ?></h2>
										<p>R$<?php echo get_post_meta( get_the_ID(), '_regular_price', true); ?></p>
										<a rel="nofollow" href="<?php echo home_url('/loja') ?>?add-to-cart=<?php echo get_the_ID(); ?>" data-quantity="1" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Comprar</a>
									</div>
								</div>
							<?php }
							
								$big = 999999999;
								$argPag = array(
									'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
									'format' => '?paged=%#%',
									'current' => max( 1, get_query_var('paged') ),
									'total' => $query->max_num_pages
								);
								echo '<div class="pagination a-center">'.paginate_links($argPag).'</div>';
							?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
