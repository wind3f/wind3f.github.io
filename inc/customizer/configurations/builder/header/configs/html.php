<?php
/**
 * HTML Header Configuration.
 *
 * @package     Astra
 * @link        https://wpastra.com/
 * @since       4.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register html header builder Customizer Configurations.
 *
 * @param array $configurations Astra Customizer Configurations.
 * @since 4.5.2
 * @return array Astra Customizer Configurations with updated configurations.
 */
function astra_header_html_configuration( $configurations = array() ) {

	$_configs = Astra_Html_Component_Configs::register_configuration( $configurations, 'header', 'section-hb-html-' );

	if ( Astra_Builder_Customizer::astra_collect_customizer_builder_data() ) {
		array_map( 'astra_save_header_customizer_configs', $_configs );
	}

	return $_configs;
}

if ( Astra_Builder_Customizer::astra_collect_customizer_builder_data() ) {
	astra_header_html_configuration();
}
