<footer class="page-footer">
	<div class="footer-top clearfix">
		<div class="width33 f-left policies">
			<h3>POLICIES</h3>
			<ul>
				<li><a href="<?php echo get_permalink(85); ?>">Terms & Conditions </a></li>
				<li><a href="<?php echo get_permalink(81); ?>">Refund Policy</a></li>
			</ul>
			<img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="RMM Logo">
		</div>
		<div class="width33 f-left about">
			<h3>About Us</h3>
			<p><?php the_field('about_footer', 'option'); ?></p>
			<a href="<?php echo get_permalink(60); ?>" class="faa-parent animated-hover">Read More...</a>
		</div>
		<div class="width33 f-left get-in">
			<h3>Get In Touch</h3>
			<ul>
				<li>
					<div class="title">
						<p>Address: </p>
					</div>
					<div class="content">
						<h2><?php the_field('address_line1', 'option'); ?></h2>
						<p><?php the_field('address_line2', 'option'); ?></p>
					</div>
				</li>
				<li>
					<div class="title">
						<p>Follow Us: </p>
					</div>
					<div class="content links">
						<?php if( have_rows('social_media', 'option') ): ?>
					    <?php while( have_rows('social_media', 'option') ): the_row(); ?>
					        <a href="<?php the_sub_field('social_media_link'); ?>"><?php the_sub_field('social_media_icon'); ?></a>
					    <?php endwhile; ?>
					<?php endif; ?>
					</div>
				</li>
				<li>
					<div class="title">
						<p>Contact Us: </p>
					</div>
					<div class="content">
						<a href="#" class="btn btn-blue"> EMAIL</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="copyright">
		<p><?php the_field('copyright', 'option'); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.rw-report-link').css({"visibility":"hidden !important"});
		$('.rw-report-link').css({"display":"none !important"});
		$('.rw-report-link').css({"opacity":"0 !important"});
		console.log('x');
	})
</script>