<?php

if(!defined('WP_DEBUG') || !WP_DEBUG) {
	return;
}

add_action('muplugins_loaded', 'voce_mu_plugins_load_plugins');

voce_mu_plugins_load_plugins() {
	do_action('wp_load_dependency', 'limit-login-attempts');
	do_action('wp_load_dependency', 'force-strong-passwords', 'slt-force-strong-passwords');
}
