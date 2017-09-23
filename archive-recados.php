<?php get_header(); ?>
<!-- 	<section class="pad-space single-top single-banner">
	</section> -->
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
				<div class="modal">
					<form id="recado-form" method="post">
						<a href="#" class="btn-close"><i class="fa fa-times" aria-hidden="true"></i></a>
						<h2 class="font-rochester part-title color-theme">Deixe um recado para nós</h2>
						<div class="input-group">
							<label for="nome">Seu Nome</label>
							<input type="text" required id="nome" name="nome" value="">
						</div>
						<div class="input-group">
							<label for="aproximidade">Aproximidado do casal</label>
							<input type="text" required id="aproximidade" name="aproximidade" value="">
						</div>
						<div class="input-group">
							<label for="recado">Seu Recado</label>
							<textarea class="input" required id="recado" name="recado" rows="4" cols=""></textarea>
						</div>
						<input type="hidden" name="recado-submit" value="1">
						<button type="submit" class="btn btn-theme btn-uppercase">Enviar</button>
						<button type="reset" class="btn btn-theme btn-danger btn-uppercase">Apagar</button>
					</form>
				</div>
					<?php
						if($_GET['success']) {
							echo '<p class="alert alert-success a-center">';
					
								$page_id = 312;
								$date_wedding = get_field('envio_de_recado', $page_id);
								echo $date_wedding;
					
								echo '</p>';
						} else {
							echo '<p class="a-cente">Gostaria de enviar um recado para nós? <a href="#" class="btn btn-theme btn-small send-recado">Clique aqui</a></p>
							';
						}
					?>
					<h2 class="font-rochester part-title color-theme">Recados</h2>
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
							<div class="sm-12-12">
								<div class="notes-item">
									<p class="notes-p first-letter"><?php echo get_the_content(); ?></p>
									<p class="notes-author"><?php echo get_the_title(); ?> </p>
									<p class="notes-connect"><?php the_field('aproximidade')?></p>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
					<?php
						global $wp_query;

						$big = 999999999; // need an unlikely integer
						echo '<div class="pagination a-center">';
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
						) );
						echo '</div>';
					?>
				</div>
				<div class="md-4-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
