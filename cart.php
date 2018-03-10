<?php 
/**
* Template Name: Cart
*/
get_header(); 
?>
<section id="main-wrapper">
  <div class="inner-banner">
    <div class="wrapper">
      <div class="breadcrumb">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Cart</a></li>
        </ul>
      </div>
      <h3>SHOPPING CART</h3>
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
