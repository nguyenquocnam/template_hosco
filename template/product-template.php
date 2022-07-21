<?php
/*
 Template Name: detail-product
 */
 ?>
 
 <?php get_header(); 

	$ten = get_post()->post_title;
$id_page = get_post( )->ID;
?>

 <section class="event_banner_area" style="background: #00adef !important;min-height: 100vh;">
   <?php 
   $title_product = '';
   $args = array(
    'posts_per_page' => 20,
    'post_type'      => 'product',
    'p'=>get_post_meta( get_post()->ID,'_product_page', $single = true )
  );
   $the_query = new WP_Query( $args );
             // var_dump($the_query); 

   ?>

   <?php if( $the_query->have_posts() ): ?>
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); $title_product = get_post()->post_title; ?>

      <div class="parallax-effect"></div>
      <div class="container">
        <div class="row banner_main" style="
        padding-bottom: 10%;
        ">
        <div class="col-lg-6 event_banner_content">
          <h6 class=""><?php the_title(); ?></h6>

          <h2 class=""><?php the_content(); ?></h2>
          <a class="event_btn btn_hover grow"  data-toggle="modal" data-target="#informationForm" href="#information-form"><img src="<?php bloginfo("template_directory"); ?>/themes/default/images/template_new/calling.png" alt="" />Đăng ký tư vấn</a> <a class="event_btn event_btn_two btn_hover grow" data-toggle="modal" data-target="#informationForm" href="#information-form"><i class="arrow_triangle-right_alt2"></i>Dùng thử miễn phí</a></div>
          <div class="col-lg-6 banner_main_img grow"><img src="<?php echo get_post_meta( $post->ID, 'image_product_detail', true );?>" alt="" /></div>
        </div>
      </div>


    <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_query(); ?>


</section>
<section class="four_post_bottom_banner" style="margin-top: 0px;position: relative;">
  <div class="container">
    <div class="row">

      <?php $list = get_post_meta( $id_page, 'page_bottom_banner', true) ;
      if($list !=NULL && $list!='')
        foreach ($list as $value) {
          $postHere = get_post($value);
        
      ?>
       <div class="col-lg-3 col-md-6 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
        <div class="item">
          <div class="img">
            <a href="<?php echo get_post_permalink($postHere); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($postHere->ID) );?>" alt="" title=""></a>
          </div>
          <div class="ct">
            <h3 class="title"><a class="smooth" href="#" title=""><?php echo get_post_meta( $postHere->ID, '_title_four_bottom', true ); ?></a></h3>
            <p> <?php echo $postHere->post_excerpt; ?></p>
            <!-- <a class="smooth more" href="<?php echo get_post_permalink($postHere); ?>" title="">Xem thêm</a> -->
          </div>
        </div>
      </div>






    <?php } ?>
    <div class="four_post_bottom_banner_mobile col-lg-3 col-md-12 col-sm-12 col-12">
     <?php 
     if($list !=NULL && $list!='')
     foreach ($list as $value) {
          $postHere = get_post($value);
        
      ?>
       <div class="col-lg-3 col-md-6 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
        <div class="item">
          <div class="img">
            <a href="<?php echo get_post_permalink($postHere); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($postHere->ID) );?>" alt="" title=""></a>
          </div>
          <div class="ct">
            <h3 class="title"><a class="smooth" href="#" title=""><?php echo get_post_meta( $postHere->ID, '_title_four_bottom', true ); ?></a></h3>
            <p> <?php echo $postHere->post_excerpt; ?></p>
            <!-- <a class="smooth more" href="<?php echo get_post_permalink($postHere); ?>" title="">Xem thêm</a> -->
          </div>
        </div>
      </div>






    <?php } ?>



  </div>
</div>
</div>
</section>
<section class="partner" id="khach-hang" style="margin-top:45px;">
  <div class="container">
    <div class="headbox">
      <h2 class="title">Khách hàng - Đối tác</h2>
    </div>
    <div class="customers_partner customers_partner_desktop" >
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
                        <img style="width: 200px !important;" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"  />
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
        'posts_per_page' => 20,
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

