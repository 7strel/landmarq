<?php
/**
 * LandmarQ functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LandmarQ
 * @since LandmarQ 1.0
 */

 /**
 * Enque main stylesheet
 * Add version to bust cache
 */

function landmarq_enqueue_style_sheet() {

	/* If using a child theme, auto-load the parent theme style. */
	if ( is_child_theme() ) {
		wp_enqueue_style( 'parent-style', trailingslashit( get_template_directory_uri() ) . '/style.css', array(), wp_get_theme()->get( 'Version' ));
	}

	// Alwyas load the main stylesheet for the current theme
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'landmarq_enqueue_style_sheet' );

function landmarq_enqueue_block_editor_assets() {
	// Enqueue the editor styles
	add_editor_style( 'style.css' ); // Assuming your styles are in style.css
}
add_action( 'admin_init', 'landmarq_enqueue_block_editor_assets' );

/**
 * Enque scripts JS
 * Add version to bust cache
 */

function landmarq_enqueue_styles() {
	wp_enqueue_style( 'landmarq_style', get_stylesheet_uri() );

	//Swiper's CSS
  wp_enqueue_style ( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );

	//Slick CSS
	wp_enqueue_style ( 'slick-style', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );

}
add_action( 'wp_enqueue_scripts', 'landmarq_enqueue_styles' );


function landmarq_name_scripts() {
	//wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
	 // Enqueue my scripts.
	 wp_enqueue_script( 'swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );
	 wp_enqueue_script( 'slick-script', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), null, true );
	 wp_enqueue_script( 'anime-script', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js', array(), null, true );
	 wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'landmarq_name_scripts' );

/**
 * Register block styles.
 */

if ( ! function_exists( 'landmarq_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since LandmarQ 1.0
	 * @return void
	 */
	function landmarq_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'landmarq' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'landmarq' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]),
				p.is-style-pill {
					display: inline-block;
					background-color: var(--wp--preset--color--base);
					color: var(--wp--preset--color--base-2);
					padding: 3.3px 12px 4px 12px;
					border-radius: 1rem;
					margin-right: .5rem;
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--base);
					text-decoration: none;
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'landmarq' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list{
					list-style: none;
					list-style-image: url(data:image/svg+xml,%3Csvg%20version%3D%221.1%22%20id%3D%22Layer_2%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%2025%2026%22%20style%3D%22enable-background%3Anew%200%200%2025%2026%3B%22%20xml%3Aspace%3D%22preserve%22%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E.st0%7Bopacity%3A0.57%3Bfill%3A%23D17F9C%3Benable-background%3Anew%3B%7D.st1%7Bfill%3A%23B3295A%3B%7D%3C%2Fstyle%3E%3Cpath%20class%3D%22st0%22%20d%3D%22M24.4%2C17.8c-1.5%2C2.2-4.1%2C3.7-7.1%2C3.7c-4.7%2C0-8.6-3.8-8.6-8.6c0-4.7%2C3.8-8.6%2C8.6-8.6c2.9%2C0%2C5.5%2C1.5%2C7.1%2C3.7c0%2C0-0.1%2C0-0.1%2C0c0.2%2C0%2C0.4-0.1%2C0.6-0.1C23%2C3.4%2C18.3%2C0%2C12.9%2C0C5.8%2C0%2C0%2C5.8%2C0%2C13s5.8%2C13%2C12.9%2C13c5.4%2C0%2C10-3.3%2C12-8.1c-0.2%2C0-0.4%2C0-0.6-0.1C24.3%2C17.8%2C24.3%2C17.8%2C24.4%2C17.8z%22%2F%3E%3Cpath%20class%3D%22st1%22%20d%3D%22M20%2C13c0-2.5%2C1.9-4.5%2C4.4-4.8c-1.5-2.2-4.1-3.7-7.1-3.7c-4.7%2C0-8.6%2C3.8-8.6%2C8.6c0%2C4.7%2C3.8%2C8.6%2C8.6%2C8.6c2.9%2C0%2C5.5-1.5%2C7.1-3.7C21.9%2C17.5%2C20%2C15.5%2C20%2C13z%22%2F%3E%3C%2Fsvg%3E);
				}

				ul.is-style-checkmark-list{
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'landmarq' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'intro',
				'label'        => __( 'Intro', 'landmarq' ),
				'inline_style' => "
					p.is-style-intro{
						font-size: 2rem;
						font-weight: 400;
						line-height: 46.26px;
					}
				",
			)
		);
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'sub-kopje',
				'label'        => __( 'Sub Kopje', 'landmarq' ),
				'inline_style' => "
					p.is-style-sub-kopje{
						font-family: var(--wp--preset--font-family--heading);
						font-size: 1.25rem;
						font-weight: 600;
						line-height: 1.2;
						color: var(--wp--preset--color--contrast-2);
					}
				",
			)
		);
		/*
		register_block_style( 
			'core/button', 
			array(
				'name'         => 'button-primary',
				'label'        => __( 'Primary', 'landmarq' ),
				'inline_style' => '
					.is-style-button-primary a.wp-block-button__link.wp-element-button {
						background-color: var(--wp--preset--color--accent-2);
						color: var(--wp--preset--color--base-2);
						border: 1px solid transparent;
					}
				',
			)
		);
		*/
	}
