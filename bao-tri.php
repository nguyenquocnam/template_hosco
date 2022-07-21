<div class="container">
    <div class="headbox">
        <h2 class="title">Báo chí nói về  Hosco</h2>
    </div>
    <div class="customers_partner customers_partner_desktop" >
        <div id="jssor_3" style="margin:auto;width:1000px;height:100px;overflow:hidden;">        
            <div data-u="slides" style="cursor:default;width:1000px;height:100px;overflow:hidden;" class="slider-ads">
                <?php 
                $args = array(
                    'posts_per_page' => 20,
                    'post_type'      => 'slider-new'
                );
                $the_query = new WP_Query( $args );
                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                     <div>
                        <img loading="lazy" style="width: 200px !important;" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"  />
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>
<div class="customers_partner customers_partner_mobile">
    <div id="jssor_4" style="margin:auto;width:500px;height:100px;overflow:hidden;">        
        <div data-u="slides" class="slider-ads" style="cursor:default;width:500px;height:100px;overflow:hidden;">
            <?php 
            $args = array(
                'posts_per_page' => 20,
                'post_type'      => 'slider-new'
            );
            $the_query = new WP_Query( $args );
            ?>
            <?php if( $the_query->have_posts() ): ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                   <div>
                    <img loading="lazy" style="width: 150px !important;" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"  />
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

</div>
</div>

