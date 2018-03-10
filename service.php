<?php
/**
* Template Name: Service
*/
get_header();
?>
	<section id="main-wrapper">
		<div class="inner-banner">
			<div class="wrapper">
				<div class="breadcrumb">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">SERVICES</a></li>
					</ul>
				</div>
				<h3> <?php wp_title('', true,''); ?></h3>
			</div>
		</div>
		<div class="wrapper">
			<div class="section service">
				<?php
					if( have_rows('service_listing') ):?>
						 <?php while ( have_rows('service_listing') ) : the_row();?>
							 <div class="service-holder">
				 					<div class="img-holder">
				 						<img src="<?php the_sub_field('service_image'); ?>" alt="">
				 					</div>
				 					<div class="content">
				 						<h3><?php the_sub_field('service_title'); ?></h3>
				 						<?php the_sub_field('service_description'); ?>
				 						<a href="#" class="btn btn-blue-b">CONTACT US</a>
				 					</div>
				 				</div>
						 <?php endwhile;
					else :?>
					<?php endif;
					?>
			</div>
			<div class="section studio-equipment">
				<div class="img-holder">
					<img src="<?php the_field('studio_equipment_banner_image'); ?>" alt="">
				</div>
				<div class="title-holder">
					<h3><?php the_field('studio_equipment_title'); ?></h3>
				</div>

				<div class="clearfix">
					<div class="equip-listing">
						<?if( have_rows('studio_equipments') ):?>
							 <?php while ( have_rows('studio_equipments') ) : the_row();?>
									<div class="equipment-holder">
										<h3><?php the_sub_field('equipment_category_name'); ?></h3>
										<?if( have_rows('equipments') ):?>
										<ul>
										<?php while ( have_rows('equipments') ) : the_row();?>
											<li><?php the_sub_field('equipment_name'); ?></li>
										<?php endwhile;
										else :?>
										</ul>
									<?php endif;?>
									</div>
							 <?php endwhile;
						else :?>
					<?php endif;?>
					</div>

				</div>
			</div>

		</div>


	</section>
</section>
<?php get_footer(); ?>
