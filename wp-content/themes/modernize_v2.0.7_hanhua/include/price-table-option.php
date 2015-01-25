<?php

	/*	
	*	Goodlayers Price Table Option File
	*	---------------------------------------------------------------------
	* 	@version	1.0
	* 	@author		Goodlayers
	* 	@link		http://goodlayers.com
	* 	@copyright	Copyright (c) Goodlayers
	*	---------------------------------------------------------------------
	*	This file create and contains the price table post_type meta elements
	*	---------------------------------------------------------------------
	*/
	
	add_action( 'init', 'create_price_table' );
	function create_price_table() {
	
		$labels = array(
			'name' => _x('价格表', '价格表通用名称', 'gdl_back_office'),
			'singular_name' => _x('价格表项目', '价格表别名', 'gdl_back_office'),
			'add_new' => _x('添加', '添加新价格表名称', 'gdl_back_office'),
			'add_new_item' => __('价格表名称', 'gdl_back_office'),
			'edit_item' => __('价格表名称', 'gdl_back_office'),
			'new_item' => __('新价格表', 'gdl_back_office'),
			'view_item' => '',
			'search_items' => __('搜索价格表', 'gdl_back_office'),
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
		  
		register_post_type( 'price_table' , $args);
		
		register_taxonomy(
			"price-table-category", array("price-table"), array(
				"hierarchical" => true, 
				"label" => "价格分类", 
				"singular_label" => "价格分类", 
				"show_in_nav_menus" => false,
				"rewrite" => true));
		register_taxonomy_for_object_type('price-table-category', 'price_table');
		
	}

	// add price table in edit page
	add_filter("manage_edit-price_table_columns", "show_price_table_column");	
	function show_price_table_column($columns){
		$columns = array(
			"cb" => "<input type=\"checkbox\" />",
			"title" => "标题",
			"author" => "作者",
			"price-table-category" => "价格表分类",
			"date" => "日期");
		return $columns;
	}
	add_action("manage_posts_custom_column","price_table_custom_columns");
	function price_table_custom_columns($column){
		global $post;

		switch ($column) {
			case "price-table-category":
			echo get_the_term_list($post->ID, 'price-table-category', '', ', ','');
			break;
		}
	}
	
	$price_table_meta_boxes = array(
		"Price Tag" => array(
			'title'=>__('价格标签','gdl_back_office'),
			'name'=>'price-table-price-tag',
			'type'=>'inputtext'),
		"Button Link" => array(
			'title'=> __('按钮链接地址', 'gdl_back_office'),
			'name'=>'price-table-option-url',
			'type'=>'inputtext'),
		"Best Price" => array(
			'title'=>__('最优价格','gdl_back_office'),
			'name'=>'price-table-best-price',
			'type'=>'combobox',
			'options'=>array('1'=>'Yes','2'=>'No'),
			'default'=>'No',
			'hr'=>'none',
			'description'=>'The best price box item will be larger than normal price and have a unique color. You can set the best price color in admin panel.')
	);
	
	add_action('add_meta_boxes', 'add_price_table_option');
	function add_price_table_option(){	
	
		add_meta_box('price-table-option', __('价格表选项','gdl_back_office'), 'add_price_table_option_element',
			'price_table', 'normal', 'high');
			
	}
	
	function add_price_table_option_element(){
	
		global $post, $price_table_meta_boxes;
		echo '<div id="gdl-overlay-wrapper">';
		
		?> <div class="testimonial-option-meta" id="testimonial-option-meta"> <?php
		
			set_nonce();
			
			foreach($price_table_meta_boxes as $meta_box){

				$meta_box['value'] = get_post_meta($post->ID, $meta_box['name'], true);
				print_meta($meta_box);
				
				if( empty($meta_box['hr']) ){
					echo '<hr class="separator mt20" />';
				}
			}
			
		?> </div> <?php
		
		echo '</div>';
		
	}
	
	function save_price_table_option_meta($post_id){
	
		global $price_table_meta_boxes;
		$edit_meta_boxes = $price_table_meta_boxes;
		
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