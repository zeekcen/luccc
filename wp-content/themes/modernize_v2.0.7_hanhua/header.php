<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<title><?php bloginfo('name'); ?>  <?php wp_title(); ?></title>
	<meta name="Keywords" content="立奥卫浴 壁挂马桶 隐藏式马桶 蹲便器水箱整套 蹲便器 卫浴 立奥工厂" />
	<meta name="Description" content="潮州立奥卫浴工厂于1999年专注于隐蔽式马桶、蹲便器、小便斗等高端卫浴的钻研。为消费者打造品质与工艺结合的精品卫浴产品，以创新理念缔造新一代东方风格的时尚家居。" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<?php global $gdl_is_responsive ?>
	<?php if( $gdl_is_responsive ){ ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="<?php echo GOODLAYERS_PATH; ?>/stylesheet/skeleton-responsive.css">
		<link rel="stylesheet" href="<?php echo GOODLAYERS_PATH; ?>/stylesheet/layout-responsive.css">	
	<?php }else{ ?>
		<link rel="stylesheet" href="<?php echo GOODLAYERS_PATH; ?>/stylesheet/skeleton.css">
		<link rel="stylesheet" href="<?php echo GOODLAYERS_PATH; ?>/stylesheet/layout.css">	
	<?php } ?>
	
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php echo GOODLAYERS_PATH; ?>/stylesheet/ie-style.php?path=<?php echo GOODLAYERS_PATH; ?>" type="text/css" media="screen, projection" /> 
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" href="<?php echo GOODLAYERS_PATH; ?>/stylesheet/ie7-style.css" /> 
	<![endif]-->	
	
	<!-- Favicon
   ================================================== -->
	<?php 
		if(get_option( THEME_SHORT_NAME.'_enable_favicon','disable') == "enable"){
			$gdl_favicon = get_option(THEME_SHORT_NAME.'_favicon_image');
			if( $gdl_favicon ){
				$gdl_favicon = wp_get_attachment_image_src($gdl_favicon, 'full');
				echo '<link rel="shortcut icon" href="' . $gdl_favicon[0] . '" type="image/x-icon" />';
			}
		} 
	?>

	<!-- Start WP_HEAD
   ================================================== -->
		
	<?php wp_head(); ?>
	
	<!-- FB Thumbnail
   ================================================== -->
	<?php
	if( is_single() ){
		$thumbnail_id = get_post_meta($post->ID,'post-option-inside-thumbnial-image', true);
		if( !empty($thumbnail_id) ){
			$thumbnail = wp_get_attachment_image_src( $thumbnail_id , '150x150' );
			echo '<link rel="image_src" href="' . $thumbnail[0] . '" />';
		}
	} else{
		$thumbnail_id = get_post_thumbnail_id();
		if( !empty($thumbnail_id) ){
			$thumbnail = wp_get_attachment_image_src( $thumbnail_id , '150x150' );
			echo '<link rel="image_src" href="' . $thumbnail[0] . '" />';		
		}
	}
	?>	
</head>
<body <?php echo body_class(); ?>>
	<?php
		$background_style = get_option(THEME_SHORT_NAME.'_background_style', 'Pattern');
		if($background_style == 'Custom Image'){
			$background_id = get_option(THEME_SHORT_NAME.'_background_custom');
			if(!empty($background_id)){
				$background_image = wp_get_attachment_image_src( $background_id, 'full' );
				echo '<div id="custom-full-background">';
				echo '<img src="' . $background_image[0] . '" alt="" />';
				echo '</div>';
			}
		}
	?>
