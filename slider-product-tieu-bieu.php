 <div class="container">
    <div class="headbox">
        <h2 class="title">Dự án tiêu biểu</h2>
    </div>
    <div class="row row_group">
        <div class="case_study col-lg-12">
            
            <?php $args = array( 'posts_per_page' => 10,'ignore_sticky_posts' => 1,'category_name' => 'khach-hang','order' => 'DESC','orderby' => 'date', ); ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php global $product; ?>
                <div class="item" style="height: 100%;">
                    <div class="col-md-1"></div>
                    <div class="col-md-5 raw-center">
                        <div class="t-icon">
                            <img class="lazy" loading="lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>"  alt="" title="">
                        </div>
                    </div>
                    <div class="col-md-5 group_content_case_study">
                        <div class="headbox headbox_case case_hosco">
                            <h2 class="title"><?php the_title(); ?></h2>
                        </div>
                        <div class="group_post_case">
                            <p><?php echo get_post()->post_excerpt; ?></p>
                            <a href="<?php echo get_post_permalink(); ?>" class="load_more shrink" tabindex="0">Xem chi tiết</a>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>    
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>