<?php
/**
 * Demo content seeder for local testing and previews.
 *
 * This file is intentionally separate from the runtime theme bootstrap so
 * production/demo sites can import content without loading seeding helpers
 * on every request.
 *
 * @package architectural-trust
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Render block markup from one or more pattern files.
 *
 * @param string|array $files Pattern filename or list of filenames.
 * @return string
 */
function architectural_trust_get_pattern_markup( $files ) {
	$files  = (array) $files;
	$markup = array();

	foreach ( $files as $file ) {
		$path = get_theme_file_path( 'patterns/' . $file );

		if ( ! file_exists( $path ) ) {
			continue;
		}

		ob_start();
		include $path;
		$contents = ob_get_clean();

		if ( false === $contents || '' === trim( $contents ) ) {
			continue;
		}

		$markup[] = trim( $contents );
	}

	return implode( "\n\n", array_filter( $markup ) );
}

/**
 * Create or update a demo page.
 *
 * @param array $page_config Page configuration.
 * @return int
 */
function architectural_trust_seed_demo_page( $page_config ) {
	$existing = get_page_by_path( $page_config['slug'], OBJECT, 'page' );
	$page_id  = $existing ? (int) $existing->ID : 0;

	$page_args = array(
		'ID'           => $page_id,
		'post_title'   => $page_config['title'],
		'post_name'    => $page_config['slug'],
		'post_status'  => 'publish',
		'post_type'    => 'page',
		'post_content' => $page_config['content'],
	);

	if ( ! empty( $page_config['template'] ) ) {
		$page_args['meta_input'] = array(
			'_wp_page_template' => $page_config['template'],
		);
	}

	if ( $page_id ) {
		wp_update_post( $page_args );
		return $page_id;
	}

	return (int) wp_insert_post( $page_args );
}

/**
 * Download and assign a featured image to a demo post.
 *
 * @param int    $post_id   Post ID.
 * @param string $image_url Remote image URL.
 * @return void
 */
function architectural_trust_seed_featured_image( $post_id, $image_url ) {
	$should_seed_image = apply_filters( 'architectural_trust_demo_seed_featured_images', true, $post_id, $image_url );

	if ( empty( $image_url ) || has_post_thumbnail( $post_id ) || ! $should_seed_image ) {
		return;
	}

	require_once ABSPATH . 'wp-admin/includes/media.php';
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/image.php';

	$attachment_id = media_sideload_image( esc_url_raw( $image_url ), $post_id, null, 'id' );

	if ( is_wp_error( $attachment_id ) ) {
		return;
	}

	set_post_thumbnail( $post_id, $attachment_id );
}

/**
 * Create or update a demo post.
 *
 * @param array $post_config Post configuration.
 * @return int
 */
function architectural_trust_seed_demo_post( $post_config ) {
	$existing = get_page_by_path( $post_config['slug'], OBJECT, 'post' );
	$post_id  = $existing ? (int) $existing->ID : 0;

	$post_args = array(
		'ID'           => $post_id,
		'post_title'   => $post_config['title'],
		'post_name'    => $post_config['slug'],
		'post_status'  => 'publish',
		'post_type'    => 'post',
		'post_excerpt' => $post_config['excerpt'],
		'post_content' => $post_config['content'],
	);

	if ( $post_id ) {
		wp_update_post( $post_args );
	} else {
		$post_id = (int) wp_insert_post( $post_args );
	}

	if ( $post_id && ! empty( $post_config['category'] ) ) {
		$term = term_exists( $post_config['category'], 'category' );

		if ( ! $term ) {
			$term = wp_insert_term( $post_config['category'], 'category' );
		}

		if ( ! is_wp_error( $term ) ) {
			$term_id = is_array( $term ) ? $term['term_id'] : $term;
			wp_set_post_terms( $post_id, array( (int) $term_id ), 'category' );
		}
	}

	if ( $post_id && ! empty( $post_config['image_url'] ) ) {
		architectural_trust_seed_featured_image( $post_id, $post_config['image_url'] );
	}

	return $post_id;
}

/**
 * Seed demo content for previews.
 *
 * @return void
 */
