<?php 
$testimonial_slider_block_width = get_sub_field('tes_bW');
$testimonial_slider_order = get_sub_field('tes_or');
$testimonial_slider_mobile = get_sub_field('tes_mo');
$testimonial_slider_hide_mobile = get_sub_field('tes_hMo');
$testimonial_slider_break = get_sub_field('tes_br');
$testimonial_slider_block_align = get_sub_field('tes_bAl');
$testimonial_slider_animation = get_sub_field('tes_an');

$testimonial_slider = get_sub_field('tes_s');
$testimonial_slider_style = get_sub_field('tes_sy');
$testimonial_slider_count = get_sub_field('tes_cu');

$testimonial_slider_title_color = get_sub_field('tes_Tcl');
$testimonial_slider_content_color = get_sub_field('tes_Ccl');
$testimonial_slider_name_color = get_sub_field('tes_nCl');
$testimonial_slider_cut = get_sub_field('tes_ct');

$testimonial_slider_title = get_sub_field('tes_t');
$testimonial_slider_title_size = get_sub_field('tes_tSz');
$testimonial_slider_title_color = get_sub_field('tes_tCl');
$testimonial_slider_title_align = get_sub_field('tes_tAl');
$testimonial_slider_subtitle = get_sub_field('tes_st');
$testimonial_slider_subtitle_size = get_sub_field('tes_stS');
$testimonial_slider_subtitle_color = get_sub_field('tes_stC');

