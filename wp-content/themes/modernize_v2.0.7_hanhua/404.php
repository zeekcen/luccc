<?php 
/**
 * 404 ( Not fount page )
 */
get_header();

global $gdl_admin_translator;
if( $gdl_admin_translator == 'enable' ){
	$translator_404_title = get_option(THEME_SHORT_NAME.'_404_title', '很抱歉！');
	$translator_404_content = get_option(THEME_SHORT_NAME.'_404_content', '您要查找的页面不存在。');
}else{
	$translator_404_title = __('很抱歉！','gdl_front_end');		
	$translator_404_content = __('您要查找的页面不存在。','gdl_front_end');
}	

?>
	<div class="content-wrapper <?php echo $sidebar_class; ?>">		
		<div class="page-wrapper">
			<div class="sixteen columns mt20">
				<div class="message-box-wrapper red">
					<div class="message-box-title">
						<?php echo $translator_404_title; ?>
					</div>
					<div class="message-box-content">
						<?php echo $translator_404_content; ?>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
<?php get_footer();?>