<div class="body-wrapper">

	
	<?php $gdl_enable_top_navigation = get_option(THEME_SHORT_NAME.'_enable_top_navigation');
	if ( $gdl_enable_top_navigation == '' || $gdl_enable_top_navigation == 'enable' ){  ?>
	<div class="top-navigation-wrapper" style="display:none">
		<div class="top-navigation container">
			<div class="top-navigation-left">
				<?php wp_nav_menu( array( 'theme_location' => 'top_menu' ) ); ?>
				<br class="clear">
			</div>
			
			<?php 
				$top_navigation_right_text = do_shortcode( __(get_option(THEME_SHORT_NAME.'_top_navigation_right_text'), 'gdl_front_end') );
				if( $top_navigation_right_text ){
					echo '<div class="top-navigation-right">' . $top_navigation_right_text . '</div>';
				}
			?>

		</div>
		<div class="top-navigation-wrapper-gimmick"></div>
	</div>

	<?php } ?>

	<div class="container">
		<div class="header-wrapper">
			
			<!-- Get Logo -->
			<div class="eight columns mt0">
				<div class="logo-wrapper">
					<?php
						echo '<a href="' . home_url( '/' ) . '">';
						$logo_id = get_option(THEME_SHORT_NAME.'_logo');
						$logo_attachment = wp_get_attachment_image_src($logo_id, 'full');
						$alt_text = get_post_meta($logo_id , '_wp_attachment_image_alt', true);
						if( !empty($logo_attachment) ){
							$logo_attachment = $logo_attachment[0];
						}else{
							$logo_attachment = GOODLAYERS_PATH . '/images/default-logo.png';
							$alt_text = 'default logo';
						}
						echo '<img src="' . $logo_attachment . '" alt="' . $alt_text . '"/>';
						echo '</a>';
					?>
				</div>
			</div>
			<!-- Get Social Icons -->
			<div class="eight columns mt0 outer-social-wrapper">
				<div class="social-wrapper">
					<?php
						$gdl_social_wrapper_text = get_option(THEME_SHORT_NAME.'_social_wrapper_text');
						if( !empty($gdl_social_wrapper_text) ){
						
							echo '<div class="social-wrapper-text">' . $gdl_social_wrapper_text . '</div>';
							
						}
					?>	
					<div class="social-icon-wrapper">
						<?php
							global $gdl_icon_type;
							$gdl_social_icon = array(
								'delicious'=> array('name'=>THEME_SHORT_NAME.'_delicious', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/delicious.png'),
								'deviantart'=> array('name'=>THEME_SHORT_NAME.'_deviantart', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/deviantart.png'),
								'digg'=> array('name'=>THEME_SHORT_NAME.'_digg', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/digg.png'),
								'facebook' => array('name'=>THEME_SHORT_NAME.'_facebook', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/facebook.png'),
								'flickr' => array('name'=>THEME_SHORT_NAME.'_flickr', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/flickr.png'),
								'lastfm'=> array('name'=>THEME_SHORT_NAME.'_lastfm', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/lastfm.png'),
								'linkedin' => array('name'=>THEME_SHORT_NAME.'_linkedin', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/linkedin.png'),
								'picasa'=> array('name'=>THEME_SHORT_NAME.'_picasa', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/picasa.png'),
								'rss'=> array('name'=>THEME_SHORT_NAME.'_rss', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/rss.png'),
								'stumble-upon'=> array('name'=>THEME_SHORT_NAME.'_stumble_upon', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/stumble-upon.png'),
								'tumblr'=> array('name'=>THEME_SHORT_NAME.'_tumblr', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/tumblr.png'),
								'twitter' => array('name'=>THEME_SHORT_NAME.'_twitter', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/twitter.png'),
								'vimeo' => array('name'=>THEME_SHORT_NAME.'_vimeo', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/vimeo.png'),
								'youtube' => array('name'=>THEME_SHORT_NAME.'_youtube', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/youtube.png'),
								'google_plus' => array('name'=>THEME_SHORT_NAME.'_google_plus', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/google-plus.png'),
								'email' => array('name'=>THEME_SHORT_NAME.'_email', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/email.png'),
								'pinterest' => array('name'=>THEME_SHORT_NAME.'_pinterest', 'url'=> GOODLAYERS_PATH.'/images/icon/' . $gdl_icon_type . '/social/pinterest.png')
								);
							
							foreach( $gdl_social_icon as $social_name => $social_icon ){
							
								$social_link = get_option($social_icon['name']);
								if( !empty($social_link) ){
								
									echo '<div class="social-icon"><a target="_blank" href="' . $social_link . '">' ;
									echo '<img src="' . $social_icon['url'] . '" alt="' . $social_name . '"/>';
									echo '</a></div>';
								
								}
								
							}
						?>
					</div>
				</div>
			</div>
			<br class="clear">
			<!-- Navigation and Search Form -->
			<div class="sixteen columns mt0">
				<?php 
					if( $gdl_is_responsive ){
						dropdown_menu( array('dropdown_title' => '-- Main Menu --', 'indent_string' => '- ', 'indent_after' => '','container' => 'div', 'container_class' => 'responsive-menu-wrapper', 'theme_location'=>'main_menu') );	
					}
				?>
				<div class="navigation-wrapper">
					<!-- Get Navigation -->
					<?php wp_nav_menu( array('container' => 'div', 'container_class' => 'menu-wrapper', 'container_id' => 'main-superfish-wrapper', 'menu_class'=> 'sf-menu',  'theme_location' => 'main_menu' ) ); ?>
					
					<!-- Get Search form -->
					<?php if(get_option(THEME_SHORT_NAME.'_enable_top_search','enable') == 'enable'){?>
					<div class="search-wrapper"><?php get_search_form(); ?></div> 
					<?php } ?>
					
					<br class="clear">
				</div>
			</div>
			<br class="clear">
		</div> <!-- header-wrapper -->
