<?php

	/*	
	*	Goodlayers Portfolio Option File
	*	---------------------------------------------------------------------
	* 	@version	1.0
	* 	@author		Goodlayers
	* 	@link		http://goodlayers.com
	* 	@copyright	Copyright (c) Goodlayers
	*	---------------------------------------------------------------------
	*	This file create and contains the portfolio post_type meta elements
	*	---------------------------------------------------------------------
	*/
	
	add_action( 'init', 'create_testimonial' );
	function create_testimonial() {
	
		$labels = array(
			'name' => _x('推荐组合', '推荐组合通用名称', 'gdl_back_office'),
			'singular_name' => _x('推荐组合项目', '推荐组合别名', 'gdl_back_office'),
			'add_new' => _x('添加', '添加新推荐组合名称', 'gdl_back_office'),
			'add_new_item' => __('作者名称', 'gdl_back_office'),
			'edit_item' => __('作者名称', 'gdl_back_office'),
			'new_item' => __('新推荐组合', 'gdl_back_office'),
			'view_item' => '',
			'search_items' => __('搜索推荐组合', 'gdl_back_office'),
			'not_found' =>  __('没有找到', 'gdl_back_office'),
			'not_found_in_trash' => __('在垃圾桶中没有找到', 'gdl_back_office'),
			'parent_item_colon' => ''
		);
		
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			//'menu_icon' => GOODLAYERS_PATH . '/include/images/portfolio-icon.png',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 5,
			"show_in_nav_menus" => false,
			'exclude_from_search' => true,
			'supports' => array('title','editor','author','thumbnail','excerpt','comments')
		); 
		  
		register_post_type( 'testimonial' , $args);
		
		register_taxonomy(
			"testimonial-category", array("testimonial"), array(
				"hierarchical" => true, 
				"label" => "推荐组合分类", 
				"singular_label" => "推荐组合分类", 
				"show_in_nav_menus" => false,
				"rewrite" => true));
		register_taxonomy_for_object_type('testimonial-category', 'testimonial');
		
	}
	
	// add table column in edit page
	add_filter("manage_edit-testimonial_columns", "show_testimonial_column");	
	function show_testimonial_column($columns){
		$columns = array(
			"cb" => "<input type=\"checkbox\" />",
			"title" => "标题",
			"author" => "作者",
			"testimonial-category" => "推荐组合分类",
			"date" => "日期");
		return $columns;
	}
	add_action("manage_posts_custom_column","testimonial_custom_columns");
	function testimonial_custom_columns($column){
		global $post;

		switch ($column) {
			case "testimonial-category":
			echo get_the_term_list($post->ID, 'testimonial-category', '', ', ','');
			break;
		}
	}
	
	$testimonial_meta_boxes = array(	
		"Author Position" => array(
			'title'=> __('作者位置', 'gdl_back_office'),
			'name'=>'testimonial-option-author-position',
			'type'=>'inputtext')
	);
	
	add_action('add_meta_boxes', 'add_testimonial_option');
	function add_testimonial_option(){	
	
		add_meta_box('testimonial-option', __('推荐组合选项','gdl_back_office'), 'add_testimonial_option_element',
			'testimonial', 'normal', 'high');
			
	}
	
	function add_testimonial_option_element(){
	
		global $post, $testimonial_meta_boxes;
		echo '<div id="gdl-overlay-wrapper">';
		
		?> <div class="testimonial-option-meta" id="testimonial-option-meta"> <?php
		
			set_nonce();
			
			foreach($testimonial_meta_boxes as $meta_box){

				$meta_box['value'] = get_post_meta($post->ID, $meta_box['name'], true);
				print_meta($meta_box);
				
			}
			
		?> </div> <?php
		
		echo '</div>';
		
	}
	
	function save_testimonial_option_meta($post_id){
	
		global $testimonial_meta_boxes;
		$edit_meta_boxes = $testimonial_meta_boxes;
		
				// save
		foreach ($edit_meta_boxes as $edit_meta_box){
		
			if(isset($_POST[$edit_meta_box['name']])){	
				$new_data = stripslashes($_POST[$edit_meta_box['name']]);		
			}else{
				$new_data = '';
			}
			
			$old_data = get_post_meta($post_id, $edit_meta_box['name'],true);
			save_meta_data($post_id, $new_data, $old_data, $edit_meta_box['name']);
			
		}
		
	}
?>