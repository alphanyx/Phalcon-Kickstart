<?php

$smartyConf = new Phalcon\Config(array(
	'tpl_extension' => 'html',
	'smarty_config' => array(
		'compile_dir' => PHALCON_CACHE_DIR . 'smarty/compile',
		'cache_dir' => PHALCON_CACHE_DIR . 'smarty/cache',

		'template_dir' => array(),
		'plugin_dir' => array(),

		'compile_check' => true,
		'caching' => false,
		'debugging' => true,
		'force_compiling' => true,
		'error_reporting' => E_ALL & ~E_NOTICE,
	),
	'smarty_dir' => PHALCON_ROOT . '/app/vendor/Smarty-3.1.15/libs/Smarty.class.php'
 ));

return $smartyConf;