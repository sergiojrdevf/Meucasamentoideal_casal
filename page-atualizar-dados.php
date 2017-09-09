<?php get_header(); ?>

 		<section class="no-pad-top dashboard">
 			<div class="container">
			<ul class="breadcrumb">
				<li><p>Você está em: </p></li>
				<li><a href="<?php echo home_url(); ?>">Início</a></li>
				<li><a href="<?php echo home_url('/meus-dados'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Meus Dados</a></li>
				<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Atualizar Meus Dados</a></li>
			</ul>
 				<h2 class=" title-descr tab-bottom font-poppins">Atualizar meus dados</h2>
 			</div>
 		</section>
 		<section class="mg-bottom">
 			<div class="container max-width-content">
 				<form class="form bordered">
					<div class="column">
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="user_name">Seu nome</label>
								<input type="text" value="<?php echo get_field('first_name', 'user_'.get_current_user_id()); ?>" class="input inline" id="user_name" name="user_name">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="user_email">E-mail</label>
								<input type="email"  value="<?php echo get_userdata(get_current_user_id())->user_email; ?>" class="input inline" id="user_email" name="user_email">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="user_name">Telefone</label>
								<input type="text"  value="<?php echo get_user_meta( get_current_user_id(), 'billing_phone', true ); ?>" class="input inline" id="user_name" name="user_name">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="user_name">Nome da Noiva</label>
								<input type="text"  value="<?php echo get_field('nome_da_noiva', 'user_'.get_current_user_id()); ?>" class="input inline" id="user_name" name="user_name">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="user_name">Nome do Noivo</label>
								<input type="text"  value="<?php echo get_field('nome_do_noivo', 'user_'.get_current_user_id()); ?>" class="input inline" id="user_name" name="user_name">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="user_name">Data do casamento</label>
								<input type="date"  value="<?php echo get_field('data_casamento', 'user_'.get_current_user_id()); ?>" class="input inline" id="user_name" name="user_name">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-theme btn-uppercase">Atualizar</button>
 				</form>
 				<!-- <a href="#">Trocar minha senha</a> -->
 			</div>
 		</section>

<?php get_footer(); ?>