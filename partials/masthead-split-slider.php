<!-- Manual Slider MastHead -->
<?php
$slider_effect = get_post_meta( get_the_ID(), 'page_top_slider_effect', true );
$md_bg_r = get_field('md_bg_r');
$md_bg_l = get_field('md_bg_l');
$mh_bg_rotate = get_field('mh_bg_rotate');
$masthead_background_color = get_field('masthead_background_color');

$Hex_bg_r = $md_bg_r;
$RGB_bg_r = hex2rgb($Hex_bg_r);
$Final_Rgb_bg_r = implode(", ", $RGB_bg_r);
$Hex_bg_l = $md_bg_l;
$RGB_bg_l = hex2rgb($Hex_bg_l);
$Final_Rgb_bg_l = implode(", ", $RGB_bg_l);

$mh_split_phone = get_field('mh_split_phone','option');
$mh_split_phone_link = get_field('mh_split_phone_link','option');
$mh_form_title = get_field('mh_form_title','option');

?>
<style>
	.top-slider-bg.top-slider-bg-multiple {background:<?php echo $masthead_background_color; ?>;}	

	@media (min-width: 992px) {
		
	}
	
	@media (min-width: 992px) {

	}
</style>

<div id="home_masthead" class="masthead_split" itemprop="text">	
	<div class="home_masthead intro-section">	
		<div id="main-top-slider">
			<div class="top-slider-bg top-slider-bg-multiple">
			<?php if( $md_bg_r || $md_bg_l) { ?>
			<div class="masthead_bg_overlay" style="background: <?php echo $md_bg_r; ?>;background: -moz-linear-gradient(right, rgba(<?php echo $Final_Rgb_bg_r; ?>,1) 0%, rgba(<?php echo $Final_Rgb_bg_l; ?>,1) 100%);background: -webkit-linear-gradient(<?php echo $mh_bg_rotate; ?>deg, rgba(<?php echo $Final_Rgb_bg_r; ?>,1) 0%, rgba(<?php echo $Final_Rgb_bg_l; ?>,1) 100%);background: linear-gradient(right, rgba(<?php echo $Final_Rgb_bg_r; ?>,1) 0%, rgba(<?php echo $Final_Rgb_bg_l; ?>,1) 100%);"></div>
			<?php } ?>
			    <div id="mh_split_container" class="swiper-container style1 swiper-scale-effect" style="direction: ltr;">
				    <?php if( have_rows('mh_split') ): ?>
				    <div class="slides single-slider swiper-wrapper">

						<?php 
						while( have_rows('mh_split') ): the_row(); 
						$mh_split_img = get_sub_field('mh_split_img');
						$mh_split_link_type = get_sub_field('mh_split_link_type');
						$mh_split_vid = get_sub_field('mh_split_vid');
						$mh_split_play_top = get_sub_field('mh_split_play_top');
						$mh_split_play_left = get_sub_field('mh_split_play_left');
						$mh_split_title = get_sub_field('mh_split_title');
						$mh_split_subtitle = get_sub_field('mh_split_subtitle');
						$mh_split_text = get_sub_field('mh_split_text');
						$mh_split_counter = get_sub_field('mh_split_counter');
						$mh_split_countext = get_sub_field('mh_split_countext');
						
						$youtube_vid_url = get_sub_field('mh_split_vid', false, false);
						//get wp_oEmed object, not a public method. new WP_oEmbed() would also be possible
						$oembed = _wp_oembed_get_object();
						//get provider
						$provider = $oembed->get_provider($youtube_vid_url);
						//fetch oembed data as an object
						$oembed_data = $oembed->fetch( $provider, $youtube_vid_url );
						$thumbnail = $oembed_data->thumbnail_url;
						$iframe = $oembed_data->html;
						preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $youtube_vid_url, $match);
						$youtube_id = $match[1];
						
						?>
						<!-- Masthead Image slide -->
				        <div class="single-slider-img-item single-slider-item swiper-slide">
					        
			                <div class="single-slider-img swiper-slide-cover" style="direction: rtl;">
				                <div class="mh_split_row">
					                
					                <div class="mh_split_col mh_split_col_img col-xs-12">
						                <div class="mh_split_col_img_inner">
							                <div class="mh_split_col_img_item">
								                <?php echo wp_get_attachment_image( $mh_split_img, 'full' ); ?>
								                <?php if( $mh_split_link_type == 'video_popup' ) { ?>
								                <a data-fancybox href="<?php echo $youtube_vid_url; ?>&amp;autoplay=1&amp;rel=0&amp;controls=1&amp;loop=1&amp;playlist=<?php echo $youtube_id; ?>" class="">
								                <div class="mh_split_col_img_popup" style="top:<?php echo $mh_split_play_top; ?>px;left:<?php echo $mh_split_play_left; ?>px;">
									                <img width="251" height="214" src="/wp-content/uploads/2019/09/mh-play.png" class="mh-play">
								                </div>
								                </a>
								                <?php } ?>
							                </div>
						                </div>
					                </div>
					                
					                <div class="mh_split_col mh_split_col_content col-xs-12">
						                <div class="mh_split_col_content_inner">
							                <div class="mh_split_col_content_wrap">
								                <?php if( $mh_split_title ) { ?>
								                <div class="mh_split_title"><?php echo $mh_split_title; ?></div>
								                <?php } ?>
								                <?php if( $mh_split_subtitle ) { ?>
								                <div class="mh_split_subtitle"><?php echo $mh_split_subtitle; ?></div>
								                <?php } ?>
								                <?php if( $mh_split_text ) { ?>
								                <div class="mh_split_text"><?php echo $mh_split_text; ?></div>
								                <?php } ?>
								                <?php if( $mh_split_counter ) { ?>
								                <div class="mh_split_counter_btn">
									                <div class="mh_split_counter_btn_wrap">
										                <div class="mh_split_counter_btn_row">
											                <div class="mh_split_counter">28</div>
											                <div class="mh_split_countext"><?php echo $mh_split_countext; ?></div>
										                </div>
									                </div>
								                </div>
								                <?php } ?>
							                </div>
						                </div>
					                </div>
				                </div>
			                </div>
				        </div>
						
						<?php endwhile; ?>
				    </div>
					<?php endif; ?>
			        
			    </div>

			    <!-- Add Arrows -->
			    <div id="js-pagevertical1" class="swiper-pagination-style1"></div>
			    <div id="js-next1" class="swiper-button-next"></div>
			    <div id="js-prev1" class="swiper-button-prev"></div>
			    
			</div>
			
		    <div class="mh_simbol">
			    <img width="251" height="214" src="/wp-content/uploads/2019/09/badge.png" class="mh_simbol_img">
		    </div>

			
		</div>
	</div>
