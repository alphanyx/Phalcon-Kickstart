<?php

$loader = new \Phalcon\Loader();

$smartyConfig = require_once $MODULE_PATH . 'config/smarty.php';

$loader
	->registerClasses(array(
		'Smarty' => $smartyConfig->get('smarty_dir'),
	))
	->registerNamespaces(array(
		'Smarty' => $MODULE_PATH . 'classes'
	));

$loader->register();



\Smarty\Smarty::instance()->setConfig($smartyConfig);

exit;

?>