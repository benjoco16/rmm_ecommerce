<?php
/**
* Template Name: Terms & Conditions
*/
get_header();
?>
	<section id="main-wrapper">
		<div class="inner-banner">
			<div class="wrapper">
				<div class="breadcrumb">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">REFUND POLICY</a></li>
					</ul>
				</div>
				<h3><?php wp_title('', true,''); ?></h3>
			</div>
		</div>
			<div class="section terms">
				<div class="wrapper">
					<?php if ( have_posts() ) : ?>
	        <?php  while ( have_posts() ) : the_post(); ?>
							<p>	<?php the_content(); ?></p>
					<?php endwhile; endif; ?>
				</div>
			</div>

	</section>
</section>
<?php get_footer(); ?>