if ( $testimonial_slider_hide_mobile && wp_is_mobile() ) {
//HIDE ON MOBILE
} else { ?>

<div class="flex_content_cols <?php echo $testimonial_slider_mobile;?> <?php echo $testimonial_slider_block_width;?> <?php if( $testimonial_slider_break ){ ?><?php echo $testimonial_slider_block_align; ?><?php } ?>" <?php if( $testimonial_slider_order ){ ?>style="order:<?php echo $testimonial_slider_order; ?>;"<?php } ?>>
	<section id="section-<?php echo $row;?>-<?php echo $count;?>" class="page_flexible page_flexible_content section-<?php echo $row;?>-<?php echo $count;?> count_sections_<?php echo $count;?>" data-aos="<?php echo $testimonial_slider_animation;?>">

		<div class="testimonial_slider flexible_page_element" itemprop="text">
			<div class="testimonial_slider_container testimonial_slider_<?php echo $testimonial_slider_style;?>">
				
				<?php if( $testimonial_slider_title || $testimonial_slider_subtitle ) { ?>
				<div class="masonary_grid_link_title_wrap">
					<?php if( $testimonial_slider_title ) { ?>
					<h2 class="section_title section_flex_title title_<?php echo $testimonial_slider_title_align; ?>" style="text-align:<?php echo $testimonial_slider_title_align; ?> !important;color:<?php echo $testimonial_slider_subtitle_color; ?>;font-size:<?php echo $testimonial_slider_title_size; ?>px;"><?php echo $testimonial_slider_title; ?></h2>
					<?php } ?>
					<?php if( $testimonial_slider_subtitle ) { ?>
					<div class="section_subtitle title_<?php echo $testimonial_slider_title_align; ?>" itemprop="headline" style="text-align:<?php echo $$testimonial_slider_title_align; ?> !important;color:<?php echo $testimonial_slider_subtitle_size; ?>;font-size:<?php echo $testimonial_slider_subtitle_size; ?>px;"><?php echo $testimonial_slider_subtitle; ?></div>
					<?php } ?>
				</div>
				<?php } ?>	
							
				<div class="testimonial_slider_wrap">
					<div class="testimonial_slider_row">
						<div class="testimonial_slider_col">
		
						    <div class="testimonial_slider_<?php echo $row;?>_<?php echo $count;?>">
								<div class="testimonial_slider_items home_qa_items swiper-container">
								<?php if( have_rows('tes_s') ): ?>
									<div class="testimonial_slider_item_wrap home_qa_item_wrap swiper-wrapper">
									<?php while( have_rows('tes_s') ): the_row(); 
										$testimonial_slider_title = get_sub_field('tes_sT');
										$testimonial_slider_content = get_sub_field('tes_sC');
										$testimonial_slider_img = get_sub_field('tes_sI');
										$testimonial_slider_name = get_sub_field('tes_sN');
										?>
										<?php if( $testimonial_slider_style == 'style1' ){ ?>
																		
										<div class="testimonial_slider_item_container swiper-slide">
											<div class="testimonial_slider_item_wrap">
												<div class="testimonial_slider_item">
													<div class="testimonial_slider_item_img">
														<?php echo wp_get_attachment_image( $testimonial_slider_img, $testimonial_slider_cut ); ?>
													</div>
													<div class="testimonial_slider_item_title" style="color:<?php echo $testimonial_slider_title_color;?>;">
														<?php echo $testimonial_slider_title; ?>
													</div>
													<div class="testimonial_slider_item_content" style="color:<?php echo $testimonial_slider_content_color;?>;">
														<?php echo $testimonial_slider_content; ?>
													</div>
													<div class="testimonial_slider_item_name" style="color:<?php echo $testimonial_slider_name_color;?>;">
														<?php echo $testimonial_slider_name; ?>
													</div>
												</div>
											</div>
										</div>
										<?php } ?>
										<?php if( $testimonial_slider_style == 'style2' ){ ?>
										<div class="testimonial_slider_item_container swiper-slide">
											<div class="testimonial_slider_item_wrap">
												<div class="testimonial_slider_item">
													<div class="testimonial_slider_item_img">
														<?php echo wp_get_attachment_image( $testimonial_slider_img, 'full' ); ?>
													</div>
													<div class="testimonial_slider_item_text">
														<div class="testimonial_slider_item_title" style="color:<?php echo $testimonial_slider_title_color;?>;">
															<?php echo $testimonial_slider_title; ?>
														</div>
														<div class="testimonial_slider_item_content" style="color:<?php echo $testimonial_slider_content_color;?>;">
															<?php echo $testimonial_slider_content; ?>
														</div>
														<div class="testimonial_slider_item_name" style="color:<?php echo $testimonial_slider_name_color;?>;">
															<?php echo $testimonial_slider_name; ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php } ?>
										
									<?php endwhile; ?>
									</div>
								<?php endif; ?>
								</div>
							</div>
						    <!-- Add Arrows -->
						    <!-- <div id="js-pagination-<?php echo $row;?>-<?php echo $count;?>" class="swiper-pagination style1"></div> -->
						    <div id="js-next-<?php echo $row;?>-<?php echo $count;?>" class="swiper-button-next"></div>
						    <div id="js-prev-<?php echo $row;?>-<?php echo $count;?>" class="swiper-button-prev"></div>
												
						</div>

					</div>
				</div>
			</div>
		</div>
		
		<script>					
		jQuery(function($) {
			//* ## Page Link Slider */
		    let options<?php echo $row;?><?php echo $count;?> = {};
		    
		    if ( $("#section-<?php echo $row;?>-<?php echo $count;?> .swiper-slide").length > 1 ) {
		        options<?php echo $row;?><?php echo $count;?> = {
		            //direction: 'horizontal',
		            loop: true,
		            slidesPerView : <?php echo $testimonial_slider_count;?>,
		            autoplayDisableOnInteraction: false,
					pagination: {
						el: '#section-<?php echo $row;?>-<?php echo $count;?> .swiper-pagination',
						clickable: true,
					},
					navigation: {
						nextEl: '#section-<?php echo $row;?>-<?php echo $count;?> .swiper-button-next',
						prevEl: '#section-<?php echo $row;?>-<?php echo $count;?> .swiper-button-prev',
					},
		            paginationClickable: true,
		            fadeEffect: {
			            crossFade: true
		            },
					speed: 1000,
					grabCursor: true,
					watchSlidesProgress: true,
					mousewheelControl: true,
					keyboardControl: true,
					//effect: 'fade',  
					breakpoints: {
						768: {
							navigation: false,
							slidesPerView : 1,
				        }
					}
					        
		        }
		        $('#section-<?php echo $row;?>-<?php echo $count;?> .swiper-button-next').hide();
		        $('#section-<?php echo $row;?>-<?php echo $count;?> .swiper-button-prev').hide();
		    } else {
		        options<?php echo $row;?><?php echo $count;?> = {
		            loop: false,
		            slidesPerView : <?php echo $testimonial_slider_count;?>,
		            autoplay: false,
		            watchOverflow: true,
		            navigation: false,
		        }
		        $('#section-<?php echo $row;?>-<?php echo $count;?> .swiper-button-next').hide();
		        $('#section-<?php echo $row;?>-<?php echo $count;?> .swiper-button-prev').hide();
		    }
		    var qaSlider<?php echo $row;?><?php echo $count;?> = new Swiper('#section-<?php echo $row;?>-<?php echo $count;?> .swiper-container ', options<?php echo $row;?><?php echo $count;?>);	
		    
		    if ( $("#section-<?php echo $row;?>-<?php echo $count;?> .swiper-slide:not(.swiper-slide-duplicate)").length > 1 ) {
		        $('#section-<?php echo $row;?>-<?php echo $count;?> .swiper-button-next').show();
		        $('#section-<?php echo $row;?>-<?php echo $count;?> .swiper-button-prev').show();		    
		    }
		    
		    if ($(window).width() < 991) {
			    if ( $("#section-<?php echo $row;?>-<?php echo $count;?> .swiper-slide:not(.swiper-slide-duplicate)").length > 1 ) {
					$('#section-<?php echo $row;?>-<?php echo $count;?> .swiper-pagination').show();
			    }
		    }							
	
		}); 
		</script>					
	</section>
</div>
<?php if( $testimonial_slider_break ){ ?><div class="break"></div><?php } ?>
<?php } ?>
