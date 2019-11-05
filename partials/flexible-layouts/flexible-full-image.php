<?php
$f_img_block_width = get_sub_field('fi_bW');
$f_img_break = get_sub_field('fi_br');
$f_img_block_align = get_sub_field('fi_bAl');
$f_img_order = get_sub_field('fi_or');
$f_img_mobile_cols = get_sub_field('fi_mo');
$f_img_hide_mobile = get_sub_field('fi_hMo');
$image_animation = get_sub_field('fi_an');
$f_img_title = get_sub_field('fi_t');
$f_img_title_size = get_sub_field('fi_tSz');
$f_img_title_color = get_sub_field('fi_tCl');
$f_img_title_align = get_sub_field('fi_tAl');
$f_img_title_location = get_sub_field('fi_tLo');
$f_img = get_sub_field('f_img');

$f_img_type = get_sub_field('fi_tp');
$f_img_align = get_sub_field('fi_al');
$f_img_style = get_sub_field('fi_st');
$f_img_bg = get_sub_field('fi_bg');
$f_img_logo = get_sub_field('fi_lg');
$logo_position = get_sub_field('fi_lgP');
$f_img_height = get_sub_field('fi_h'); 
$f_img_text = get_sub_field('fi_tx');
$f_img_text_ver = get_sub_field('fi_txV');
$f_img_text_align = get_sub_field('fi_txAl');
$f_img_text_size = get_sub_field('fi_txSz');
$f_img_text_color = get_sub_field('fi_txCl');
$f_img_links = get_sub_field('fi_lk');

$f_img_btn1 = get_sub_field('fi_bt1');
$f_img_btn1_link = get_sub_field('fi_bt1l');
$f_img_btn2 = get_sub_field('fi_bt2');
$f_img_btn2_link = get_sub_field('fi_bt2l');
$f_img_full_link = get_sub_field('fi_fl');
$image_full_link_fancybox = get_sub_field('fi_lFb');

$image_full_top_margin = get_sub_field('fi_fTm');
$image_full_bottom_margin = get_sub_field('fi_bM');

if ( $f_img_hide_mobile && wp_is_mobile() ) {
//HIDE ON MOBILE
} else { ?>

<div class="flex_content_cols <?php echo $f_img_mobile_cols;?> <?php echo $f_img_block_width;?> <?php if( $f_img_break ){ ?><?php echo $f_img_block_align; ?><?php } ?>" <?php if( $f_img_order ){ ?>style="order:<?php echo $f_img_order; ?>;"<?php } ?>>
	<section id="section-<?php echo $row;?>-<?php echo $count;?>" class="page_flexible page_flexible_content section-<?php echo $row;?>-<?php echo $count;?> count_sections_<?php echo $count;?>" data-aos="<?php echo $image_animation;?>">
		<div class="flex_image_container flexible_page_element <?php echo $f_img_title_location;?>">
		<div class="flex_image_row row-flex">	
			<?php if( $f_img_title ) { ?>
			<div class="col-xs-12 section_title section_flex_title flex_image_title title_<?php echo $f_img_title_align; ?>" style="text-align:<?php echo $f_img_title_align; ?> !important;color:<?php echo $f_img_title_color; ?>;font-size:<?php echo $f_img_title_size; ?>px;"><?php echo $f_img_title; ?></div>
			<?php } ?>
			
		    <div class="flex_image col-xs-12">
		    <?php if( $f_img_links == 'img_link' ): ?>
				<?php if( $f_img_full_link ) { ?>
					<?php if( $image_full_link_fancybox ) { ?>
					<a class="flex_image_full_link" data-fancybox href="<?php echo $f_img_full_link; ?>">
					<?php } else { ?>
					<a href="<?php echo $f_img_full_link; ?>" class="flex_image_full_link">
					<?php } ?> 
				<?php } ?>
			<?php endif; ?>    
		        <div class="flex_image_row col-xs-12 <?php if ($f_img_style): echo implode(' ', $f_img_style); endif; ?>">
		            <div class="flex_image_img image_<?php echo $f_img_align; ?> img_<?php echo $f_img_bg; ?>" <?php if( $f_img_bg == 'cover' ): ?>style="height:<?php echo $f_img_height; ?>px;margin-top:<?php echo $image_full_top_margin; ?>;margin-bottom:<?php echo $image_full_bottom_margin; ?>;"<?php endif; ?>>
			            <?php if( $f_img_type == 'inside-post' ): ?>
			            <?php echo wp_get_attachment_image( $f_img, 'inside-post' ); ?>
			            <?php endif; ?>
			            <?php if( $f_img_type == 'block-300' ): ?>
			            <?php echo wp_get_attachment_image( $f_img, 'block-300' ); ?>
			            <?php endif; ?>						            
			            <?php if( $f_img_type == '500c' ): ?>
			            <?php echo wp_get_attachment_image( $f_img, 'product-500c' ); ?>
			            <?php endif; ?>
			            <?php if( $f_img_type == 'portrait' ): ?>
			            <?php echo wp_get_attachment_image( $f_img, 'portrait' ); ?>
			            <?php endif; ?>
			            <?php if( $f_img_type == 'full' ): ?>
			            <?php echo wp_get_attachment_image( $f_img, 'full' ); ?>
			            <?php endif; ?>
			            <?php if( $f_img_logo && in_array('inside_logo', $f_img_style) ): ?>
			            <div class="flex_image_img_logo_position row-flex <?php echo $logo_position; ?>">
				            <div class="flex_image_img_logo">
					            <?php echo wp_get_attachment_image( $f_img_logo, 'full' ); ?>
				            </div>
			            </div>
			            <?php endif; ?>
			            
			            <?php if( $f_img_style && in_array('img_content', $f_img_style) ): ?>
			            <div class="flex_image_img_content row-flex <?php echo $f_img_text_align; ?> <?php echo $f_img_text_ver; ?>">
				            <div class="img_content">
					            <?php if( $f_img_text ) { ?>
					            <div class="img_content_text">
						            <p style="color:<?php echo $f_img_text_color; ?>;font-size: <?php echo $f_img_text_size; ?>px;"><?php echo $f_img_text; ?></p>
					            </div>
					            <?php } ?>
					            
					            <?php if( $f_img_links == 'btn_link' ): ?>
						            <?php if( $f_img_btn1 ) { ?>
						            <div class="img_content_btn image_btn1">
							            <?php if( $f_img_btn1_link ) { ?><a href="<?php echo $f_img_btn1_link; ?>" class=""><?php } ?>
										<button class="section_readmore_link watch_btn hoverLink"><?php echo $f_img_btn1; ?></button>
										<?php if( $f_img_btn1_link ) { ?></a><?php } ?>
						            </div>
						            <?php } ?>
						            <?php if( $f_img_btn2 ) { ?>
						            <div class="img_content_btn image_btn2">
										<?php if( $f_img_btn2_link ) { ?><a href="<?php echo $f_img_btn2_link; ?>" class=""><?php } ?>	
										<button class="section_readmore_link watch_btn hoverLink"><?php echo $f_img_btn2; ?></button>
										<?php if( $f_img_btn2_link ) { ?></a><?php } ?>
						            </div>
						            <?php } ?>
					            <?php endif; ?>
				            </div>
			            </div>
			            <?php endif; ?>
		            </div>						        
		        </div>
		    <?php if( $f_img_links == 'img_link' ): ?>
				<?php if( $f_img_full_link ) { ?></a><?php } ?> 
			<?php endif; ?>    
		    </div>
		</div>
		</div>
	</section>
</div>	
<?php if( $f_img_break ){ ?><div class="break"></div><?php } ?>
			
<?php } ?>