<?php if (!defined('ABSPATH')) exit;
/**
 * Customizer panels.
 *
 * @since 1.0.0
 */

/*------------------------------------------
 => Panel 
------------------------------------------*/

$RB_post_type = get_post_types(
	array(
		'_builtin' => true,
		'public' => true
	),
);

function post_categories()
{

	$terms = get_terms(array(
		'taxonomy' => 'category',
		'hide_empty' => false,
	));

	$term_name = wp_list_pluck($terms, 'name', 'name');

	return $term_name;
}

//=== Start Panel ===//

Kirki::add_panel('general_options', array(
	'priority'    => 1,
	'title'       => esc_html__('General Settings', 'rainbow'),
));

Kirki::add_panel('header_options', array(
	'priority'    => 2,
	'title'       => esc_html__('Header Settings', 'rainbow'),
));


Kirki::add_panel('blog_options', array(
	'priority'    => 3,
	'title'       => esc_html__('Blog Settings', 'rainbow'),
));

Kirki::add_panel('RB_page_options', array(
	'priority'    => 4,
	'title'       => esc_html__('Page Settings', 'rainbow'),
));

Kirki::add_panel('footer_options', array(
	'priority'    => 5,
	'title'       => esc_html__('Footer Settings', 'rainbow'),
));

Kirki::add_panel('color_options', array(
	'priority'    => 6,
	'title'       => esc_html__('Color Settings', 'rainbow'),
));

Kirki::add_panel('typography', array(
	'priority'    => 7,
	'title'       => esc_html__('Typograhy Settings', 'rainbow'),
));


//=== End Panel ===//


/*------------------------------------------
 => Sections 
------------------------------------------*/

//=== Start general section ===//

Kirki::add_section('RB_global_page_layout', array(
	'title'       => esc_html__('Layout', 'rainbow'),
	'priority'    => 1,
	'panel'       => 'general_options',
));
Kirki::add_section('RB_preloader', array(
	'title'       => esc_html__('Preloader', 'rainbow'),
	'priority'    => 190,
	'panel'       => 'general_options',
));
Kirki::add_section('back_to_top', array(
	'title'       => esc_html__('Scroll Back to Top', 'rainbow'),
	'priority'    => 195,
	'panel'       => 'general_options',
));
//=== End general section ===//

//=== Start blog section ===//
Kirki::add_section('RB_blog_post_query', array(
	'title'       => esc_html__('Query', 'rainbow'),
	'priority'    => 5,
	'panel'       => 'blog_options',
));
Kirki::add_section('RB_blog_post_design', array(
	'title'       => esc_html__('Blog Design', 'rainbow'),
	'priority'    => 7,
	'panel'       => 'blog_options',
));
Kirki::add_section('RB_blog_footer_section', array(
	'title'       => esc_html__('Blog Footer', 'rainbow'),
	'priority'    => 10,
	'panel'       => 'blog_options',
));
Kirki::add_section('RB_excerpt_limit', array(
	'title'       => esc_html__('Excerpt Limit', 'rainbow'),
	'priority'    => 15,
	'panel'       => 'blog_options',
));
//=== End blog section ===//

//=== Start header section ===//
Kirki::add_section('site_brand', array(
	'title'       => esc_html__('Site Brand', 'rainbow'),
	'priority'    => 5,
	'panel'       => 'header_options',
));
//=== End header section ===//

//=== Start page section ===//
Kirki::add_section('RB_single_page', array(
	'title'       => esc_html__('Single Page', 'rainbow'),
	'priority'    => 1,
	'panel'       => 'RB_page_options',
));
Kirki::add_section('RB_author_page', array(
	'title'       => esc_html__('Author Page', 'rainbow'),
	'priority'    => 5,
	'panel'       => 'RB_page_options',
));

Kirki::add_section('RB_category_page', array(
	'title'       => esc_html__('Category Page', 'rainbow'),
	'priority'    => 7,
	'panel'       => 'RB_page_options',
));

Kirki::add_section('RB_tag_page', array(
	'title'       => esc_html__('Tag Page', 'rainbow'),
	'priority'    => 9,
	'panel'       => 'RB_page_options',
));

Kirki::add_section('RB_archive_page', array(
	'title'       => esc_html__('Archive Page', 'rainbow'),
	'priority'    => 11,
	'panel'       => 'RB_page_options',
));

Kirki::add_section('RB_search_page', array(
	'title'       => esc_html__('Search Page', 'rainbow'),
	'priority'    => 13,
	'panel'       => 'RB_page_options',
));
//=== End page section ===//

//=== Start typography section ===//
Kirki::add_section('body', array(
	'title'       => esc_html__('Body', 'rainbow'),
	'priority'    => 1,
	'panel'       => 'typography',
));
Kirki::add_section('page_content', array(
	'title'       => esc_html__('Page Content', 'rainbow'),
	'priority'    => 3,
	'panel'       => 'typography',
));
Kirki::add_section('heading', array(
	'title'       => esc_html__('Heading', 'rainbow'),
	'priority'    => 5,
	'panel'       => 'typography',
));
Kirki::add_section('navbar', array(
	'title'       => esc_html__('Navbar', 'rainbow'),
	'priority'    => 7,
	'panel'       => 'typography',
));
Kirki::add_section('post_card', array(
	'title'       => esc_html__('Post Card', 'rainbow'),
	'priority'    => 11,
	'panel'       => 'typography',
));
//=== End typography section ===//

