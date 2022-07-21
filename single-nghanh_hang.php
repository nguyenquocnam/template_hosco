<?php get_header(); ?>

<div class="heading-page header-text">
  <section class="page-heading"  >
	  <img src="<?php 
    if($image!=NULL &&$image!='')
    echo $image;
    else
    echo $imgBanner;?>" alt="" width="100%">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
           
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- dau la thong tin chi tiet -->
<section class="blog-posts grid-system detail-blog-posts">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts detail-hosco">
          <div class="row">
            <div class="col-lg-12">
              <div class="blog-post">
				  <div class="td-crumb-container">
                  <div class="entry-crumbs">
                    <span>
                      <a title="" class="entry-crumb" href="/">Trang chủ</a>
                    </span> 
                    <i class="fas fa-chevron-right"></i>
                    <span>
						<?php
						
						foreach (get_the_category($post->ID) as $key => $value){ 
							
							$args = array(
	 'meta_query'        => array(
            array(
                'key'       => '_page_category',
                'value'     => $value->term_id
            )
        ),
        'post_type'         => 'page',
        'posts_per_page'    => 1
);
$my_query = new WP_Query( $args );
							
							if( $my_query->have_posts() ) {
  while( $my_query->have_posts() ) {
    $my_query->the_post();
    	?>
							<a title="" class="entry-crumb" href="<?php echo get_post_permalink(); ?>"><?php echo $value->name; ?></a>
						<?php
  } 
} 

wp_reset_postdata();
						?>
    					
						
<?php 	if(get_the_category($post->ID)[$key+1]){
						echo ',';
						}
													} ?>
                      
                    </span>
                     </div>
                   </div>
                <div class="blog-thumb">
					<?php $link_image = get_post_meta( $post->ID, '_detail_nghanh_hang_news', true );
						if($link_image !=NULL && $link_image !=""){
						?>
					<img src="<?php echo $link_image;?>" alt="">
					<?php
						
						}
					?>
                  
                </div>
                <div class="down-content">
                  
                  <!--  chỗ này điền link -->
                  <a href="#"><h2><?php  echo get_post($value)->post_title; ?></h2></a>
                  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="HHsfh9fB"></script>
											<div class="fb-like" data-href="<?php echo get_post_permalink(); ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                  <!-- cho nay dien link -->
                  <?php the_content(); ?>

                    
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- phần này bên tay phải  -->
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="row">
              <?php  if ( dynamic_sidebar('sidebarTinTUc') ) : else : endif;  ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>