function architectural_trust_seed_demo_content() {
	$home_content = architectural_trust_get_pattern_markup(
		array(
			'landing-hero.php',
			'landing-distinction.php',
			'landing-products.php',
			'landing-insights.php',
		)
	);

	$products_content = architectural_trust_get_pattern_markup(
		array(
			'products-hero.php',
			'products-content.php',
			'products-social-proof.php',
		)
	);

	$news_content = architectural_trust_get_pattern_markup(
		array(
			'news-hero.php',
			'news-content.php',
		)
	);

	$pages = array(
		array(
			'title'   => 'Home',
			'slug'    => 'home',
			'content' => $home_content,
		),
		array(
			'title'    => 'Products',
			'slug'     => 'products',
			'template' => 'page-products',
			'content'  => $products_content,
		),
		array(
			'title'    => 'News & Intelligence',
			'slug'     => 'news-intelligence',
			'template' => 'page-news',
			'content'  => $news_content,
		),
		array(
			'title'    => 'Login',
			'slug'     => 'login',
			'template' => 'page-login',
			'content'  => architectural_trust_get_pattern_markup( 'login-layout.php' ),
		),
		array(
			'title'    => 'Account Dashboard',
			'slug'     => 'dashboard',
			'template' => 'page-dashboard',
			'content'  => architectural_trust_get_pattern_markup( 'dashboard-layout.php' ),
		),
		array(
			'title'    => 'Transfers & Bill Pay',
			'slug'     => 'transfers',
			'template' => 'page-transfers',
			'content'  => architectural_trust_get_pattern_markup( 'transfers-layout.php' ),
		),
		array(
			'title'   => 'Blog',
			'slug'    => 'blog',
			'content' => '',
		),
	);

	$page_ids = array();

	foreach ( $pages as $page_config ) {
		$page_ids[ $page_config['slug'] ] = architectural_trust_seed_demo_page( $page_config );
	}

	if ( ! empty( $page_ids['home'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $page_ids['home'] );
	}

	if ( ! empty( $page_ids['blog'] ) ) {
		update_option( 'page_for_posts', $page_ids['blog'] );
	}

	$posts = array(
		array(
			'title'     => 'Treasury Yields Signal Shift in Risk Appetite',
			'slug'      => 'treasury-yields-signal-shift-in-risk-appetite',
			'category'  => 'Markets',
			'excerpt'   => 'A closer look at the latest move in long-duration debt markets and what it means for advisory teams and treasury leaders.',
			'content'   => '<!-- wp:paragraph --><p>Institutional desks are recalibrating duration exposure as treasury markets price in a more uneven rate path. This demo article exists to power the homepage, archive, and article recommendation patterns with live editorial content that marketers can update in the normal post workflow.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Because the theme now relies on posts instead of hardcoded cards, every published story can flow into the homepage intelligence section, the news landing page, and related article areas automatically.</p><!-- /wp:paragraph -->',
			'image_url' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1600&q=80',
		),
		array(
			'title'     => 'Commercial Property Valuations Stabilize in Q1',
			'slug'      => 'commercial-property-valuations-stabilize-in-q1',
			'category'  => 'Real Estate',
			'excerpt'   => 'Premium office and mixed-use assets are showing greater pricing discipline as financing markets reopen for top-tier borrowers.',
			'content'   => '<!-- wp:paragraph --><p>Selective capital is returning to well-located commercial assets, especially where operators can demonstrate resilient occupancy and disciplined refinancing strategies. This seeded story helps demonstrate how the theme behaves when a content team publishes sector-specific analysis.</p><!-- /wp:paragraph -->',
			'image_url' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1600&q=80',
		),
		array(
			'title'     => 'Global Supply Chain Realignment Creates New Investment Corridors',
			'slug'      => 'global-supply-chain-realignment-creates-new-investment-corridors',
			'category'  => 'Macro Outlook',
			'excerpt'   => 'Nearshoring strategies continue to reshape the way institutional capital evaluates growth regions and logistics infrastructure.',
			'content'   => '<!-- wp:paragraph --><p>Capital allocation is following the new geography of manufacturing and trade. For a CMS user, the important part is that this content is now just a normal blog post: update it here, and the theme surfaces it automatically wherever the latest intelligence appears.</p><!-- /wp:paragraph -->',
			'image_url' => 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=1600&q=80',
		),
		array(
			'title'     => 'Tax-Loss Harvesting Strategies for 2026',
			'slug'      => 'tax-loss-harvesting-strategies-for-2026',
			'category'  => 'Wealth Management',
			'excerpt'   => 'Advisory teams are revisiting harvesting windows as clients balance concentrated positions with long-term allocation targets.',
			'content'   => '<!-- wp:paragraph --><p>Structured harvesting programs can help advisors turn volatility into tax-aware portfolio maintenance. This sample post gives the theme enough content variety to show category terms, titles, dates, and excerpts inside dynamic query loops.</p><!-- /wp:paragraph -->',
			'image_url' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=1600&q=80',
		),
		array(
			'title'     => 'Multi-Generational Wealth Transfer Planning',
			'slug'      => 'multi-generational-wealth-transfer-planning',
			'category'  => 'Private Banking',
			'excerpt'   => 'Families are asking for more collaborative planning frameworks that bring legal, tax, and banking teams into one conversation.',
			'content'   => '<!-- wp:paragraph --><p>Modern legacy planning depends on coordination across advisors, trustees, and operating businesses. In this demo, stories like this one make the single-post template and article recommendation section feel realistic without locking any of that content into theme files.</p><!-- /wp:paragraph -->',
			'image_url' => 'https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?w=1600&q=80',
		),
		array(
			'title'     => 'Institutional Adoption of Tokenized Securities Reaches Milestone',
			'slug'      => 'institutional-adoption-of-tokenized-securities-reaches-milestone',
			'category'  => 'Digital Assets',
			'excerpt'   => 'Clearing and settlement teams are watching closely as tokenized issuance pilots move deeper into mainstream workflows.',
			'content'   => '<!-- wp:paragraph --><p>Tokenized asset infrastructure is becoming a practical conversation for treasury, operations, and risk teams. This final seeded post rounds out the homepage and archive layouts so the demo opens with a believable editorial cadence.</p><!-- /wp:paragraph -->',
			'image_url' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=1600&q=80',
		),
	);

	foreach ( $posts as $post_config ) {
		architectural_trust_seed_demo_post( $post_config );
	}

	$sample_page = get_page_by_path( 'sample-page', OBJECT, 'page' );
	if ( $sample_page ) {
		wp_delete_post( $sample_page->ID, true );
	}

	$hello_world = get_page_by_path( 'hello-world', OBJECT, 'post' );
	if ( $hello_world ) {
		wp_delete_post( $hello_world->ID, true );
	}
}
