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
			<div class="column">
				<div class="sm-3-12">
					<?php if ( is_active_sidebar( 'sidebar_products' ) ) : ?>
						<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar_products' ); ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="sm-9-12">
					<div class="column products">
						<?php
							$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
							$args = array(
								'posts_per_page' => 12,
								'post_type' => 'product',
								'paged' => $paged,
							);
							
							$query = new WP_Query($args);
							woocommerce_content(); 
							
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
