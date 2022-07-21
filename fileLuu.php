<!-- <div class="customers_partner customers_partner_desktop" >
        <div id="jssor_3" style="margin:auto;width:1000px;height:100px;overflow:hidden;">        
            <div data-u="slides" style="cursor:default;width:1000px;height:100px;overflow:hidden;" class="slider-ads">
               <?php 
                $args = array(
                    'posts_per_page' => 5,
                    'post_type'      => 'slider-new'
                );
                $the_query = new WP_Query( $args );
                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div>
                            <img  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>" width="100%" />
                        </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div> -->
<div class="customers_partner customers_partner_mobile">
        <div id="jssor_2" style="margin:auto;width:500px;height:100px;overflow:hidden;">        
            <div data-u="slides" class="slider-ads" style="cursor:default;width:500px;height:100px;overflow:hidden;">
                <div>
                    <img  style="width: 100px !important;" src="https://www.hosco.com.vn/wp-content/uploads/2019/05/thiet-ke-lo-go-sao-kim-10-1.jpg" />
                </div>
                <div>
                    <img  style="width: 100px !important;" src="https://www.hosco.com.vn/wp-content/uploads/2019/05/fhn-viglacera-logo.jpg" />
                </div>
                <div>
                    <img  style="width: 100px !important;" src="https://www.hosco.com.vn/wp-content/uploads/2019/05/fhn-vingroup-logo.jpg" />
                </div>
                <div>
                    <img  style="width: 100px !important;" src="https://www.hosco.com.vn/wp-content/uploads/2019/05/fsg-becamex-logo.jpg" />
                </div>
                <div>
                    <img  style="width: 100px !important;" src="https://www.hosco.com.vn/wp-content/uploads/2019/05/fsg-cc1-logo.jpg" />
                </div>
                <div>
                    <img  style="width: 100px !important;" src="https://www.hosco.com.vn/wp-content/uploads/2019/05/fhn-vtv-logo.jpg" />
                </div>
                <div>
                    <img  style="width: 100px !important;" src="https://www.hosco.com.vn/wp-content/uploads/2019/05/fsg-loc-troi-logo.jpg" />
                </div>
                <div>
                    <img  style="width: 100px !important;" src="https://www.hosco.com.vn/wp-content/uploads/2019/05/fsg-ad-logo.jpg" />
                </div>
                <div>
                    <img  style="width: 100px !important;" src="https://www.hosco.com.vn/wp-content/uploads/2019/05/fsg-vifon-logo.jpg" />
                </div>
                <div>
                    <img  style="width: 100px !important;" src="https://www.hosco.com.vn/wp-content/uploads/2019/05/fsg-hoa-thien-phu-logo.jpg" />
                </div>
            </div>
        </div>