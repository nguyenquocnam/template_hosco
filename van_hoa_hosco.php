<div class="container">
   <div class="headbox">
      <h2 class="title">Văn Hóa Hosco & Tin Tức</h2>
   </div>
   <ul class="nav">
      <li><a class="smooth active show" data-toggle="tab" href="#vanhoa" title="">Văn Hóa Hosco</a></li>
      <li><a class="smooth" data-toggle="tab" href="#tintuc" title="">Tin Tức</a></li>
   </ul>
   <div class="tab-content tab-content-news">
      <div id="vanhoa" class="tab-pane fade in active show">
         <div class="row row-ibl">
            <?php $args = array( 'category_name' => 'van-hoa-hosco','posts_per_page' => 3,'ignore_sticky_posts' => 3,   'orderby' => 'date','order' => 'DESC',     ); ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
             <?php global $product; ?>


             <div class="col-xl-4 col-lg-4 col-md-6 col-12 item wow fadeInUp">
               <div class="news-item">
                  <a class="hosco-img-4x3" aria-label="text" href="<?php echo get_post_permalink(); ?>" target="_blank">
                     <img loading="lazy" class="news-blog fade show lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" title="" />
                  </a>
                  <div class="title">
                     <a href="<?php echo get_post_permalink(); ?>" class="article-title"><?php the_title(); ?></a>
                  </div>
                  <div class="description">
                     <?php echo get_post()->post_excerpt; ?>
                  </div>
                  <div class="continue">
                     <a href="<?php echo get_post_permalink(); ?>" class="article-title grow" target="_blank" title="">Xem chi tiết</a>
                  </div>
               </div>
            </div>




         <?php endwhile; wp_reset_postdata(); ?>


      </div>
      <div class="container load_more_post_talk_hosco grow">
    <div class="row">
        <div class="col-lg-12 col-12 text-center">
            <a href="/tin-tuc-van-hoa-hosco" class="article-title " target="_blank" title=""> → Xem thêm các bài viết </a>
        </div>
    </div>
</div>
		   <br>
   </div>
   <div id="tintuc" class="tab-pane fade">
   <div class="row row-ibl">
<?php $args = array( 'category_name' => 'tin-tuc','posts_per_page' => 3,'ignore_sticky_posts' => 3,   'orderby' => 'date','order' => 'DESC',     ); ?>
     <?php $getposts = new WP_query( $args);?>
     <?php global $wp_query; $wp_query->in_the_loop = true; ?>
     <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
       <?php global $product; ?>

      <div class="col-xl-4 col-lg-4 col-md-6 col-12 item wow fadeInUp">
         <div class="news-item">
            <a class="hosco-img-4x3" aria-label="text" href="<?php echo get_post_permalink(); ?>" target="_blank">
               <img loading="lazy" class="news-blog fade show lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" >
            </a>
            <div class="title">
               <a href="<?php echo get_post_permalink(); ?>" class="article-title"><?php the_title(); ?></a>
            </div>
            <div class="description">
               <?php echo get_post()->post_excerpt; ?>

            </div>
            <div class="continue">
               <a href="<?php echo get_post_permalink(); ?>" class="article-title" target="_blank" title="">Xem chi tiết</a>
            </div>
         </div>
      </div>

   <?php endwhile; wp_reset_postdata(); ?>

</div>
<div class="container load_more_post_talk_hosco">
    <div class="row">
        <div class="col-lg-12 col-12 text-center">
            <a href="/tin-tuc" class="article-title grow" target="_blank" title=""> → Xem thêm các bài viết  </a>
        </div>
    </div>
</div>
	   <br>
</div>
</div>

</div>