<?php 
/**
* Template Name: Cart
*/
get_header();
global $post;
?>
<section id="main-wrapper">
  <div class="inner-banner">
    <div class="wrapper">
      <div class="breadcrumb">
        <ul>
          <li><a href="<?php echo get_site_url() ?>">Home</a></li>
          <li><a href="#"><?php  echo strtoupper($post->post_name); ?></a></li>
        </ul>
      </div>
      <h3><?php 
      if($post->post_name == 'cart'){
        echo "SHOPPING CART";
      }else{
        echo strtoupper($post->post_title);
      }?>
      </h3>
    </div>
  </div>
  <div class="wrapper">
    <div class="section store">
      <div class="best-sellers section clearfix">
         <div class="wrapper">  
         
             <?php while ( have_posts() ) : the_post(); ?>
                     <?php the_content(); ?>
              <?php endwhile; ?>
         
        </div>
      </div>
        <?php get_template_part('/includes/logos'); ?>
    </div>
  </div>


</section>
</section>
<?php get_footer(); ?>
