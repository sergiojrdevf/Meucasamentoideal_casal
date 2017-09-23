<?php 

// update_option('siteurl','http://localhost/default/');
// update_option('home','http://localhost/default/');
// $page_id = 61;
// $field = get_field('eventos', $page_id);
// foreach ($field as $event) {
// 	if($event['titulo'] === 'Cerimônia') {
// 		$data = strtotime($event['data']);
// 		echo strftime('%d de %B de %Y', $data);
// 	};
// }


setlocale(LC_TIME, "pt_BR", "ptb");

add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		// $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
	}
}

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'category-thumb', 300 ); // 300 pixels wide (and unlimited height)
	add_image_size( 'small', 420 ); // (cropped)
	add_image_size( 'lightbox', 820 ); // (cropped)
}

// Add Thumbnails
add_theme_support('post-thumbnails');

add_action('wp_head', 'registerJquery');

function registerJquery() {
	$jquery = array(
		'depends' => array(),
		'version' => '1.0',
		'in_footer' => true,
	);
if(	!file_exists(dirname( __FILE__ ).'/plugins/jquery.js')) {
		$jquery['dir'] = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js";
		$jquery['version'] = '3.1.0';
	} else {
		$jquery['dir'] = get_template_directory_uri().'/js/script.js';
	}

	echo wp_enqueue_script('jQuery', $jquery['dir'], $jquery['depends'],  $jquery['version'],$jquery['in_footer']);		
}