</div>

<div class="mh_contact">
	<div class="mh_contact_wrap row-flex">
		<div class="mh_contact_col mh_contact_col_right col-xs-12 col-sm-5">
			<div class="mh_contact_col_inner"></div>
		</div>
		<div class="mh_contact_col mh_contact_col_left col-xs-12 col-sm-7">
			<div class="mh_contact_col_inner"></div>
		</div>
	</div>
	
	<div class="mh_contact_content row-flex">
		<div class="mh_contact_col mh_contact_col_right col-xs-12 col-sm-5">
			<?php if( $mh_split_phone || $mh_split_phone_link ) { ?>
			<?php if( $mh_split_phone_link ) { ?><a href="<?php echo $mh_split_phone_link; ?>"><?php } ?>
			<div class="mh_contact_col_content">
				<div class="mh_contact_phone_icon"><i class="fas fa-phone-volume fa-rotate-40"></i></div>
				<div class="mh_contact_phone_text"><?php echo $mh_split_phone; ?></div>
			</div>
			<?php if( $mh_split_phone_link ) { ?></a><?php } ?>
			<?php } ?>
		</div>
		<div class="mh_contact_col mh_contact_col_left col-xs-12 col-sm-7">
			<div class="mh_contact_col_form">
				<div class="mh_contact_col_form_wrap">	
	                <?php if( $mh_form_title ) { ?>
	                <div class="mh_contact_col_form_title"><?php echo $mh_form_title; ?></div>
	                <?php } ?>
					<div class="mh_contact_col_form_wrap">
						<?php echo do_shortcode( '[contact-form-7 id="178" title="טופס באנר עליון"]' ); ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
</div>