<?php

add_action('muplugins_loaded', 'voce_required_plugins_load_plugins');

function voce_required_plugins_load_plugins() {
	do_action( 'wp_load_dependency', 'wp-fail2ban' );
	do_action( 'wp_load_dependency', 'force-strong-passwords', 'slt-force-strong-passwords' );
	do_action( 'wp_load_dependency', 'disable-xml-rpc-pingback' );
}