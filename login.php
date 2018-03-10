<?php
/**
* Template Name: Login
*/
get_header();
?>
	<section id="main-wrapper" class="inner-page login-inner">

		<div class="wrapper">
			<div class="section">
				<?php if ( have_posts() ) : ?>
				<?php   while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</section>
</section>
<?php get_footer(); ?>