//=== Start footer section ===//
Kirki::add_section('RB_footer_column', array(
	'title'       => esc_html__('Footer Widget Layout', 'rainbow'),
	'priority'    => 5,
	'panel'       => 'footer_options',
));
Kirki::add_section('footer_copyright', array(
	'title'       => esc_html__('Footer Copyright', 'rainbow'),
	'priority'    => 10,
	'panel'       => 'footer_options',
));
Kirki::add_section('footer_subscribe', array(
	'title'       => esc_html__('Subscribe', 'rainbow'),
	'priority'    => 15,
	'panel'       => 'footer_options',
));
//=== End footer section ===//


/*------------------------------------------
 => Fields 
------------------------------------------*/

//=== Start global layout field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-image',
		'settings'    => 'global_page_layout',
		'label'       => esc_html__('Global Page Layout', 'rainbow'),
		'section'     => 'RB_global_page_layout',
		'description'    => 'Set the page layout globaly',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => array(
			'1'   => RB_IMG_URL . '/options/layout1.png',
			'2'   => RB_IMG_URL . '/options/layout2.png',
			'3'   => RB_IMG_URL . '/options/layout3.png',
		)
	)
);
//=== End global layout field ===//

//=== Start preloader field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'toggle',
		'settings'    => 'RB_preloader_settings',
		'label'       => esc_html__('Preloader', 'rainbow'),
		'section'     => 'RB_preloader',
		'default'     => '1',
		'priority'    => 1,
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-buttonset',
		'settings'    => 'RB_choose_preloader',
		'label'       => esc_html__('Choose Preloader', 'rainbow'),
		'section'     => 'RB_preloader',
		'description' => esc_html__('Choose your theme preloader', 'rainbow'),
		'default'     => 'loader_01',
		'priority'    => 2,
		'choices'     => array(
			'loader_01'   => esc_html__('Loader 01', 'rainbow'),
			'loader_02' => esc_html__('Loader 02', 'rainbow'),
		),
		'active_callback' => array(
			array(
				'setting'  => 'RB_preloader_settings',
				'operator' => '==',
				'value'    => '1',
			),
		),

	)
);
//=== End preloader field ===//

//=== Start back to top field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'toggle',
		'settings'    => 'back_to_top',
		'label'       => esc_html__('Scroll Back to Top', 'rainbow'),
		'section'     => 'back_to_top',
		'default'     => '1',
		'priority'    => 10,
	)
);
//=== End back to top field ===//

//=== Start post query field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'select',
		'settings'    => 'RB_post_type_query',
		'label'       => esc_html__('Post Type', 'rainbow'),
		'section'     => 'RB_blog_post_query',
		'placeholder' => esc_html__('Select', 'rainbow'),
		'priority'    => 5,
		'multiple'	   => 999,
		'choices'     => $RB_post_type
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'select',
		'settings'    => 'RB_display_post_category',
		'label'       => esc_html__('Category', 'rainbow'),
		'section'     => 'RB_blog_post_query',
		'placeholder' => esc_html__('Select', 'rainbow'),
		'multiple'	   => 999,
		'priority'    => 10,
		'choices'     => post_categories()
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'number',
		'settings'    => 'RB_post_per_page',
		'label'       => esc_html__('Post per page', 'rainbow'),
		'section'     => 'RB_blog_post_query',
		'description' => esc_html__('Input the number(-1 for all posts) for post per page.', 'rainbow'),
		'priority'    => 15,
		'default'     => -1
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'select',
		'settings'    => 'RB_post_order',
		'label'       => esc_html__('Post Order ', 'rainbow'),
		'section'     => 'RB_blog_post_query',
		'placeholder' => esc_html__('Select Post Order by', 'rainbow'),
		'priority'    => 20,
		'choices'     => array(
			'ASC' => 'ASC',
			'DSC' => 'DSC'
		),
		'default'     => 'DSC'
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'select',
		'settings'    => 'RB_post_order_by',
		'label'       => esc_html__('Post Order By', 'rainbow'),
		'section'     => 'RB_blog_post_query',
		'placeholder' => esc_html__('Select Post Order', 'rainbow'),
		'priority'    => 25,
		'choices'     => array(
			'none' => 'Default',
			'title' => 'Ttitle',
			'name' => 'Name',
			'ID'   => 'ID',
			'Date'   => 'Date',
			'author' => 'Author',
		),
		'default'     => 'title'
	)
);

//=== End post query field ===//


//=== Start blog design field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'select',
		'settings'    => 'RB_post_col',
		'label'       => esc_html__('Post Column', 'rainbow'),
		'section'     => 'RB_blog_post_design',
		'placeholder' => esc_html__('Column', 'rainbow'),
		'description' => esc_html__('Select your post column view', 'rainbow'),
		'choices'     => array(
			'12' => 'Full Width',
			'6' => 'Column View',
		),
		'default'     => '6',
		'priority'    => 1,
	)
);


Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'select',
		'settings'    => 'RB_blog_post_design_settings',
		'label'       => esc_html__('Blog design', 'rainbow'),
		'section'     => 'RB_blog_post_design',
		'placeholder' => esc_html__('Select Dlog Design', 'rainbow'),
		'description' => esc_html__('Select your blog post design view', 'rainbow'),
		'priority'    => 2,
		'choices'     => array(
			'design_01' => 'Design 01',
			'design_02' => 'Design 02',
			'design_03' => 'Design 03',
			'design_04' => 'Design 04',
		),
		'default'     => 'design_01'
	)
);


