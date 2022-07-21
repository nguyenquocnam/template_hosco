
     <?php 

            $args = array(
                'posts_per_page' => 20,
                'post_type'      => 'product',
                'name'=>$_GET['product']
            );
            $the_query = new WP_Query( $args );
            ?>
            <?php if( $the_query->have_posts() ): ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="parallax-effect"></div>
 <div class="container">
    <div class="row banner_main" style="
    padding-bottom: 10%;
">
        <div class="col-lg-6 event_banner_content">
            <h6 class=""><?php the_title(); ?></h6>
            
            <h2 class=""><?php the_content(); ?></h2>
            <a class="event_btn btn_hover" data-toggle="modal" data-target="#informationForm" href="#information-form"><img src="<?php bloginfo("template_directory"); ?>/themes/default/images/template_new/calling.png" alt="" />Đăng ký tư vấn</a> <a class="event_btn event_btn_two btn_hover" data-toggle="modal" data-target="#informationForm" href="#information-form"><i class="arrow_triangle-right_alt2"></i>Dùng thử miễn phí</a></div>
            <div class="col-lg-6 banner_main_img"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" /></div>
        </div>
    </div>
               

            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>