</section>
<section class="you_choose_hosco">
  <div class="container">
    <div class="headbox">
      <h2 class="title"><?php echo get_post_meta( get_post()->ID,'_title_box_ly_do_chon', $single = true ); ?></h2>
    </div>
    <div class="row">
      <div class="portfolio_choose_hosco">
        <div class="img">
          <a data-toggle="modal" data-target="#informationForm" href="#information-form"><img data-src="<?php echo get_post_meta( get_post()->ID, 'aw1_custom_image', true ); ?>" class="lazy" alt="" width="60%" height="60%" /></a>
        </div>
        <div class="items" >
          <?php 
          if (get_post_meta( get_post()->ID, '_reason_choose', true )!=NULL&&get_post_meta( get_post()->ID, '_reason_choose', true )!="") {
            foreach (get_post_meta( get_post()->ID, '_reason_choose', true ) as $value) {
              ?>

              <div class="item">
                <h2 class="title smooth"><?php echo $value->title; ?></h2>
                <span><?php echo $value->content; ?></span>
              </div> 
              <?php
            }
            }
            ?>
          
          
          
        </div>
      </div>
    </div>
  </div>

</section>
<section class="app_nen_tang" id="app-nen-tang">
  <div class="container">
    <div class="headbox">
            <h2 class="title"><?php echo get_post_meta( get_post()->ID,'_title_box_hst', $single = true ); ?></h2>

    </div>
    <div class="row">
     <div class="col-lg-12  group_tab_app_nen_tang">
      <ul class="nav_app nav">
        <?php $kt = FALSE; ?>
        <?php foreach (get_post_meta( get_post()->ID,'_he_sinh_thai', $single = true ) as  $value) {

          if($kt ==FALSE){
            echo "<li><a data-toggle='tab' class='smooth active' href='#".get_post($value)->post_name."' title=''>".get_post($value)->post_title."</a></li>";
            $kt = TRUE;
          }
          else{
            echo "<li><a data-toggle='tab' class='smooth ' href='#".get_post($value)->post_name."' title=''>".get_post($value)->post_title."</a></li>";
          }
        } ?>



      </ul>
    </div>
		
    <div class="row group_content_he_sinh_thai">
     <div class="col-lg-3 thumbnail_app">
              <img src="<?php echo  get_post_meta( get_post()->ID,'_img_hst_full', $single = true );?>" alt="">

       
     </div>
     <div class="col-lg-9">
      <div class="tab-content">
        <?php $kt = FALSE;?>
        <?php foreach (get_post_meta( get_post()->ID,'_he_sinh_thai', $single = true ) as  $value) {

                                // var_dump(get_post($value));
          $hesinhthai = get_post($value);
          if($kt ==FALSE){
            echo "<div class='item_tab tab-pane fade active show' id='".$hesinhthai->post_name."'>";
            echo "<div class='row'>";
            echo "<div class='col-lg-5 thumbnail_app_img'>";
            echo "<img src='".wp_get_attachment_url( get_post_thumbnail_id($hesinhthai->ID))."' alt=''>";
            echo "</div>";
            echo "<div class='col-lg-7 group_content_app'>";
            echo "<div class='content'>";
            echo $hesinhthai->post_content;
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            $kt=TRUE;
          }
          else{
            echo "<div class='item_tab tab-pane fade' id='".$hesinhthai->post_name."'>";
            echo "<div class='row'>";
            echo "<div class='col-lg-5 thumbnail_app_img'>";
            echo "<img src='".wp_get_attachment_url( get_post_thumbnail_id($hesinhthai->ID))."' alt=''>";
            echo "</div>";
            echo "<div class='col-lg-7 group_content_app'>";
            echo "<div class='content'>";
            echo $hesinhthai->post_content;
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
          }
        } ?>


      </div>
    </div>
  </div>
</div>
	  <div class="container">
  <div class="group_tab_app_nen_tang_mobile">
    <div class="wrapper center-block">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php foreach (get_post_meta( get_post()->ID,'_he_sinh_thai', $single = true ) as  $value) {
		?>
		   <div class="panel panel-default">
          <div class="panel-heading active" role="tab">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" class="name_title_mobile" data-parent="#accordion" href="#<?php echo get_post($value)->post_name.'1'; ?>" aria-expanded="true" >
                <?php echo get_post($value)->post_title; ?>
              </a>
            </h4>
          </div>
          <div id="<?php echo get_post($value)->post_name.'1'; ?>" class="panel-collapse collapse in" role="tabpanel" >
            <div class="panel-body">
				<?php  
	
	echo "<div class='col-lg-5 thumbnail_app_img'>";
            echo "<img src='".wp_get_attachment_url( get_post_thumbnail_id(get_post($value)->ID))."' alt=''>"; 
            echo "</div>";
				?>
              <?php echo get_post($value)->post_content; ?>
            </div>
          </div>
        </div>
		  <?php
         
        } ?>
       
      </div>
    </div>
  </div>
