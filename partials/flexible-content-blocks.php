<?php

if( have_rows('conR') ): $row = 1;?>
	
	<?php
	while( have_rows('conR') ): the_row();

		$cols_mobile = get_sub_field('cols_mobile');
		$cols_bg = get_sub_field('conR_bg');
		$cols_overlay_r = get_sub_field('conR_oR');
		$cols_overlay_opacity_r = get_sub_field('conR_ooR');
		$cols_overlay_l = get_sub_field('conR_oL');
		$cols_overlay_opacity_l = get_sub_field('conR_ooL');
			$Hex_color_r = $cols_overlay_r;
			$RGB_color_r = hex2rgb($Hex_color_r);
			$Final_Rgb_color_r = implode(", ", $RGB_color_r);
			$Hex_color_l = $cols_overlay_l;
			$RGB_color_l = hex2rgb($Hex_color_l);
			$Final_Rgb_color_l = implode(", ", $RGB_color_l);			
		$row_padding_top = get_sub_field('conR_pT');
		$row_padding_bottom = get_sub_field('conR_pB');
		$row_padding_right = get_sub_field('conR_pR');
		$row_padding_left = get_sub_field('conR_pL');
		$overlay_rotate = get_sub_field('conR_ogr');
		
		$row_ver_align = get_sub_field('conR_vA');
		
		$row_wrap = get_sub_field('conR_wp');
		$row_col_padding = get_sub_field('conR_pad');
		
		$row_dividers = get_sub_field('conR_div');
		$top_divider = get_sub_field('conR_tDT');
		$top_divider_color = get_sub_field('conR_tDC');
		$top_divider_bg_color = get_sub_field('conR_tBC');
		$top_divider_height = get_sub_field('conR_tDh');
		$top_divider_position = get_sub_field('conR_tDp');
		$bottom_divider = get_sub_field('conR_bDT');
		$bottom_divider_color = get_sub_field('conR_bDC');
		$bottom_divider_bg_color = get_sub_field('conR_bBC');
		$bottom_divider_height = get_sub_field('conR_bDh');
		$bottom_divider_position = get_sub_field('conR_bDp');		

		$row_top_wrap_line = get_sub_field('row_top_wrap_line');
		$row_bottom_wrap_line = get_sub_field('row_bottom_wrap_line');
		$row_right_wrap_line = get_sub_field('row_right_wrap_line');
		$row_Left_wrap_line = get_sub_field('row_Left_wrap_line');
		$top_line_padd = get_sub_field('row_top_wrap_line_padd');
		$bottom_line_padd = get_sub_field('row_bottom_wrap_line_padd');		
		 ?>
		
		
		
	<div class="flex_content_rows container container_<?php echo $row;?>" style="background-image:url(<?php echo $cols_bg['url']; ?>);padding-right:<?php echo $row_padding_right;?>px;padding-left:<?php echo $row_padding_left;?>px;padding-bottom: <?php echo $row_padding_bottom;?>px;padding-top: <?php echo $row_padding_top;?>px;" id="flex-row-<?php echo $row;?>">
		<?php if( $cols_overlay_r || $cols_overlay_l) { ?>
		<div class="flex_content_row_overlay" style="background: <?php echo $cols_overlay_r; ?>;background: -moz-linear-gradient(right, rgba(<?php echo $Final_Rgb_color_r; ?>,<?php echo $cols_overlay_opacity_r; ?>) 0%, rgba(<?php echo $Final_Rgb_color_l; ?>,<?php echo $cols_overlay_opacity_l; ?>) 100%);background: -webkit-linear-gradient(<?php echo $overlay_rotate; ?>deg, rgba(<?php echo $Final_Rgb_color_r; ?>,<?php echo $cols_overlay_opacity_r; ?>) 0%, rgba(<?php echo $Final_Rgb_color_l; ?>,<?php echo $cols_overlay_opacity_l; ?>) 100%);background: linear-gradient(right, rgba(<?php echo $Final_Rgb_color_r; ?>,<?php echo $cols_overlay_opacity_r; ?>) 0%, rgba(<?php echo $Final_Rgb_color_l; ?>,<?php echo $cols_overlay_opacity_l; ?>) 100%);"></div>
		<?php } ?>
		
		<style>
		<?php if( $top_divider ) { ?>
			.container_<?php echo $row;?> .flex_content_row_divider_top path {fill:<?php echo $top_divider_color; ?>;}
			.container_<?php echo $row;?> .flex_content_row_divider_top svg	{height:<?php echo $top_divider_height; ?>px;background-color: <?php echo $top_divider_bg_color; ?>;}
		<?php } if( $bottom_divider ) { ?>
			.container_<?php echo $row;?> .flex_content_row_divider_bottom path {fill:<?php echo $bottom_divider_color; ?>;}
			.container_<?php echo $row;?> .flex_content_row_divider_bottom svg	{height:<?php echo $bottom_divider_height; ?>px;background-color: <?php echo $bottom_divider_bg_color; ?>;}	
		<?php } ?>
		</style>
		<?php
		set_query_var( 'conR_tDT', $top_divider );
		set_query_var( 'conR_tDC', $top_divider_color );
		set_query_var( 'conR_tDh', $top_divider_height );
		set_query_var( 'conR_tDp', $top_divider_position );
		set_query_var( 'conR_bDT', $bottom_divider );
		set_query_var( 'conR_bDC', $bottom_divider_color );
		set_query_var( 'conR_bDh', $bottom_divider_height );
		set_query_var( 'conR_bDp', $bottom_divider_position );				

		if( $top_divider && $row_dividers) {
			get_template_part('partials/row-divider-top' );
		} ?>
		
		<div class="container_wrap row-flex<?php if(!$row_wrap) { ?> wrap <?php } if($row_col_padding) { ?> col_nopadding <?php } if($row_ver_align) { ?> middle-xs <?php } if($row_top_wrap_line) { echo $row_top_wrap_line; } ?> <?php if($row_bottom_wrap_line) { echo $row_bottom_wrap_line; } ?> <?php if($row_right_wrap_line) { echo $row_right_wrap_line; } ?> <?php if($row_Left_wrap_line) { echo $row_Left_wrap_line; }?>">
		<!-- flex_content_cols -->
				
		<?php
		// ID of the current item in the WordPress Loop
		$id = get_the_ID();	
		// check if the flexible content field has rows of data
		if ( have_rows( 'fCon', $id ) ) : $count = 1;
			// loop through the selected ACF layouts and display the matching partial
			while ( have_rows( 'fCon', $id ) ) : the_row();
			
				set_query_var( 'row', $row );
				set_query_var( 'count', $count );
				get_template_part( 'partials/flexible-layouts/' . get_row_layout() );
				
			$count++; endwhile;
			
		elseif ( get_the_content() ) :
		// no layouts found
		endif; ?>
					
		<!-- flex_content_cols -->
			<?php if( $row_top_wrap_line ) { ?>
			<div class="container_wrap_line wrap_line_top" style="top:<?php echo $top_line_padd;?>px;"><div class="inner-container"></div></div>
			<?php } ?>
			<?php if( $row_right_wrap_line ) { ?>
			<div class="container_wrap_line wrap_line_right" style="top:<?php echo $top_line_padd;?>px;bottom:<?php echo $bottom_line_padd;?>px;"><div class="inner-container"></div></div>
			<?php } ?>
			<?php if( $row_bottom_wrap_line ) { ?>
			<div class="container_wrap_line wrap_line_bottom" style="bottom:<?php echo $bottom_line_padd;?>px;"><div class="inner-container"></div></div>
			<?php } ?>
			<?php if( $row_Left_wrap_line ) { ?>
			<div class="container_wrap_line wrap_line_left" style="top:<?php echo $top_line_padd;?>px;bottom:<?php echo $bottom_line_padd;?>px;"><div class="inner-container"></div></div>
			<?php } ?>
			<?php if( $row_top_wrap_line ) { ?>
			<div class="container_wrap_line wrap_line_top_left" style="top:<?php echo $top_line_padd;?>px;"><div class="inner-container"></div></div>
			<?php } ?>
			<?php if( $row_bottom_wrap_line ) { ?>
			<div class="container_wrap_line wrap_line_bottom_left"><div class="inner-container"></div></div>
			<?php } ?>
		</div>
		
		<?php 
		if( $bottom_divider && $row_dividers) {
			get_template_part('partials/row-divider-bottom' );
		} ?>

		<?php if( $row_top_wrap_line ) { ?>
		<script>
		jQuery(function($) {
			$(window).load(function(){
				get_elemnt_width();
			    function get_elemnt_width(){
				    var first_elemnt = $('#flex-row-<?php echo $row;?> .container_wrap .flex_content_cols.col-xs-12.col-md-12:first-child .clean-title').outerWidth();
				    $('#flex-row-<?php echo $row;?> .container_wrap.top-middle-left .container_wrap_line.wrap_line_top').css('width', 'calc(45% - ' + first_elemnt + 'px / 2)');
				    $('#flex-row-<?php echo $row;?> .container_wrap.top-middle-right .container_wrap_line.wrap_line_top').css('width', 'calc(45% - ' + first_elemnt + 'px / 2)');
			    }
		    });	
		});
		</script>   
		<?php } ?>
				
	</div>
	
	<?php $row++;endwhile; ?>
		
<?php endif; ?>