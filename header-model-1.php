<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title><?php echo bloginfo('name')?></title>
		<?php
			echo '
			<style>
				:root {
					--color_theme: '.get_option('color').';
					--color_demo_theme: '.get_option('color').';
					--color_p: #3e3e3e;
					--font_size: 18px;
					--container: 1170px;
					--color_theme_white:#c6ecff
				}
			</style>
			'
		?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<div class="woocommerce-top-bar">
		<div class="container">
			<a href="<?php echo home_url('/loja') ?>"><i class="fa fa-gift" aria-hidden="true"></i> <span>Lista de presente</span> </a>
	        <a href="<?php echo home_url('/carrinho') ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Carrinho</span> (<?php echo WC()->cart->get_cart_contents_count(); ?>)</a>
		</div>
	</div>
	<?php 
		$page_id = 61;
		$noiva = get_field('nome_noiva', $page_id);
		$noivo = get_field('nome_noivo', $page_id);
		$img = get_field('background', $page_id);
	?>
	<section class="main auto-h apresentation overlay"
		<?php if($img) { ?> style="background-image: url(<?php echo $img ?>)" <?php } ?>
	>
		<header class="default transparent">
 			<div class="container">
 				<h1 class="logo"></h1>
 				<div class="nav">
 					<button class="hamburger hamburger--collapse" type="button">
 					  <span class="hamburger-box">
 					    <span class="hamburger-inner"></span>
 					  </span>
 					</button>
					<div class="clearfix"></div>
						<?php $let = array(
							'menu' => 'primary',
							'menu_class' => 'nav-list',
							'container' => 'nav',
							'container_class' => 'nav-content'
						);
						wp_nav_menu($let);
						?>
 				</div>
 			</div>
 		</header>
		<div class="container">
			<div class="descr">
				<h2 class="font-petit a-center lines names"><?php echo $noiva ?> <span class="break font-petit">&</span> <?php echo $noivo ?></h2>
				<h3 class="font-petit date a-center">
					<?php
						$page_id = 61;
						$field = get_field('eventos', $page_id);
						foreach ($field as $event) {
							if($event['titulo'] === 'Cerimônia') {
								$data = strtotime($event['data']);
								echo strftime('%d de %B de %Y', $data);
							};
						}
					?>
				</h3>
			</div>
			<div class="down a-center">
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
		</div>
	</section>