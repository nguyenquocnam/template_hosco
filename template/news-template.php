<?php
/*
 Template Name: news
 */
 ?>
<?php get_header(); ?>
 <?php $category_obj = get_category(get_post_meta( get_post()->ID,'_page_category', true ));
$slugCategory =$category_obj->slug;
 						
 						$nameCategory = $category_obj->name;
 						             ?>
 <div class="heading-page header-text">
 	<section class="page-heading" >
		<img src="<?php echo get_term_meta($category_obj->term_id, 'category_img', true ); ?>" alt="" width="100%">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-12">
 					<div class="text-content" >


 						
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>
 </div> 

 <!-- cai nay la thong tin tin tuc -->
 <section class="blog-posts grid-system">
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-8">
 				<div class="all-blog-posts">
 					<div class="row">
						<div class="col-lg-12">
              <div class="blog-post ">
				  <div class="td-crumb-container" style="background:unset;padding:0;">
                  <div class="entry-crumbs">
                    <span>
							<a title="" class="entry-crumb" style="font-size: 26px;font-weight: 600;text-transform: uppercase;"><?php echo $nameCategory; ?></a>
                    </span>
                     </div>
                   </div>
               
                
                </div>
              </div>
 						
 						<?php 
 						

 						?>
 						<?php 
 						$args = array(

 							'category_name' => $slugCategory,
 							'nopaging' => false,
 							'posts_per_page' => 6,  
 							'paged' => get_query_var('paged'),

 						);
 						$the_query = new WP_Query( $args );
 						?>
 						<?php if( $the_query->have_posts() ): ?>
 							<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
 								
 								<div class="col-lg-6">
 									<div class="blog-post float">
 										<div class="blog-thumb">
 											<a href="<?php echo get_post_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt=""></a>
 										</div>
 										<div class="down-content down-hosco">
 											
 											<a href="<?php echo get_post_permalink(); ?>"><h4><?php echo get_post()->post_title; ?></h4></a>
											 <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="HHsfh9fB"></script>
											<div class="fb-like" data-href="<?php echo get_post_permalink(); ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
 											
 											<p><?php echo get_post()->post_excerpt; ?></p>
 											
 										</div>
 									</div>
 								</div>

 							<?php endwhile; ?>
 						<?php endif; ?>
 						<?php wp_reset_query(); ?>
 						
 						<div class="col-lg-12">
 							<?php html5wp_pagination($the_query); ?>
 							
 						</div>
 					</div>
 				</div>
 			</div>
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
 <br>
 <?php get_footer(); ?>