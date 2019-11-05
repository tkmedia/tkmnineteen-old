<?php 
$style_title_block_width = get_sub_field('st_bW');
$title_break = get_sub_field('st_br');
$title_block_align = get_sub_field('st_bA');
$title_order = get_sub_field('st_or');
$flex_style_title_mobile = get_sub_field('st_mo');
$title_hide_mobile = get_sub_field('st_hmo');
$style_title_animation = get_sub_field('st_an');
$title_border = get_sub_field('st_bo');
$title_border_color = get_sub_field('st_boC');
$title_border_size = get_sub_field('st_boS');

$title_type = get_sub_field('st_tp');
$title_header = get_sub_field('st_h');
$title_size = get_sub_field('st_sz');
$subtitle_size = get_sub_field('st_sSz');
$title_align = get_sub_field('st_al');
$title_color = get_sub_field('st_cl');
$title_bg_color = get_sub_field('st_bCl');
$subtitle_color = get_sub_field('st_sCl');
$subtitle_bg_color = get_sub_field('st_sbCl');
$pretitle_color = get_sub_field('st_pCl');
$intro_color = get_sub_field('st_inCl');
$pre_title = get_sub_field('st_pT');
$title_first = get_sub_field('st_fr');
$title_last = get_sub_field('st_lt');
$title_intro = get_sub_field('st_in');

if ( $title_hide_mobile && wp_is_mobile() ) {
//HIDE ON MOBILE
} else { ?>

<style>
.section-<?php echo $row;?>-<?php echo $count;?> .flex_style_title_wrap:after, 
.section-<?php echo $row;?>-<?php echo $count;?> .flex_style_title_wrap:before, 
.section-<?php echo $row;?>-<?php echo $count;?> .flex_style_title_wrap span:after, 
.section-<?php echo $row;?>-<?php echo $count;?> .flex_style_title_wrap span:before {border-color:<?php echo $title_border_color;?>!important;}
</style>
<div class="flex_content_cols <?php echo $flex_style_title_mobile;?> <?php echo $style_title_block_width;?> <?php if( $title_break ){ ?><?php echo $title_block_align; ?><?php } ?>" <?php if( $title_order ){ ?>style="order:<?php echo $title_order; ?>;"<?php } ?>>
	<section id="section-<?php echo $row;?>-<?php echo $count;?>" class="page_flexible page_flexible_content section-<?php echo $row;?>-<?php echo $count;?> count_sections_<?php echo $count;?>" data-aos="<?php echo $style_title_animation;?>">

		<div class="flex_style_title flexible_page_element" itemprop="text" style="text-align:<?php echo $title_align; ?>;">
			<div class="flex_style_title_wrap <?php echo $title_border;?> <?php echo $title_border_size;?>"><span>

				<?php if( $pretitle_color ){ ?>
				<div class="flex_style_pre_title title_<?php echo $title_type; ?>" style="text-align:<?php echo $title_align; ?>;justify-content:<?php echo $title_align; ?>;">
					<div class="pretitle_color" style="color:<?php echo $pretitle_color; ?>;">
						<?php echo $pre_title; ?>
					</div>
				</div>
				<?php } ?>
				
				<div class="flex_style_title_container title_<?php echo $title_type; ?> title_align_<?php echo $title_align; ?>" style="text-align:<?php echo $title_align; ?>;justify-content:<?php echo $title_align; ?>;">

					<?php if( $title_type == 'clean' ): ?>
						<<?php echo $title_header; ?> class="clean-title" style="text-align:<?php echo $title_align; ?>;font-size:<?php echo $title_size; ?>px;color:<?php echo $title_color; ?>;"><?php echo $title_first; ?>
						</<?php echo $title_header; ?>>
						
						<?php if( $title_last ){ ?><span class="title_last" style="color:<?php echo $subtitle_color; ?>;-webkit-text-fill-color:<?php echo $subtitle_color; ?>;font-size:<?php echo $subtitle_size; ?>px;"><?php echo $title_last; ?></span><?php } ?>						
					<?php endif; ?>

					<?php if( $title_type == 'clean-sideline' ): ?>
						<<?php echo $title_header; ?> class="clean-sideline-title" style="text-align:<?php echo $title_align; ?>;font-size:<?php echo $title_size; ?>px;color:<?php echo $title_color; ?>;"><?php echo $title_first; ?>
						</<?php echo $title_header; ?>>
						<?php if( $title_last ){ ?><span style="color:<?php echo $title_color; ?>;font-size: 1.4rem;"><?php echo $title_last; ?></span><?php } ?>
					<?php endif; ?>
					
					<?php if( $title_type == 'clean-underline' ): ?>
						<<?php echo $title_header; ?> class="clean-underline-title title-<?php echo $title_align; ?>" style="text-align:<?php echo $title_align; ?>;font-size:<?php echo $title_size; ?>px;color:<?php echo $title_color; ?>;"><?php echo $title_first; ?><?php if( $title_last ){ ?><span style="color:<?php echo $title_color; ?>;font-size: 1.4rem;"><?php echo $title_last; ?></span><?php } ?>
						</<?php echo $title_header; ?>>
						
					<?php endif; ?>	
																				
					<?php if( $title_type == 'box' ): ?>
						<div class="flex_style_title_box_wrap" style="background:<?php echo $title_bg_color; ?>;text-align:<?php echo $title_align; ?>;">
							<div class="flex_style_title_icon" style="color:<?php echo $title_color; ?>;"><i class="fal fa-angle-left"></i></div>
							<<?php echo $title_header; ?> class="box-title" style="font-size:<?php echo $title_size; ?>px;color:<?php echo $title_color; ?>;"><?php echo $title_first; ?>
								<?php if( $title_last ){ ?><span><?php echo $title_last; ?></span><?php } ?>
							</<?php echo $title_header; ?>>
						</div>
					<?php endif; ?>
					
					<?php if( $title_type == 'split' ): ?>
						<div class="flex_style_title_split_wrap" style="text-align:<?php echo $title_align; ?>">
						<<?php echo $title_header; ?> style="text-align:right;font-size:<?php echo $title_size; ?>px;display: inline-block;"><span class="title_first" style="background:<?php echo $title_bg_color; ?>;color:<?php echo $title_color; ?>;"><?php echo $title_first; ?></span>
							<?php if( $title_last ){ ?><span class="title_last" style="background:<?php echo $subtitle_bg_color; ?>;color:<?php echo $subtitle_color; ?>;"><?php echo $title_last; ?></span><?php } ?>
						</<?php echo $title_header; ?>>
						</div>
					<?php endif; ?>
					
				</div>
				
				<?php if( $title_intro ){ ?>
				<div class="flex_style_title_intro title_<?php echo $title_type; ?>" style="text-align:<?php echo $title_align; ?>;justify-content:<?php echo $title_align; ?>;">
					<div class="title_intro" style="color:<?php echo $intro_color; ?>;">
						<?php echo $title_intro; ?>
					</div>
				</div>
				<?php } ?>
				
			</span></div>
		</div>
	</section>
</div>	
<?php if( $title_break ){ ?><div class="break"></div><?php } ?>		
<?php } ?>	