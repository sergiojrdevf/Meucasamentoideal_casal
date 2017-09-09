<?php get_header(); ?>

 		<section class="space-default no-pad-top dashboard">
 			<div class="container">
			<ul class="breadcrumb">
				<li><p>Você está em: </p></li>
				<li><a href="<?php echo home_url(); ?>">Início</a></li>
				<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Meus Dados</a></li>
			</ul>
 				<h2 class=" title-descr tab-bottom font-poppins">Painel de controle</h2>
 				<?php if(isset($_GET['create'])) { ?>
 					<p class="alert alert-success a-center mg-boottom">Seu site está sendo criado com muito carinho. Em breve você receberá todos os dados de acesso.</p>
 				<?php } ?>
				<div class="column">
				<!-- 	<div class="sm-3-12">
			 			<nav class="dashboard-menu">
			 				<ul>
			 					<li><a data-menu="1" class="change-dashboard active" href="#">Dados do meu site</a></li>
			 					<li><a data-menu="2" class="change-dashboard" href="#">Meus dados</a></li>
			 				</ul>
			 			</nav>
			 		</div> -->
			 		<div class="sm-12-12">
			 			<div data-show='1' class="dashboard-view active">
							<h2 class="font-poppins">Dados do meu site</h2>
							<!-- <div class="alert a-center alert-danger">
								<p>Atenção, faltam 5 dias para expirar seu teste.</p>
							</div> -->
							<div class="column">
								<div class="sm-12-12">
									<div class="view-info mg-bottom model-group">
										<span class="title">Meus Modelos</span>
										<div class="model-list">
											<?php
												$args = array(
													'post_type' => 'modelos',
													'posts_per_page' => -1,
													'author' => get_current_user_id()
												);
												$query = new WP_Query($args);
												$i = 1;
												if($query->have_posts()) {
													while($query->have_posts()): $query->the_post();  ?>
														<div class="model-item">
															<a href="<?php the_permalink()?>"><?php echo 'Modelo '.$i; ?></a>
															<a href="<?php echo home_url('/meus-dados?del=').get_the_ID(); ?>" class="btn btn-danger float-right"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
														</div>
													<?php $i = $i + 1; endwhile;
												} else {
													echo '<p style="margin-bottom: 10px;">Você ainda não tem nenhum modelo. Que tal começar criando um?</p>';
												}
											?>
										</div>
										<a href="<?php echo home_url('/crie-seu-site') ?>" class="btn btn-theme btn-small btn-radius">Criar modelo</a>
									</div>
								</div>
								<?php $url = get_field('url', 'user_'.get_current_user_id());
								if($url) { ?>
									<div class="sm-6-12">
										<div class="view-info">
											<span class="title">Endereço</span>
											<p><a target="_blank" href="<?php echo $url ?>"> <?php echo $url; ?></a></p>
										</div>
									</div>
								<?php }	?>

								<?php $admin = get_field('admin', 'user_'.get_current_user_id());
								if($admin) { ?>
									<div class="sm-6-12">
										<div class="view-info">
											<span class="title">Acesso ao painel do site</span>
											<p><a target="_blank" href="<?php echo $admin ?>"> <?php echo $admin; ?></a></p>
										</div>
									</div>
								<?php }	?>

								<?php $admin_user = get_field('admin_user', 'user_'.get_current_user_id());
								if($admin_user) { ?>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Login</span>
										<p><?php echo $admin_user; ?></p>
									</div>
								</div>
								<?php }	?>

								<?php $admin_pass = get_field('admin_pass', 'user_'.get_current_user_id());
								if($admin_pass) { ?>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Senha</span>
										<p><?php echo $admin_pass; ?></p>
									</div>
								</div>
								<?php }	?>

								<?php $plano = get_field('plano', 'user_'.get_current_user_id());
								if($plano) { ?>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Plano</span>
										<p><?php echo $plano ?> <a href="#" class="btn btn-gray float-right"><i class="fa fa-pencil" aria-hidden="true"></i></a></p>
										<div class="clear-fix"></div>
									</div>
								</div>
								<?php }	?>

								<?php $modelo = get_field('modelo', 'user_'.get_current_user_id());
								if($modelo) { ?>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Modelo</span>
										<p><a href="<?php echo $modelo ?>"> <?php echo $modelo; ?></a></p>
									</div>
								</div>
								<?php }	?>
							</div>
						</div>	
			 			<div data-show='1' class="dashboard-view active">
							<h2 class="font-poppins">Meus dados pessoais</h2>
							<div class="column">
								<?php $noiva = get_field('noiva', 'user_'.get_current_user_id()); ?>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Nome da noiva</span>
										<p><?php echo $noiva ? $noiva : '-'; ?></p>
									</div>
								</div>

								<?php $noivo = get_field('noivo', 'user_'.get_current_user_id()); ?>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Nome do noivo</span>
										<p><?php echo $noivo ? $noivo : '-'; ?></p>
									</div>
								</div>
								
								<?php $data_casamento = get_field('data_casamento', 'user_'.get_current_user_id()); ?>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Data do casamento</span>
										<p><?php echo $data_casamento ? $data_casamento : '-'; ?></p>
									</div>
								</div>

								<?php $email = get_userdata(get_current_user_id())->user_email; ?>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">E-mail</span>
										<p><?php echo $email ? $email : '-'; ?></p>
									</div>
								</div>

								<?php $phone = get_user_meta( get_current_user_id(), 'billing_phone', true ); ?>
								<div class="sm-6-12">
									<div class="view-info">
										<span class="title">Telefone</span>
										<p><?php echo $phone ? $phone : '-'; ?></p>
									</div>
								</div>
								
							</div>
							<a href="<?php echo home_url('/meus-dados/atualizar-dados') ?>" class="btn btn-gray float-right"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							<!-- <a href="#" class="btn btn-danger float-right"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir minha conta</a> -->
							<div class="clearfix"></div>
						</div>	 
					</div>
				</div>			
 			</div>
 		</section>

<?php get_footer(); ?>