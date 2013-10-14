<?php

DEFINE('MODULE_CONFIG_PATH', $MODULE_PATH);

$loader = new \Phalcon\Loader();

$loader
	->registerClasses(array(
		'Modules\Config' => MODULE_CONFIG_PATH . 'classes/Config.php',
	));

$loader->register();

?>