	<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:url"          content="<?php echo get_site_url(); ?>" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="RMM" />
	<meta property="og:description"   content="Recording Mastering Mixing" />
	<meta property="og:image"         content="<?php bloginfo('template_directory'); ?>/images/logo-b.png" />

	<title></title>

	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/96x96.png" sizes="96x96">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	<!--[if lt IE 9]> <script src="<?php bloginfo('template_directory'); ?>/js/css3-mediaqueries.js"></script> <![endif]-->
	<script src="<?php bloginfo('template_directory'); ?>/js/html5.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	</head>
	<body rel="home-page">
		<!-- Load Facebook SDK for JavaScript -->
  

	<section id="main-container" class="inner-page">
		<header class="clearfix">
			<div class="wrapper">
				<div class="logo-holder f-left">
					<a href="index.php"><img src="<?php bloginfo('template_directory'); ?>/images/logo-b.svg" alt="RMM Logo"></a>
				</div>
				<div id="nav-icon4">
				  <span></span>
				  <span></span>
				  <span></span>
				</div>
				<div class="nav-holder f-left">
					<?php
		      wp_nav_menu( array(
		          'theme_location'    => 'primary',
		          'depth'                 => 0,
		          'container'             => '',
		          'menu_class'        => 'f-left',
		      )); ?>
					<ul class="f-right cart-holder">
						<li><a href="<?php echo get_permalink(wc_get_page_id('cart')); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/cart-ico-b.png" alt=""> <span class="ease"><div class="header-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></div></span></a>
						
						</li>
						<li><a href="<?php echo get_permalink(15); ?>">Login</a></li>
						<li><a href="<?php echo get_permalink(17); ?>" class="btn btn-blue-b">REGISTER</a></li>
					</ul>
				</div>

			</div>
		</header>
<?php wp_head(); ?>
