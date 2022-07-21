<div class="container">
    <div class="headbox" >
        <h2 class="title" style="color: #fff">Khách hàng nói gì về Hosco</h2>
    </div>
    <br>
    <div class="col" style="margin:0 auto; width: 100%; overflow:hidden;border-radius: 20px; ">
    <div class="owl-carousel owl-theme" id="slider-cutomer" >
        <?php $args = array( 'post_type' => 'customer_whatSaid','posts_per_page' => 10,'ignore_sticky_posts' => 1,   'orderby' => 'date','order' => 'DESC',     ); ?>
        <?php $getposts = new WP_query( $args);?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php global $product; ?>
            <div class="item wow fadeInUp" style="margin:0 4%;" >
                <div class="bg">
                                    <div class="inner">
                                        <div class="block-image">
                                            <img loading="lazy" style="border-radius: 50%;" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" class="fade show">
                                        </div>
                                        <div class="block-content">
                                            <h3><?php the_title(); ?></h3>
                                            <p class="job"><?php echo get_post_meta( get_post()->ID, '_title_chuc_vu', true ) ?></p>
                                        </div>
                                    </div>
                                    <p class="des">
                                       <?php echo get_post()->post_content; ?>
                                    </p>
                                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>

</div>