</div>
</div>
</section>
<section class="app_nghanh_hang" id="nganh-hang">
  <div class="container">
    <div class="headbox">
      <h2 class="title"><?php echo get_post_meta( get_post()->ID,'_title_box_nghanh', $single = true ); ?></h2>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <ul class="nav_app nav">
          <?php $kt = FALSE;

          $dem=get_post_meta( get_post_meta( get_post()->ID,'_product_page', $single = true ),'_product_nghanh_hang', $single = true );
          if($dem=="" ||$dem==NULL)
            $dem = 0;
          else
            $dem =count($dem);



          ?>

          <?php if($dem>0)
          foreach (get_post_meta( get_post_meta( get_post()->ID,'_product_page', $single = true ),'_product_nghanh_hang', $single = true ) as  $value) {
            $hesinhthai = get_post($value);

            if($kt ==FALSE){?>
              <li class="grow">
                <a data-toggle="tab" class="smooth active show" href="#<?php echo get_post($value)->post_name; ?>" title="" style="display:flex;">
                 <img class="icon_app lazy" src="<?php echo get_post_meta( get_post($value)->ID, '_nghanh-hang-icon', $single = true ); ?>" alt="">
                 <div style="padding-top:8px;"><?php  echo get_post_meta($hesinhthai->ID,'_title_nghanh_hang_detail',true);?></div>
               </a>
             </li>
             <?php
             $kt = TRUE;
           }
           else{?>
             <li class="grow">
              <a data-toggle="tab" class="smooth " href="#<?php echo get_post($value)->post_name; ?>" title="" style="display:flex;">
               <img class="icon_app lazy" src="<?php echo get_post_meta( get_post($value)->ID, '_nghanh-hang-icon', $single = true ) ?>" alt="">
              <div style="padding-top:8px;"> <?php  echo get_post_meta($hesinhthai->ID,'_title_nghanh_hang_detail',true);?></div>
             </a>
           </li>
         <?php }
       } ?>       

     </ul>
   </div>
   <div class="col-lg-9">
    <div class="tab-content">

     <?php $kt = FALSE;?>
     <?php if($dem>0)
     foreach (get_post_meta( get_post_meta( get_post()->ID,'_product_page', $single = true ),'_product_nghanh_hang', $single = true ) as  $value) {

                                // var_dump(get_post($value));
      $hesinhthai = get_post($value);
      if($kt ==FALSE){?>

        <div class="item_tab tab-pane fade active show" id="<?php echo $hesinhthai->post_name; ?>">
          <div class="row">
            <div class="col-lg-5 thumbnail_app">
              <img class="lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($hesinhthai->ID)) ?>" alt="">
            </div>
            <div class="col-lg-7 group_content_app">
             <?php echo $hesinhthai->post_excerpt; ?>
				<a class="smooth more" href="<?php echo get_post_permalink($hesinhthai->ID); ?>" title="">Xem thêm</a>
           </div>
			  
         </div>
       </div>
		<div style="clear: both;"></div>
       <?php $kt=TRUE;
     }
     else{?>
      <div class="item_tab tab-pane fade " id="<?php echo $hesinhthai->post_name; ?>">
        <div class="row">
          <div class="col-lg-5 thumbnail_app">
            <img class="lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($hesinhthai->ID)) ?>" alt="">
          </div>
          <div class="col-lg-7 group_content_app">
           <?php echo $hesinhthai->post_excerpt;  ?>
			  <a class="smooth more" href="<?php echo get_post_permalink($hesinhthai->ID); ?>" title="">Xem thêm</a>
         </div>
       </div>
		  
     </div>
		<div style="clear: both;"></div>
     <?php
   }
 } ?>







