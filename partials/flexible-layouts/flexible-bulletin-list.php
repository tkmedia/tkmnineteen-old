<?php 
$bulletin_list_block_width = get_sub_field('bl_bW');
$bulletin_list_mobile_cols = get_sub_field('bl_mo');
$bulletin_list_hide_mobile = get_sub_field('bl_hMo');
$bulletin_list_order = get_sub_field('bl_or');
$bulletin_list_break = get_sub_field('bl_br');
$bulletin_list_block_align = get_sub_field('bl_bAl');
$bulletin_list_animation = get_sub_field('bl_an');

$bulletin_list_title = get_sub_field('bl_t');
$bulletin_list_subtitle = get_sub_field('bl_st');
$bulletin_list_width = get_sub_field('f_bull_width');
$bulletin_list = get_sub_field('bl_l');
$bulletin_layout = get_sub_field('bl_ly');
$bulletin_list_img_position = get_sub_field('bl_iPo');
$bulletin_list_img_align = get_sub_field('bl_iAl');
$bulletin_list_img_num = get_sub_field('bl_iNu');
$bulletin_list_img_mobile_num = get_sub_field('bl_iMn');
$bulletin_list_size = get_sub_field('bl_sz');
$bulletin_list_icon_size = get_sub_field('bl_iSz');
$bulletin_list_img_size = get_sub_field('bl_iSc');

$bull_mobile_sty = get_sub_field('bl_mDp');

if ( $bulletin_list_img_mobile_num == 1 ) : $bl_xs_cols = "12"; $bl_sm_cols = "12";
elseif ( $bulletin_list_img_mobile_num == 2 ) : $bl_xs_cols = "6";
elseif ( $bulletin_list_img_mobile_num == 3 ) : $bl_xs_cols = "4";
endif;
if ( $bulletin_list_img_num == 1 ) : $bl_md_cols = "12"; 
elseif ( $bulletin_list_img_num == 2 ) : $bl_sm_cols = "6"; $bl_md_cols = "6"; 
elseif ( $bulletin_list_img_num == 3 ) : $bl_sm_cols = "4"; $bl_md_cols = "4"; 
elseif ( $bulletin_list_img_num == 4 ) : $bl_sm_cols = "3"; $bl_md_cols = "3";
elseif ( $bulletin_list_img_num == 5 ) : $bl_sm_cols = "3"; $bl_md_cols = "20"; 
elseif ( $bulletin_list_img_num == 6 ) : $bl_sm_cols = "3"; $bl_md_cols = "2"; 
endif; 

