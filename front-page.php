<?php get_header('model-'.get_option('header')); ?>
	<!-- Header -->

	<!-- Casal -->
	<div class="container  couple">
	<?php get_template_part( 'template_part/noivos/noivos', get_option('casal') ); ?>

	<!-- 1 - 5 -->

	</div>

	<!-- Local -->
	<?php get_template_part( 'template_part/eventos/eventos', get_option('local') ); ?>

	<!-- 1 - 3 -->

	<!-- Contagem Regressiva -->
	<?php get_template_part( 'template_part/contagem/contagem', get_option('time') ); ?>

	<!-- 1 / 6 -->


	<!-- RSVP -->
	<?php get_template_part( 'template_part/rsvp/rsvp', get_option('rsvp') ); ?>

	<!-- 1 / 3 -->

	<!-- Galeria de Fotos -->
	<?php get_template_part( 'template_part/fotos/fotos', get_option('fotos') ); ?>

	<!-- 1 - 4 -->


	<!-- Recados -->
	<?php get_template_part( 'template_part/recados/recados', get_option('recados') ); ?>

	<!-- 1 - 3 -->
	

	<!-- Blog -->
	<?php get_template_part( 'template_part/blog/blog', get_option('blog') ); ?>

	<!-- 1 - 3 -->

<?php get_footer(); ?>