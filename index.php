<?php
/**
* Template Name: News
*/
get_header();
?>
	<section id="main-wrapper">
		<div class="inner-banner">
			<div class="wrapper">
				<div class="breadcrumb">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">  News - <?php echo get_cat_name($cat); ?></a></li>
					</ul>
				</div>
				<h3> <?php wp_title('', true,''); ?></h3>
			</div>
		</div>
		<div class="wrapper">
			<div class="section news clearfix">
				<div class="news-sidebar f-right">
					<div class="quick-links side">
						<div class="quick-links side">
							<?php
								if(is_active_sidebar('sidebar-1')){
									dynamic_sidebar('sidebar-1');
								}
								?>
							</div>
						</div>
				</div>
				<div class="news-listing f-left">
					<?php
					global $post;
						$name = get_the_category_by_ID($cat);
							$the_query = new WP_Query( array( 'post_type'=>'post', 'post_status'=>'publish','category_name' => $name) );
							if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post();
					  ?>
					    <div class="news-holder">
					      <a href="<?php echo get_permalink() ?>" class="img-holder">
					        <?php the_post_thumbnail(); ?>
					      </a>
					      <div class="content-holder">
					        <h1><?php the_title(); ?></h1>
					        <p><span>Posted</span> <?php echo get_the_date(); ?></p>
									<p> <?php echo trim_content( get_the_content() , 100); ?></p>

					         <a href="<?php echo get_permalink() ?>">Read More</a>
					        <div class="share">
										<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID);?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
										 <a href="https://twitter.com/share?url=<?php echo get_permalink($post->ID);?>&amp;text=<?php the_title(); ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
					          <span>Share this</span>
					        </div>
					      </div>
					    </div>
					  <?php   endwhile;  wp_reset_postdata(); endif; ?>

				</div>
				<div class="ads-holder side responsive-ads">
					<img src="<?php bloginfo('template_directory'); ?>/images/ads.jpg" alt="">
				</div>
			</div>
		</div>


	</section>
</section>

<script type="text/javascript">
		$('.datepicker').datepicker();
</script>
<?php get_footer(); ?>