// Add scripts
add_action('wp_enqueue_scripts', 'loadScripts');
function loadScripts() {
$scripts = [
	'Script' => [
		'dir' =>  get_template_directory_uri().'/dist/js/script-min.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'owlCarousel' => [
		'dir' =>  get_template_directory_uri().'/plugins/owlcarousel/owl.carousel.min.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'GoogleMaps' => [
		'dir' =>  'https://maps.googleapis.com/maps/api/js?key=AIzaSyCKpUca5aQjo6Jx4hH0zji7GTKjU5plz2w',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'lightboxjs' => [
		'dir' =>  'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js',
		'depends' => array('jQuery'),
		'version' => '3.0.47',
		'in_footer' => true,
 	],
];

$styles = [
	'Style' => [
		'dir' => get_stylesheet_uri(),
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Styles' => [
		'dir' => get_template_directory_uri().'/dist/css/style.css',
		'depends' => '',
		'version' => '2',
		'in_footer' => false,
	],
	'hamburger' => [
		'dir' => get_template_directory_uri().'/plugins/hamburger.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Font-Awesome' => [
		'dir' => get_template_directory_uri().'/plugins/font-awesome/css/font-awesome.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Google-Fonts' => [
		'dir' => 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500|Pacifico|Dancing+Script:400,700|Rochester|Petit+Formal+Script',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'OwlCarouselCss' => [
		'dir' => get_template_directory_uri().'/plugins/owlcarousel/assets/owl.carousel.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'OwlCarouselTheme' => [
		'dir' => get_template_directory_uri().'/plugins/owlcarousel/assets/owl.theme.default.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'ligthboxcss' => [
		'dir' => 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css',
		'depends' => '',
		'version' => '3.0.47',
		'in_footer' => false,
	],
];

	// if(!is_home()) {
	// 	unset($scripts['GoogleMaps']);
	// 	unset($scripts['owlCarousel']);
	// 	unset($styles['OwlCarouselCss']);
	// 	unset($styles['OwlCarouselTheme']);
	// } 

	if($scripts) {	
		foreach($scripts as $key => $script) {
			echo wp_enqueue_script($key, $script['dir'], $script['depends'],  $script['version'],$script['in_footer']);
		}
	}

	if($styles) {
		foreach($styles as $key => $style) {
			echo wp_enqueue_style($key, $style['dir'], $style['depends'],  $style['version'],$style['in_footer']);
		}
	}
};

add_action('wp_head', 'configHead');
function configHead() {
	$configs = array(
		'charset' => "<meta charset='UTF-8'>",
		'viewport' => "<meta name='viewport' content='width=device-width'>",
	);

	foreach($configs as $config) {
		echo $config . "\n";
	}
}

add_filter( 'wc_add_to_cart_message_html', '__return_null' );

// Limite post
function hwl_home_pagesize( $query ) {
    if ( is_admin() || ! $query->is_main_query() )
        return;

    if ( is_post_type_archive( 'recados' ) ) {
        // Display 50 posts for a custom post type called 'movie'
        $query->set( 'posts_per_page', 10 );
        return;
    }
}
add_action( 'pre_get_posts', 'hwl_home_pagesize', 1 );

// Add Menu
add_action( 'after_setup_theme', 'registerMenu' );
function registerMenu() {
  register_nav_menu( 'primary', __( 'Menu principal', 'theme-slug' ) );
};


add_action('admin_menu', 'customSite');

function customSite() {

	add_menu_page(
		'Custom Site', 
		'Personalizar Site',
		'read', 
		__FILE__, 
		'callBackAddMenu',
		'',
		9
	);
	
	add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}


function register_my_cool_plugin_settings() {
	register_setting( 'add_custom_options', 'header' );
	register_setting( 'add_custom_options', 'casal' );
	register_setting( 'add_custom_options', 'local' );
	register_setting( 'add_custom_options', 'time' );
	register_setting( 'add_custom_options', 'rsvp' );
	register_setting( 'add_custom_options', 'fotos' );
	register_setting( 'add_custom_options', 'recados' );
	register_setting( 'add_custom_options', 'blog' );
	register_setting( 'add_custom_options', 'color' );
}


add_action('admin_init', 'redirect_user_with_role_noivos');
function redirect_user_with_role_noivos() {
	$userRole = wp_get_current_user()->roles[0];
	global $pagenow;
	$redirect_pages = ['tools.php', 'options-general.php', 'edit.php?post_type=acf', 'duplicator', 'woocommerce-checkout-manager'];

	if
	($userRole === 'noivos'
		AND (in_array($pagenow, $redirect_pages))
			OR 
				(
					$_GET['post_type'] === 'acf' OR 
					$_GET['page'] === 'duplicator-tools' OR
					$_GET['page'] === 'woocommerce-checkout-manager'
				)
	) {
		wp_redirect(home_url('wp-admin/index.php'));
		exit;
	}
}

add_action('admin_init', 'hide_menu_for_noivos');
function hide_menu_for_noivos() {
	$userRole = wp_get_current_user()->roles[0];
	if($userRole === 'noivos') {
		$removeMenu = ['tools.php', 'options-general.php', 'edit.php?post_type=acf', 'duplicator', 'woocommerce-checkout-manager'];
		foreach($removeMenu as $menu) {
			remove_menu_page($menu);
		}
	}
}

function callBackAddMenu() {
?>
<div class="wrap">
<h1>Customizar site</h1>
<form method="post" action="options.php">
    <?php settings_fields( 'add_custom_options' ); ?>
	<?php do_settings_sections( 'add_custom_options' ); ?>
    <table class="form-table">
		<tr valign="top">
			<th scope="row">Cor do site</th>
        	<td>
				<input type="color" value="<?php echo get_option('color'); ?>" name="color" value="1" />
				<div>
					<p>Cor atual:</p>
					<span <?php echo 'style="width: 70px; height: 30px; background-color: '.get_option('color').'; display: inline-block;"'?>></span>
				</div>
			</td>
		</tr>

        <tr valign="top">
			<th scope="row">Header</th>
        	<td>
				<label class="label-opts">
					<input type="radio" name="header" <?php if(get_option('header') === '1') { echo 'checked'; } ?> value="1" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/header1.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="header" <?php if(get_option('header') === '2') { echo 'checked'; } ?> value="2" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/header2.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="header" <?php if(get_option('header') === '3') { echo 'checked'; } ?> value="3" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/header3.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="header" <?php if(get_option('header') === '4') { echo 'checked'; } ?> value="4" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/header4.jpg">
				</label>
			</td>
		</tr>
        <tr valign="top">
        	<th scope="row">Casal</th>
        	<td>

				<label class="label-opts">
					<input type="radio" name="casal" <?php if(get_option('casal') === '1') { echo 'checked'; } ?> value="1" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos1.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="casal" <?php if(get_option('casal') === '2') { echo 'checked'; } ?> value="2" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos2.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="casal" <?php if(get_option('casal') === '3') { echo 'checked'; } ?> value="3" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos3.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="casal" <?php if(get_option('casal') === '4') { echo 'checked'; } ?> value="4" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos4.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="casal" <?php if(get_option('casal') === '5') { echo 'checked'; } ?> value="5" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos5.jpg">
				</label>	
			</td>
		</tr>
        <tr valign="top">
        	<th scope="row">Local</th>
        	<td>

				<label class="label-opts">
					<input type="radio" name="local" <?php if(get_option('local') === '1') { echo 'checked'; } ?> value="1" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/eventos1.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="local" <?php if(get_option('local') === '2') { echo 'checked'; } ?> value="2" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/eventos2.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="local" <?php if(get_option('local') === '3') { echo 'checked'; } ?> value="3" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/eventos3.jpg">
				</label>
			</td>
		</tr>
        <tr valign="top">
			<th scope="row">Contagem Regressiva</th>
        	<td>

				<label class="label-opts">
					<input type="radio" name="time" <?php if(get_option('time') === '1') { echo 'checked'; } ?> value="1" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem1.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="time" <?php if(get_option('time') === '2') { echo 'checked'; } ?> value="2" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem2.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="time" <?php if(get_option('time') === '3') { echo 'checked'; } ?> value="3" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem3.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="time" <?php if(get_option('time') === '4') { echo 'checked'; } ?> value="4" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem4.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="time" <?php if(get_option('time') === '5') { echo 'checked'; } ?> value="5" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem5.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="time" <?php if(get_option('time') === '6') { echo 'checked'; } ?> value="6" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem6.jpg">
				</label>
	
			</td>
		</tr>
        <tr valign="top">
			<th scope="row">RSVP</th>
        	<td>
				<label class="label-opts">
					<input type="radio" name="rsvp" <?php if(get_option('rsvp') === '1') { echo 'checked'; } ?> value="1" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/rsvp1.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="rsvp" <?php if(get_option('rsvp') === '2') { echo 'checked'; } ?> value="2" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/rsvp2.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="rsvp" <?php if(get_option('rsvp') === '3') { echo 'checked'; } ?> value="3" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/rsvp3.jpg">
				</label>
			</td>
		</tr>
        <tr valign="top">
        	<th scope="row">Fotos</th>
        	<td>
				<label class="label-opts">
					<input type="radio" name="fotos" <?php if(get_option('fotos') === '1') { echo 'checked'; } ?> value="1" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/fotos1.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="fotos" <?php if(get_option('fotos') === '2') { echo 'checked'; } ?> value="2" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/fotos2.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="fotos" <?php if(get_option('fotos') === '3') { echo 'checked'; } ?> value="3" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/fotos3.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="fotos" <?php if(get_option('fotos') === '4') { echo 'checked'; } ?> value="4" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/fotos4.jpg">
				</label>	
			</td>
		</tr>
        <tr valign="top">
        	<th scope="row">Recados</th>
        	<td>
				<label class="label-opts">
					<input type="radio" name="recados" <?php if(get_option('recados') === '1') { echo 'checked'; } ?> value="1" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/recados1.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="recados" <?php if(get_option('recados') === '2') { echo 'checked'; } ?> value="2" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/recados2.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="recados" <?php if(get_option('recados') === '3') { echo 'checked'; } ?> value="3" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/recados3.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="recados" <?php if(get_option('recados') === '4') { echo 'checked'; } ?> value="4" />	
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/recados4.jpg">
				</label>
			</td>
		</tr>
        <tr valign="top">
        	<th scope="row">Blog</th>
        	<td>
				<label class="label-opts">
					<input type="radio" name="blog" <?php if(get_option('blog') === '1') { echo 'checked'; } ?> value="1" />
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/blog1.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="blog" <?php if(get_option('blog') === '2') { echo 'checked'; } ?> value="2" />
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/blog2.jpg">
				</label>

				<label class="label-opts">
					<input type="radio" name="blog" <?php if(get_option('blog') === '3') { echo 'checked'; } ?> value="3" />
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/mobile/blog3.jpg">
				</label>
			</td>
        </tr>
    </table>
    <?php submit_button(); ?>
</form>
</div>
<?php }

function createPostType($check = false, $args) {
	if($check) {
		return wp_insert_post( $args );
	}
}

function clearString($string) {
	$search = ['á', 'é', 'í', 'ó', 'ú', 'ã', 'õ', 'â', 'ê', 'î', 'ô', 'û'];
	$replace = ['a', 'e', 'i', 'o', 'u', 'a', 'o', 'a', 'e', 'i', 'o', 'u'];
	return str_replace($search, $replace, mb_strtolower($string));
}


// RSVP
add_action('init', 'rsvpConfirm');
function rsvpConfirm() {
	if(isset($_REQUEST['rsvp_submit'])) {
	
	// $rsvpId = get_page_by_path( 'RSVP' )->ID;
	// $rsvpList = get_field('convidados', $rsvpId);
	$name = $_REQUEST['rsvp_nome'];
	$number = $_REQUEST['convidados'];
	$confirmed = false;
	$confirm = false;
	$lista = get_field('convidados', '356');

	$query = new WP_Query(array(
		'posts_per_page' => -1,
		'post_type' => 'confirmados',
		'post_status' => 'any'
	));

	while($query->have_posts()) { $query->the_post();
		if(clearString($name) == clearString(get_the_title())) {
			$confirmed = true;
		}
	};

	if($confirmed === true) {
		wp_redirect(home_url('?success=2#rsvp_section'));
		exit;
	} else {
		foreach($lista as $list) {
			if(clearString($name) == clearString($list['nome'])) {
				$confirm = true;
				$args = array(
					'post_title' => $name,
					'post_type' => 'confirmados',
				);

				$arr = array(
					'nome' => $name,
					'convidados' => $number, 
				);

				$id = createPostType(true, $args);
				update_field('convidados', $number, $id);
				update_post_meta($id, 'convidados_confirmados', implode(';', $arr));
			}
		}
		if($confirm == true) {
			wp_redirect(home_url('?success=1#rsvp_section'));
			exit;
		} else {
			wp_redirect(home_url('?failed=1#rsvp_section'));
			exit;
			}	
		}
	}
}

// Recado
add_action('init', 'SendRecado');
function SendRecado() {
	if(isset($_REQUEST['recado-submit'])) {
		$nome = $_REQUEST['nome'];
		$aproximidade = $_REQUEST['aproximidade'];
		$recado = $_REQUEST['recado'];
		
		$args = array(
			'post_title' => $nome,
			'post_content' => $recado,
			'post_type' => 'recados',
		);

		$postID = wp_insert_post( $args );
		update_field('aproximidade', $aproximidade, $postID);
		wp_redirect(home_url('/recados?success=1'));
		exit;	
	}
}

add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	if( !isset( $post_id ) ) return;
	$homepgname = get_the_title($post_id);
	if($homepgname == 'Sobre o Casal' || $homepgname == 'Eventos' || $homepgname == 'Página Inicial' || $homepgname == 'Avisos'){ 
		remove_post_type_support('page', 'editor');
	}
}

add_action('admin_menu', 'wpdocs_register_my_custom_submenu_page');

function wpdocs_register_my_custom_submenu_page() {
   add_submenu_page(
	   'edit.php?post_type=rsvp',
	   'Convidados Confirmados',
	   'Convidados Confirmados',
	   'read',
	   'my-custom-submenu-page',
	   'wpdocs_my_custom_submenu_page_callback' );
}

function wpdocs_my_custom_submenu_page_callback() {
   	echo '<div class="wrap"><div id="icon-tools" class="icon32"></div>';
   	global $wpdb;
   	$results = $wpdb->get_results( 'SELECT * FROM cs_postmeta WHERE meta_key = "convidados_confirmados"', OBJECT );
	$all = [];
   foreach ($results as $result) {
		$all[] = $result->meta_value;
   } ?>
   <table class="wp-list-table widefat fixed striped posts">
	   <thead>
   			<tr>
				<td><strong>Nome</strong></td>
				<td><strong>Número de acompanhantes<strong></td>   
			</tr>
	   </thead>
	   <tbody>
		<?php
		$index = 1;
		$count = 0;
		foreach ($all as $item) {			
			echo '<tr>';
			foreach(explode(';', $item) as $single) {
				if(strlen($single) === 1) {
					$count = $count + intval($single) + 1;
				};
				echo '<td>'.$single.'</td>';
			}
			echo '</tr>';
			$index++;
		} ?>
	   </tbody>
	   <tfoot>
   			<tr>
			   	<td><strong>Total:</strong></td>
				<td><?php echo $count.' pessoas'; ?></td>   
			</tr>
	   </tfoot>
   </table>

   <?php echo '</div>';
} ?>
<?php

// Post Type
require dirname( __FILE__ ).'/includes/post_type.php';

// SEO
require dirname( __FILE__ ).'/includes/seo_function.php';

// Length dos posts
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyCKpUca5aQjo6Jx4hH0zji7GTKjU5plz2w';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Remove tags support from posts
function myprefix_unregister_tags() {
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'myprefix_unregister_tags');

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);

	}
}

