<?php
if(!function_exists('pixgraphy_get_option_defaults_values')):
	/******************** PIXGRAPHY DEFAULT OPTION VALUES ******************************************/
	function pixgraphy_get_option_defaults_values() {
		global $pixgraphy_default_values;
		$pixgraphy_default_values = array(
			'pixgraphy_responsive'	=> 'on',
			'pixgraphy_column_post'	=>'four',
			'pixgraphy_border_column'	=>'on',
			'pixgraphy_design_layout' => 'wide-layout',
			'pixgraphy_animate_css'	=> 'on',
			'pixgraphy_sidebar_layout_options' => 'right',
			'pixgraphy_photography_layout' => 'photography_layout',
			'pixgraphy_search_custom_header' => 0,
			'pixgraphy-img-upload-footer-image' => '',
			'pixgraphy-footer-title'	=> '',
			'pixgraphy-footer-link'	=> '#',
			'pixgraphy_header_display'=> 'header_text',
			'pixgraphy_categories'	=> array(),
			'pixgraphy_custom_css'	=> '',
			'pixgraphy_scroll'	=> 0,
			'pixgraphy_tag_text' => 'Read More',
			'pixgraphy_excerpt_length'	=> '20',
			'pixgraphy_search_text' => 'Search',
			'pixgraphy_single_post_image' => 'off',
			'pixgraphy_reset_all' => 0,
			'pixgraphy_stick_menu'	=>0,
			'pixgraphy_blog_post_image' => 'on',
			'pixgraphy_entry_format_blog' => 'excerptblog_display',
			'pixgraphy_search_text' => 'Search &hellip;',
			'pixgraphy_blog_content_layout'	=> '',
			'pixgraphy_display_page_featured_image'=>0,
			/* Slider Settings */
			'pixgraphy_slider_type'	=> 'default_slider',
			'pixgraphy_slider_link' =>0,
			'pixgraphy_enable_slider' => 'frontpage',
			'pixgraphy_transition_effect' => 'fade',
			'pixgraphy_transition_delay' => '4',
			'pixgraphy_transition_duration' => '1',
			/* Front page feature */
			'pixgraphy_entry_format_blog' => 'show',
			'pixgraphy_entry_meta_blog' => 'show-meta',
			/*Social Icons */
			'pixgraphy_top_social_icons' =>0,
			'pixgraphy_buttom_social_icons'	=>0,
			'pixgraphy_social_facebook'=> '',
			'pixgraphy_social_linkedin'=> '',
			'pixgraphy_social_twitter'=> '',
			'pixgraphy_social_pinterest'=> '',
			'pixgraphy_social_dribbble'=> '',
			'pixgraphy_social_instagram'=> '',
			'pixgraphy_social_flickr'=> '',
			'pixgraphy_social_googleplus'=> '',
			);
		return apply_filters( 'pixgraphy_get_option_defaults_values', $pixgraphy_default_values );
	}
endif;
?>