// For design 01
Kirki::add_field('RB_config', array(
	'type'        => 'sortable',
	'settings'    => 'RB_post_sortable_setting_01',
	'label'       => esc_html__('Sort Post Section', 'rainbow'),
	'description'       => esc_html__('You can sort, show, hide your post section', 'rainbow'),
	'section'     => 'RB_blog_post_design',
	'default'     => array(
		'RB_post_title',
		'RB_post_meta',
		'RB_post_excerpt',
		'RB_post_footer'
	),
	'choices'     => array(
		'RB_post_title' => esc_html__('Post Title', 'rainbow'),
		'RB_post_meta' => esc_html__('Post Meta', 'rainbow'),
		'RB_post_excerpt' => esc_html__('Post Excerpt', 'rainbow'),
		'RB_post_footer' => esc_html__('Post Footer', 'rainbow'),
	),
	'active_callback' => array(
		array(
			'setting'  => 'RB_blog_post_design_settings',
			'operator' => '==',
			'value'    => 'design_01',
		),
	),
	'priority'    => 3,
));


// For design 02 
Kirki::add_field('RB_config', array(
	'type'        => 'sortable',
	'settings'    => 'RB_post_sortable_setting_02',
	'label'       => esc_html__('Sort Post Section', 'rainbow'),
	'description'       => esc_html__('You can sort, show, hide your post section', 'rainbow'),
	'section'     => 'RB_blog_post_design',
	'default'     => array(
		'RB_post_title',
		'RB_post_meta',
		'RB_post_excerpt',
		'RB_post_footer'
	),
	'choices'     => array(
		'RB_post_title' => esc_html__('Post Title', 'rainbow'),
		'RB_post_meta' => esc_html__('Post Meta', 'rainbow'),
		'RB_post_excerpt' => esc_html__('Post Excerpt', 'rainbow'),
		'RB_post_footer' => esc_html__('Post Footer', 'rainbow'),
	),
	'active_callback' => array(
		array(
			'setting'  => 'RB_blog_post_design_settings',
			'operator' => '==',
			'value'    => 'design_02',
		),
	),
	'priority'    => 4,
));


// For design 03 
Kirki::add_field('RB_config', array(
	'type'        => 'sortable',
	'settings'    => 'RB_post_sortable_setting_03',
	'label'       => esc_html__('Sort Post Section', 'rainbow'),
	'description'       => esc_html__('You can sort, show, hide your post section', 'rainbow'),
	'section'     => 'RB_blog_post_design',
	'default'     => array(
		'RB_post_title',
		'RB_post_meta',
		'RB_post_excerpt',
		'RB_post_footer'
	),
	'choices'     => array(
		'RB_post_title' => esc_html__('Post Title', 'rainbow'),
		'RB_post_meta' => esc_html__('Post Meta', 'rainbow'),
		'RB_post_excerpt' => esc_html__('Post Excerpt', 'rainbow'),
		'RB_post_footer' => esc_html__('Post Footer', 'rainbow'),
	),
	'active_callback' => array(
		array(
			'setting'  => 'RB_blog_post_design_settings',
			'operator' => '==',
			'value'    => 'design_03',
		),
	),
	'priority'    => 5,
));


// For design 04 
Kirki::add_field('RB_config', array(
	'type'        => 'sortable',
	'settings'    => 'RB_post_sortable_setting_04',
	'label'       => esc_html__('Sort Post Section', 'rainbow'),
	'description'       => esc_html__('You can sort, show, hide your post section', 'rainbow'),
	'section'     => 'RB_blog_post_design',
	'default'     => array(
		'RB_post_title',
		'RB_post_meta',
		'RB_post_excerpt',
		'RB_post_footer'
	),
	'choices'     => array(
		'RB_post_title' => esc_html__('Post Title', 'rainbow'),
		'RB_post_meta' => esc_html__('Post Meta', 'rainbow'),
		'RB_post_excerpt' => esc_html__('Post Excerpt', 'rainbow'),
		'RB_post_footer' => esc_html__('Post Footer', 'rainbow'),
	),
	'active_callback' => array(
		array(
			'setting'  => 'RB_blog_post_design_settings',
			'operator' => '==',
			'value'    => 'design_04',
		),
	),
	'priority'    => 6,
));



//=== End blog design field ===//

//=== Start blog excerpt field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'     => 'text',
		'settings' => 'RB_post_excerpt_limit',
		'label'    => esc_html__('Post Excerpt Limit', 'rainbow'),
		'section'  => 'RB_excerpt_limit',
		'default'  => 30,
		'priority' => 1,
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'toggle',
		'settings'    => 'RB_excerpt_indicator_toggle',
		'label'       => esc_html__('Excerpt Indicator', 'rainbow'),
		'description' => esc_html__('You can show or hide excerpt indicator.', 'rainbow'),
		'section'     => 'RB_excerpt_limit',
		'default'     => '0',
		'priority'    => 2,
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'     => 'text',
		'settings' => 'RB_post_excerpt_indicator',
		'label'    => esc_html__('Excerpt Indicator', 'rainbow'),
		'section'  => 'RB_excerpt_limit',
		'default'  => ' [..]',
		'priority' => 3,
		'active_callback' => array(
			array(
				'setting'  => 'RB_excerpt_indicator_toggle',
				'operator' => '==',
				'value'    => '1',
			),
		),
	)
);
//=== End blog excerpt field ===//

