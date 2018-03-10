<?php
function opal_scripts() {

	wp_register_style('hw-css1', get_template_directory_uri() . '/css/style.css', false,'', null);
	wp_enqueue_style('hw-css1');

	wp_register_style('hw-css2', get_template_directory_uri() . '/css/normalize.css', false,'', null);
	wp_enqueue_style('hw-css2');

	wp_register_style('hw-css3', get_template_directory_uri() . '/css/font-awesome.min.css', false,'', null);
	wp_enqueue_style('hw-css3');

	wp_register_style('hw-css4', get_template_directory_uri() . '/css/animate.css', false,'', null);
	wp_enqueue_style('hw-css4');

	wp_register_style('hw-css5', get_template_directory_uri() . '/css/font-awesome-animation.min.css', false,'', null);
	wp_enqueue_style('hw-css5');

	wp_register_style('hw-css6', get_template_directory_uri() . '/css/flexslider.css', false,'', null);
	wp_enqueue_style('hw-css6');

	wp_register_style('hw-css7', get_template_directory_uri() . '/css/slick.css', false,'', null);
	wp_enqueue_style('hw-css7');



	wp_register_script('jquery1', get_bloginfo('template_url').'/js/lib/jquery.min.js', __FILE__, false, '', true);
	wp_enqueue_script( 'jquery1' );

	wp_register_script('jquery2', get_bloginfo('template_url').'/js/lib/jquery-ui.min.js', __FILE__, false, '', true);
	wp_enqueue_script( 'jquery2' );

	wp_register_script('jquery3', get_bloginfo('template_url').'/js/lib/modernizr-latest.js', __FILE__, false, '', true);
	wp_enqueue_script( 'jquery3' );

	wp_register_script('jquery4', get_bloginfo('template_url').'/js/plugins.js', __FILE__, false, '', true);
	wp_enqueue_script( 'jquery4' );

	wp_register_script('jquery5', get_bloginfo('template_url').'/js/custom.js', __FILE__, false, '', true);
	wp_enqueue_script( 'jquery5' );

	wp_register_script('jquery6', get_bloginfo('template_url').'/js/jquery.flexslider-min.js', __FILE__, false, '', true);
	wp_enqueue_script( 'jquery6' );

	wp_register_script('jquery7', get_bloginfo('template_url').'/js/slick.js', __FILE__, false, '', true);
	wp_enqueue_script( 'jquery7' );

	wp_register_script('jquery8', get_bloginfo('template_url').'/js/wow.min.js', __FILE__, false, '', true);
	wp_enqueue_script( 'jquery8' );



}
add_action( 'wp_enqueue_scripts', 'opal_scripts' );

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'opal' ),
	'footer-menu-1' => __( 'Footer Menu 1', 'opal' ),
	'footer-menu-2' => __( 'Footer Menu 2', 'opal' ),
	'footer-menu-3' => __( 'Footer Menu 3', 'opal' ),
	'footer-menu-4' => __( 'Footer Menu 4', 'opal' ),
) );


add_theme_support( 'post-thumbnails' );

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}




/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function opal_widgets_init() {
	register_sidebar( array(
			'name'          => __( 'Widget Area', 'olive_tree' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );


	register_sidebar( array(
		'name'          => __( 'Subscribe Widget', 'olive_tree' ),
		'id'            => 'subscribe-footer',
		'description'   => __( '', 'olivetree' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Recent Post', 'olive_tree' ),
		'id'            => 'recent-event',
		'description'   => __( '', 'olivetree' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'opal_widgets_init' );


// Add Options Page

add_filter('acf-options-page-adder/capability', 'my_acf_options_page_adder_cap');
function my_acf_options_page_adder_cap($cap) {
  $cap = 'edit_published_posts';
  return $cap;
}
//END of Options Page



add_theme_support( 'post-thumbnails' );

function trim_content($content, $i, $suffix = '...', $strip = false) {
	if($strip = true){
		$content = strip_tags($content, '<p><a></br><strong><i><u><span>');
	}

	if(strlen($content) > $i){
		return substr($content, 0, $i) . $suffix;
	} else {
		return $content;
	}
}


function wpbsearchform( $form ) {

    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >

    <input type="text" value="' . get_search_query() . '" name="s" id="s"  placeholder="Search keyword eg. Waves, EQ, Reverb""/>
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />

    </form>';

    return $form;
}

add_shortcode('wpbsearch', 'wpbsearchform');


add_theme_support( 'woocommerce' );


remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
add_action('woocommerce_shop_loop_item_title','updatelooptitleproduct',10);
function updatelooptitleproduct()
{
   echo '<p>'.get_the_title().'</p>';
}

add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );

function iconic_cart_count_fragments( $fragments ) {
    
    $fragments['div.header-cart-count'] = '<div class="header-cart-count">' . WC()->cart->get_cart_contents_count() . '</div>';
    
    return $fragments;
    
}