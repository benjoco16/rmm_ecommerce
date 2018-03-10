<?php
/**
* Template Name: About
*/
get_header();
?>
	<section id="main-wrapper">
		<div class="inner-banner">
			<div class="wrapper">
				<div class="breadcrumb">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">ABOUT US</a></li>
					</ul>
				</div>
				<h3> <?php wp_title('', true,''); ?></h3>
			</div>
		</div>
		<div class="wrapper">
			<div class="section about-us">
				<div class="title-holder">
					<h3><?php the_field('who_are_we_title'); ?></h3>
					<hr>
					<?php the_field('who_are_we_description'); ?>
				</div>
				<div class="section">
					<br><br><br>
					<div class="title-holder">
						<h3><?php the_field('what_we_do_title'); ?></h3>
						<hr>
					</div>
					<div class="listing-holder">
					<?php if( have_rows('what_we_do_listing') ):?>
							 <?php while ( have_rows('what_we_do_listing') ) : the_row();?>
									<div class="do-holder">
										<div class="img-holder">
											<img src="<?php the_sub_field('we_do_image'); ?>" alt="">
										</div>
										<h3><?php the_sub_field('we_do_title'); ?></h3>
										<?php the_sub_field('we_do_description'); ?>
									</div>
							 <?php endwhile;
						else :?>
						<?php endif;?>
					</div>
				</div>
				<div class="section">
					<div class="title-holder">
						<h3><?php the_field('biography_title'); ?></h3>
						<hr>
						<p><?php the_field('biography_description'); ?> </p>
					</div>
				</div>
				<div class="section client-says">
					<div class="title-holder">
						<h3><?php the_field('client_says_title'); ?></h3>
						<hr>
					</div>
						<div class="slider-holder">
							<?php if( have_rows('client_listing') ):?>
									<ul class="slides">
									 <?php while ( have_rows('client_listing') ) : the_row();?>
										 <li>
		 									<div class="client-holder">
		 										<div class="img-holder">
		 											<img src="<?php the_sub_field('client_image'); ?>" alt="">
		 										</div>
		 										<p>
													<?php the_sub_field('client_feedback'); ?>
		 										</p>
		 										<h2><?php the_sub_field('client_name'); ?></h2>
		 									</div>
		 								</li>
									 <?php endwhile;
									else :?>
									</ul>
								<?php endif;?>
						</div>
				</div>
				<div class="section affiliates">
					<div class="title-holder">
						<h3><?php the_field('affiliates_title'); ?></h3>
						<hr>
						</div>
						<div class="slider-holder2">
							<?php if( have_rows('affiliates_listing') ):?>
									<ul class="slides">
									 <?php while ( have_rows('affiliates_listing') ) : the_row();?>
										 <li>
		 									<a href="<?php the_sub_field('affiliate_link'); ?>">
												<img src="<?php the_sub_field('affiliate_image'); ?>" alt="">
											</a>
		 								</li>
									 <?php endwhile;
									else :?>
									</ul>
								<?php endif;?>
						</div>

				</div>
			</div>
		</div>
	</section>
</section>
<script type="text/javascript">
	$(window).ready(function() {
		$('.slider-holder').flexslider({
			animation: "slide",
			directionNav:false,
			controlNav:true,
			pauseOnHover: true,
			pauseOnAction: true,
		  after: function(slider) {
		     if (!slider.playing) {
		       slider.play();
		     }
		   }
		});


	});

</script>
<?php get_footer(); ?>
