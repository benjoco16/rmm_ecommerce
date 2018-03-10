<?php 
  get_header(); 
  global $post;
?>
<section id="main-wrapper">
  <div class="inner-banner">
    <div class="wrapper">
      <div class="breadcrumb">
        <ul>
          <li><a href="<?php echo get_site_url() ?>">Home</a></li>
          <li><a href="<?php echo home_url( '/shop/' ) ?>">STORE</a></li>
        </ul>
      </div>
      <h3>OUR STORE</h3>
    </div>
  </div>
  <div class="wrapper">
    <div class="section store">
      <?php if(is_shop()):?>
      <div class="nav-holder">
        <ul class="clearfix">
          <li><a class="manu-link">Manufacturer</a> </li>
          <li><a href="#">Category</a></li>
          <li><a href="#">Type</a></li>
        </ul>
      </div>
     <?php endif;?>
      <div class="best-sellers section clearfix">
         <div class="wrapper">  
         
           <?php woocommerce_content(); ?>
         
        </div>
      </div>
    </div>
  </div>


</section>
</section>
<?php get_footer(); ?>