// var_dump(get_user_meta( get_current_user_id(), 'upload_count', true ));
// exit;
// Limit upload
// add_filter( 'wp_handle_upload', 'wpse47580_update_upload_stats' );
// function wpse47580_update_upload_stats( $args ) {
//     $size = filesize( $args['file'] );

//     $user_id = get_current_user_id();

//     $upload_count = get_user_meta( $user_id, 'upload_count', true );
//     $upload_bytes = get_user_meta( $user_id, 'upload_bytes', true );

//     update_user_meta( $user_id, 'upload_count', $upload_count + 1 );
//     update_user_meta( $user_id, 'upload_bytes', $upload_bytes + $size );
// }

// # This function runs before the file is uploaded.
// add_filter( 'wp_handle_upload_prefilter', 'wpse47580_check_upload_limits' );
// function wpse47580_check_upload_limits( $file ) {
//     $user_id = get_current_user_id();

//     $upload_count = get_user_meta( $user_id, 'upload_count', true );
//     $upload_bytes = get_user_meta( $user_id, 'upload_bytes', true );

//     $filesize = $file['size']; // bytes

//     $upload_bytes_limit_reached = ( ( $filesize + $upload_bytes ) > ( 1024 * 1024 * 10 ) );
// 	echo '<script>console.log('.$upload_bytes_limit_reached.')</script>';
//     $upload_count_limit_reached = ( $upload_count + 1 ) > 10;

