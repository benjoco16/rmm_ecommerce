<?php
/**
* Template Name: Homepage
*/
get_header();
?>
	<section id="main-wrapper">
		<div class="banner-holder bg fullscreen section" style="background:url('<?php the_field('banner_background'); ?>')no-repeat;">
			<div class="wrapper">
				<div class="slider-holder loading">
					<?php
						if( have_rows('homepage_banner') ):?>
							<ul class="slides clearfix">
						   <?php while ( have_rows('homepage_banner') ) : the_row();?>

										<li>
										 <a class="img-holder" href="<?php the_sub_field('image_link'); ?>">
												 <img src="<?php the_sub_field('slider_image'); ?>" />
										 </a>

									 </li>
						   <?php endwhile;
						else :?>
							</ul>
						<?php endif;
						?>
				</div>
			</div>
		</div>
		<div class="news-listing">
			<div class="wrapper">
				<div class="news-holder" style="background:url('<?php the_field('in_the_studio_background'); ?>') no-repeat;">
					<div class="inner-holder ease">
						<h3 class="center-div ease"><?php echo get_cat_name(1); ?></h3>
						<a class="content ease"  href="<?php echo get_category_link(1); ?>">
							<hr>
							<p><?php echo category_description(1); ?></p>
							<p class="view">VIEW MORE</p>
						</a>
					</div>
				</div>
				<div class="news-holder" style="background:url('<?php the_field('product_news_background'); ?>') no-repeat;">
					<div class="inner-holder ease">
						<h3 class="center-div ease"><?php echo get_cat_name(17); ?></h3>
						<a class="content ease" href="<?php echo get_category_link(17); ?>">
							<hr>
							<p><?php echo category_description(17); ?></p>
							<p href="#" class="view">VIEW MORE</p>
						</a>
					</div>
				</div>
				<div class="news-holder" style="background:url('<?php the_field('tips_tricks_background'); ?>') no-repeat;">
					<div class="inner-holder ease">
						<h3 class="center-div ease"><?php echo get_cat_name(18); ?></h3>
						<a class="content ease" href="<?php echo get_category_link(18); ?>">
							<hr>
							<p><?php echo category_description(18); ?></p>
							<p href="#" class="view">VIEW MORE</p>
						</a>
					</div>
				</div>
			</div>

		</div>
		<div class="best-sellers section">
			<div class="title-holder">
				<h3>Best Sellers</h3>
				<hr>
			</div>
			<div class="wrapper">
				<div class="best-seller-listing">
					<div class="best-holder wow fadeIn">
						<div class="img-holder">

							<div class="sash-handle">
								<img src="<?php bloginfo('template_directory'); ?>/images/new-sash.png" alt="">
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/images/product1.jpg" alt="">
							<div class="overlay ease">
								<a href="#" class="btn btn-white-b">SEE DETAILS</a>
								<a href="#" class="btn btn-white-b">ADD TO CART</a>
							</div>
						</div>
						<div class="text-content">
							<h3>NOMAD FACTORY</h3>
							<p>Analog Studio Rack</p>
							<div class="rating">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<h4>$99.00</h4>
						</div>
					</div>
					<div class="best-holder wow fadeIn">
						<div class="img-holder">
							<div class="sash-handle">
								<img src="<?php bloginfo('template_directory'); ?>/images/sale-sash.png" alt="">
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/images/product1.jpg" alt="">
							<div class="overlay ease">
								<a href="#" class="btn btn-white-b">SEE DETAILS</a>
								<a href="#" class="btn btn-white-b">ADD TO CART</a>
							</div>
						</div>
						<div class="text-content">
							<h3>PLUG AND MIX</h3>
							<p>BassPeg</p>
							<div class="rating">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<h4> <span>$199.00</span>$99.00</h4>
						</div>
					</div>
					<div class="best-holder wow fadeIn">
						<div class="img-holder">
							<div class="sash-handle">
								<img src="<?php bloginfo('template_directory'); ?>/images/bundle-sash.png" alt="">
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/images/product1.jpg" alt="">
							<div class="overlay ease">
								<a href="#" class="btn btn-white-b">SEE DETAILS</a>
								<a href="#" class="btn btn-white-b">ADD TO CART</a>
							</div>
						</div>
						<div class="text-content">
							<h3>FLUX::</h3>
							<p>Elixir V3</p>
							<div class="rating">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<h4>$99.00</h4>
						</div>
					</div>
					<div class="best-holder wow fadeIn">
						<div class="img-holder">
							<div class="sash-handle">
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/images/product1.jpg" alt="">
							<div class="overlay ease">
								<a href="#" class="btn btn-white-b">SEE DETAILS</a>
								<a href="#" class="btn btn-white-b">ADD TO CART</a>
							</div>
						</div>
						<div class="text-content">
							<h3>NOMAD FACTORY</h3>
							<p>Analog Studio Rack</p>
							<div class="rating">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<h4>$99.00</h4>
						</div>
					</div>
					<div class="best-holder wow fadeIn">
						<div class="img-holder">
							<div class="sash-handle">
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/images/product1.jpg" alt="">
							<div class="overlay ease">
								<a href="#" class="btn btn-white-b">SEE DETAILS</a>
								<a href="#" class="btn btn-white-b">ADD TO CART</a>
							</div>
						</div>
						<div class="text-content">
							<h3>NOMAD FACTORY</h3>
							<p>Analog Studio Rack</p>
							<div class="rating">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<h4>$99.00</h4>
						</div>
					</div>
					<div class="best-holder wow fadeIn">
						<div class="img-holder">
							<div class="sash-handle">
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/images/product1.jpg" alt="">
							<div class="overlay ease">
								<a href="#" class="btn btn-white-b">SEE DETAILS</a>
								<a href="#" class="btn btn-white-b">ADD TO CART</a>
							</div>
						</div>
						<div class="text-content">
							<h3>PLUG AND MIX</h3>
							<p>BassPeg</p>
							<div class="rating">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<h4> <span>$199.00</span>$99.00</h4>
						</div>
					</div>
					<div class="best-holder wow fadeIn">
						<div class="img-holder">
							<div class="sash-handle">
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/images/product1.jpg" alt="">
							<div class="overlay ease">
								<a href="#" class="btn btn-white-b">SEE DETAILS</a>
								<a href="#" class="btn btn-white-b">ADD TO CART</a>
							</div>
						</div>
						<div class="text-content">
							<h3>FLUX::</h3>
							<p>Elixir V3</p>
							<div class="rating">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<h4>$99.00</h4>
						</div>
					</div>
					<div class="best-holder wow fadeIn">
						<div class="img-holder">
							<div class="sash-handle">
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/images/product1.jpg" alt="">
							<div class="overlay ease">
								<a href="#" class="btn btn-white-b">SEE DETAILS</a>
								<a href="#" class="btn btn-white-b">ADD TO CART</a>
							</div>
						</div>
						<div class="text-content">
							<h3>NOMAD FACTORY</h3>
							<p>Analog Studio Rack</p>
							<div class="rating">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<h4>$99.00</h4>
						</div>
					</div>
					<div class="btn-holder">
						<a href="#" class="btn btn-blue-b">SHOP NOW!</a>
					</div>
				</div>
			</div>

		</div>
		<div class="newsletter section">
			<h3><?php the_field('subscribe_title');?></h3>
			<p><?php the_field('subscribe_subtitle');?></p>
			<div class="form-holder">
				<?php
					if(is_active_sidebar('subscribe-footer')){
						dynamic_sidebar('subscribe-footer');
					}
					?>
			</div>
		</div>
	</section>
</section>
<?php get_footer(); ?>