endif;

add_action( 'init', 'landmarq_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'landmarq_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since LandmarQ 1.0
	 * @return void
	 */
	function landmarq_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */

		 /*
		
		 wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'landmarq-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
		*/
		/*
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'landmarq-button-style-outline2',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
		*/
	}
endif;

add_action( 'init', 'landmarq_block_stylesheets' );


/**
 * Register pattern categories.
 */

if ( ! function_exists( 'landmarq_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since LandmarQ 1.0
	 * @return void
	 */
	function landmarq_pattern_categories() {

		register_block_pattern_category(
			'landmarq_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'landmarq' ),
				'description' => __( 'A collection of full page layouts.', 'landmarq' ),
			)
		);
	}
endif;

add_action( 'init', 'landmarq_pattern_categories' );


// function example_enqueue_block_variations() {
// 	wp_enqueue_script(
// 		'example-enqueue-block-variations',
// 		get_template_directory_uri() . '/assets/js/variations.js',
// 		array( 'wp-blocks', 'wp-dom-ready', 'wp-element', 'wp-primitives' ),
// 		wp_get_theme()->get( 'Version' ),
// 		false
// 	);
// }
// add_action( 'enqueue_block_editor_assets', 'example_enqueue_block_variations' );


/**
 * //////////////
 * 
 * Custom Post Projects
 * 
 * ////////////////
 **/

 if ( ! function_exists('custom_post_type_projects') ) {

	// Register Custom Post Type
	function custom_post_type_projects() {

		$labels = array(
			'name'                  => _x( 'Projecten', 'Post Type General Name', 'landmarq' ),
			'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'landmarq' ),
			'menu_name'             => __( 'Projecten', 'landmarq' ),
			'name_admin_bar'        => __( 'Project', 'landmarq' ),
			'archives'              => __( 'Project Archives', 'landmarq' ),
			'attributes'            => __( 'Project Attributes', 'landmarq' ),
			'parent_item_colon'     => __( 'Parent Project:', 'landmarq' ),
			'all_items'             => __( 'All Projecten', 'landmarq' ),
			'add_new_item'          => __( 'Add New Project', 'landmarq' ),
			'add_new'               => __( 'Add New Project', 'landmarq' ),
			'new_item'              => __( 'New Project', 'landmarq' ),
			'edit_item'             => __( 'Edit Project', 'landmarq' ),
			'update_item'           => __( 'Update Project', 'landmarq' ),
			'view_item'             => __( 'View Project', 'landmarq' ),
			'view_items'            => __( 'View Projecten', 'landmarq' ),
			'search_items'          => __( 'Search Project', 'landmarq' ),
			'not_found'             => __( 'Project Not found', 'landmarq' ),
			'not_found_in_trash'    => __( 'Project Not found in Trash', 'landmarq' ),
			'featured_image'        => __( 'Featured Image', 'landmarq' ),
			'set_featured_image'    => __( 'Set featured image', 'landmarq' ),
			'remove_featured_image' => __( 'Remove featured image', 'landmarq' ),
			'use_featured_image'    => __( 'Use as featured image', 'landmarq' ),
			'insert_into_item'      => __( 'Insert into Project', 'landmarq' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Project', 'landmarq' ),
			'items_list'            => __( 'Items list', 'landmarq' ),
			'items_list_navigation' => __( 'Items list navigation', 'landmarq' ),
			'filter_items_list'     => __( 'Filter Projecten list', 'landmarq' ),
		);
		
		$args = array(
			'label'                 => __( 'Project', 'landmarq' ),
			'description'           => __( 'Post Type Description', 'landmarq' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes','excerpt' ),
			'taxonomies'            => array( 'thema' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
			'show_in_rest'          => true,
			'rewrite' => array('slug' => 'project'),
		);

		register_post_type( 'project', $args );

	}
	add_action( 'init', 'custom_post_type_projects', 0 );

}

function register_thema_taxonomy() {
	$labels = array(
			'name'              => __( 'Themas', 'taxonomy general name', 'landmarq' ),
			'singular_name'     => __( 'Thema', 'taxonomy singular name', 'landmarq' ),
			'search_items'      => __( 'Search Themas', 'landmarq' ),
			'all_items'         => __( 'All Themas', 'landmarq' ),
			'parent_item'       => __( 'Parent Thema', 'landmarq' ),
			'parent_item_colon' => __( 'Parent Thema:', 'landmarq' ),
			'edit_item'         => __( 'Edit Thema', 'landmarq' ),
			'update_item'       => __( 'Update Thema', 'landmarq' ),
			'add_new_item'      => __( 'Add New Thema', 'landmarq' ),
			'new_item_name'     => __( 'New Thema Name', 'landmarq' ),
			'menu_name'         => __( 'Themas', 'landmarq' ),
	);

	$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'thema' ),
			'show_in_rest'      => true,  // Enable in block editor and FSE
	);

	register_taxonomy( 'thema', array( 'project' ), $args );
}

add_action( 'init', 'register_thema_taxonomy' );

function register_project_tags_taxonomy() {
	$labels = array(
			'name'                       => __( 'Project Tags', 'taxonomy general name', 'landmarq' ),
			'singular_name'              => __( 'Project Tag', 'taxonomy singular name', 'landmarq' ),
			'search_items'               => __( 'Search Project Tags', 'landmarq' ),
			'popular_items'              => __( 'Popular Project Tags', 'landmarq' ),
			'all_items'                  => __( 'All Project Tags', 'landmarq' ),
			'edit_item'                  => __( 'Edit Project Tag', 'landmarq' ),
			'update_item'                => __( 'Update Project Tag', 'landmarq' ),
			'add_new_item'               => __( 'Add New Project Tag', 'landmarq' ),
			'new_item_name'              => __( 'New Project Tag Name', 'landmarq' ),
			'separate_items_with_commas' => __( 'Separate tags with commas', 'landmarq' ),
			'add_or_remove_items'        => __( 'Add or remove tags', 'landmarq' ),
			'choose_from_most_used'      => __( 'Choose from the most used tags', 'landmarq' ),
			'not_found'                  => __( 'No tags found', 'landmarq' ),
			'menu_name'                  => __( 'Project Tags', 'landmarq' ),
	);

	$args = array(
			'hierarchical'      => false,  // Define como uma taxonomia de tags (não hierárquico)
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'project-tag' ),
			'show_in_rest'      => true,  // Permite edição no Editor de Blocos e FSE
	);

	register_taxonomy( 'project_tag', array( 'project' ), $args );
}

add_action( 'init', 'register_project_tags_taxonomy' );


// register_nav_menus( array( 'primary' => esc_html__( 'Main-Menu', 'landmarq' ) ) );
// register_nav_menus( array( 'secondary' => esc_html__( 'Secondary Menu', 'landmarq' ) ) );
// register_nav_menus( array( 'copyright' => esc_html__( 'Footer Menu', 'landmarq' ) ) );

// function add_custom_wp_navigation_submenu() {
// 	add_submenu_page(
// 			'themes.php',                    // Parent slug (Appearance menu)
// 			'Navigation Menus',              // Page title
// 			'Navigation Menus',              // Submenu title
// 			'manage_options',                // Capability
// 			'edit.php?post_type=wp_navigation' // Menu slug (the URL)
// 	);
// }
// add_action('admin_menu', 'add_custom_wp_navigation_submenu');

function add_custom_wp_navigation_menu() {
	add_menu_page(
		'Menus',              // Page title
		'Menus',              // Menu title
		//'manage_options',    // Capability
		'edit_pages',
		'edit.php?post_type=wp_navigation', // Menu slug (the URL)
		'',                              // Function (empty because we’re just redirecting to an existing page)
		'dashicons-admin-site',          // Icon URL or Dashicons class
		25                               // Position in menu (optional)
	);
}

add_action('admin_menu', 'add_custom_wp_navigation_menu');


function add_custom_last_updated_column() {

	// Array of custom post types
	$custom_post_types = ['project', 'vacatures', 'team']; // Replace with your custom post types

	// Add custom column to posts, pages, and custom post types
	add_filter('manage_posts_columns', 'add_last_updated_column');
	add_filter('manage_pages_columns', 'add_last_updated_column');

	foreach ($custom_post_types as $post_type) {
			add_filter("manage_{$post_type}_columns", 'add_last_updated_column');
	}

	function add_last_updated_column($columns) {
		if (current_user_can('administrator')) {
				$columns['last_updated'] = 'Last Updated';
		}
		return $columns;
	}

	// Display the last updated date in the custom column
	add_action('manage_posts_custom_column', 'show_last_updated_column', 10, 2);
	add_action('manage_pages_custom_column', 'show_last_updated_column', 10, 2);

	foreach ($custom_post_types as $post_type) {
			add_action("manage_{$post_type}_custom_column", 'show_last_updated_column', 10, 2);
	}

	function show_last_updated_column($column_name, $post_id) {
		if ($column_name === 'last_updated' && current_user_can('administrator')) {
				$last_updated = get_the_modified_time('F j, Y', $post_id);
				echo esc_html($last_updated);
		}
	}
}

add_action( 'admin_init', 'add_custom_last_updated_column' );


/**
 * Remove core Patterns
 *
*/

function themeslug_remove_core_patterns() {
	remove_theme_support( 'core-block-patterns' );
}

add_action( 'after_setup_theme', 'themeslug_remove_core_patterns' );

/**
 * Disabling remote patterns
 */
add_filter( 'should_load_remote_block_patterns', '__return_false' );



// Add an SVG input field to the taxonomy edit form
function add_werkgebied_svg_field($term) {
	$svg_code = get_term_meta($term->term_id, 'werkgebied_svg_icon', true);
	?>
	<tr class="form-field">
			<th scope="row">
					<label for="werkgebied_svg_icon"><?php _e('SVG Icon', 'text-domain'); ?></label>
			</th>
			<td>
					<textarea name="werkgebied_svg_icon" id="werkgebied_svg_icon" rows="5" cols="50"><?php echo esc_textarea($svg_code); ?></textarea>
					<p class="description"><?php _e('Paste the SVG code for this taxonomy term.', 'text-domain'); ?></p>
			</td>
	</tr>
	<?php
}

// Show field in both "Add New" and "Edit" taxonomy term screens
add_action('werkgebied_category_edit_form_fields', 'add_werkgebied_svg_field', 10, 2);
add_action('werkgebied_category_add_form_fields', 'add_werkgebied_svg_field', 10, 2);

// Save the SVG code when the taxonomy term is updated
function save_werkgebied_svg_field($term_id) {
	if (isset($_POST['werkgebied_svg_icon'])) {
			update_term_meta($term_id, 'werkgebied_svg_icon', wp_kses_post($_POST['werkgebied_svg_icon']));
	}
}

// Save when creating and editing a taxonomy term
add_action('edited_werkgebied_category', 'save_werkgebied_svg_field', 10, 2);
add_action('create_werkgebied_category', 'save_werkgebied_svg_field', 10, 2);



// Shortcode to display SVG icon in Full Site Editor
function display_werkgebied_svg_icon() {
	$term = get_queried_object();

	// Check if the term is a valid object and has a term_id
	if ($term && is_object($term) && isset($term->term_id)) {
			$svg_icon = get_term_meta($term->term_id, 'werkgebied_svg_icon', true);

			if (!empty($svg_icon)) {
					return '<div class="werkgebied-icon">' . $svg_icon . '</div>';
			}
	}

	return ''; // Return an empty string if no SVG icon is found
}
add_shortcode('werkgebied_svg_icon', 'display_werkgebied_svg_icon');
