 <div class="container">
  <div class="row">

    <?php $args = array( 'category_name' => 'bottom-banner','posts_per_page' => 4,   'orderby' => 'date','order' => 'DESC',     ); ?>
    <?php $getposts = new WP_query( $args);?>
    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
     <?php global $product; ?>
     <div class="col-lg-3 col-md-6 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop ">
      <div class="item">
        <div class="img">
          <a href="<?php echo get_post_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" title=""></a>
        </div>
        <div class="ct">
          <h3 class="title"><a class="smooth" href="#" title=""><?php echo get_post_meta( get_post()->ID, '_title_four_bottom', true ); ?></a></h3>
          <?php the_excerpt(); ?>
          <!-- <a class="smooth more" href="<?php echo get_post_permalink(); ?>" title="">Xem thêm</a> -->
        </div>
      </div>
    </div>






<?php endwhile; wp_reset_postdata(); ?>
<div class="four_post_bottom_banner_mobile col-lg-3 col-md-12 col-sm-12 col-12">
  <?php $args = array( 'category_name' => 'bottom-banner','posts_per_page' => 4,   'orderby' => 'date','order' => 'DESC',     ); ?>
    <?php $getposts = new WP_query( $args);?>
    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
     <?php global $product; ?>
     <div class="col-lg-3 col-md-6 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
      <div class="item">
        <div class="img">
          <a href="<?php echo get_post_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" title=""></a>
        </div>
        <div class="ct">
          <h3 class="title"><a class="smooth" href="#" title=""><?php echo get_post_meta( get_post()->ID, '_title_four_bottom', true ); ?></a></h3>
			<p><?php echo get_post()->post_excerpt; ?></p>
         <!-- <a class="smooth more" href="<?php echo get_post_permalink(); ?>" title="">Xem thêm</a> -->
        </div>
		  
      </div>
    </div>
<?php endwhile; wp_reset_postdata(); ?>
</div>
</div>
</div>