<?php
/**
* Template Name: Contact Us
*/
get_header();
?>
	<section id="main-wrapper">
		<div class="inner-banner">
			<div class="wrapper">
				<div class="breadcrumb">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#"><?php the_title(); ?></a></li>
					</ul>
				</div>
				<h3><?php the_title(); ?></h3>
			</div>
		</div>
			<div class="section">
				<div class="wrapper">
					<div class="contact-holder">
						<div class="info clearfix">
							<div class="half-width f-left">
								<img src="<?php bloginfo('template_directory'); ?>/images/contact-ico1.png" alt="">
								<?php the_field('address'); ?>
							</div>
							<div class="half-width f-left">
								<img src="<?php bloginfo('template_directory'); ?>/images/contact-ico2.png" alt="">
								<p><?php the_field('contact_number'); ?> </p>
							</div>
						</div>
						<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>

	</section>
</section>
<?php get_footer(); ?>
