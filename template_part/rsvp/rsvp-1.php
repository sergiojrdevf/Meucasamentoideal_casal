<a name="rsvp_section"></a>
	<div class="rsvp rsvp-default space-default ">
		<div class="container ">
			<h2 class="font-rochester part-title color-theme a-center color-dark">RSVP</h2>
			<?php if($_GET['failed']) { ?>
				<div class="alert alert-danger a-center" style="    max-width: 630px;
    margin: 0 auto 15px auto;">
				 	<p>Nome não encontrado. Digite seu primeiro nome e tente novamente.</p>
				</div>
			<?php } ?>
			<?php if(($_GET['success'] == 2)) { ?>
			<div class="alert alert-success a-center" style="    max-width: 630px;
    margin: 0 auto 15px auto;">
			 	<p>Parece que você já confirmou sua presença.</p>
			</div>
			<?php } ?>

			<?php if(($_GET['success'] == 1)) { ?>
			<div class="alert alert-success a-center" style="    max-width: 630px;
    margin: 0 auto 15px auto;">
			 	<p>
					<?php
						$page_id = 312;
						$date_wedding = get_field('rsvp', $page_id);
						echo $date_wedding;
					?>
				</p>

			</div>
			<?php } ?>
			<form class="form max-width" method="post">
				<div class="input-group">
					<label for="nome" class="label">Digite seu primeiro nome</label>
					<input type="text" placeholder="Digite seu primeiro nome" class="input" id="rsvp_nome" name="rsvp_nome">
				</div>
				<div class="input-group">
					<label for="convidados" class="label">Quantos convidados irá levar?</label>
					<select class="input" id="convidados" name="convidados">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>
				<div class="a-center">
					<input type="hidden" value="1" name="rsvp_submit" id="rsvp_submit">
					<button class="btn btn-theme btn-pink btn-uppercase" type="submit">Confirmar Presença</button>
				</div>
			</form>
		</div>
	</div>