//=== Start blog footer field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'toggle',
		'settings'    => 'RB_author_meta_toggle',
		'label'       => esc_html__('Author Meta', 'rainbow'),
		'description' => esc_html__('You can show or hide author meta.', 'rainbow'),
		'section'     => 'RB_blog_footer_section',
		'default'     => '1',
		'priority'    => 1,
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'slider',
		'settings'    => 'RB_author_border_radius',
		'label'       => esc_html__('Author Border Radius', 'rainbow'),
		'description'       => esc_html__('Set your author img border radius', 'rainbow'),
		'section'     => 'RB_blog_footer_section',
		'default'     => 50,
		'priority'    => 2,
		'choices'     => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
		),
		'active_callback' => array(
			array(
				'setting'  => 'RB_author_meta_toggle',
				'operator' => '==',
				'value'    => '1',
			),
		),
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'toggle',
		'settings'    => 'RB_readmore_toggle',
		'label'       => esc_html__('Read More', 'rainbow'),
		'description' => esc_html__('You can show or hide read more button.', 'rainbow'),
		'section'     => 'RB_blog_footer_section',
		'default'     => '1',
		'priority'    => 3,
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-buttonset',
		'settings'    => 'RB_readmore_position',
		'label'       => esc_html__('Readmore Position', 'rainbow'),
		'section'     => 'RB_blog_footer_section',
		'default'     => 'right',
		'priority'    => 4,
		'choices'     => array(
			'left'   => esc_html__('Left', 'rainbow'),
			'right' => esc_html__('Right', 'rainbow'),
		),
		'active_callback' => array(
			array(
				'setting'  => 'RB_readmore_toggle',
				'operator' => '==',
				'value'    => '1',
			),
		),

	)
);


Kirki::add_field(
	'RB_config',
	array(
		'type'     => 'text',
		'settings' => 'RB_read_more_label',
		'label'    => esc_html__('Read More Label', 'rainbow'),
		'section'  => 'RB_blog_footer_section',
		'default'  => esc_html__('Read More', 'rainbow'),
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'RB_readmore_toggle',
				'operator' => '==',
				'value'    => '1',
			),
		),
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'toggle',
		'settings'    => 'RB_footer_top_border',
		'label'       => esc_html__('Footer Top border', 'rainbow'),
		'description' => esc_html__('You can show or hide footer top border', 'rainbow'),
		'section'     => 'RB_blog_footer_section',
		'default'     => '1',
		'priority'    => 6,
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'slider',
		'settings'    => 'RB_footer_top_border_height',
		'label'       => esc_html__('Footer Top border Height', 'rainbow'),
		'description'       => esc_html__('Set your footer top border height', 'rainbow'),
		'section'     => 'RB_blog_footer_section',
		'default'     => 1,
		'priority'    => 7,
		'choices'     => array(
			'min'  => 1,
			'max'  => 15,
			'step' => 1,
		),
		'active_callback' => array(
			array(
				'setting'  => 'RB_footer_top_border',
				'operator' => '==',
				'value'    => '1',
			),
		),
	)
);

//=== End blog footer field ===//


//=== Start brand logo field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'slider',
		'settings'    => 'brand',
		'label'       => esc_html__('Logo Brand Width(px)', 'rainbow'),
		'description'       => esc_html__('You can set your header logo image width', 'rainbow'),
		'section'     => 'site_brand',
		'default'     => 200,
		'choices'     => array(
			'min'  => 1,
			'max'  => 275,
			'step' => 1,
		)
	)
);

//=== End brand logo field ===//

//=== Start single content field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-image',
		'settings'    => 'RB_single_page_layout',
		'label'       => esc_html__('Single Page Layout', 'rainbow'),
		'section'     => 'RB_single_page',
		'default'     => '1',
		'priority'    => 1,
		'choices'     => array(
			'0'   => RB_IMG_URL . '/options/default.png',
			'1'   => RB_IMG_URL . '/options/layout1.png',
			'2'   => RB_IMG_URL . '/options/layout2.png',
			'3'   => RB_IMG_URL . '/options/layout3.png',
		)
	)
);


Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-buttonset',
		'settings'    => 'RB_author_meta_position',
		'label'       => esc_html__('Author Meta Position', 'rainbow'),
		'section'     => 'RB_single_page',
		'default'     => 'left',
		'priority'    => 3,
		'choices'     => array(
			'left'   => esc_html__('Left', 'rainbow'),
			'right' => esc_html__('Right', 'rainbow'),
		),
	)
);


Kirki::add_field('RB_config', array(
	'type'        => 'sortable',
	'settings'    => 'RB_single_page_meta',
	'label'       => esc_html__('Post Meta Sortable', 'rainbow'),
	'description'       => esc_html__('You can sort, show, hide your post meta', 'rainbow'),
	'section'     => 'RB_single_page',
	'default'     => array(
		'RB_post_share',
		'RB_post_feedback',
		'RB_post_print',
	),
	'choices'     => array(
		'RB_post_share' => esc_html__('Post Share', 'rainbow'),
		'RB_post_feedback' => esc_html__('Post Feedback', 'rainbow'),
		'RB_post_print' => esc_html__('Post Print', 'rainbow'),
	),
	'priority'    => 5,
));

//=== End single content field ===//

