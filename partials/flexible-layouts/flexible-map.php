<?php 
$map_block_width = get_sub_field('mp_bW');
$map_order = get_sub_field('mp_or');
$map_mobile = get_sub_field('mp_mo');
$map_hide_mobile = get_sub_field('mp_hMo');
$map_break = get_sub_field('mp_br');
$map_block_align = get_sub_field('mp_bAl');

$map = get_sub_field('mp_ma');
$map_name = get_sub_field('mp_na');
$map_animation = get_sub_field('mp_an');

if ( $map_hide_mobile && wp_is_mobile() ) {
//HIDE ON MOBILE
} else { ?>

<div class="flex_content_cols <?php echo $map_mobile;?> <?php echo $map_block_width;?> <?php if( $map_break ){ ?><?php echo $map_block_align; ?><?php } ?>" <?php if( $map_order ){ ?>style="order:<?php echo $map_order; ?>;"<?php } ?>>
	<section id="section-<?php echo $row;?>-<?php echo $count;?>" class="page_flexible page_flexible_content section-<?php echo $row;?>-<?php echo $count;?> count_sections_<?php echo $count;?>" data-aos="<?php echo $map_animation;?>">

		<div class="flex_map_container flexible_page_element" itemprop="text">
		    <div class="split_map">
		        <div class="flex_map_row">
		            <div class="flex_map_col split_map_col">
		                <div class="flex_map_content_inner">
							<div class="map google-acfmap">										
								<div class="marker" data-lat="<?php echo $map[ 'lat' ]; ?>" data-lng="<?php echo $map[ 'lng' ]; ?>" data-icon="">
									<?php if( $map_name ) { ?><h4><?php echo $split_map_name; ?></h4><?php } ?>
									<div class="location-image"></div>
									<p><?php echo $map['address']; ?></p>
								</div>
							</div>
		                </div>
		            </div>						        
		        </div>        
		    </div>
		</div>
		
	</section>
</div>
<?php if( $map_break ){ ?><div class="break"></div><?php } ?>
<?php } ?>
