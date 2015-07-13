<?php
use Voce\PluginLoader\PluginLoader;

$pluginLoader = new PluginLoader();
$pluginLoader->registerHooks();
do_action( Voce\PluginLoader\PluginLoader::LOAD_ACTION, 'wp-fail2ban' );
do_action( Voce\PluginLoader\PluginLoader::LOAD_ACTION, 'force-strong-passwords', 'slt-force-strong-passwords' );
do_action( Voce\PluginLoader\PluginLoader::LOAD_ACTION, 'disable-xml-rpc-pingback' );