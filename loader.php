<?php
use Voce\PluginLoader\PluginLoader;

if( ! defined('ABSPATH') || ( defined('WP_DEBUG') && WP_DEBUG ) || ( defined('SKIP_REQUIRED_PLUGINS') && SKIP_REQUIRED_PLUGINS ) ) {
	return;
}

$pluginLoader = new PluginLoader();
$pluginLoader->registerHooks();
do_action( Voce\PluginLoader\PluginLoader::LOAD_ACTION, 'wp-fail2ban' );
do_action( Voce\PluginLoader\PluginLoader::LOAD_ACTION, 'force-strong-passwords', 'slt-force-strong-passwords' );