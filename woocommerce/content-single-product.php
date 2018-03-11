<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }

	$productID = $product->get_id();

	$image = wp_get_attachment_image_src( get_post_thumbnail_id($productID), 'full' );

	$postmeta = get_post_meta($productID,'_yith_wcbm_product_meta');
	$badgeID = $postmeta[0]['id_badge'];
	$badgePost = get_post($badgeID);
	$badgeMeta = get_post_meta($badgeID,'_badge_meta');

	$brandTerms = get_the_terms($productID , 'yith_product_brand' );

	$regularPrice = number_format((float)$product->regular_price, 2, '.', '');
	$salePrice 	  = !empty($product->sale_price) ?number_format((float)$product->sale_price, 2, '.', '') : number_format((float)$product->regular_price, 2, '.', '');

?>
<section id="main-wrapper">
	<div class="wrapper">
		<div class="section product-detail-page">
				<div class="clearfix">
					<div class="half-width f-left gallery-holder">
						<div class="img-holder">
							<img src="<?php echo $image[0]?>" alt="">
						</div>
						<div class="thumbnail-holder">
							<div class="thumb">
								<a><img src="images/product-thumb.jpg" alt=""></a>
							</div>
							<div class="thumb">
								<a><img src="images/product-thumb.jpg" alt=""></a>
							</div>
							<div class="thumb">
								<a><img src="images/product-thumb.jpg" alt=""></a>
							</div>
							<div class="thumb">
								<a><img src="images/product-thumb.jpg" alt=""></a>
							</div>
						</div>
					</div>
					<div class="half-width f-right details">
						<div class="tags">
							<p class="<?php echo $badgePost->post_name; ?> tag"><?php echo $badgeMeta[0]['text']; ?></p>			
						</div>
						<h1><?php echo $brandTerms[0]->name; ?></h1>
						<h2><?php echo get_the_title($productID); ?></h2>
						<div class='reviews-ratings'><span class="review-label">Product Reviews</span> <?php echo do_shortcode('[yasr_overall_rating size="small"]'); ?></div>
						<h3>MSRP: <span class="before-price">$<?php echo $regularPrice; ?></span></h3>
						<h3>Price: <span>$<?php echo $salePrice ; ?></span></h3>
						<div class="holder">
							<i class="fa fa-apple" aria-hidden="true"></i>
							<i class="fa fa-windows" aria-hidden="true"></i>
							<div class="tooltip col"><img src="images/aax.png" alt="" title="AAX">
							</div>
							<div class="tooltip col"><img src="images/au.png" alt="" title="Audio Unit">
							</div>
							<div class="tooltip col"><img src="images/vst-red.png" alt="" title="VST">
							</div>
							<div class="tooltip col"><img src="images/vst.png" alt="" title="VST">
							</div>
						</div>
						<div class="qty-holder form-holder">
							<p>QTY:</p>	
							<div class="col quantity-holder">
	    						<div class="qty">
	    							<?php do_action( 'woocommerce_single_product_summary' ); ?>
	    						</div>
    						</div>			
						</div>
					</div>
				</div>
				<?php do_action( 'woocommerce_after_single_product_summary' ); ?>
			
		</div>
				
	</div>
</section>

<meta itemprop="url" content="<?php the_permalink(); ?>" />

<?php do_action( 'woocommerce_after_single_product' ); ?>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.quantity-holder .qty input.input-text').attr("type","text");
	});
</script>