//     if ( $upload_count_limit_reached || $upload_bytes_limit_reached )
//         $file['error'] = 'Upload limit has been reached for this account!';

//     return $file;
// }


// WooCommerce
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


// Sidebar

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar Produtos',
		'id'            => 'sidebar_products',
		'before_widget' => '<div class="widget-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


add_action( 'pre_get_posts', function ( $query ) 
{
    if (    !is_admin() 
         && $query->is_main_query() 
         && $query->is_tax() 
    ) {
        $query->set( 'posts_per_page', '9'   );
    }
});


// Esconde página
add_filter( 'parse_query', 'exclude_pages_from_admin' );
function exclude_pages_from_admin($query) {
	global $pagenow,$post_type;
	$current_user = wp_get_current_user();
	$roles = $current_user->roles;
	if($roles[0] == 'noivos'){
		// $args=array('68', '69', '67', '70', '339', '341', '91');
		$args=array('312', '61');
	}
    if (is_admin() && $pagenow=='edit.php' && $post_type =='page') {
        $query->query_vars['post__in'] = $args;
    }
}


// Remove comentários

// Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
// Removes from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

// Remove conteudo de paginas woocommerce
add_action( 'init', function() {
	remove_post_type_support( 'product', 'editor');
	remove_post_type_support( 'product', 'editor');
}, 99);

