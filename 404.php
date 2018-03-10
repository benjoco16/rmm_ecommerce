<?php get_header(); ?>

<div class='no-res-fulls-width'>
  <div class="main-width">
    <div class="no-res-bg inner-page" style="background-image:url('<?php bloginfo('stylesheet_directory'); ?>/img/bg-no-res.jpg')">
      <div class="clearfix">
        <div class="fr col-sm-7 no-res-cnt pr-no-pl">
          <h2><?php _e( 'Oops! This page does not exist.', 'woocommerce' ); ?></h2>
          <p><?php _e( 'Head back to the ', 'woocommerce' ); ?><a href="<?php echo home_url('/'); ?>"><?php _e('home page', 'coffeeinaplace'); ?></a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
