<?php if(!is_user_logged_in()) { ?>
<?php get_header(); ?>
 		<section class="space-default no-pad-top featured">
 			<div class="container">
			<ul class="breadcrumb">
				<li><p>Você está em: </p></li>
				<li><a href="<?php echo home_url(); ?>">Início</a></li>
				<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Login</a></li>
			</ul>
				<h2 class="animate delay to-top title-descr tab-bottom font-poppins">Faça seu login</h2>
			</div>
			<div class="container max-width-content">
					<?php 	$errors = $GLOBALS['errors'];
							$error_url = $_GET['e'];
						if($errors || $error_url) { ?>
							<div class="alert a-center alert-danger">
								<p>E-mail ou senha inválidos. Por favor, confirme seus dados e tente novamente.</p>
							 </div>
						<?php }	?>
				<div class="column">
					<div class="sm-12-12">
						<form class="form bordered mg-bottom" method="post">
							<div class="input-group">
								<label class="label"  for="email">Seu E-mail</label>
								<input type="text" class="input" id="email" name="email">
							</div>

							<div class="input-group">
								<label class="label"  for="pass">Sua Senha</label>
								<input type="password" class="input" id="pass" name="pass">
							</div>
							<div class="flex-center-center">
							<input type="hidden" name="make-login" value="1">
							<button class="btn btn-theme btn-uppercase">Entrar</button>
							<a href="#" class="btn float-right">Esqueci minha senha</a>
							</div>
						</form>
					</div>
					<div class="sm-12-12">
						<p class="a-center">Ainda não tem conta? <a href="<?php echo home_url('/cadastro') ?>">Crie uma aqui</a></p>
					</div>
				</div>
 			</div>
 		</section>
<?php get_footer(); ?>
<?php } else {
	wp_redirect(home_url('/meus-dados'));
	exit;
} ?>