if ( $bulletin_list_hide_mobile && wp_is_mobile() ) {
//HIDE ON MOBILE
} else { ?>

<div class="flex_content_cols <?php echo $bulletin_list_mobile_cols;?> <?php echo $bulletin_list_block_width;?> <?php if( $bulletin_list_break ){ ?><?php echo $bulletin_list_block_align; ?><?php } ?>" <?php if( $bulletin_list_order ){ ?>style="order:<?php echo $bulletin_list_order; ?>;"<?php } ?>>
	<section id="section-<?php echo $row;?>-<?php echo $count;?>" class="page_flexible page_flexible_content section-<?php echo $row;?>-<?php echo $count;?> count_sections_<?php echo $count;?>" data-aos="<?php echo $bulletin_list_animation;?>">
		
		<div class="bulletin_list flexible_page_element" itemprop="text">
			<div class="bulletin_list_wrap">
				<?php if( $bulletin_list_title ) { ?>
				<h2 class="section_title section_flex_title"><?php echo $bulletin_list_title; ?></h2>
				<?php } ?>
				<?php if( $bulletin_list_subtitle ) { ?>
					<div class="flex_bulletin_list_subtitle" itemprop="headline"><?php echo $bulletin_list_subtitle; ?></div>
				<?php } ?>
				
				<?php if( $bull_mobile_sty == 'mob_slider' && $bulletin_layout == 'row-flex' && wp_is_mobile() ) { ?>	


				<?php if( have_rows('bl_l') ): ?>
				<div class="swiper-container bulletin_list_slider">
					<div class="swiper-wrapper flex_bulletin_list icons_<?php echo $bulletin_list_size; ?>" style="width:<?php echo $bulletin_list_width; ?>%;">
					<?php while( have_rows('bl_l') ): the_row(); 
						$bulletin_list_style = get_sub_field('bl_lS');
						$bulletin_list_icon = get_sub_field('bl_lIf');
						$bulletin_list_img = get_sub_field('bl_lI');
						$bulletin_list_title = get_sub_field('bl_lT');
						$bulletin_icon_font_color = get_sub_field('bl_lIfc');
						
						$bulletin_list_link = get_sub_field('bl_lL');
						$bulletin_list_title_color = get_sub_field('bl_lTc');
						$bulletin_list_title_size = get_sub_field('bl_lTs');
						$bulletin_list_text = get_sub_field('bl_lTx');
						$bulletin_list_text_color = get_sub_field('bl_lTc');
						$bulletin_list_text_size = get_sub_field('bl_lTsz');
						$bulletin_list_icon_img_bw = get_sub_field('bl_lIb');
						
					?>
						<div class="flex_bulletin_list_item swiper-slide">

						<?php if( $bulletin_list_link ) { ?>	
						<a href="<?php echo $bulletin_list_link; ?>">
						<?php } ?>	
							<div class="flex_bulletin_list_item_wrap <?php echo $bulletin_list_img_position; ?> <?php if( $bulletin_layout == 'row-flex' ) { echo $bulletin_list_img_align; ?>-xs<?php } ?>">
								
								<?php if( $bulletin_list_img_position == 'img_block top_title' ): ?>
									<?php if( $bulletin_list_title ) { ?>
									<div class="flex_bulletin_list_title top_title" style="color:<?php echo $bulletin_list_title_color; ?>;font-size:<?php echo $bulletin_list_title_size; ?>px;">
										<?php echo $bulletin_list_title; ?>
									</div>
									<?php } ?>
								<?php endif; ?>	
								
								<?php if( $bulletin_list_icon || $bulletin_list_img ) { ?>	
									<?php if( $bulletin_list_style == 'bulletin_img' ): ?>
									<div class="flex_bulletin_list_icon bulletin_list_img<?php if( $bulletin_list_icon_img_bw ) { ?> bulletin_list_img_bw<?php } ?>">
										<div class="list_icon">
											<?php echo wp_get_attachment_image( $bulletin_list_img, $bulletin_list_img_size ); ?>
										</div>
									</div>
									<?php endif; ?>	
									<?php if( $bulletin_list_style == 'bulletin_font' ): ?>
									<div class="flex_bulletin_list_icon" style="font-size:<?php echo $bulletin_list_icon_size; ?>px;width:calc(<?php echo $bulletin_list_icon_size; ?>px + 40px);">
										<div class="flex_bulletin_list_icon_inner" style="color:<?php echo $bulletin_icon_font_color; ?>;"><?php echo $bulletin_list_icon; ?></div>
									</div>
									<?php endif; ?>	
								<?php } ?>
								
								<div class="flex_bulletin_list_content">
									<?php if( $bulletin_list_img_position !== 'img_block top_title' ): ?>
										<?php if( $bulletin_list_title ) { ?>
										<div class="flex_bulletin_list_title" style="color:<?php echo $bulletin_list_title_color; ?>;font-size:<?php echo $bulletin_list_title_size; ?>px;">
											<?php echo $bulletin_list_title; ?>
										</div>
										<?php } ?>
									<?php endif; ?>	
									<?php if( $bulletin_list_text ) { ?>
									<div class="flex_bulletin_list_text" style="color:<?php echo $bulletin_list_text_color; ?>;font-size:<?php echo $bulletin_list_text_size; ?>px;">
										<?php echo $bulletin_list_text; ?>
									</div>
									<?php } ?>
								</div>										
								
							</div>
						<?php if( $bulletin_list_link ) { ?>	
						</a>
						<?php } ?>	
						</div>
						<?php endwhile; ?>
					</div>
				    <!-- Add Arrows -->
				    
				    <div class="swiper-button-next"></div>
				    <div class="swiper-button-prev"></div>
				</div>
				<script>					
				jQuery(function($) {
					
				    let options<?php echo $row;?><?php echo $count;?> = {};
				    
				    if ( $("#section-<?php echo $row;?>-<?php echo $count;?> .swiper-slide").length > 1 ) {
				        options<?php echo $row;?><?php echo $count;?> = {
				            //direction: 'horizontal',
				            loop: true,
				            slidesPerView : 1,
				            autoplayDisableOnInteraction: false,
							pagination: {
								el: '#section-<?php echo $row;?>-<?php echo $count;?> .swiper-pagination',
								clickable: true,
								type: 'fraction',
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
									slidesPerView : 2,
						        },
								991: {
									slidesPerView : 3,
						        },
								1200: {
									slidesPerView : 4,
						        },
							}
							        
				        }
				        $('#section-<?php echo $row;?>-<?php echo $count;?> .swiper-button-next').show();
				        $('#section-<?php echo $row;?>-<?php echo $count;?> .swiper-button-prev').show();
				    } else {
				        options<?php echo $row;?><?php echo $count;?> = {
				            loop: false,
				            slidesPerView : 1,
				            autoplay: false,
				            watchOverflow: true,
				            navigation: false,
				        }
				    }
				    var topSlider<?php echo $row;?><?php echo $count;?> = new Swiper('#section-<?php echo $row;?>-<?php echo $count;?> .bulletin_list_slider', options<?php echo $row;?><?php echo $count;?>);								
					
				}); 				
				</script>								
				
				
				<?php endif; ?>

				
				<?php } else { ?>	
				<?php if( have_rows('bl_l') ): ?>
					<div class="flex_bulletin_list icons_<?php echo $bulletin_list_size; ?> <?php echo $bulletin_layout; ?>" style="width:<?php echo $bulletin_list_width; ?>%;">
					<?php while( have_rows('bl_l') ): the_row(); 
						$bulletin_list_style = get_sub_field('bl_lS');
						$bulletin_list_icon = get_sub_field('bl_lIf');
						$bulletin_list_img = get_sub_field('bl_lI');
						$bulletin_list_title = get_sub_field('bl_lT');
						$bulletin_icon_font_color = get_sub_field('bl_lIfc');
						
						$bulletin_list_link = get_sub_field('bl_lL');
						$bulletin_list_title_color = get_sub_field('bl_lTc');
						$bulletin_list_title_size = get_sub_field('bl_lTs');
						$bulletin_list_text = get_sub_field('bl_lTx');
						$bulletin_list_text_color = get_sub_field('bl_lTc');
						$bulletin_list_text_size = get_sub_field('bl_lTsz');
						$bulletin_list_icon_img_bw = get_sub_field('bl_lIb');
						
					?>
						<?php if( $bulletin_layout == 'row-flex' ) { ?>
						<div class="flex_bulletin_list_item col-xs-<?= $bl_xs_cols; ?> col-sm-<?= $bl_sm_cols; ?> col-md-<?= $bl_md_cols; ?>">
						<?php } else { ?>
						<div class="flex_bulletin_list_item">
						<?php } ?>	
						<?php if( $bulletin_list_link ) { ?>	
						<a href="<?php echo $bulletin_list_link; ?>">
						<?php } ?>	
							<div class="flex_bulletin_list_item_wrap <?php echo $bulletin_list_img_position; ?> <?php if( $bulletin_layout == 'row-flex' ) { echo $bulletin_list_img_align; ?>-xs<?php } ?>">
								
								<?php if( $bulletin_list_img_position == 'img_block top_title' ): ?>
									<?php if( $bulletin_list_title ) { ?>
									<div class="flex_bulletin_list_title top_title" style="color:<?php echo $bulletin_list_title_color; ?>;font-size:<?php echo $bulletin_list_title_size; ?>px;">
										<?php echo $bulletin_list_title; ?>
									</div>
									<?php } ?>
								<?php endif; ?>	
								
								<?php if( $bulletin_list_icon || $bulletin_list_img ) { ?>	
									<?php if( $bulletin_list_style == 'bulletin_img' ): ?>
									<div class="flex_bulletin_list_icon bulletin_list_img<?php if( $bulletin_list_icon_img_bw ) { ?> bulletin_list_img_bw<?php } ?>">
										<div class="list_icon">
											<?php echo wp_get_attachment_image( $bulletin_list_img, $bulletin_list_img_size ); ?>
										</div>
									</div>
									<?php endif; ?>	
									<?php if( $bulletin_list_style == 'bulletin_font' ): ?>
									<div class="flex_bulletin_list_icon" style="font-size:<?php echo $bulletin_list_icon_size; ?>px;width:calc(<?php echo $bulletin_list_icon_size; ?>px + 40px);">
										<div class="flex_bulletin_list_icon_inner" style="color:<?php echo $bulletin_icon_font_color; ?>;"><?php echo $bulletin_list_icon; ?></div>
									</div>
									<?php endif; ?>	
								<?php } ?>
								
								<div class="flex_bulletin_list_content">
									<?php if( $bulletin_list_img_position !== 'img_block top_title' ): ?>
										<?php if( $bulletin_list_title ) { ?>
										<div class="flex_bulletin_list_title" style="color:<?php echo $bulletin_list_title_color; ?>;font-size:<?php echo $bulletin_list_title_size; ?>px;">
											<?php echo $bulletin_list_title; ?>
										</div>
										<?php } ?>
									<?php endif; ?>	
									<?php if( $bulletin_list_text ) { ?>
									<div class="flex_bulletin_list_text" style="color:<?php echo $bulletin_list_text_color; ?>;font-size:<?php echo $bulletin_list_text_size; ?>px;">
										<?php echo $bulletin_list_text; ?>
									</div>
									<?php } ?>
								</div>										
								
							</div>
						<?php if( $bulletin_list_link ) { ?>	
						</a>
						<?php } ?>	
						</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<?php } ?>
							
			</div>
		</div>					

	</section>
</div>
<?php if( $bulletin_list_break ){ ?><div class="break"></div><?php } ?>
<?php } ?>
