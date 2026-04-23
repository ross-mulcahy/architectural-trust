<?php
/**
 * WP-CLI / manual demo import entrypoint.
 *
 * Usage with WP-CLI from a full WordPress site:
 * wp eval-file wp-content/themes/architectural-trust/demo/import-demo-content.php
 *
 * @package architectural-trust
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( "This importer must run inside WordPress.\n" );
}

$seed_file = get_theme_file_path( 'demo/seed-demo-content.php' );

if ( ! file_exists( $seed_file ) ) {
	exit( "Demo seed file not found.\n" );
}

require_once $seed_file;

if ( ! function_exists( 'architectural_trust_seed_demo_content' ) ) {
	exit( "Demo import function is unavailable.\n" );
}

architectural_trust_seed_demo_content();

echo "Architectural Trust demo content imported.\n";
