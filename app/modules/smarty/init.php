<?php

DEFINE('MODULE_SMARTY_PATH', $MODULE_PATH);

$loader = new \Phalcon\Loader();

$smartyConfig = \Modules\Config::instance()->load(MODULE_SMARTY_PATH . 'config/smarty.php');

$loader
	->registerClasses(array(
		'Smarty' => $smartyConfig->get('smarty_dir'),
	))
	->registerNamespaces(array(
		'Modules\Smarty' => MODULE_SMARTY_PATH . 'classes'
	));

$loader->register();

?>