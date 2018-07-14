<?php
/**
 * File autoloader functionality
 *
 * @package     RoxyCruzWebDesign\TeamBios\Support
 * @since       1.0.0
 * @author      Roxy Cruz Web Design
 * @link        https://roxycruzwebdesign.com
 * @license     GNU General Public License 2.0+
 */
namespace RoxyCruzWebDesign\TeamBios\Support;

/**
 * Load all of the plugin's files.
 *
 * @since 1.0.0
 *
 * @param string $src_root_dir Root directory for the source files
 *
 * @return void
 */
function autoload_files( $src_root_dir ) {

	$filenames = array(
		'custom/post-type',
		'custom/taxonomy',
	);

	foreach( $filenames as $filename ) {
		include_once( $src_root_dir . $filename . '.php' );
	}
}