//=== Start author page field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-image',
		'settings'    => 'RB_author_page_layout',
		'label'       => esc_html__('Author Page Layout', 'rainbow'),
		'section'     => 'RB_author_page',
		'default'     => '1',
		'priority'    => 1,
		'choices'     => array(
			'0'   => RB_IMG_URL . '/options/default.png',
			'1'   => RB_IMG_URL . '/options/layout1.png',
			'2'   => RB_IMG_URL . '/options/layout2.png',
			'3'   => RB_IMG_URL . '/options/layout3.png',
		)
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-buttonset',
		'settings'    => 'author_banner_bg_settings',
		'label'       => esc_html__('Page title BG', 'rainbow'),
		'section'     => 'RB_author_page',
		'default'     => 'image',
		'priority'    => 2,
		'choices'     => array(
			'image'   => esc_html__('Image', 'rainbow'),
			'color' => esc_html__('Color', 'rainbow'),
		),

	)
);


Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'image',
		'settings'    => 'author_page_banner_bg_image',
		'label'       => esc_html__('Banner Background', 'rainbow'),
		'description'       => esc_html__('Upload page title background image', 'rainbow'),
		'section'     => 'RB_author_page',
		'default'     => '',
		'priority'    => 3,
		'active_callback' => array(
			array(
				'setting'  => 'author_banner_bg_settings',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'color',
		'settings'    => 'author_page_banner_bg_overlay',
		'label'       => esc_html__('Background Overlay', 'rainbow'),
		'description'       => esc_html__('Set your page banner background overlay', 'rainbow'),
		'section'     => 'RB_author_page',
		'default'     => '',
		'priority'    => 4,
		'active_callback' => array(
			array(
				'setting'  => 'author_banner_bg_settings',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	),
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'color',
		'settings'    => 'author_page_banner_bg_color',
		'label'       => esc_html__('Background Color', 'rainbow'),
		'description'       => esc_html__('Set your page banner background color', 'rainbow'),
		'section'     => 'RB_author_page',
		'default'     => '',
		'priority'    => 5,
		'active_callback' => array(
			array(
				'setting'  => 'author_banner_bg_settings',
				'operator' => '==',
				'value'    => 'color',
			),
		),
	),

);

Kirki::add_field('theme_config_id', array(
	'type'        => 'slider',
	'settings'    => 'RB_banner_padding',
	'label'       => esc_html__('Banner Padding', 'rainbow'),
	'description'       => esc_html__('Set your banner padding[top, bottom]', 'rainbow'),
	'section'     => 'RB_author_page',
	'default'     => 85,
	'choices'     => array(
		'min'  => 0,
		'max'  => 200,
		'step' => 1,
	),
	'priority'    => 4,
));

Kirki::add_field('RB_config', array(
	'type'        => 'custom',
	'settings'    => 'RB_author_heading_setting',
	'section'     => 'RB_author_page',
	'default'         => '<h3 style="padding:10px 0px; margin:0; border-bottom: 1px solid #e6d4d4;margin-top:15px;">' . __('Author Meta', 'rainbow') . '</h3>',
	'priority'    => 5,
));

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'select',
		'settings'    => 'author_img_width',
		'label'       => esc_html__('Author Image Width', 'rainbow'),
		'section'     => 'RB_author_page',
		'placeholder' => esc_html__('Select', 'rainbow'),
		'priority'    => 6,
		'multiple'	   => 1,
		'default'	  => '3',
		'choices'     => array(
			'2' => 'col-2',
			'3' => 'col-3',
			'4' => 'col-4',
			'5' => 'col-5',
			'6' => 'col-6',
		)
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'     => 'textarea',
		'settings' => 'RB_published_text_settings',
		'label'    => esc_html__('Published Text Content', 'rainbow'),
		'section'  => 'RB_author_page',
		'default'  => esc_html('published [count] posts'),
		'description'  => esc_html__('Set your author published text and use \'[count]\' for posts count', 'rainbow'),
		'priority' => 7,
	)
);

Kirki::add_field('RB_config', array(
	'type'        => 'sortable',
	'settings'    => 'RB_author_meta',
	'label'       => esc_html__('Author Meta Sortable', 'rainbow'),
	'description'       => esc_html__('You can sort, show, hide your author meta', 'rainbow'),
	'section'     => 'RB_author_page',
	'default'     => array(
		'published_text',
		'author_name',
		'author_bio',
		'author_social_icon'
	),
	'choices'     => array(
		'published_text' => esc_html__('Published Text', 'rainbow'),
		'author_name' => esc_html__('Author Name', 'rainbow'),
		'author_bio' => esc_html__('Author Bio', 'rainbow'),
		'author_social_icon' => esc_html__('Author Social Icon', 'rainbow'),
	),
	'priority'    => 8,
));

//=== End author page field ===//


