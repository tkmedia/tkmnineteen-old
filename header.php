<?php
/**
 * Site Header
 *
 * @package      tkmnineteen
 * @author       Tal Katz TKMedia.co.il
 * @since        1.0.0
 * @license      GPL-2.0+
**/
 ?>
 
<!DOCTYPE html>
<!--[if lt IE 9]>
<html id="unsupported" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html id="ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9)  ]>
<html <?php language_attributes(); ?>>
<![endif]-->
<html <?php language_attributes(); ?>>
<head>
	<?php 
	tha_head_top();
	wp_head();
	tha_head_bottom();
	?>
	
	<?php the_field('site_head_code','option');?>
	
</head>

<?php
//ACF Theme option field
$header_phone = get_option( 'options_header_phone' );
$site_style = get_option( 'options_site_wrap_style' );
$header_style = get_option( 'options_header_style' );
$header_color = get_option( 'options_header_bg_color' );
$logo_side = get_option( 'options_header_logo_side' );
$logo_side_position = get_option( 'options_header_logo_side_position' );
$nav_layout = get_option( 'options_menu_item_layout' );
$top_panel_show = get_option( 'options_header_top_panel_show' );
$top_panel_position = get_option( 'options_top_panel_position' );
$panel_bg_color = get_field('header_top_panel_bg_color','option');
$panel_font_color = get_field('header_top_panel_font_color','option');
$header_logo_width = get_field('header_logo_width','option');
$mobile_sticky_fixed = get_field('mobile_sticky_fixed','option');
$desktop_sticky_fixed = get_field('desktop_sticky_fixed','option');
?>

<body <?php body_class( 'loading' ); ?> <?php tkmnineteen_schema_body(); ?> id="body-<?php the_ID(); ?>">
<?php if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
tha_body_top();
?>

	<div id="page" class="site <?php echo $site_style; ?> <?php echo $header_style; ?> <?php echo $header_color; ?> <?php if( $desktop_sticky_fixed ) { ?>desktop_sticky_fixed<?php } ?> <?php if( $mobile_sticky_fixed ) { ?>mobile_sticky_fixed<?php } ?>">
		<a class="skip-link screen-reader-text" href="#main_content"><?php _e( 'Skip to content', 'tkmnineteen' ) ?></a>
		<?php tha_header_before(); ?>
		
		<?php if (! ($header_style == 'header_logo_center_no_nav' || $header_style == 'header_logo_r_no_nav') ) {
		?>
		<?php get_template_part( 'partials/header/hamburger' ); ?>
		<?php } ?>
		<header id="header-container" class="header-bar animated clearfix fixedHeader sticky_header <?php if (is_front_page()) { ?>front_header_container<?php } elseif (is_tax( 'product_cat' ) || is_category() ) { ?>archive_header_container<?php } elseif ( is_singular() ) { ?>deafault_header_container<?php } else { ?>deafault_header_container<?php } ?> <?php if ($header_style == 'split_row_box normal_menu' || $header_style == 'header_logo_r_no_nav' ) { echo $logo_side; }?> <?php if ($header_style == 'full_row_box normal_menu') { echo $logo_side_position; } ?>" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
			<div class="header_wrapper_bg<?php if( $top_panel_show ) { ?> <?php echo $top_panel_position; }?> wrap">
				<?php tha_header_top(); ?>
				<?php if( $top_panel_show ) { ?>
				<div class="header_topbar_container top_panel" style="background:<?php echo $panel_bg_color; ?>;">
					<div class="header_topbar_container_inner">
						<?php get_template_part( 'partials/header/top-bar' ); ?>
					</div>
				</div>				
				<?php } ?>
				
				<div class="header_wrapper">
					
					<div id="branding" style="width:<?php echo $header_logo_width; ?>px;">
						<div class="branding_wrap">
							<?php get_template_part( 'partials/header/branding-customizer' ); ?>
						</div>
					</div>
					
					<?php if( $header_style == 'full_row_box normal_menu' || $header_style == 'split_row_box normal_menu' || $header_style == 'header_logo_center_nav normal_menu') { ?>
					<div class="header_menu_container <?php echo $nav_layout; ?>">
						<div class="header_menu_container_inner">
							<?php get_template_part( 'partials/header/nav' ); ?>
						</div>
					</div>				
					<?php } elseif( $header_style == 'full_site_hamburger') { ?>		
					<div class="header_menu_container">
						<div class="header_menu_container_inner">
							<?php get_template_part( 'partials/header/nav-side' ); ?>
						</div>
					</div>				
					<?php } ?>	
					
					<?php if( $header_style == 'header_logo_r_no_nav') { ?>
					<div class="header_topbar_container">
						<div class="header_topbar_container_inner">
							<?php get_template_part( 'partials/header/top-bar' ); ?>
						</div>
					</div>				
					<?php } ?>
					
				</div>
				<?php tha_header_bottom(); ?>
			</div>
		</header>
		<?php tha_header_after(); ?>
		<main id="main_content" role="main">
			<div class="site_overlay"></div>			
			