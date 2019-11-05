<?php 
$divider_block_width = get_sub_field('dv_bW');
$divider_break = get_sub_field('dv_br');
$divider_block_align = get_sub_field('dv_bAl');
$divider_order = get_sub_field('dv_or');
$divider_mobile_cols = get_sub_field('dv_mo');
$divider_hide_mobile = get_sub_field('dv_hMo');
$divider_animation = get_sub_field('dv_an');
$divider_line_thick = get_sub_field('dv_lTh');
$divider_line_width = get_sub_field('dv_lW');
$divider_line_color = get_sub_field('dv_lCl');
$divider_line_ver = get_sub_field('dv_lVe');
$divider_line_hor = get_sub_field('dv_lHo');
$divider_height = get_sub_field('dv_h');
$divider_line = get_sub_field('dv_l');


if ( $divider_hide_mobile && wp_is_mobile() ) {
//HIDE ON MOBILE
} else { ?>

<div class="flex_content_cols <?php echo $divider_mobile_cols;?> <?php echo $divider_block_width;?> <?php if( $divider_break ){ ?><?php echo $divider_block_align; ?><?php } ?>" <?php if( $divider_order ){ ?>style="order:<?php echo $divider_order; ?>;"<?php } ?>>
	<section id="section-<?php echo $row;?>-<?php echo $count;?>" class="page_flexible page_flexible_content section-<?php echo $row;?>-<?php echo $count;?> count_sections_<?php echo $count;?>" data-aos="<?php echo $divider_animation;?>">
		<div class="flex_divider flexible_page_element" itemprop="text">
			<div class="flex_divider_wrap content_wrap row-flex <?php echo $divider_line_ver; ?>-xs <?php echo $divider_line_hor; ?>-xs"  style="height:<?php echo $divider_height; ?>px;">
				<?php if( $divider_line ): ?>
				<div class="divider_line" style="width:<?php echo $divider_line_width; ?>%;border-top:<?php echo $divider_line_thick; ?>px solid <?php echo $divider_line_color; ?>;"></div>
				<?php endif; ?>
			</div>
		</div>
	</section>
</div>
<?php if( $divider_break ){ ?><div class="break"></div><?php } ?>
<?php } ?>
