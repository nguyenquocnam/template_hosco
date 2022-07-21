 <?php
/*
 Template Name: hosco
 */
 ?>

 <?php get_header(); ?>
 <!-- cai nay la anh dau -->
 <div class="image-hosco">
 	<div class="image-hosco-item">
 		<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_post()->ID) );?>" alt="<?php the_title(); ?>" alt="" style="width: 100%">
 	</div>
 </div>
 <div class="mnfixed_wrap" style="position: relative; height: 43px;">
 	<div class="mnfixed_self" style="z-index: 10;  left: 0px; position: initial; top: 0px;">
 		<div class="menuTab">
 			<div class="wrapper">
 				<div class="select-j">
 					<div class="title">
 						<?php the_title( ); ?>
 					</div>
 					<div class="content">
 						<?php get_template_part('menuHosco'); ?>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <div class="content-hosco">
 	<!-- item tu day no tu dong trai phai trai phai -->
 	<div class="paddingTop">
 		<div class="vntTitleLine">
 			<h2><?php the_title( ); ?></h2>
 		</div>
		<div class="vnContent">
            <div class="content-hosco-vn">
                <?php the_content(); ?>
            </div>
        </div>
 		<div class="vntCultural">
 			<div id="vision_mission_list" class="listCultural">
 				<?php $getHosCo = get_post_meta( get_post()->ID, 'metaItemHosco',true);
 				if($getHosCo!=null && $getHosCo!='')
 				foreach ($getHosCo as $key => $value) {
 					?>
 					<div class="itemCultural wow fadeInUp" style="animation-delay: 0.3s;">
 						<div class="colT">
 							<div class="thumbA">
 								<img class="img-fluid" src="<?php echo $value->image; ?>" >
 							</div>
 						</div>
 						<div class="colD">

 							<div class="decsA">
 								<?php echo $value->content; ?>
 								
 							</div>
 						</div>
 					</div>
 					<?php


 				}
 				?>
 				
 				
 			</div>
 		</div>
 	</div>
 </div>
 <?php get_footer(); ?>