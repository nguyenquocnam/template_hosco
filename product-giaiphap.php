    
<ul class="nav">
    <?php $args = array( 
        'hide_empty' => 0,
        'taxonomy' => 'product_cat',
        'orderby' => 'id',
        'parent' => 0
    ); 
    $cates = get_categories( $args ); 
    $kt = FALSE;
    foreach ( $cates as $cate ) {if($cate->slug!='chua-phan-loai'){ if($kt==FAlSE){?>
        <li>
            <a class="smooth active show" data-toggle="tab" href="#<?php echo $cate->slug; ?>" title=""><?php echo $cate->name; ?></a>
        </li>
    <?php $kt=TRUE;}else{ ?>
        <li>
            <a class="smooth" data-toggle="tab" href="#<?php echo $cate->slug; ?>" title=""><?php echo $cate->name; ?></a>
        </li>

        <?php
    }}}?>
    <!-- <li><a class="smooth active show" data-toggle="tab" href="#vanhoa" title="">Văn hóa hosco</a></li>
    <li><a class="smooth" data-toggle="tab" href="#tintuc" title="">Tin Tức</a></li> -->
</ul>
<div class="gp-apbig tab-content" style="margin:0 auto; width: 100%; overflow:hidden; ">
<?php $kt = FALSE;  foreach ( $cates as $cate ){
if($cate->slug!='chua-phan-loai')  {
$sanpham = array();
$sanpham1 = array();
?>
<div id="<?php echo $cate->slug; ?>" class="tab-pane fade <?php if($kt==FALSE){echo 'in active show'; $kt=TRUE;}?> ">
<div class="owl-carousel owl-theme slider-product" >
<?php
	 $args = array( 
                            'post_type'=>'product',
                            'post_status'=>'publish',
                            
                            'tax_query' => array(  
                                'relation' => 'AND',                     
                                array(
                                    'taxonomy' => 'product_cat',                
                                    'field' => 'slug',                    
                                    'terms' => array($cate->slug),       
                                    'operator' => 'IN'                  
                                ),
                            ),
                            'orderby' => 'ID',
                            'order' => 'DESC',
                            'meta_key' => 'noibat',                    
                            'meta_value' => '1',
                            
                        ); 
                        $args1 = array( 
                            'post_type'=>'post',
                            'post_status'=>'publish',
                            'category_name' => $cate->slug,
                            'orderby' => 'ID',
                            'order' => 'DESC',
                            'meta_key' => 'noibat',                    
                            'meta_value' => '1',
                        ); 
?>
<?php $getposts = new WP_query( $args);?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>
<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
<?php global $product; 
    array_push($sanpham, get_post());
?>
   
<?php endwhile; wp_reset_postdata();


?>
	<?php $getposts1 = new WP_query( $args1);?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts1->have_posts()) : $getposts1->the_post(); ?>
                            <?php global $product; 
                            array_push($sanpham1, get_post());
                            ?>

                        <?php endwhile; wp_reset_postdata();



                        ?>
  <?php foreach ($sanpham as $value): ?>

            <?php $args = array( 'post_type'=>'page','meta_key' => '_product_page','meta_value'=>$value->ID); ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php global $product; 
                    // var_dump(get_post()); 

                ?>
                <div class="owl-min owl-desktop float wow fadeInUp" style="padding: 0 12px;">
                    <div class="item notify ">
                        <div class="fh5co-blog" style="box-shadow: none;">
                            <a href="<?php echo get_post_permalink(); ?>"><img loading="lazy" alt="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($value->ID) );?>" /></a>
                            <div class="blog-text"   style="padding: 5%;"  >
                                <h3 class="font-big"><a href="<?php echo get_post_permalink(); ?>"><?php echo $value->post_title ;?></a></h3>

                                <p class="aplly"><?php echo $value->post_content; ?></p>                    


                            </div>
                            <div class="continue ">
                                <a  href="<?php permalink_link(); ?>" title="">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div> 
            <?php endwhile; wp_reset_postdata(); ?> 
        <?php endforeach;?>
	<?php foreach ($sanpham1 as $value): ?>


                            <div class="owl-min owl-desktop float wow fadeInUp" style="padding: 0 12px;">
                                <div class="item notify ">
                                    <div class="fh5co-blog" style="box-shadow: none;">
                                        <a href="<?php echo the_permalink($value->ID); ?>"><img alt="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($value->ID) );?>" /></a>
                                        <div class="blog-text"   style="padding: 5%;"  >
                                            <h3 class="font-big"><a href="<?php echo the_permalink($value->ID); ?>"><?php echo $value->post_title ;?></a></h3>

                                            <p class="aplly"><?php echo $value->post_excerpt; ?></p>                    


                                        </div>
                                        <div class="continue ">
                                            <a  href="<?php the_permalink($value->ID); ?>" title="">Xem Chi Tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        <?php endforeach;?>
        </div>
	<div class="col-lg-12 col-12 text-center load_more_new">
         
      </div>
</div>
        <?php
        }}  ?>

    

</div>
