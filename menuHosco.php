<?php 
$menuLocations =get_nav_menu_locations();
// var_dump($menuLocations);
$menuId = $menuLocations['hosco-menu'];

$primatyNav = wp_get_nav_menu_items($menuId);
$id_parent =0;
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
	$url = "https://";   
else  
	$url = "http://";   
    // Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

    // Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    
// var_dump($primatyNav[1]);
echo "<ul>";
foreach ( $primatyNav as $navItem ) {
	// var_dump($navItem);
	if($navItem -> menu_item_parent == $id_parent){

		
		if($url==$navItem->url){
			echo '<li class="current">';
			echo  '<a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>'; 
			echo '</li>';
		}else{
			echo '<li>';
			echo  '<a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>'; 
			echo '</li>';

		}
		
		
	}
}
echo "</ul>";
?>