//=== Start category page field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-image',
		'settings'    => 'RB_category_page_layout',
		'label'       => esc_html__('Category Page Layout', 'rainbow'),
		'section'     => 'RB_category_page',
		'default'     => '1',
		'priority'    => 1,
		'choices'     => array(
			'0'   => RB_IMG_URL . '/options/default.png',
			'1'   => RB_IMG_URL . '/options/layout1.png',
			'2'   => RB_IMG_URL . '/options/layout2.png',
			'3'   => RB_IMG_URL . '/options/layout3.png',
		)
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-buttonset',
		'settings'    => 'category_banner_bg_settings',
		'label'       => esc_html__('Page title BG', 'rainbow'),
		'section'     => 'RB_category_page',
		'default'     => 'image',
		'priority'    => 3,
		'choices'     => array(
			'image'   => esc_html__('Image', 'rainbow'),
			'color' => esc_html__('Color', 'rainbow'),
		),

	)
);


Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'image',
		'settings'    => 'category_page_banner_bg_image',
		'label'       => esc_html__('Banner Background', 'rainbow'),
		'description'       => esc_html__('Upload page title background image', 'rainbow'),
		'section'     => 'RB_category_page',
		'default'     => '',
		'priority'    => 5,
		'active_callback' => array(
			array(
				'setting'  => 'category_banner_bg_settings',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'color',
		'settings'    => 'category_page_banner_bg_overlay',
		'label'       => esc_html__('Background Overlay', 'rainbow'),
		'description'       => esc_html__('Set your page title background overlay', 'rainbow'),
		'section'     => 'RB_category_page',
		'default'     => '',
		'priority'    => 7,
		'active_callback' => array(
			array(
				'setting'  => 'category_banner_bg_settings',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	),

);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'color',
		'settings'    => 'category_page_banner_bg_color',
		'label'       => esc_html__('Background Color', 'rainbow'),
		'description'       => esc_html__('Set your page title background color', 'rainbow'),
		'section'     => 'RB_category_page',
		'default'     => '',
		'priority'    => 9,
		'active_callback' => array(
			array(
				'setting'  => 'category_banner_bg_settings',
				'operator' => '==',
				'value'    => 'color',
			),
		),
	),

);

Kirki::add_field('theme_config_id', array(
	'type'        => 'slider',
	'settings'    => 'RB_cat_banner_padding',
	'label'       => esc_html__('Banner Padding', 'rainbow'),
	'description'       => esc_html__('Set your banner padding[top, bottom]', 'rainbow'),
	'section'     => 'RB_category_page',
	'default'     => 85,
	'choices'     => array(
		'min'  => 0,
		'max'  => 200,
		'step' => 1,
	),
	'priority'    => 11,
));
//=== End category page field ===//

//=== Start tag page field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-image',
		'settings'    => 'RB_tag_page_layout',
		'label'       => esc_html__('Tag Page Layout', 'rainbow'),
		'section'     => 'RB_tag_page',
		'default'     => '1',
		'priority'    => 1,
		'choices'     => array(
			'0'   => RB_IMG_URL . '/options/default.png',
			'1'   => RB_IMG_URL . '/options/layout1.png',
			'2'   => RB_IMG_URL . '/options/layout2.png',
			'3'   => RB_IMG_URL . '/options/layout3.png',
		)
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-buttonset',
		'settings'    => 'tag_banner_bg_settings',
		'label'       => esc_html__('Page title BG', 'rainbow'),
		'section'     => 'RB_tag_page',
		'default'     => 'image',
		'priority'    => 3,
		'choices'     => array(
			'image'   => esc_html__('Image', 'rainbow'),
			'color' => esc_html__('Color', 'rainbow'),
		),

	)
);


Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'image',
		'settings'    => 'tag_page_banner_bg_image',
		'label'       => esc_html__('Banner Background', 'rainbow'),
		'description'       => esc_html__('Upload page title background image', 'rainbow'),
		'section'     => 'RB_tag_page',
		'default'     => '',
		'priority'    => 5,
		'active_callback' => array(
			array(
				'setting'  => 'tag_banner_bg_settings',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'color',
		'settings'    => 'tag_page_banner_bg_overlay',
		'label'       => esc_html__('Background Overlay', 'rainbow'),
		'description'       => esc_html__('Set your page title background overlay', 'rainbow'),
		'section'     => 'RB_tag_page',
		'default'     => '',
		'priority'    => 7,
		'active_callback' => array(
			array(
				'setting'  => 'tag_banner_bg_settings',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	),

);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'color',
		'settings'    => 'tag_page_banner_bg_color',
		'label'       => esc_html__('Background Color', 'rainbow'),
		'description'       => esc_html__('Set your page title background color', 'rainbow'),
		'section'     => 'RB_tag_page',
		'default'     => '',
		'priority'    => 9,
		'active_callback' => array(
			array(
				'setting'  => 'tag_banner_bg_settings',
				'operator' => '==',
				'value'    => 'color',
			),
		),
	),
);

Kirki::add_field('theme_config_id', array(
	'type'        => 'slider',
	'settings'    => 'RB_tag_banner_padding',
	'label'       => esc_html__('Banner Padding', 'rainbow'),
	'description'       => esc_html__('Set your banner padding[top, bottom]', 'rainbow'),
	'section'     => 'RB_tag_page',
	'default'     => 85,
	'choices'     => array(
		'min'  => 0,
		'max'  => 200,
		'step' => 1,
	),
	'priority'    => 11,
));
//=== End tag page field ===//

