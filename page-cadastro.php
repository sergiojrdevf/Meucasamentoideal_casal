<?php if(!is_user_logged_in()) { ?>
<?php get_header(); ?>
	<section class="space-default no-pad-top featured">
		<div class="container">
			<ul class="breadcrumb">
				<li><p>Você está em: </p></li>
				<li><a href="<?php echo home_url(); ?>">Início</a></li>
				<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Cadastro</a></li>
			</ul>
			<div class="column">
				<div class="md-12-12">
				<h2 class="animate delay to-top title-descr tab-bottom font-poppins">Faça seu cadastro</h2>
			</div>
		</div>
		<div class="container max-width-content">

					<?php $errors = $GLOBALS['errors'];
						if($errors) { ?>
							<div class="alert a-center alert-danger">
								<?php
									foreach ($errors as $error) {
										echo '<p>'.$error.'</p>';
									}
								 ?>
							 </div>
						<?php }	?>
					<?php if($_GET['success']) { ?>
						<div class="alert a-center alert-success">
							Usuário criado com sucesso.
						</div>
					<?php } ?>

				<form class="form mg-bottom form bordered" method="post" id="create-login">
					<div class="column">
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="user_name">Seu nome e sobrenome*</label>
								<input type="text" class="input inline" id="user_name" name="user_name">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="user_email">E-mail*</label>
								<input type="email" class="input inline" id="user_email" name="user_email">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="user_pass">Sua senha*</label>
								<input type="password" class="input inline" id="user_pass" name="user_pass">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="user_repass">Digite novamente sua senha*</label>
								<input type="password" class="input inline" id="user_repass" name="user_repass">
							</div>
						</div>
					</div>
					<input type="hidden" name="createAccount" value="1">
					<button type="submit" class="btn btn-theme btn-uppercase">Criar conta</button>
				</form>

				<p class="a-center">Já tem conta? <a href="<?php echo home_url('/login') ?>">Faça login aqui</a></p>
			</div>
		</div>
		</div>
	</section>
<?php get_footer(); ?>
<?php } else {
	wp_redirect(home_url());
	exit;
} ?>