<?php

	/*	
	*	Goodlayers Option File
	*	---------------------------------------------------------------------
	* 	@version	1.0
	* 	@author		Goodlayers
	* 	@link		http://goodlayers.com
	* 	@copyright	Copyright (c) Goodlayers
	*	---------------------------------------------------------------------
	*	This file contains the goodlayers panel elements and create the 
	*	goodlayers panel to the back-end of the framework
	*	---------------------------------------------------------------------
	*/
	
	// goodlayers panel navigation elements
	$goodlayers_menu = array(			
		__('常规设置', 'gdl_back_office') => array(
			__('页面样式', 'gdl_back_office')=>'gdl_panel_page_style',
			__('边栏', 'gdl_back_office')=>'gdl_panel_sidebar',
			__('页脚样式', 'gdl_back_office')=>'gdl_panel_footer_style',
			__('Google 统计分析', 'gdl_back_office')=>'gdl_panel_google_analytics',
			__('Favicon 图标', 'gdl_back_office')=>'gdl_panel_favicon'),
			
		__('字体样式', 'gdl_back_office') => array(
			__('字体大小', 'gdl_back_office')=>'gdl_panel_font_size',
			__('设置字体', 'gdl_back_office')=>'gdl_panel_font',
			__('上传字体', 'gdl_back_office')=>'gdl_panel_upload_font'),
			
		__('网页元素设置', 'gdl_back_office') => array(
			__('Logo设置', 'gdl_back_office')=>'gdl_panel_logo',
			__('顶部导航菜单', 'gdl_back_office')=>'gdl_panel_top_navigation',
			__('背景样式', 'gdl_back_office')=>'gdl_panel_background',
			__('顶部右侧区域', 'gdl_back_office')=>'gdl_panel_top_right_area',
			__('社交网站图标', 'gdl_back_office')=>'gdl_panel_social_network',
			__('社交网站分享', 'gdl_back_office')=>'gdl_panel_social_shares',
			__('版权区域设置', 'gdl_back_office')=>'gdl_panel_copyright_area'),
			//__('虚拟数据', 'gdl_back_office')=>'gdl_panel_dummy_data' ),	
			
		__('网页元素颜色', 'gdl_back_office') => array(
			__('导航菜单', 'gdl_back_office')=>'gdl_panel_navigation',
			__('顶部搜索', 'gdl_back_office')=>'gdl_panel_top_search',
			__('Body主体设置', 'gdl_back_office')=>'gdl_panel_body',
			__('页脚', 'gdl_back_office')=>'gdl_panel_footer',
			__('滑块', 'gdl_back_office')=>'gdl_panel_slider',
			__('博客/项目组合', 'gdl_back_office')=>'gdl_panel_blog_port',
			__('联系表格/评论', 'gdl_back_office')=>'gdl_panel_contact_form',
			__('令人惊叹的文字', 'gdl_back_office')=>'gdl_panel_stunning_text',
			__('其他元素', 'gdl_back_office')=>'gdl_panel_additional_elements',
			__('产品价格', 'gdl_back_office')=>'gdl_panel_price_item',
			__('载入默认颜色', 'gdl_back_office')=>'gdl_panel_load_default_color'),
			
		__('翻译','gdl_back_office')=> array(
			__('启用帮助翻译', 'gdl_back_office')=>'gdl_panel_enable_admin_translator',
			__('博客/项目组合', 'gdl_back_office')=>'gdl_panel_blog_port_translator',
			__('联系表格', 'gdl_back_office')=>'gdl_panel_contact_form_translator',
			__('联系工具', 'gdl_back_office')=>'gdl_panel_contact_widget_translator',
			__('其他元素', 'gdl_back_office')=>'gdl_panel_additional_elements_translator',
			),
		
		__('滑块设置', 'gdl_back_office') => array(
			__('Nivo 滑块', 'gdl_back_office')=>'gdl_panel_nivo_slider',
			__('Flex 滑块', 'gdl_back_office')=>'gdl_panel_flex_slider',
			__('AnyThing 滑块', 'gdl_back_office')=>'gdl_panel_anything_slider')
	);
	
	// goodlayers panel elements ( the head of array links to the menu of navigation elements )
	$goodlayers_element = array(
		//General

		'gdl_panel_page_style' => array(
			__('启用响应', 'gdl_back_office')=>array(
				'type'=>'radioenabled',
				'name'=>THEME_SHORT_NAME.'_enable_responsive',
				'default'=>'disable',
				'description'=>' *** 只有Flex滑块支持响应模式。'
			),
			__('默认日期格式', 'gdl_back_office')=>array(
				'type'=>'inputtext',
				'name'=>THEME_SHORT_NAME.'_default_date_format',
				'default'=>'F d, Y'),			
			__('小工具的默认日期格式', 'gdl_back_office')=>array(
				'type'=>'inputtext',
				'name'=>THEME_SHORT_NAME.'_default_widget_date_format',
				'default'=>'M d, Y'),						
			__('项目组合页面样式', 'gdl_back_office')=>array(
				'type'=>'combobox',
				'name'=>THEME_SHORT_NAME.'_use_portfolio_as',
				'options'=>array('1'=>'组合样式', '2'=>'博客样式'),
				'description'=>'你可以选择项目组合页面样式为组合样式或博客样式。'),
			__('更改项目组合别名', 'gdl_back_office')=>array(
				'type'=>'inputtext',
				'name'=>THEME_SHORT_NAME.'_gdl_portfolio_slug',
				'default'=>'portfolio',
				'description'=>'当你在固定链接中设置了%postname%时，用这里的文本替换。'
			),	
			__('搜索/归档 边栏', 'gdl_back_office')=>array(
				'type'=>'radioimage',
				'name'=>THEME_SHORT_NAME.'_search_archive_sidebar',
				'default'=>'no-sidebar',
				'options'=>array(
					'1'=>array('value'=>'right-sidebar','default'=>'selected','image'=>'/include/images/right-sidebar-120.png'),
					'2'=>array('value'=>'left-sidebar','image'=>'/include/images/left-sidebar-120.png'),
					'3'=>array('value'=>'both-sidebar','image'=>'/include/images/both-sidebar-120.png'),
					'4'=>array('value'=>'no-sidebar','image'=>'/include/images/no-sidebar-120.png'))),
			__('搜索/归档 摘要字数', 'gdl_back_office')=>array(
				'type'=>'inputtext',
				'name'=>THEME_SHORT_NAME.'_search_archive_num_excerpt',
				'default'=>'285',
				'description'=>'输入的字符数，搜索和归档页的摘要字数。'),
			__('搜索/归档 项目大小', 'gdl_back_office')=>array(
				'type'=>'combobox',
				'name'=>THEME_SHORT_NAME.'_search_archive_item_size',
				'options'=>array('全缩略图', '中型缩略图')
			),	
			__('搜索/归档 是否文章完整内容', 'gdl_back_office')=>array(
				'type'=>'combobox',
				'name'=>THEME_SHORT_NAME.'_search_archive_full_blog_content',
				'options'=>array('否', '是'),
				'description'=>'此设置是在搜索/存档页中显示文章完整的内容。只在选择全缩略图时有效。'
			),				
			__('文章页边栏', 'gdl_back_office')=>array(
				'type'=>'radioimage',
				'name'=>THEME_SHORT_NAME.'_default_post_sidebar',
				'default'=>'post-no-sidebar',
				'options'=>array(
					'1'=>array('value'=>'post-right-sidebar','default'=>'selected','image'=>'/include/images/right-sidebar-120.png'),
					'2'=>array('value'=>'post-left-sidebar','image'=>'/include/images/left-sidebar-120.png'),
					'3'=>array('value'=>'post-both-sidebar','image'=>'/include/images/both-sidebar-120.png'),
					'4'=>array('value'=>'post-no-sidebar','image'=>'/include/images/no-sidebar-120.png'))),
			__('左侧边栏', 'gdl_back_office')=>array(
				'type'=>'combobox',
				'name'=>THEME_SHORT_NAME.'_default_post_left_sidebar',
				'options'=> get_sidebar_name(),
				'body'=>'gdl-default-post-left-sidebar'),
			__('右侧边栏', 'gdl_back_office')=>array(
				'type'=>'combobox',
				'name'=>THEME_SHORT_NAME.'_default_post_right_sidebar',
				'options'=> get_sidebar_name(),
				'body'=>'gdl-default-post-right-sidebar'),					
		),
		
		'gdl_panel_sidebar' => array(
			__('创建边栏', 'gdl_back_office')=>array('type'=>'sidebar','name'=>THEME_SHORT_NAME.'_create_sidebar')
		),
		
		'gdl_panel_footer_style' => array(
			__('选择页脚样式', 'gdl_back_office')=>array(
				'type'=>'radioimage',
				'name'=>THEME_SHORT_NAME.'_footer_style', 
				'default'=>'footer-style1',
				'options'=>array(
					'1'=>array('value'=>'footer-style1','image'=>'/include/images/footer-style1.png'),
					'2'=>array('value'=>'footer-style2','image'=>'/include/images/footer-style2.png'),
					'3'=>array('value'=>'footer-style3','image'=>'/include/images/footer-style3.png'),
					'4'=>array('value'=>'footer-style4','image'=>'/include/images/footer-style4.png'),
					'5'=>array('value'=>'footer-style5','image'=>'/include/images/footer-style5.png'),
					'6'=>array('value'=>'footer-style6','image'=>'/include/images/footer-style6.png'),
			)),
			__('显示页脚', 'gdl_back_office')=>array('type'=>'radioenabled', 'name'=> THEME_SHORT_NAME.'_show_footer'),
			__('显示版权', 'gdl_back_office')=>array('type'=>'radioenabled', 'name'=> THEME_SHORT_NAME.'_show_copyright'),
		),
		
		'gdl_panel_google_analytics' => array(
			__('启用 Google Analytics（分析）', 'gdl_back_office')=>array('type'=>'radioenabled', 'name'=> THEME_SHORT_NAME.'_enable_analytics', 'default'=>'disable'),
			__('Google Analytics（分析）代码', 'gdl_back_office')=>array('type'=>'textarea', 'name'=> THEME_SHORT_NAME.'_analytics_code',
				'description'=>'这里的代码你可以在google中获取。 代码类似于： <br>' . 
				htmlspecialchars('<script type="text/javascript">') . '<br> ... <br>' .
				htmlspecialchars('</script>'))
		),
		
		'gdl_panel_favicon' => array(
			__('显示 FAVICON 图标', 'gdl_back_office')=>array('type'=>'radioenabled','name'=> THEME_SHORT_NAME.'_enable_favicon', 'default'=>'disable'),
			__('上传 FAVICON 图标', 'gdl_back_office')=>array('type'=>'upload','name'=> THEME_SHORT_NAME.'_favicon_image'),
		),
		
		//Theme Style
		'gdl_panel_font_size' => array(
			__('H1 大小', 'gdl_back_office')=>array('type'=>'sliderbar','name'=>THEME_SHORT_NAME.'_h1_size','default'=>'30'),
			__('H2 大小', 'gdl_back_office')=>array('type'=>'sliderbar','name'=>THEME_SHORT_NAME.'_h2_size','default'=>'25'),
			__('H3 大小', 'gdl_back_office')=>array('type'=>'sliderbar','name'=>THEME_SHORT_NAME.'_h3_size','default'=>'20'),
			__('H4 大小', 'gdl_back_office')=>array('type'=>'sliderbar','name'=>THEME_SHORT_NAME.'_h4_size','default'=>'18'),
			__('H5 大小', 'gdl_back_office')=>array('type'=>'sliderbar','name'=>THEME_SHORT_NAME.'_h5_size','default'=>'16'),
			__('H6 大小', 'gdl_back_office')=>array('type'=>'sliderbar','name'=>THEME_SHORT_NAME.'_h6_size','default'=>'15'),
			__('内容字体大小', 'gdl_back_office')=>array('type'=>'sliderbar','name'=>THEME_SHORT_NAME.'_content_size','default'=>'12')
		),

		'gdl_panel_font' => array(
			__('头部标题字体', 'gdl_back_office')=>array('type'=>'font-combobox','name'=>THEME_SHORT_NAME.'_header_font', 'default'=>'- Droid Serif',
				'description'=>'选择主题的标题字体。该字体将被用在所有的标题和header元素，包括滑块标题。'),
			__('内容字体', 'gdl_back_office')=>array('type'=>'font-combobox','name'=>THEME_SHORT_NAME.'_content_font',
				'description'=>'选择主题的内容字体。 不建议使用 CUFON 渲染的字体作为内容字体。'),
			__('令人惊叹的文本 字体', 'gdl_back_office')=>array('type'=>'font-combobox','name'=>THEME_SHORT_NAME.'_stunning_text_font', 'default'=>'- Museo Sans',
				'description'=>'选择令人惊叹的文字标题的字体。')
		),
				
			
		'gdl_panel_upload_font' => array(
			__('上传字体', 'gdl_back_office')=>array(
				'type'=>'uploadfont',
				'name'=>THEME_SHORT_NAME.'_upload_font',
				'file'=>THEME_SHORT_NAME.'_upload_font_file')
		),
		
		//Overall Elements
		'gdl_panel_logo' => array( 
			__('LOGO 设置', 'gdl_back_office')=>array('type'=>'upload','name'=>THEME_SHORT_NAME.'_logo'), 
			__('LOGO 距顶部距离', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_logo_top_margin','default'=>'35',
				'description'=>'输入数字来设定的LOGO距顶部的距离，最小值为1。'), 
			__('LOGO 距左边距离', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_logo_left_margin','default'=>'0'),
			__('LOGO 底部距离', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_logo_bottom_margin','default'=>'26',
				'description'=>'输入数字来设定的LOGO底部距离，最小值为1。')
		),

		'gdl_panel_top_navigation' => array( 
			__('显示顶部导航菜单', 'gdl_back_office')=>array('type'=>'radioenabled','name'=>THEME_SHORT_NAME.'_enable_top_navigation',
				'description'=>'顶部导航菜单位于LOGO的上方，可以创建你想要的链接。'), 
			__('显示顶部搜索', 'gdl_back_office')=>array('type'=>'radioenabled','name'=>THEME_SHORT_NAME.'_enable_top_search',
				'description'=>'在主菜单的右侧显示搜索框。'),
			__('顶部导航菜单右侧的文字', 'gdl_back_office')=>array('type'=>'textarea','name'=>THEME_SHORT_NAME.'_top_navigation_right_text'), 
		),

		'gdl_panel_background' => array(
			__('背景类型', 'gdl_back_office')=>array('type'=>'combobox', 'id'=>'gdl_background_style','name'=>THEME_SHORT_NAME.'_background_style','options'=>array('0'=>'Pattern','1'=>'Custom Image','2'=>'None'),
				'description'=>'可以设置背景为主题内置的图案或者是自定义图像。'),
			__('选择内置的图案','gdl_back_office')=>array(
				'type'=>'radioimage',
				'body_class'=>'gdl_background_pattern',
				'name'=>THEME_SHORT_NAME.'_background_pattern',
				'default'=>'1',
				'options'=>array(
					'1'=>array('value'=>'1','image'=>'/include/images/pattern/pattern-1.png'),
					'2'=>array('value'=>'2','image'=>'/include/images/pattern/pattern-2.png'),
					'3'=>array('value'=>'3','image'=>'/include/images/pattern/pattern-3.png'),
					'4'=>array('value'=>'4','image'=>'/include/images/pattern/pattern-4.png'),
					'5'=>array('value'=>'5','image'=>'/include/images/pattern/pattern-5.png'),
					'6'=>array('value'=>'6','image'=>'/include/images/pattern/pattern-6.png'),
					'7'=>array('value'=>'7','image'=>'/include/images/pattern/pattern-7.png'),
					'8'=>array('value'=>'8','image'=>'/include/images/pattern/pattern-8.png'),
					'9'=>array('value'=>'9','image'=>'/include/images/pattern/pattern-9.png'),
					'10'=>array('value'=>'10','image'=>'/include/images/pattern/pattern-10.png'),
					'11'=>array('value'=>'11','image'=>'/include/images/pattern/pattern-11.png'),
					'12'=>array('value'=>'12','image'=>'/include/images/pattern/pattern-12.png'),
					'13'=>array('value'=>'13','image'=>'/include/images/pattern/pattern-13.png'),
					'14'=>array('value'=>'14','image'=>'/include/images/pattern/pattern-14.png'),
					'15'=>array('value'=>'15','image'=>'/include/images/pattern/pattern-15.png'),
				)
			),
			__('自定义背景', 'gdl_back_office')=>array(
				'type'=>'upload',
				'name'=>THEME_SHORT_NAME.'_background_custom',
				'body_class'=>'gdl_background_custom'), 
		),
		
		'gdl_panel_top_right_area'=>array(
			__('社交图标上方的文本', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_social_wrapper_text', 'default'=>'',
				'description'=>'这里的文字会出现在社交图标上方。留空，则不显示内容。'),		
		),

		'gdl_panel_social_network' => array( 
			__('距顶部', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_social_wrapper_margin', 'default'=>'33',
				'description'=>'设置社交图标距顶部的距离，最小值为1。'),	
			__('DELICIOUS', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_delicious',
				'description'=>'放置链接则DELICIOUS图标显示，留空则不显示。'),	
			__('DEVIANTART', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_deviantart',
				'description'=>'放置链接则DEVIANTART图标显示，留空则不显示。'),	
			__('DIGG', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_digg',
				'description'=>'放置链接则DIGG图标显示，留空则不显示。'),					
			__('FACEBOOK', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_facebook',
				'description'=>'放置链接则FACEBOOK图标显示，留空则不显示。'),
			__('FLICKR', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_flickr',
				'description'=>'放置链接则FLICKR图标显示，留空则不显示。'),
			__('LASTFM', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_lastfm',
				'description'=>'放置链接则LASTFM图标显示，留空则不显示。'),
			__('LINKEDIN', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_linkedin',
				'description'=>'放置链接则LINKEDIN图标显示，留空则不显示。'),			
			__('PICASA', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_picasa',
				'description'=>'放置链接则PICASA图标显示，留空则不显示。'),
			__('RSS', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_rss',
				'description'=>'放置链接则RSS图标显示，留空则不显示。'),
			__('STUMBLE UPON', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_stumble_upon',
				'description'=>'放置链接则STUMBLE UPON图标显示，留空则不显示。'),
			__('TUMBLR', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_tumblr',
				'description'=>'放置链接则TUMBLR图标显示，留空则不显示。'),	
			__('TWITTER', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_twitter',
				'description'=>'放置链接则TWITTER图标显示，留空则不显示。'),
			__('VIMEO', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_vimeo',
				'description'=>'放置链接则VIMEO图标显示，留空则不显示。'),
			__('YOUTUBE', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_youtube',
				'description'=>'放置链接则YOUTUBE图标显示，留空则不显示。'),
			__('GOOGLE+', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_google_plus',
				'description'=>'放置链接则GOOGLE+图标显示，留空则不显示。'),		
			__('EMAIL', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_email',
				'description'=>'放置链接则EMAIL图标显示，留空则不显示。'),				
			__('PINTEREST', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_pinterest',
				'description'=>'放置链接则PINTEREST图标显示，留空则不显示。'),	
			),		
		
		'gdl_panel_social_shares' => array(
			__('FACEBOOK', 'gdl_back_office')=>array('type'=>'radioenabled','name'=>THEME_SHORT_NAME.'_facebook_share',
				'description'=>'切换 在博客和项目组合页面 启用/禁用Facebook分享。'),
			__('TWITTER', 'gdl_back_office')=>array('type'=>'radioenabled','name'=>THEME_SHORT_NAME.'_twitter_share',
				'description'=>'切换 在博客和项目组合页面 启用/禁用TWITTER分享。'),
			__('GOOGLE', 'gdl_back_office')=>array('type'=>'radioenabled','name'=>THEME_SHORT_NAME.'_google_share',
				'description'=>'切换 在博客和项目组合页面 启用/禁用GOOGLE分享。'),
			__('STUMBLE UPON', 'gdl_back_office')=>array('type'=>'radioenabled','name'=>THEME_SHORT_NAME.'_stumble_upon_share',
				'description'=>'切换 在博客和项目组合页面 启用/禁用STUMBLE UPON分享。'),
			__('MY SPACE', 'gdl_back_office')=>array('type'=>'radioenabled','name'=>THEME_SHORT_NAME.'_my_space_share',
				'description'=>'切换 在博客和项目组合页面 启用/禁用MY SPACE分享。'),
			__('DELICIOUS', 'gdl_back_office')=>array('type'=>'radioenabled','name'=>THEME_SHORT_NAME.'_delicious_share',
				'description'=>'切换 在博客和项目组合页面 启用/禁用DELICIOUS分享。'),
			__('DIGG', 'gdl_back_office')=>array('type'=>'radioenabled','name'=>THEME_SHORT_NAME.'_digg_share',
				'description'=>'切换 在博客和项目组合页面 启用/禁用DIGG分享。'),
			__('REDDIT', 'gdl_back_office')=>array('type'=>'radioenabled','name'=>THEME_SHORT_NAME.'_reddit_share',
				'description'=>'切换 在博客和项目组合页面 启用/禁用REDDIT分享。'),
			__('LINKEDIN', 'gdl_back_office')=>array('type'=>'radioenabled','name'=>THEME_SHORT_NAME.'_linkedin_share',
				'description'=>'切换 在博客和项目组合页面 启用/禁用LINKEDIN分享。'),
			__('GOOGLE+', 'gdl_back_office')=>array('type'=>'radioenabled','name'=>THEME_SHORT_NAME.'_google_plus_share',
				'description'=>'切换 在博客和项目组合页面 启用/禁用GOOGLE+分享。'),				
				
		),
			
		'gdl_panel_copyright_area' => array( 
			__('版权左边区域', 'gdl_back_office')=>array('type'=>'textarea','name'=>THEME_SHORT_NAME.'_copyright_left_area'), 
			__('版权右边区域', 'gdl_back_office')=>array('type'=>'textarea','name'=>THEME_SHORT_NAME.'_copyright_right_area')
		),
		
		// 'gdl_panel_dummy_data' => array( 
		// 	__('LOAD DUMMY DATA', 'gdl_back_office')=>array('type'=>'dummy')
		// ),
			
		// Elements Color
		
		'gdl_panel_navigation' => array(
			__('顶部导航菜单背景', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_top_navigation_background','default'=>'#494949'),
			__('顶部导航菜单下面的横线', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_top_navigation_bottom_bar','default'=>'#e77927',
				'description'=>'设置顶部导航菜单下面横线的颜色。'),
			__('顶部导航菜单文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_top_navigation_text','default'=>'#e7e7e7',),		
			__('主导航菜单倾斜', 'gdl_back_office')=>array('type'=>'radioenabled','name'=>THEME_SHORT_NAME.'_main_navigation_gradient'),
			__('主导航菜单背景', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_main_navigation_background','default'=>'#fdfdfd'),
			__('主导航菜单分割线左侧颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_main_navigation_border_left','default'=>'#ffffff',
				'description'=>'设置主菜单间1像素分割线的颜色，通常情况下，比右侧的边框暗。'),
			__('主导航菜单分割线右侧颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_main_navigation_border_right','default'=>'#dbdbdb',
				'description'=>'设置主菜单间1像素分割线的颜色，通常情况下，比左侧的边框亮。'),
			__('主导航菜单上下横线颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_main_navigation_border_top_bottom','default'=>'#ececec',
				'description'=>'设置主导航菜单外框的颜色。'),
			__('主导航菜单文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_main_navigation_text','default'=>'#7a7a7a',
				'description'=>'正常状态下的主导航菜单的文本颜色。'),
			__('主导航菜单链接鼠标悬停颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_main_navigation_text_hover','default'=>'#3d3d3d',
				'description'=>'主导航菜单链接鼠标悬停状态的文本颜色。'),
			__('主导航菜单当前页状态下文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_main_navigation_text_current','default'=>'#3d3d3d',
				'description'=>'主导航菜单链接在当前页状态下的文本颜色。'),		
			__('主导航菜单阴影颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_main_navigation_bottom_shadow','default'=>'#f5f5f5',
				'description'=>'设置主导航菜单下方阴影的颜色。当没有特色滑块时能看到。'),		
			__('二级导航菜单背景', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_sub_navigation_background','default'=>'#fdfdfd'),
			__('二级导航菜单外框颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_sub_navigation_border','default'=>'#ececec'),
			__('二级导航菜单文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_sub_navigation_text','default'=>'#7a7a7a'),
			__('二级导航菜单链接鼠标悬停颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_sub_navigation_text_hover','default'=>'#3d3d3d'),
			__('二级导航菜单当前状态下文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_sub_navigation_text_current','default'=>'#3d3d3d'),
		),		
		
		'gdl_panel_top_search' => array(
			__('搜索框背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_search_box_background','default'=>'#efefef'),
			__('搜索框文字阴影颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_search_box_shadow','default'=>'#dddddd',
				'description'=>'搜索框文本的背景颜色。'),
			__('搜索框文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_search_box_text','default'=>'#333333'),
		),
		
		'gdl_panel_body' => array(	
			__('社交图标样式','gdl_back_office')=>array(
				'type'=>'combobox',
				'name'=>THEME_SHORT_NAME.'_icon_type',
				'options'=>array('1'=>'dark','2'=>'light'),
				'description'=>'此选项将改变主题中的社交网络图标（页脚除外），使用深色/浅色。'),
			__('标题颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_title_color','default'=>'#494949',
				'description'=>'更改此标题颜色将影响除（页脚标题，侧边栏标题，博客缩略图标题和项目组合缩略图标题）外的其他所有标题。'),
			__('侧栏标题颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_sidebar_title_color','default'=>'#494949'),
			__('文章内容颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_content_color','default'=>'#666666'),
			__('BODY背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_body_background','default'=>'#dddddd',
				'description'=>'当使用图像和非透明图案作为背景时，BODY背景颜色设置无效。'),
			__('网页主体部分背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_container_background','default'=>'#ffffff',
				'description'=>'网页主体部分内容背景颜色。'),
			__('网页主体部分阴影颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_container_shadow','default'=>'#bbbbbb'),
			__('链接颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_link_color','default'=>'#ef7f2c',
				'description'=>'链接颜色设置影响这个主题中所有链接。'),
			__('链接鼠标悬停颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_link_hover_color','default'=>'#ef7f2c',
				'description'=>'链接鼠标悬停颜色设置影响这个主题中所有链接的鼠标悬停颜色。'),
			__('网页元素阴影', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_elements_shadow','default'=>'#ececec',
				'description'=>'更改网页主体部分的按钮、项目组合和侧边栏的阴影。'),
			__('表格边框（TABLE 标签）', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_table_border','default'=>'#e5e5e5'),
			__('表格标题文字颜色 (TH 标签)', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_table_text_title','default'=>'#666666'),
			__('表格标题背景颜色 (TH 标签)', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_table_title_background','default'=>'#f7f7f7'),

			),
		
		'gdl_panel_footer' => array(	
			__('页脚网络社交图标样式', 'gdl_back_office')=>array('type'=>'combobox','name'=>THEME_SHORT_NAME.'_footer_icon_type','options'=>array('0'=>'light','1'=>'dark'),'default'=>'light',
				'description' =>'在页脚中显示深色/浅色社会网络图标。'),
			__('页脚链接颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_footer_link_color','default'=>'#ef7f2c',
				'description'=>'更改页脚中的链接颜色。'),
			__('页脚链接鼠标悬停颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_footer_link_hover_color','default'=>'#ef7f2c',
				'description'=>'设置页脚链接的鼠标悬停颜色。'),
			__('页脚标题颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_footer_title_color','default'=>'#ececec'),	
			__('页脚内容颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_footer_content_color','default'=>'#999999'),	
			__('页脚内容信息颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_footer_content_info_color','default'=>'#b1b1b1',
				'description' =>'设置文章和项目组合中小工具和twitter小工具信息的颜色。'),	
			__('页脚背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_footer_background','default'=>'#313131'),
			__('页脚上方分割横线颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_footer_top_bar','default'=>'#cfcfcf',
				'description'=>'设置页脚上方分割横线颜色。'),
			__('页脚线条颜色', 'gdl_back_office')=>array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_footer_divider_color', 'default'=>'#3b3b3b'),
			__('页脚输入框中文字的颜色', 'gdl_back_office')=>array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_footer_input_text', 'default'=>'#888888',
				'description' =>'设置页脚输入框中文字的颜色。'),
			__('页脚输入框中背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_footer_input_background', 'default'=>'#383838'),
			__('页脚输入框外框颜色', 'gdl_back_office')=>array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_footer_input_border', 'default'=>'#434343'),
			__('页脚按钮颜色', 'gdl_back_office')=>array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_footer_button_color', 'default'=>'#222222',
				'description' =>'设置联系小工具中提交按钮的颜色。'),
			__('页脚按钮文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_footer_button_text', 'default'=>'#7a7a7a'),
			__('页脚小工具特色图像背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_footer_frame_background', 'default'=>'#292929',
				'description' =>'设置文章和项目组合中小工具特色图像的背景颜色。'),
			__('页脚小工具特色图像边框颜色', 'gdl_back_office')=>array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_footer_frame_border', 'default'=>'#3b3b3b'),
			__('版权文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_copyright_text', 'default'=>'#808080'),
			__('版权背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_copyright_background', 'default'=>'#202020'),
			__('版权阴影颜色', 'gdl_back_office')=>array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_copyright_shadow', 'default'=>'#111111',
				'description' =>'This is the shadow between the footer and copyright.'),
		),
		
		'gdl_panel_slider' => array(
			__('滑块标题颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_slider_title_color','default'=>'#ef7f2c'),
			__('滑块字幕颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_slider_caption_color','default'=>'#ffffff'),	
			__('顶部滑块底部线条颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_full_slider_bottom_line','default'=>'#ebebeb',
				'description'=>'设置顶部滑块底部线条颜色。'),	
		),
			
		'gdl_panel_blog_port' => array(
			__('项目组合标题颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_port_title_color','default'=>'#ef7f2c',
				'description'=>'设置项目组合标题颜色'),
			__('项目组合标题鼠标悬停颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_port_title_hover_color','default'=>'#ef7f2c',
				'description'=>'设置项目组合标题鼠标悬停颜色。'),
			__('博客标题颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_post_title_color','default'=>'#646464',
				'description'=>'设置博客标题颜色。'),
			__('博客标题鼠标悬停颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_post_title_hover_color','default'=>'#646464',
				'description'=>'设置博客标题鼠标悬停颜色'),
			__('博客元素信息颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_post_info_color','default'=>'#797979',
				'description'=>"设置博客元素信息颜色，例如：发布日期、作者、分类等。"),
			__('博客（小工具样式）标题颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_post_widget_title_color','default'=>'#ef7f2c'),
			__('博客/项目组合小工具特色图像背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_post_port_frame_color','default'=>'#f0f0f0'),
			__('博客/项目组合小工具特色图像边框颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_post_port_frame_border','default'=>'#ffffff'),
			__('博客关于作者背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_post_about_author_color','default'=>'#f9f9f9',
				'description'=>'博客页面中作者元素，可以文章/项目组合选项中启用/禁用。'),
			__('正常分页颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_pagination_normal_state','default'=>'#f9f9f9',
				'description'=>'分页背景颜色和非当前页面颜色。'),
		),			
		
		'gdl_panel_contact_form' => array(
			__('文本框、文字区域、评论区的背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_contact_form_background_color','default'=>'#ffffff',
				'description'=>'设置文本框、文字区域、评论区的背景颜色。'),
			__('文本框、文字区域、评论区的文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_contact_form_text_color','default'=>'#888888',
				'description'=>'设置文本框、文字区域、评论区的文字颜色。'),
			__('文本框、文字区域、评论区的边框颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_contact_form_border_color','default'=>'#cfcfcf'),
			__('文本框、文字区域、评论区特色图像背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_contact_form_frame_color','default'=>'#f8f8f8'),
			__('文本框、文字区域、评论区文字背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_contact_form_inner_shadow','default'=>'#ececec',
				'description'=>'设置文本框、文字区域、评论区文字背景颜色。'),
		),			
	
		'gdl_panel_stunning_text' => array(
			__('令人惊叹的文字标题颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_stunning_text_title_color','default'=>'#333333'),
			__('令人惊叹的文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_stunning_text_caption_color','default'=>'#666666'),
			__('令人惊叹的文字背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_stunning_text_background_color','default'=>'#ffffff'),
			__('令人惊叹的文字按钮文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_stunning_text_button_color','default'=>'#ffffff',
				'description'=>'如果存在的按钮，这将是令人惊叹的文字按钮的文本颜色。'),
			__('令人惊叹的文字按钮背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_stunning_text_button_background','default'=>'#ef7f2c',
				'description'=>'如果存在的按钮，这将是令人惊叹的文字按钮的背景颜色。'),
		),	
		
		'gdl_panel_additional_elements' => array(
			__('分隔线颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_divider_line','default'=>'#ececec',
				'description'=>'设置分割线的颜色（不含页脚）。'),
			__('返回顶部文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_back_to_top_text_color','default'=>'#7c7c7c',
				'description'=>'设置返回顶部文字颜色。'),		
			__('标签头背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_tab_background_color','default'=>'#f5f5f5',
				'description'=>'这是在“非激活”状态下标签头的背景。'),
			__('标签头文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_tab_text_color','default'=>'#666666'),
			__('激活状态下标签头背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_tab_active_background_color','default'=>'#ffffff',
				'description'=>'这是在“激活”状态下标签头的背景。'),		
			__('激活状态下标签头文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_tab_active_text_color','default'=>'#111111'),
			__('标签边框颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_tab_border_color','default'=>'#dddddd'),
			__('服务项目标题颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_column_service_title_color','default'=>'#ef7f2c',),
			__('推荐的文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_testimonial_text','default'=>'#848484'),
			__('推荐的文字作者颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_testimonial_author','default'=>'#494949'),
			__('推荐的文字地址颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_testimonial_position','default'=>'#8d8d8d'),			
			__('按钮背景颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_button_background_color','default'=>'#f1f1f1',
				'description'=>'设置主题中按钮的背景颜色（除简码和令人惊叹的文字按钮）。'),			
			__('按钮边框颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_button_border_color','default'=>'#dedede',
				'description'=>'设置主题中按钮的边框颜色（除简码和令人惊叹的文字按钮）。'),			
			__('按钮文字颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_button_text_color','default'=>'#7a7a7a',
				'description'=>'设置主题中按钮的文字颜色（除简码和令人惊叹的文字按钮）。'),			
			__('按钮文字鼠标悬停的颜色', 'gdl_back_office')=>array('type'=>'colorpicker','name'=>THEME_SHORT_NAME.'_button_text_hover_color','default'=>'#7a7a7a',
				'description'=>'设置主题中按钮的文字鼠标悬停颜色（除简码和令人惊叹的文字按钮）。'),			
		),
		
		'gdl_panel_price_item' => array(
			__('价格表文字颜色', 'gdl_back_office') => array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_price_item_price_color', 'default'=>'#3a3a3a',
				'description'=>'设置价格表文字颜色（正常价格时）。'),
			__('最优价格文字颜色', 'gdl_back_office') => array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_price_item_best_price_color', 'default'=>'#ef7f2c',
				'description'=>'设置最优价格文字颜色。'),
			__('价格标题颜色', 'gdl_back_office') => array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_price_item_price_title_color', 'default'=>'#3a3a3a',
				'description'=>'设置价格标题颜色。'),
			__('最优价格标题颜色', 'gdl_back_office') => array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_price_item_best_price_title_color', 'default'=>'#ffffff',
				'description'=>'设置最优价格标题颜色'),
			__('价格标题背景颜色', 'gdl_back_office') => array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_price_item_price_title_background', 'default'=>'#e9e9e9'),
			__('最优价格标题背景颜色', 'gdl_back_office') => array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_price_item_best_price_title_background', 'default'=>'#5f5f5f'),
			__('价格表边框颜色', 'gdl_back_office') => array('type'=>'colorpicker', 'name'=>THEME_SHORT_NAME.'_price_item_border', 'default'=>'#ececec',
				'description'=>'设置价格表表框颜色，不影响最优价格表外框的颜色。'),
		),
		
		'gdl_panel_load_default_color' => array(
			__('载入默认颜色','gdl_back_office')=>array('type'=>'button','text'=>'默认颜色','id'=>'gdl_load_default_color_button',
				'description'=>'单击此按钮可加载主题元素的默认颜色。然后单击“保存更改”，保存默认值。 <br><br> ' .
				'警告：单击“保存更改”后，所有自定义设置的颜色不能恢复。')
		),
		
		// Translator
		'gdl_panel_enable_admin_translator' => array(
			__('ENABLE ADMIN TRANSLATOR', 'gdl_back_office')=>array('type'=>'radioenabled', 'name'=>THEME_SHORT_NAME.'_enable_admin_translator')
		),
		
		'gdl_panel_blog_port_translator' => array(
			__('SOCIAL SHARE (BLOG/PORTFOLIO)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_social_shares','default'=>'Social Share'),
			__('LEAVE A REPLY (BLOG)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_leave_reply','default'=>'Leave a Reply'),
			__('ABOUT THE AUTHOR (BLOG)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_about_author','default'=>'About the Author'),
			__('CLIENT (PORTFOLIO)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_client','default'=>'Client'),
			__('READ MORE (PORTFOLIO)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_read_more','default'=>'Read More'),
			__('VISIT WEBSITE (PORTFOLIO)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_visit_website','default'=>'Visit Website'),
			__('VIEW ALL PROJECTS (PORTFOLIO)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_view_all_project','default'=>'View All Projects →'),
			__('CONTINUE READING (BLOG)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_continue_reading','default'=>'Continue Reading →'),
		),
		
		'gdl_panel_contact_form_translator' => array(
			__('NAME (CONTACT FORM)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_name_contact_form','default'=>'Name'),
			__('NAME ERROR (CONTACT FORM)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_name_error_contact_form','default'=>'Please enter your name'),
			__('EMAIL (CONTACT FORM)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_email_contact_form','default'=>'Email'),
			__('EMAIL ERROR (CONTACT FORM)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_email_error_contact_form','default'=>'Please enter a valid email address'),
			__('MESSAGE (CONTACT FORM)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_message_contact_form','default'=>'Message'),
			__('MESSAGE ERROR (CONTACT FORM)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_message_error_contact_form','default'=>'Please enter message'),
			__('SUBMIT BUTTON (CONTACT FORM)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_submit_contact_form','default'=>'Submit'),
			__('SEND ERROR (CONTACT FORM)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_contact_send_error','default'=>'Message cannot be sent to destination'),
			__('SEND COMPLETE (CONTACT FORM)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_contact_send_complete','default'=>'The e-mail was sent successfully'),
		),
		
		'gdl_panel_contact_widget_translator' => array(
			__('NAME (CONTACT WIDGET)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_name_contact_widget','default'=>'Name'),
			__('EMAIL (CONTACT WIDGET)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_email_contact_widget','default'=>'Email'),
			__('MESSAGE (CONTACT WIDGET)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_message_contact_widget','default'=>'Message'),
			__('REQUIRE (CONTACT WIDGET)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_require_contact_widget','default'=>'* Require'),
			__('PLEASE WAIT (CONTACT WIDGET)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_please_wait_contact_widget','default'=>'Please Wait...'),
			__('SENDING COMPLETE (CONTACT WIDGET)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_sending_complete_contact_widget','default'=>'Thanks! Your email was sent'),
			__('SUBMIT BUTTON (CONTACT WIDGET)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_submit_contact_widget','default'=>'Submit'),
		),

		'gdl_panel_additional_elements_translator' => array(
			__('READ MORE (PRICE ITEM)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_translator_read_more_price','default'=>'Read More'),
			__('404 TITLE (404 PAGE)', 'gdl_back_office')=>array('type'=>'inputtext','name'=>THEME_SHORT_NAME.'_404_title','default'=>'Sorry'),
			__('404 CONTENT (404 PAGE)', 'gdl_back_office')=>array('type'=>'textarea','name'=>THEME_SHORT_NAME.'_404_content','default'=>"The page you are finding seem doesn't exist."),
			__('SEARCH NOT FOUND (SEARCH PAGE)', 'gdl_back_office')=>array('type'=>'textarea','name'=>THEME_SHORT_NAME.'_search_not_found','default'=>"Sorry, but nothing matched your search criteria. Please try again with some different keywords."),
		),
		
		// Slider Setting
		'gdl_panel_nivo_slider' => array(
			__('滑块效果', 'gdl_back_office')=>array(
				'type'=>'combobox',
				'oldname'=>'effect',
				'name'=>THEME_SHORT_NAME.'_nivo_slider_effect',
				'options'=>array(
					'0'=>'sliceDown', '1'=>'sliceDownLeft', '2'=>'sliceUp',
					'3'=>'sliceUpLeft', '4'=>'sliceUpDown', '5'=>'sliceUpDownLeft',
					'6'=>'fold', '7'=>'fade', '8'=>'random',
					'9'=>'slideInRight', '10'=>'slideInLeft', '11'=>'boxRandom',
					'12'=>'boxRain', '13'=>'boxRainReverse', '14'=>'boxRainGrow',
					'15'=>'boxRainGrowReverse')),
			__('鼠标悬停时暂停滑块', 'gdl_back_office')=>array('type'=>'radioenabled','oldname'=>'pauseOnHover','name'=>THEME_SHORT_NAME.'_nivo_slider_pause_on_hover',
				'description'=>'暂停滑块，当鼠标在滑块上悬停。'),
			__('显示导航', 'gdl_back_office')=>array('type'=>'radioenabled','oldname'=>'controlNav','name'=>THEME_SHORT_NAME.'_nivo_slider_show_bullets',
				'description'=>'显示滑块的导航。'),
			__('启用左/右导航', 'gdl_back_office')=>array('type'=>'radioenabled','oldname'=>'directionNav','name'=>THEME_SHORT_NAME.'_nivo_slider_show_navigation',
				'description'=>'启用滑块的左/右导航。'),
			__('鼠标悬停时显示左/右导航', 'gdl_back_office')=>array('type'=>'radioenabled','oldname'=>'directionNavHide','name'=>THEME_SHORT_NAME.'_nivo_slider_hover_navigation',
				'description'=>'设置鼠标悬停时显示左/右导航。'),
			__('动画速度', 'gdl_back_office')=>array('type'=>'inputtext','oldname'=>'animSpeed','name'=>THEME_SHORT_NAME.'_nivo_slider_animation_speed','default'=>'500',
				'description'=>'设置滑块切换时的速度。'),
			__('停留时间', 'gdl_back_office')=>array('type'=>'inputtext','oldname'=>'pauseTime','name'=>THEME_SHORT_NAME.'_nivo_slider_pause_time','default'=>'3000',
				'description'=>'设置滑块的停留时间。'),
			__('字幕透明度', 'gdl_back_office')=>array('type'=>'inputtext','oldname'=>'captionOpacity','name'=>THEME_SHORT_NAME.'_nivo_slider_caption_opacity','default'=>'0.8'),
		),
		
		'gdl_panel_flex_slider' => array(
			__('滑块类型', 'gdl_back_office')=>array('type'=>'combobox','oldname'=>'animation'
				,'name'=>THEME_SHORT_NAME.'_flex_slider_effect', 'options'=>array('0'=>'fade', '1'=>'slide')),
			__('鼠标悬停时暂停滑块', 'gdl_back_office')=>array('type'=>'radioenabled','oldname'=>'pauseOnHover','name'=>THEME_SHORT_NAME.'_flex_slider_pause_on_hover','default'=>'disable',
				'description'=>'暂停滑块，当鼠标在滑块上悬停。'),
			__('显示导航', 'gdl_back_office')=>array('type'=>'radioenabled','oldname'=>'controlNav','name'=>THEME_SHORT_NAME.'_flex_slider_show_bullets',
				'description'=>'显示滑块的导航。'),
			__('启用左/右导航', 'gdl_back_office')=>array('type'=>'radioenabled','oldname'=>'directionNav','name'=>THEME_SHORT_NAME.'_flex_slider_show_navigation',
				'description'=>'启用滑块的左/右导航。'),
			__('动画速度', 'gdl_back_office')=>array('type'=>'inputtext','oldname'=>'animationDuration','name'=>THEME_SHORT_NAME.'_flex_slider_animation_speed','default'=>'600',
				'description'=>'设置滑块切换时的速度。'),
			__('停留时间', 'gdl_back_office')=>array('type'=>'inputtext','oldname'=>'slideshowSpeed','name'=>THEME_SHORT_NAME.'_flex_slider_pause_time','default'=>'7000',
				'description'=>'设置滑块的停留时间。'),
			__('暂停行动', 'gdl_back_office')=>array('type'=>'radioenabled','oldname'=>'pauseOnAction','name'=>THEME_SHORT_NAME.'_flex_slider_pause_on_action','default'=>'false'),
		),
		
		'gdl_panel_anything_slider' => array(
			__('鼠标悬停时暂停滑块', 'gdl_back_office')=>array('type'=>'radioenabled','oldname'=>'pauseOnHover','name'=>THEME_SHORT_NAME.'_anything_slider_pause_on_hover',
				'description'=>'暂停滑块，当鼠标在滑块上悬停。'),
			__('显示导航', 'gdl_back_office')=>array('type'=>'radioenabled','oldname'=>'buildNavigation','name'=>THEME_SHORT_NAME.'_anything_slider_show_bulltes',
				'description'=>'显示滑块的导航。'),
			__('鼠标悬停时显示导航', 'gdl_back_office')=>array('type'=>'radioenabled','oldname'=>'toggleControls','name'=>THEME_SHORT_NAME.'_anything_slider_hover_bulltes',
				'description'=>'设置鼠标悬停时显示导航。'),
			__('启用左/右导航', 'gdl_back_office')=>array('type'=>'radioenabled','oldname'=>'buildArrows','name'=>THEME_SHORT_NAME.'_anything_slider_show_navigation',
				'description'=>'启用滑块的左/右导航。'),
			__('鼠标悬停时显示左/右导航', 'gdl_back_office')=>array('type'=>'radioenabled','oldname'=>'toggleArrows','name'=>THEME_SHORT_NAME.'_anything_slider_hover_navigation',
				'description'=>'设置鼠标悬停时显示左/右导航。'),
			__('动画速度', 'gdl_back_office')=>array('type'=>'inputtext','oldname'=>'animationTime','name'=>THEME_SHORT_NAME.'_anything_slider_animation_speed','default'=>'600',
				'description'=>'设置滑块切换时的速度。'),
			__('停留时间', 'gdl_back_office')=>array('type'=>'inputtext','oldname'=>'delay','name'=>THEME_SHORT_NAME.'_anything_slider_pause_time','default'=>'3000',
				'description'=>'设置滑块的停留时间。'),
		)
		
	);
	
	// add action to embeded the panel in to dashboard
	add_action('admin_menu','add_goodlayers_panel');
	function add_goodlayers_panel(){
	
		$page = add_menu_page('GoodLayers Option', THEME_FULL_NAME, 'administrator', plugin_basename(__FILE__), 'create_goodlayers_panel' /*,  GOODLAYERS_PATH.'/include/images/portfolio-icon.png' */);
		
		add_action('admin_print_scripts-' . $page,'register_goodlayers_panel_scripts');
		add_action('admin_print_styles-' . $page,'register_goodlayers_panel_styles');
		
	}
	
	// add ajax action to hook the functions when save button is pressed 
	add_action('wp_ajax_save_goodlayers_panel','save_goodlayers_panel');
	function save_goodlayers_panel(){
	
		check_ajax_referer(plugin_basename(__FILE__),'security');
		
		global $goodlayers_element;
		
		$return_data = array('success'=>'-1', 'alert'=>'Save option failed, please try contacting your host provider to increase the post_max_size and suhosin.post.max_vars varialble on the server.');
		
		foreach($goodlayers_element as $elements){
		
			foreach($elements as $element){
			
				// when save sidebar
				if($element['type'] == 'sidebar'){
				
					$sidebar_xml = '<sidebar>';
					if( !empty( $_POST[$element['name']] ) ){
						$sidebar = $_POST[$element['name']];     
					}else{
						$sidebar = array();
					}
					
					foreach($sidebar as $sidebar_name){
					
						$sidebar_xml = $sidebar_xml . create_xml_tag('name',$sidebar_name);
						
					}
					
					$sidebar_xml = $sidebar_xml . '</sidebar>';
					
					if(!save_option($element['name'], get_option($element['name']), $sidebar_xml)){
					
						die( json_encode($return_data) );
						
					}
					
				// when save uploaded font
				}else if($element['type'] == 'uploadfont'){
				
					$uploadfont_xml = '<uploadfont>';
					if( !empty($_POST[$element['name']]) && !empty($_POST[$element['file']]) ){
						$uploadfont = $_POST[$element['name']];
						$uploadfont_file = $_POST[$element['file']];
						$num = sizeof($uploadfont);
						
						for($i=0; $i<$num; $i++){
						
							$uploadfont_xml = $uploadfont_xml . '<font>';
							$uploadfont_xml = $uploadfont_xml . create_xml_tag('name', $uploadfont[$i]);
							$uploadfont_xml = $uploadfont_xml . create_xml_tag('file', $uploadfont_file[$i]);
							$uploadfont_xml = $uploadfont_xml . '</font>';
							
						}
					}
					$uploadfont_xml = $uploadfont_xml . '</uploadfont>';
					
					if(!save_option($element['name'], get_option($element['name']), $uploadfont_xml)){
					
						die( json_encode($return_data) );
						
					}
					
				// do nothing with dummy button
				}else if($element['type'] == 'dummy'){
				
				}else if( !empty($element['name']) ){
					if( !empty( $_POST[$element['name']] ) ){
						$new_option_value = str_replace( "\'" , "'", $_POST[$element['name']]);
						$new_option_value = str_replace( '\"' , '"', $new_option_value);
						$new_option_value = str_replace( '\\\\' , '\\' , $new_option_value);
					}else{
						$new_option_value = '';
					}
					
					if(!save_option($element['name'], get_option($element['name']), $new_option_value)){
					
						die( json_encode($return_data) );
						
					}
					
				}
				
			}
			
		}
		
		// call the function to generate the style-custom.css file.
		gdl_generate_style_custom();
		
		die( json_encode( array('success'=>'0') ) );
		
	}
	
	// update the option if new value is exists and not equal to old one 
	function save_option($name, $old_value, $new_value){
	
		if(empty($new_value) && !empty($old_value)){
		
			if(!delete_option($name)){
			
				return false;
				
			}
			
		}else if($old_value != $new_value){
		
			if(!update_option($name, $new_value)){
			
				return false;
				
			}
			
		}
		
		return true;
		
	}
	
	// start creating the goodlayers panel ( by calling function to create menu and elements )
	function create_goodlayers_panel(){
	
		global $goodlayers_menu;
		global $goodlayers_element;		
		
		?>
		
		<form name="goodlayer-panel-form" id="goodlayer-panel-form">
			<div class="goodlayers-panel-wrapper">
			<?php
				
				echo '<div class="panel-menu">';
				echo '<div class="panel-menu-header"><div class="panel-menu-header-strap"></div>';
				echo '<img src="' . GOODLAYERS_PATH . '/include/images/admin-panel-logo.png" alt="goodlayers"/>';
				echo '</div>';
				
					create_goodlayers_menu($goodlayers_menu);
					
				echo '</div>';
				echo '<div class="panel-elements" id="panel-elements">';
				echo '<div class="panel-element-head"><div class="panel-element-header-strap"></div>';
				
				echo '<div class="panel-header-left-text">';
				echo '<div class="panel-goodlayers-text">主题选项</div>';
				echo '<div class="panel-admin-panel-text">管理面板</div>';
				echo '</div>';
				
				echo '<div class="head-save-changes"><div class="loading-save-changes"></div>';
				echo '<input type="submit" value="' . __('保存更改','gdl_back_office') . '">';
				echo '</div>';	
				echo '</div>';	
				
				echo '<div class="panel-element" id="panel-element-save-complete">';
				echo '<div class="panel-element-save-text">保存设置完成</div>';
				echo '<div class="panel-element-save-arrow"></div></div>';
			
					create_goodlayers_elements($goodlayers_element);
				
				echo '<div class="panel-element-tail">';
				echo '<div class="tail-save-changes"><div class="loading-save-changes"></div>';
				echo '<input type="submit" value="' . __('保存更改','gdl_back_office') . '">';
				echo '</div>';						
				echo '</div>';						
				echo '<input type="hidden" name="action" value="save_goodlayers_panel">';
				echo '<input type="hidden" name="security" value="' . wp_create_nonce(plugin_basename(__FILE__)) . '">';
				echo '</div>';	
				
			?>

			</div>
		</form>
		
		<?php
	}
	
	// Create accordion menu
	function create_goodlayers_menu($menu){
	
		echo '<div id="panel-nav"><ul>';
		
		foreach($menu as $title=>$sub_menu){ 
		
			echo '<li>';
			echo '<a id="parent" href="#" >';
			echo '<div class="top-menu-bar"></div>';
			echo '<div class="top-menu-image"><img src="' . GOODLAYERS_PATH . '/include/images/admin-panel/' . str_replace(' ', '', $title) . '.png"/></div>';
			echo '<span class="top-menu-text">' . __($title, 'gdl_back_office') . '</span>';
			echo '</a>';
			echo '<ul>';
			
			foreach($sub_menu as $sub_title=>$name){
			
				echo '<li>';
				echo '<a id="children" href="#" rel=' . $name . '>';
				echo '<div class="child-menu-image"></div>';
				echo '<span class="child-menu-text">' . __($sub_title, 'gdl_back_office') . '</span>';
				echo '</a>';
				echo '</li>';
				
			}
			
			echo '</ul>';
			echo '</li>';
			
		}
		
		echo '</ul></div>';
		
	}
	
	// decide to create each input element base on the receiving key of elements
	function create_goodlayers_elements($elements){
	
		foreach($elements as $key => $element){
		
			echo '<div class="panel-element" id=' . $key . '>';

				foreach($element as $key => $values){
				
					if( !empty($values['name']) ){
						$values['value'] = get_option($values['name']);
						$values['default'] = (isset($values['default']))? $values['default']: '';
					}
					
					switch($values['type']){
					
						case 'upload': print_panel_upload($key, $values); break;
						case 'inputtext': print_panel_input_text($key, $values); break;
						case 'textarea': print_panel_input_textarea($key, $values); break;
						case 'radioenabled': print_panel_radio_enabled($key, $values); break;
						case 'radioimage' : print_panel_radioimage($key, $values); break;
						case 'combobox': print_panel_combobox($key, $values); break;
						case 'font-combobox': print_panel_font_combobox($key, $values); break;
						case 'colorpicker': print_panel_color_picker($key, $values); break;
						case 'sliderbar': print_panel_sliderbar($key, $values); break;
						case 'sidebar': print_panel_sidebar($key, $values); break;
						case 'uploadfont': print_panel_upload_font($key, $values); break;
						case 'button': print_panel_button($key, $values); break;
						case 'dummy': print_panel_dummy(); break;
						
					}
					
				}
			
			echo '</div>';
			
		}
		
	}
	
	/*  ---------------------------------------------------------------------
	*	The following section is the template of input elements
	*	---------------------------------------------------------------------
	*/
	
	// Upload => name, value, default
	function print_panel_upload($title, $values){
	
		extract($values);
		if( empty( $body_class ) ){ $body_class = $name; }
		
		?>
			<div class="panel-body body-<?php echo $body_class; ?>">
				<div class="panel-body-gimmick"></div>
				<div class="panel-title">
					<label for="<?php echo $name; ?>" > <?php _e($title, 'gdl_back_office'); ?> </label>
				</div>
				<div class="panel-input">	
					<div class="input-example-image" id="input-example-image">
					<?php 
					
						$image_src = '';
						
						if(!empty($value)){ 
						
							$image_src = wp_get_attachment_image_src( $value, 'full' );
							$image_src = (empty($image_src))? '': $image_src[0];
							$thumb_src_preview = wp_get_attachment_image_src( $value, '150x150');
							echo '<img src="' . $thumb_src_preview[0] . '" />';
							
						} 
						
					?>			
					</div>
					<input name="<?php echo $name; ?>" type="hidden" id="upload_image_attachment_id" value="<?php 
					
						echo ($value == '')? esc_html($default): esc_html($value);
						
					?>" />
					<input id="upload_image_text" class="upload_image_text" type="text" value="<?php echo $image_src; ?>" />
					<input class="upload_image_button" type="button" value="上传" />
				</div>
				<br class="clear">
			</div>
			
		<?php
		
	}
	
	// text => name, value, default
	function print_panel_input_text($title, $values){
	
		extract($values);
		
		?>
			<div class="panel-body">
				<div class="panel-body-gimmick"></div>
				<div class="panel-title">
					<label for="<?php echo $name; ?>" > <?php _e($title, 'gdl_back_office'); ?> </label>
				</div>
				<div class="panel-input">
					<input type="text" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value="<?php 
						
						echo ($value == '')? esc_html($default): esc_html($value);
						
						 ?>" />
				</div>
				<?php if(isset($description)){ ?>
				
					<div class="panel-description"><?php _e($description, 'gdl_back_office'); ?></div>
					<div class="panel-description-info-img"></div>
					
				<?php } ?>
				<br class="clear">
			</div>
			
		<?php
	
	}
	
	// textarea => name, value, default
	function print_panel_input_textarea($title, $values){
	
		extract($values);
		
		?>
		
			<div class="panel-body">
				<div class="panel-body-gimmick"></div>
				<div class="panel-title">
					<label for="<?php echo $name; ?>"><?php _e($title, 'gdl_back_office'); ?></label>
				</div>
				<div class="panel-input">
					<textarea name="<?php echo $name; ?>" id="<?php echo $name; ?>" ><?php
						
						echo ($value == '')? esc_html($default): esc_html($value);
						
					?></textarea>
				</div>
				<?php if(isset($description)){ ?>
				
					<div class="panel-description"><?php _e($description, 'gdl_back_office'); ?></div>
					<div class="panel-description-info-img"></div>
					
				<?php } ?>
				<br class="clear">
			</div>
			
		<?php
		
	}
	
	// radioenabled => name, value
	function print_panel_radio_enabled($title, $values){
	
		extract($values);
		
		?>
		
			<div class="panel-body">
				<div class="panel-body-gimmick"></div>
				<div class="panel-title">
					<label for="<?php echo $name; ?>"><?php _e($title, 'gdl_back_office'); ?></label>
				</div>
				<div class="panel-input">
					<label for="<?php echo $name; ?>"><div class="checkbox-switch <?php
						
						echo ($value=='enable' || ($value=='' && empty($default)))? 'checkbox-switch-on': 'checkbox-switch-off'; 

					?>"></div></label>
					<input type="checkbox" name="<?php echo $name; ?>" class="checkbox-switch" value="disable" checked>
					<input type="checkbox" name="<?php echo $name; ?>" id="<?php echo $name; ?>" class="checkbox-switch" value="enable" <?php 
						
						echo ($value=='enable' || ($value=='' && empty($default)))? 'checked': ''; 
					
					?>>
				</div>
				<?php if(isset($description)){ ?>
				
					<div class="panel-description"><?php _e($description, 'gdl_back_office'); ?></div>
					<div class="panel-description-info-img"></div>
					
				<?php } ?>
				<br class="clear">
			</div>
			
		<?php
		
	}
	
	function print_panel_radioimage($title, $values){
		
		extract($values);
		
		if( empty( $body_class ) ){ $body_class = $name; }
		
		?>
		
			<div class="panel-body body-<?php echo $body_class; ?>">
				<div class="panel-body-gimmick"></div>
				<div class="panel-title">
					<label for="<?php echo $name; ?>"><?php _e($title, 'gdl_back_office'); ?></label>
				</div>
				<div class="panel-radioimage">
				
					<?php foreach( $options as $option ){ ?>
					
						<div class='radio-image-wrapper'>
							<label for="<?php echo $option['value']; ?>">
								<img src=<?php echo GOODLAYERS_PATH.$option['image']?> alt=<?php echo $name;?>>
								<div id="check-list"></div>
							</label>
							<input type="radio" name="<?php echo $name; ?>" value="<?php echo $option['value'];?>" <?php 
								if($value == $option['value']){
									echo 'checked';
								}else if($value == '' && $default == $option['value']){
									echo 'checked';
								}
							?> id="<?php echo $option['value']; ?>" class="<?php echo $name; ?>" > 
						</div>
						
					<?php } ?>
					<br class="clear">	
				</div>
			</div>		
		
		<?php
		
	}
	
	// combobox => name, value, options[]
	function print_panel_combobox($title, $values){
	
		extract($values);
		
		if( empty($body) ) $body = "";
		if( empty($id) ) $id = $name;
		
		?>
		
			<div class="panel-body <?php echo $body; ?>">	
				<div class="panel-body-gimmick"></div>
				<div class="panel-title">
					<label for="<?php echo $name; ?>"><?php _e($title, 'gdl_back_office'); ?></label>
				</div>
				<div class="panel-input">	
					<div class="combobox">
						<select name="<?php echo $name; ?>" id="<?php echo $id; ?>">
						
							<?php foreach($options as $option){ ?>
							
								<option <?php if( $option == esc_html($value) ){ echo 'selected'; }?>><?php echo $option; ?></option>
							
							<?php } ?>
							
						</select>
					</div>
				</div>
				<?php if(isset($description)){ ?>
				
					<div class="panel-description"><?php _e($description, 'gdl_back_office'); ?></div>
					<div class="panel-description-info-img"></div>
					
				<?php } ?>
				<br class="clear">
			</div>
			
		<?php
		
	}	
	
	// font-combobox => name, value, options[]
	function print_panel_font_combobox($title, $values){
	
		extract($values);
		if(empty($value)){ $value = $default; } 
		$elements = get_font_array();
		
		?>
		
			<div class="panel-body">
				<div class="panel-body-gimmick"></div>
				<div class="panel-title">
					<label for="<?php echo $name; ?>"><?php _e($title, 'gdl_back_office'); ?></label>
				</div>
				<div class="panel-input">	
					<div class="panel-font-sample" id="panel-font-sample"><?php echo FONT_SAMPLE_TEXT; ?></div> 
					<div class="combobox" id="combobox-font-sample">
						<select name="<?php echo $name; ?>" id="<?php echo $name; ?>" class="gdl-panel-select-font-family">
						
							<?php foreach($elements as $option_name => $status){ ?>
							
								<option <?php if( $option_name==substr(esc_html($value),2) ){ echo 'selected'; }?> <?php echo $status; ?>><?php 
										
										echo ($status=='enabled')?  '- ':'';
										echo $option_name; 
									
									?></option>
							
							<?php } ?>
							
						</select>
					</div>
				</div>
				<?php if(isset($description)){ ?>
				
					<div class="panel-description"><?php _e($description, 'gdl_back_office'); ?></div>
					<div class="panel-description-info-img"></div>
					
				<?php } ?>
				<br class="clear">
			</div>
			
		<?php
		
	}	
	
	// colorpicker => name, value, default
	function print_panel_color_picker($title, $values){
	
		extract($values);
		
		?>
		
			<div class="panel-body">
				<div class="panel-body-gimmick"></div>
				<div class="panel-title">
					<label for="<?php echo $name; ?>" > <?php _e($title, 'gdl_back_office'); ?> </label>
				</div>
				<div class="panel-input">
					<input type="text" name="<?php echo $name; ?>" class="color-picker" value="<?php 
												
						echo ($value == '')? esc_html($default): esc_html($value);
						
						?>" default="<?php echo $default; ?>" />
				</div>
				<?php if(isset($description)){ ?>
				
					<div class="panel-description"><?php _e($description, 'gdl_back_office'); ?></div>
					<div class="panel-description-info-img"></div>
					
				<?php } ?>
				<br class="clear">
			</div>
			
		<?php
	}
	
	// sliderbar => name, value, default
	function print_panel_sliderbar($title, $values){
	
		extract($values);
		
		?>
		
			<div class="panel-body">
				<div class="panel-body-gimmick"></div>
				<div class="panel-title">
					<label for="<?php echo $name; ?>" > <?php _e($title, 'gdl_back_office'); ?> </label>
				</div>
				<div class="panel-input">
					<div id="<?php echo $name; ?>" class="sliderbar" rel="sliderbar"></div>
					<input type="hidden" name="<?php echo $name; ?>" value="<?php echo ($value == '')? esc_html($default): esc_html($value); ?>" >
					<div id="slidertext"><?php echo ($value == '')? esc_html($default): esc_html($value); ?> px</div>
				</div>
				<?php if(isset($description)){ ?>
				
					<div class="panel-description"><?php _e($description, 'gdl_back_office'); ?></div>
					<div class="panel-description-info-img"></div>
					
				<?php } ?>
				<br class="clear">
			</div>
			
		<?php
		
	}
	
	// sidebar => name, value
	function print_panel_sidebar($title, $values){
	
		extract($values);
		
		?>
		
		<div class="panel-body" id="panel-body">
			<div class="panel-body-gimmick"></div>
			<div class="panel-title">
				<label> <?php _e($title, 'gdl_back_office'); ?> </label>
			</div>
			<div class="panel-input">
				<input type="text" id="add-more-sidebar" value="type title here" rel="type title here">
				<div id="add-more-sidebar" class="add-more-sidebar"></div>
			</div>
				<?php if(isset($description)){ ?>
				
					<div class="panel-description"><?php _e($description, 'gdl_back_office'); ?></div>
					
				<?php } ?>
			<br class="clear">
			<div id="selected-sidebar" class="selected-sidebar">
				<div class="default-sidebar-item" id="sidebar-item">
					<div class="panel-delete-sidebar"></div>
					<div class="slider-item-text"></div>
					<input type="hidden" id="<?php echo $name; ?>">
				</div>
				
				<?php 
				
				if(!empty($value)){
					
					$xml = new DOMDocument();
					$xml->loadXML($value);
					
					foreach( $xml->documentElement->childNodes as $sidebar_name ){
					
				?>
						<div class="sidebar-item" id="sidebar-item">
							<div class="panel-delete-sidebar"></div>
							<div class="slider-item-text"><?php echo $sidebar_name->nodeValue; ?></div>
							<input type="hidden" name="<?php echo $name; ?>[]" id="<?php echo $name; ?>" value="<?php echo $sidebar_name->nodeValue; ?>">
						</div>
					
				<?php 
					} 
					
				} 
				
				?>
				
			</div>
		</div>
		<?php 
		
	}
	
	// uploadfont => name, value
	function print_panel_upload_font($title, $values){
	
		extract($values);
		
		?>
		
		<div class="panel-body" id="panel-body">
			<div class="panel-body-gimmick"></div>
			<div class="panel-title panel-add-more-title">
				<?php _e($title, 'gdl_back_office'); ?>
			</div>
			<div id="add-more-font" class="add-more-font"></div>
			<br class="clear">
			<div id="added-font" class="added-font">
				<div class="default-font-item" id="font-item">
					<div class="inner-font-item">
						<div class="panel-font-title"><?php _e('字体名称','gdl_back_office'); ?></div>
						<input type="text" id="<?php echo $name; ?>" class="gdl_upload_font_name" readonly>
					</div>
					<div class="inner-font-item">
						<div class="panel-font-title"><?php _e('字体文件','gdl_back_office'); ?></div>
						<input type="hidden" id="<?php echo $file; ?>"  class="font-attachment-id">
						<input type="text" class="upload-font-text" readonly>
						<input class="upload-font-button" type="button" value="上传" />
					</div>
					<div class="panel-delete-font"></div>
				</div>
				<?php 
				
					if(!empty($value)){
						
						$xml = new DOMDocument();
						$xml->loadXML($value);
						
						foreach( $xml->documentElement->childNodes as $each_font ){
						
				?>
				
					<div class="font-item" id="font-item">
						<div class="inner-font-item">
							<div class="panel-font-title"><?php _e('字体名称','gdl_back_office'); ?></div>
							<input type="text" name="<?php echo $name; ?>[]" id="<?php echo $name; ?>" value="<?php echo find_xml_value($each_font, 'name'); ?>" class="gdl_upload_font_name" readonly>
						</div>
						<div class="inner-font-item">
							<div class="panel-font-title"><?php _e('字体文件','gdl_back_office'); ?></div>
							<input type="hidden" name="<?php echo $file; ?>[]" id="<?php echo $file; ?>" class="font-attachment-id" value="<?php 
									$attachment_id = find_xml_value($each_font, 'file'); 
									echo $attachment_id;
								?>" >
							<input type="text" class="upload-font-text" value="<?php echo (empty($attachment_id))? '': wp_get_attachment_url( $attachment_id ); ?>" readonly>
							<input class="upload-font-button" type="button" value="上传" />
						</div>
						<div class="panel-delete-font"></div>
					</div>
					
				<?php 
				
						}
						
					}
					
				?>
				
			</div>
		</div>
		<?php
		
	}
	
	// print normal button
	function print_panel_button($title, $values){
	
		extract($values);
	
		?>

			<div class="panel-body">
				<div class="panel-body-gimmick"></div>
				<div class="panel-title">
					<label> <?php _e($title, 'gdl_back_office'); ?> </label>
				</div>
				<div class="panel-input">
					<input type="button" value="<?php echo $text; ?>" id="<?php echo $id; ?>" />
				</div>
				<?php if(isset($description)){ ?>
				
					<div class="panel-description"><?php _e($description, 'gdl_back_office'); ?></div>
					<div class="panel-description-info-img"></div>
					
				<?php } ?>
				<br class="clear">
			</div>		
		
		<?php	
	}
	
	// upload dummy data (from xml file)
	function print_panel_dummy(){
		?>

			<div class="panel-body">
				<div class="panel-body-gimmick"></div>
				<div class="panel-title">
					<label> 示例数据 </label>
				</div>
				<div class="panel-input">
					<input type="button" value="导入示例数据" id="import-dummies-data" />
					<div id="import-now-loading" class="now-loading"></div>
				</div>
				<div class="panel-description">
点击此按钮，可以导入虚拟文章和页面，以帮助你创建一个看起来像主题预览的网站，帮助更好的了解主题功能。 - 
***可能需要一段时间，在导入过程中，确保不重装的网页或数据库进行任何更改。
				</div>
				<div class="panel-description-info-img"></div>
				<br class="clear">
			</div>		
		
		<?php
	}
?>