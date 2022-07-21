<div class="container">
    <div class="headbox">
        <h2 class="title">Khách hàng - Đối tác</h2>
    </div>
	
    <div class="customers_partner customers_partner_desktop col-md-12" >
        <div id="jssor_1" style="margin:auto;width:1000px;height:100px;overflow:hidden;">        
            <div data-u="slides" style="cursor:default;width:1000px;height:100px;overflow:hidden;" class="slider-ads">
                <?php 
                $args = array(
                    'post_type'      => 'slider-partner',
					'posts_per_page' => floor(wp_count_posts('slider-partner','')->publish/2),
                );
                $the_query = new WP_Query( $args );
                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                       <div>
                        <img style="width: 200px !important;" loading="lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"  />
                    </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                
            </div>
			
        </div>
		<div id="jssor_1_1" style="margin:auto;width:1000px;height:100px;overflow:hidden;">        
            <div data-u="slides" style="cursor:default;width:1000px;height:100px;overflow:hidden;" class="slider-ads">
                <?php 
                $args = array(
                    'post_type'      => 'slider-partner',
					'offset' => floor(wp_count_posts('slider-partner','')->publish/2),
                );
                $the_query = new WP_Query( $args );
                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                       <div>
                        <img style="width: 200px !important;" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"  />
                    </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                
            </div>
        </div>
    </div>
</div>


<div class="customers_partner customers_partner_mobile">
    <div id="jssor_2" style="margin:auto;width:1000px;height:100px;overflow:hidden;">        
        <div data-u="slides" class="slider-ads" style="cursor:default;width:1000px;height:100px;overflow:hidden;">
            <?php 
            $args = array(
              
                'post_type'      => 'slider-partner'
            );
            $the_query = new WP_Query( $args );
            ?>
            <?php if( $the_query->have_posts() ): ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  
                     <div>
                        <img style="width: 200px !important;" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"  />
                    </div>
                    
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>

</div>
 