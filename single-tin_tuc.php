<?php get_header();?>

<section class="blog-pp">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="menu-tab-infor">
					<div class="sidenav-tt">
						<div class="main-left">
							<div class="list-category">
							<h1 style="font-size: 20px;margin-left: 15px;">Tin Tức</h1>

							<?php 
							$args = array(
								'posts_per_page' => 20,
								'post_type'      => 'tin_tuc'
							);
							$the_query = new WP_Query( $args );
							?>
							<?php if( $the_query->have_posts() ): ?>
								<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

									<div class="list-category-box" >
										<div class="box-img">
											<a href="<?php echo get_post_permalink(); ?>" class="img">
												<img width="600px" height="350px" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="">                    </a>
											</div>
											<div class="box-txt">
												<p class="title">
													<a href="<?php echo get_post_permalink(); ?>"  style="font-size: 18px;"><?php the_title(); ?></a>
												</p>
												
											</div>
										</div>

									<?php endwhile; ?>
								<?php endif; ?>
								<?php wp_reset_query(); ?>







							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="tin-tuc-chi-tiet">
					<div class="main-right">
						<div class="list-category">
							<p>Trang Chủ > <a href="http://localhost/wordpress/?page_id=24">Tin Tức</a></p>

							<?php 

								$args = array(
									'posts_per_page' => 20,
									'post_type'      => 'tin_tuc',
									'name'=>$_GET['tin_tuc']
								);
								$the_query = new WP_Query( $args );
								?>
								<?php if( $the_query->have_posts() ): ?>
									<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
										<h1><?php the_title( ); ?></h1>
										<?php  ?>
										<?php the_content(); ?>


									<?php endwhile; ?>
								<?php endif; ?>
								<?php wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>						
</section>

<?php get_footer(); ?>