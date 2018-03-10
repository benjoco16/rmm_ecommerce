<?php
/**
* Template Name: News Inner
*/
get_header();
?>




	<section id="main-wrapper">
		<div class="inner-banner">
			<div class="wrapper">
				<div class="breadcrumb">
					<ul>
						<li><a href="#">Home</a></li>
          <?php  global $post;
            $postcat = get_the_category( $post->ID );

            // try print_r($postcat) ;

            if ( ! empty( $postcat ) ) {?>

                  <li><a href="#"> News - <?php echo $postcat[0]->name ; ?></a></li>
          <?php }?>

						<li><a href="#"> <?php wp_title('', true,''); ?></a></li>
					</ul>
				</div>
				<h3> <?php wp_title('', true,''); ?></h3>
			</div>
		</div>
		<div class="wrapper">
			<div class="section news news-detail clearfix">
				<div class="news-sidebar f-right">
					<div class="quick-links side">
						<?php
							if(is_active_sidebar('sidebar-1')){
								dynamic_sidebar('sidebar-1');
							}
							?>
						</div>
				</div>
				<div class="news-listing f-left">
					<?php if ( have_posts() ) : ?>
	        <?php   while ( have_posts() ) : the_post(); ?>
					<div class="news-holder">
						<h1><?php the_title(); ?></h1>
						 <p><span>Posted</span> <?php echo get_the_date(); ?></p></p>
						<div class="share">
              <?php global $post; ?>
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID);?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
							 <a href="https://twitter.com/share?url=<?php echo get_permalink($post->ID);?>&amp;text=<?php the_title(); ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
							<span>Share this</span>
						</div>
						<div class="content-holder">
							<p>	<?php the_content(); ?></p>
							<br><br><br>
							<div class="share">
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID);?>" target="_blank" rel="noopener"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <!-- Your share button code -->

								 <a href="https://twitter.com/share?url=<?php echo get_permalink($post->ID);?>&amp;text=<?php the_title(); ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
								<span>Share this</span>
							</div>
						</div>
					</div>
					<?php endwhile; endif; ?>
				</div>
				<div class="ads-holder side responsive-ads">
					<img src="<?php bloginfo('template_directory'); ?>/images/ads.jpg" alt="">
				</div>
			</div>
		</div>


	</section>
</section>
<?php get_footer(); ?>
