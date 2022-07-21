
<?php 
$menuLocations =get_nav_menu_locations();
$menuId = $menuLocations['main-nav'];

$primatyNav = wp_get_nav_menu_items($menuId);
$id_parent =0;
// var_dump($primatyNav[1]);

echo "<ul class='list-unstyled nav navbar-nav primary-menu'>";
foreach ( $primatyNav as $navItem ) {
	// var_dump($navItem);
	if($navItem -> menu_item_parent == $id_parent){
		$kt=FALSE;
		foreach ( $primatyNav as $navItem2 ) { 

			if($navItem2 -> menu_item_parent == $navItem ->ID){ echo  '<li> <a>'.$navItem->title.'</a>'; $kt =TRUE;break;?>


			<?php 
		} 
	}
	if($kt == FALSE)
		echo '<li> <a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>';


		//=====


		//=====
	foreach ( $primatyNav as $navItem2 ) { 
		if($navItem2 -> menu_item_parent == $navItem ->ID){
			$ktMenu = FALSE;
			if($ktMenu ==FALSE){
				foreach ( $primatyNav as $navItem3 ) { 
					if($navItem3 -> menu_item_parent == $navItem2 ->ID){
						$ktMenu=TRUE;

						break;
					} 
				}
			}

			if($ktMenu==TRUE){

				echo "<div class='swap'>";
				echo "<div class='show-swap'>";
				echo "<ul class='nav nav-tabs'>";
				$kt =FALSE;
				foreach ( $primatyNav as $navItem2 ) { 

					if($navItem2 -> menu_item_parent == $navItem ->ID && $kt ==FALSE){
						// var_dump($navItem2);
						echo "<li style='padding:0px;'  class='active'><a style='display:inline-block;width:100%;height:100%;margin:0px;padding:11px 0px;' data-toggle='tab' href='#".$navItem2->post_name."'>".$navItem2->title;
						echo "</a></li>";
						$kt = TRUE;

					} else if($navItem2 -> menu_item_parent == $navItem ->ID && $kt ==TRUE){
						// var_dump($navItem2);
						echo "<li style='padding:0px;'  ><a style='display:inline-block;width:100%;height:100%;margin:0px;padding:11px 0px;' data-toggle='tab'  href='#".$navItem2->post_name."'>".$navItem2->title;
						echo "</a></li>";
						$kt = TRUE;

					}
				}

				echo "</ul>";?>
				<div class="tab-content">
					<?php $kt = FALSE;
					foreach ( $primatyNav as $navItem2 ) { 

						if($navItem2 -> menu_item_parent == $navItem ->ID){ ?>

							<?php if($kt==FALSE) {?>
								<div id="<?php echo $navItem2->post_name; ?>" class="tab-pane fade in active show">
									<div class="tab-menu-mini">
										<ul class="row">
											<?php 
											foreach ( $primatyNav as $navItem3 ) { 
												if($navItem3 -> menu_item_parent == $navItem2 ->ID){
													
													if(get_post_type(get_post_meta($navItem3->ID,'_menu_item_object_id',true))=="page"){
													?>
													
													<li class="col-lg-4 list-sub">

														<div class="map-product-item" style="cursor: pointer;" onclick="window.location='<?php echo $navItem3->url; ?>';">
															<div class="map-product-logo">
																<a class="smooth icon " href="<?php echo $navItem3->url; ?>" title="">
																	<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_post_meta($navItem3->ID,'_menu_item_object_id',true)) );?>" alt="" title="">
																 
																</a>
															</div>
															<div class="map-product-info">
																<div class="content-sub-menu">
																	<a class="title" href="<?php echo $navItem3->url; ?>" title=""><?php echo $navItem3->title; ?></a>
																	
																</div>
															</div>
														</div>																	
													</li>
													<?php  
												} 
												else{
													
													?>
											<li class="col-lg-4 list-sub">

														<div class="map-product-item" style="cursor: pointer;" onclick="window.location='<?php echo $navItem3->url; ?>';">
															<div class="map-product-logo">
																<a class="smooth icon " href="<?php echo $navItem3->url; ?>" title="">
																	<img src="<?php echo get_post_meta(get_post_meta($navItem3->ID,'_menu_item_object_id',true),'logo-post',true);?>" alt="" title="">
																	
																 
																</a>
															</div>
															<div class="map-product-info">
																<div class="content-sub-menu">
																	<a class="title" href="<?php echo $navItem3->url; ?>" title=""><?php echo $navItem3->title; ?></a>
																	
																</div>
															</div>
														</div>																	
													</li>
											<?php
												}
												}
												$kt=TRUE;}?>
											</ul>
										</div>
									</div>
								<?php }else{
									?>
									<div id="<?php echo $navItem2->post_name; ?>" class="tab-pane fade ">
										<div class="tab-menu-mini">
											<ul class="row">
												<?php 
												foreach ( $primatyNav as $navItem3 ) { 
													if($navItem3 -> menu_item_parent == $navItem2 ->ID){
														if(get_post_type(get_post_meta($navItem3->ID,'_menu_item_object_id',true))=="page"){
														?>
														<li class="col-lg-4 list-sub">
															<div class="map-product-item" style="cursor: pointer;" onclick="window.location='<?php echo $navItem3->url; ?>';">
																<div class="map-product-logo">
																	<a class="smooth icon " href="<?php echo $navItem3->url; ?>" title="">
																		<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_post_meta($navItem3->ID,'_menu_item_object_id',true)) );?>" alt="" title="">

																	</a>
																</div>
																<div class="map-product-info">
																	<div class="content-sub-menu">
																		<a class="title" href="<?php echo $navItem3->url; ?>" title=""><?php echo $navItem3->title; ?></a>
																		
																	</div>
																</div>
															</div>
														</li>
														<?php  
													} else{
													
													?>
											<li class="col-lg-4 list-sub">

														<div class="map-product-item" style="cursor: pointer;" onclick="window.location='<?php echo $navItem3->url; ?>';">
															<div class="map-product-logo">
																<a class="smooth icon " href="<?php echo $navItem3->url; ?>" title="">
																	<img src="<?php echo get_post_meta(get_post_meta($navItem3->ID,'_menu_item_object_id',true),'logo-post',true);?>" alt="" title="">
																	
																 
																</a>
															</div>
															<div class="map-product-info">
																<div class="content-sub-menu">
																	<a class="title" href="<?php echo $navItem3->url; ?>" title=""><?php echo $navItem3->title; ?></a>
																	
																</div>
															</div>
														</div>																	
													</li>
											<?php
												}
													}
												}?>
											</ul>
										</div>
									</div>
									<?php
								}?>
								<?php 
							} 
						}
						?>
					</div>
					<?php
					echo "</div>";
					echo "</div>";
					break;
				}else{echo $ktMenu;
					?>
					<div class="dropdown-menu hosco-tintuc-menu" style="position: absolute;margin:-1px;">
						<ul >
							<?php 
							foreach ( $primatyNav as $navItem2 ) { 

								if($navItem2 -> menu_item_parent == $navItem ->ID){

									?>
										<li class="dropdown-item"><a href="<?php echo $navItem2->url; ?>" style="float: none; width: auto;"><?php echo $navItem2->title; ?></a></li>
									<?php

								} 
							}
							?>
							
							
						</ul>
					</div>
					<?php
				break;}

			} 
		}
		echo '</li>';
	}
}
echo "</ul>";
?>
<!-- ---------------------menumobile-------------------- -->
<div id="myNav" class="overlay">
	<a href="javascript:void(0)" style="position: absolute;top: -20px;" class="closebtn" onclick="closeNav()">&times;</a>
	<nav class='menu-mobile-in'>
		<ul>
			<?php
			foreach ( $primatyNav as $navItem ) {
				if($navItem -> menu_item_parent == $id_parent){
					$kt = FALSE;
					foreach ( $primatyNav as $navItem2 ) { 
						if($navItem2 -> menu_item_parent == $navItem ->ID){
							$kt=TRUE;
							break;
						}
					}
					if($kt == FALSE)
						echo '<li> <a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>'; 
					else {
						echo '<li class="sub-menu"> <a title="'.$navItem->title.'">'.$navItem->title.'<div class="fa fa-caret-down right"></div></a>'; 
						?>
						<ul>
							<?php
							foreach ( $primatyNav as $navItem2 ) {
								if($navItem2 -> menu_item_parent == $navItem->ID){
									$kt = FALSE;
									foreach ( $primatyNav as $navItem3 ) { 
										if($navItem3 -> menu_item_parent == $navItem2 ->ID){
											$kt=TRUE;
											break;
										}
									}
									if($kt == FALSE)
										echo '<li> <a href="'.$navItem2->url.'" title="'.$navItem2->title.'">'.$navItem2->title.'</a>'; 
									else {
										echo '<li class="sub-menu"> <a title="'.$navItem2->title.'">'.$navItem2->title.'<div class="fa fa-caret-down right"></div></a>'; 
										?>
										<ul>

											<?php
											foreach ( $primatyNav as $navItem3 ) {
												if($navItem3 -> menu_item_parent == $navItem2->ID){
													$kt = FALSE;
													foreach ( $primatyNav as $navItem4 ) { 
														if($navItem4 -> menu_item_parent == $navItem3 ->ID){
															$kt=TRUE;
															break;
														}
													}
													if($kt == FALSE)
														echo '<li> <a href="'.$navItem3->url.'" title="'.$navItem3->title.'">'.$navItem3->title.'</a>'; 
													else {
														echo '<li class="sub-menu"> <a href="'.$navItem3->url.'" title="'.$navItem3->title.'">'.$navItem3->title.'<div class="fa fa-caret-down right"></div></a>'; 
														?>
														<?php
													}
													echo '</li>';
												}
											}
											?>
										</ul>

										<?php
									}
									echo '</li>';
								}
							}
							?>
						</ul>
						<?php 
						?>
						<?php
					}
					echo '</li>';
				}
			}
			?>
		</ul>
	</nav>
</div>
<span class="icon-menu-body" style="font-size:30px;cursor:pointer;position: absolute;right: 2%;" onclick="openNav()">&#9776; </span>