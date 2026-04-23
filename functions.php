<?php
/**
 * Architectural Trust theme functions.
 *
 * @package architectural-trust
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue Google Fonts and custom stylesheet.
 */
function architectural_trust_enqueue_assets() {
	wp_enqueue_style(
		'architectural-trust-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Work+Sans:wght@400;500;600&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'architectural-trust-material-icons',
		'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'architectural-trust-custom',
		get_theme_file_uri( 'assets/css/custom.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'architectural_trust_enqueue_assets' );
add_action( 'enqueue_block_editor_assets', 'architectural_trust_enqueue_assets' );

/**
 * Register block pattern categories.
 */
function architectural_trust_register_pattern_categories() {
	register_block_pattern_category(
		'architectural-trust',
		array( 'label' => __( 'Architectural Trust', 'architectural-trust' ) )
	);
	register_block_pattern_category(
		'architectural-trust-landing',
		array( 'label' => __( 'Landing Page', 'architectural-trust' ) )
	);
	register_block_pattern_category(
		'architectural-trust-products',
		array( 'label' => __( 'Products', 'architectural-trust' ) )
	);
	register_block_pattern_category(
		'architectural-trust-news',
		array( 'label' => __( 'News & Intelligence', 'architectural-trust' ) )
	);
	register_block_pattern_category(
		'architectural-trust-page-starters',
		array( 'label' => __( 'Page Starters', 'architectural-trust' ) )
	);
}
add_action( 'init', 'architectural_trust_register_pattern_categories' );

/**
 * Register block styles.
 */
function architectural_trust_register_block_styles() {
	register_block_style(
		'core/group',
		array(
			'name'  => 'glass-nav',
			'label' => __( 'Glass Navigation', 'architectural-trust' ),
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'  => 'ambient-shadow',
			'label' => __( 'Ambient Shadow', 'architectural-trust' ),
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'  => 'ghost-border',
			'label' => __( 'Ghost Border', 'architectural-trust' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'cta-secondary',
			'label' => __( 'CTA Secondary', 'architectural-trust' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'cta-outline',
			'label' => __( 'CTA Outline', 'architectural-trust' ),
		)
	);
	register_block_style(
		'core/navigation',
		array(
			'name'  => 'editorial-nav',
			'label' => __( 'Editorial Navigation', 'architectural-trust' ),
		)
	);
}
add_action( 'init', 'architectural_trust_register_block_styles' );