//=== Start archive page field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-image',
		'settings'    => 'RB_archive_page_layout',
		'label'       => esc_html__('Archive Page Layout', 'rainbow'),
		'section'     => 'RB_archive_page',
		'default'     => '1',
		'priority'    => 1,
		'choices'     => array(
			'0'   => RB_IMG_URL . '/options/default.png',
			'1'   => RB_IMG_URL . '/options/layout1.png',
			'2'   => RB_IMG_URL . '/options/layout2.png',
			'3'   => RB_IMG_URL . '/options/layout3.png',
		)
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-buttonset',
		'settings'    => 'archive_banner_bg_settings',
		'label'       => esc_html__('Page title BG', 'rainbow'),
		'section'     => 'RB_archive_page',
		'default'     => 'image',
		'priority'    => 3,
		'choices'     => array(
			'image'   => esc_html__('Image', 'rainbow'),
			'color' => esc_html__('Color', 'rainbow'),
		),

	)
);


Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'image',
		'settings'    => 'archive_page_banner_bg_image',
		'label'       => esc_html__('Banner Background', 'rainbow'),
		'description'       => esc_html__('Upload page title background image', 'rainbow'),
		'section'     => 'RB_archive_page',
		'default'     => '',
		'priority'    => 5,
		'active_callback' => array(
			array(
				'setting'  => 'archive_banner_bg_settings',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'color',
		'settings'    => 'archive_page_banner_bg_overlay',
		'label'       => esc_html__('Background Overlay', 'rainbow'),
		'description'       => esc_html__('Set your page title background overlay', 'rainbow'),
		'section'     => 'RB_archive_page',
		'default'     => '',
		'priority'    => 7,
		'active_callback' => array(
			array(
				'setting'  => 'archive_banner_bg_settings',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	),
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'color',
		'settings'    => 'archive_page_banner_bg_color',
		'label'       => esc_html__('Background Color', 'rainbow'),
		'description'       => esc_html__('Set your page title background color', 'rainbow'),
		'section'     => 'RB_archive_page',
		'default'     => '',
		'priority'    => 9,
		'active_callback' => array(
			array(
				'setting'  => 'archive_banner_bg_settings',
				'operator' => '==',
				'value'    => 'color',
			),
		),
	),
);

Kirki::add_field('theme_config_id', array(
	'type'        => 'slider',
	'settings'    => 'RB_archive_banner_padding',
	'label'       => esc_html__('Banner Padding', 'rainbow'),
	'description'       => esc_html__('Set your banner padding[top, bottom]', 'rainbow'),
	'section'     => 'RB_archive_page',
	'default'     => 85,
	'choices'     => array(
		'min'  => 0,
		'max'  => 200,
		'step' => 1,
	),
	'priority'    => 11,
));

//=== End archive page field ===//

//=== Start search page field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-image',
		'settings'    => 'RB_search_page_layout',
		'label'       => esc_html__('Search Page Layout', 'rainbow'),
		'section'     => 'RB_search_page',
		'default'     => '1',
		'priority'    => 1,
		'choices'     => array(
			'0'   => RB_IMG_URL . '/options/default.png',
			'1'   => RB_IMG_URL . '/options/layout1.png',
			'2'   => RB_IMG_URL . '/options/layout2.png',
			'3'   => RB_IMG_URL . '/options/layout3.png',
		)
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'radio-buttonset',
		'settings'    => 'search_banner_bg_settings',
		'label'       => esc_html__('Page title BG', 'rainbow'),
		'section'     => 'RB_search_page',
		'default'     => 'image',
		'priority'    => 3,
		'choices'     => array(
			'image'   => esc_html__('Image', 'rainbow'),
			'color' => esc_html__('Color', 'rainbow'),
		),

	)
);


Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'image',
		'settings'    => 'search_page_banner_bg_image',
		'label'       => esc_html__('Banner Background', 'rainbow'),
		'description'       => esc_html__('Upload page title background image', 'rainbow'),
		'section'     => 'RB_search_page',
		'default'     => '',
		'priority'    => 5,
		'active_callback' => array(
			array(
				'setting'  => 'search_banner_bg_settings',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'color',
		'settings'    => 'search_page_banner_bg_overlay',
		'label'       => esc_html__('Background Overlay', 'rainbow'),
		'description'       => esc_html__('Set your page title background overlay', 'rainbow'),
		'section'     => 'RB_search_page',
		'default'     => '',
		'priority'    => 7,
		'active_callback' => array(
			array(
				'setting'  => 'search_banner_bg_settings',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	),

);

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'color',
		'settings'    => 'search_page_banner_bg_color',
		'label'       => esc_html__('Background Color', 'rainbow'),
		'description'       => esc_html__('Set your page title background color', 'rainbow'),
		'section'     => 'RB_search_page',
		'default'     => '',
		'priority'    => 9,
		'active_callback' => array(
			array(
				'setting'  => 'search_banner_bg_settings',
				'operator' => '==',
				'value'    => 'color',
			),
		),
	),
);

Kirki::add_field('theme_config_id', array(
	'type'        => 'slider',
	'settings'    => 'RB_archive_banner_padding',
	'label'       => esc_html__('Banner Padding', 'rainbow'),
	'description'       => esc_html__('Set your banner padding[top, bottom]', 'rainbow'),
	'section'     => 'RB_search_page',
	'default'     => 85,
	'choices'     => array(
		'min'  => 0,
		'max'  => 200,
		'step' => 1,
	),
	'priority'    => 11,
));

Kirki::add_field(
	'RB_config',
	array(
		'type'     => 'textarea',
		'settings' => 'RB_search_title_text_settings',
		'label'    => esc_html__('Search Title Text Content', 'rainbow'),
		'section'  => 'RB_search_page',
		'default'  => esc_html('Search results for : [search_query]'),
		'description'  => esc_html__('Set your search title text and use \'[search_query]\' for search query', 'rainbow'),
		'priority' => 13,
	)
);

Kirki::add_field(
	'RB_config',
	array(
		'type'     => 'textarea',
		'settings' => 'RB_result_found_text_settings',
		'label'    => esc_html__('Search Result Found Text Content', 'rainbow'),
		'section'  => 'RB_search_page',
		'default'  => esc_html('[search_count] results found.'),
		'description'  => esc_html__('Set your search result found text and use \'[search_count]\' for result number', 'rainbow'),
		'priority' => 13,
	)
);
//=== End search page field ===//

