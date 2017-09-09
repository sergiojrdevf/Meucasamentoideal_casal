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
		$page_id = get_page_by_path( 'Pagina Inicial' )->ID;
		$noiva = get_field('nome_noiva', $page_id);
		$noivo = get_field('nome_noivo', $page_id);
		$img = get_field('background', $page_id);
	?>
	<section class="main auto-h apresentation overlay"
		<?php if($img) { ?> style="background-image: url(<?php echo $img ?>)" <?php } ?>
	>
		<header class="default transparent centered bottom">
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
				<p class="style_font top-title a-center">Bem vindo a celebração do casamento de...</p>
				<h2 class="names a-center"><?php echo $noiva ?> <i class="break fa fa-heart-o" aria-hidden="true"></i> <?php echo $noivo ?></h2>
			</div>
		</div>
	</section>