function remove_metaboxes() {
	remove_meta_box( 'postcustom' , 'product' , 'normal' );
	remove_meta_box( 'postexcerpt' , 'product' , 'normal' );
	remove_meta_box( 'commentsdiv' , 'product' , 'normal' );
	remove_meta_box( 'tagsdiv-product_tag' , 'product' , 'normal' );
	remove_meta_box( 'woocommerce-product-images' , 'product' , 'normal' );
	remove_meta_box( 'tagsdiv-product_tag','product','normal' ); // Tags Metabox
}
add_action( 'add_meta_boxes' , 'remove_metaboxes', 50 );

function ryanbenhase_unregister_tags() {
    unregister_taxonomy_for_object_type( 'category', 'post' );
}
add_action( 'init', 'ryanbenhase_unregister_tags' );

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
	$current_user = wp_get_current_user();
	$roles = $current_user->roles;
	if($roles[0] == 'noivos'){
	?>
	<style>
			#woocommerce-product-images,
			#tagsdiv-product_tag, 
			#advanced-sortables,
			.post-type-shop_order .page-title-action,
			.post-type-rsvp .page-title-action,
			.post-type-page .page-title-action,
			#pageparentdiv,
			.post-type-page #postimagediv,
			#post-body-content .inside,
			.user-language-wrap,
			#dashboard_primary,
			#menu-posts-rsvp .wp-first-item + li,
			#menu-pages .wp-first-item + li { 
				display: none;
			}

			#post-body-content .acf_postbox.default.postbox .inside {
				display: block;
			}

			.label-opts {
				padding: 20px;
				width: 30%;
				display: inline-block;
				margin-bottom: 20px;
				text-align: center;
			}

			.label-opts img {
				width: 100%;
				height: 100%;
				padding: 10px;
				margin: 10px;
			}
			
			.label-opts input[type=radio]:checked + img {
				border: 2px solid #c0c0c0;
			}
	</style>
<?php } }
?>