</div>
</div>
<div class="col-lg-12 group_link_dang_ky">
  <a class="event_btn btn_hover grow" data-toggle="modal" data-target="#informationForm" href="#information-form"><img class="lazy" data-src="<?php bloginfo("template_directory"); ?>/themes/default/images/template_new/calling.png" alt="" />Đăng ký tư vấn</a> <a class="event_btn event_btn_two btn_hover grow" data-toggle="modal" data-target="#informationForm" href="#information-form"><i class="arrow_triangle-right_alt2"></i>Dùng thử miễn phí</a>
</div>
</div>
</div>
</section>
<section class="enterprise_solutions">
  <div class="container">
    <div class="headbox">
      <h2 class="title"><?php echo get_post_meta( get_post()->ID,'_title_box_tinh_nang', $single = true ); ?></h2>
    </div>
    <div class="row">
      <div class="portfolio">
        <div class="img">
          <img class="lazy" data-src="<?php echo get_post_meta( get_post()->ID, 'aw2_custom_image', true ); ?>" alt="" width="591" height="679" />
        </div>
        <div class="items solution_app_desktop">

          <?php 
            if (get_post_meta( get_post()->ID, '_tinhnang_noibat', true )!=NULL&&get_post_meta( get_post()->ID, '_tinhnang_noibat', true )!="") {
              # code...
              foreach (get_post_meta( get_post()->ID, '_tinhnang_noibat', true ) as $value) {
            ?>
            <div class="item">
              <a href="<?php echo get_post_meta( get_post()->ID, '_LinkBaiViet', true ); ?>"><img class="lazy image-solutions" data-src="<?php echo $value->linkImg; ?>" alt=""></a>
              <h3 class="title smooth"><a href="<?php echo get_post_meta( get_post()->ID, '_LinkBaiViet', true ); ?>"><?php echo $value->title; ?></a></h3>
              <span><?php echo $value->content; ?></span>
              <p  class="more_details"><a class="more" href="<?php echo get_post_meta( get_post()->ID, '_LinkBaiViet', true ); ?>">Xem thêm</a></p>
            </div>

            
            <?php
            }
          }
          ?>
            
          
        </div>
        <div class="items solution_app_mobile">
            <?php 
            if (get_post_meta( get_post()->ID, '_tinhnang_noibat', true )!=NULL&&get_post_meta( get_post()->ID, '_tinhnang_noibat', true )!="") {
              # code...
              foreach (get_post_meta( get_post()->ID, '_tinhnang_noibat', true ) as $value) {
            ?>
            <div class="item">
              <a href="<?php echo get_post_meta( get_post()->ID, '_LinkBaiViet', true ); ?>"><img class="lazy" data-src="<?php echo $value->linkImg; ?>" alt=""></a>
              <h3 class="title smooth"><a href="<?php echo get_post_meta( get_post()->ID, '_LinkBaiViet', true ); ?>"><?php echo $value->title; ?></a></h3>
              <span><?php echo $value->content; ?></span>
              <p  class="more_details"><a class="more" href="<?php echo get_post_meta( get_post()->ID, '_LinkBaiViet', true ); ?>">Xem thêm</a></p>
            </div>

            
            <?php
            }
          }
          ?>
        </div>
      </div>
      <a href="<?php echo get_post_meta( get_post()->ID, '_LinkBaiViet', true ); ?>" class="load_all grow">Xem tất cả</a>
    </div>
  </div>
</section>
<section class="group_case_study">
  <div class="container">
    <div class="headbox">
      <h2 class="title" style="color: #fff;">Dự án tiêu biểu</h2>
    </div>
    <div class="row row_group">
      <div class="case_study col-lg-12">

        <?php $args = array('posts_per_page' => 10,'ignore_sticky_posts' => 1,'category_name' => 'khach-hang','order' => 'DESC','orderby' => 'date', ); ?>
        <?php $getposts = new WP_query( $args);?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
          <?php global $product; ?>
          <div class="item" style="height: 100%;">
            <div class="col-md-1"></div>
            <div class="col-md-5 raw-center">
              <div class="t-icon">
                <img class="lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>"  alt="" title="">
              </div>
            </div>
            <div class="col-md-5 group_content_case_study">
              <div class="headbox headbox_case">
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
</section>


<?php get_footer(); ?>