//=== Start Footer settings field ===//

Kirki::add_field('RB_config', [
	'type'        => 'select',
	'settings'    => 'RB_footer_layout',
	'label'       => esc_html__('Footer Layout', 'rainbow'),
	'section'     => 'RB_footer_column',
	'default'     => '2',
	'placeholder' => esc_html__('Select your footer layout option', 'rainbow'),
	'priority'    => 1,
	'choices'     => [
		'1' => esc_html__('col-4 | col-4 | col-4', 'rainbow'),
		'2' => esc_html__('col-3 | col-3 | col-3 | col-3', 'rainbow'),
		'3' => esc_html__('col-4 | col-2 | col-3 | col-3', 'rainbow'),
		'4' => esc_html__('col-3 | col-3 | col-2 | col-4', 'rainbow'),
		'5' => esc_html__('col-6 | col-6', 'rainbow'),
		'6' => esc_html__('col-4 | col-2 | col-4 | col-2', 'rainbow'),
		'7' => esc_html__('col-4 | col-3 | col-2 | col-3', 'rainbow'),
		'8' => esc_html__('col-3 | col-2 | col-4 | col-3', 'rainbow'),
	],
]);

//=== End Footer settings field ===//


//=== Start Typography settings field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'typography',
		'settings'    => 'bodytypography',
		'label'       => esc_html__('Body Typography', 'rainbow'),
		'section'     => 'body',
		'priority'    => 1,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('body'),
			),
		),
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'typography',
		'settings'    => 'page_content',
		'label'       => esc_html__('Page Content', 'rainbow'),
		'section'     => 'page_content',
		'priority'    => 3,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.entry-content p'),
			),
		),
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'typography',
		'settings'    => 'heading1',
		'label'       => esc_html__('Heading', 'rainbow'),
		'section'     => 'heading',
		'priority'    => 5,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.entry-content p'),
			),
		),
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin2',
		'label'       => esc_html__('Heading 2', 'rainbow'),
		'section'     => 'heading',
		'priority'    => 7,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h2'),
			),
		),
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin3',
		'label'       => esc_html__('Heading 3', 'rainbow'),
		'section'     => 'heading',
		'priority'    => 9,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h3'),
			),
		),
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin4',
		'label'       => esc_html__('Heading 4', 'rainbow'),
		'section'     => 'heading',
		'priority'    => 11,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h4'),
			),
		),
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin5',
		'label'       => esc_html__('Heading 5', 'rainbow'),
		'section'     => 'heading',
		'priority'    => 13,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h5'),
			),
		),
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'typography',
		'settings'    => 'headin6',
		'label'       => esc_html__('Heading 6', 'rainbow'),
		'section'     => 'heading',
		'priority'    => 15,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('h6'),
			),
		),
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'typography',
		'settings'    => 'navbar_item',
		'label'       => esc_html__('Navbar', 'rainbow'),
		'section'     => 'navbar',
		'priority'    => 17,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.themeix-menu #main-menu li>a'),
			),
		),
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'typography',
		'settings'    => 'postcard_title',
		'label'       => esc_html__('Post Title', 'rainbow'),
		'section'     => 'post_card',
		'priority'    => 19,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.blog-post .desc h4'),
			),
		),
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'typography',
		'settings'    => 'postcard_meta',
		'label'       => esc_html__('Post Meta', 'rainbow'),
		'section'     => 'post_card',
		'priority'    => 21,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.blog-post .desc .meta-info span'),
			),
		),
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'typography',
		'settings'    => 'postcard_cat',
		'label'       => esc_html__('Post Category', 'rainbow'),
		'section'     => 'post_card',
		'priority'    => 23,
		'default'     => array(
			'font-family'    => '',
			'variant'        => 'regular',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => 'none',
			'text-align'     => '',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array('.blog-post .feature-btn'),
			),
		),
	)
);

//=== End Typography settings field ===//


//=== Start color settings field ===//
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'color',
		'settings'    => 'RB_primary_color',
		'label'       => esc_html__('Primary Color', 'rainbow'),
		'section'     => 'colors',
		'priority'    => 1,
		'default'     => '#080c21',
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'color',
		'settings'    => 'RB_secondary_color',
		'label'       => esc_html__('Secondary Color', 'rainbow'),
		'section'     => 'colors',
		'priority'    => 2,
		'default'     => '#4dac4d',
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'color',
		'settings'    => 'RB_text_color',
		'label'       => esc_html__('Text Color', 'rainbow'),
		'section'     => 'colors',
		'priority'    => 3,
		'default'     => '#51535f',
	)
);

//=== End color settings field ===//

Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'text',
		'settings'    => 'subscribe_title',
		'label'       => esc_html__('Title', 'rainbow'),
		'section'     => 'footer_subscribe',
		'default'     => esc_html__('Subscribe', 'rainbow'),
		'priority'    => 2,
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'textarea',
		'settings'    => 'subscribe_desc',
		'label'       => esc_html__('Subtitle', 'rainbow'),
		'section'     => 'footer_subscribe',
		'default'     => esc_html__('Stay up to date! Get all the latest posts delivered straight to your inbox.', 'rainbow'),
		'priority'    => 3,
	)
);
Kirki::add_field(
	'RB_config',
	array(
		'type'        => 'textarea',
		'settings'    => 'form_shortcode',
		'label'       => esc_html__('Form Shortcode', 'rainbow'),
		'section'     => 'footer_subscribe',
		'priority'    => 5,
	)
);
