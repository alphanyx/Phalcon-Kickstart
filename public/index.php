<?php

DEFINE('DS', DIRECTORY_SEPARATOR);
DEFINE('PHALCON_ROOT', realpath(dirname(dirname(__FILE__))) . DS);

DEFINE('PHALCON_CACHE_DIR', PHALCON_ROOT . 'cache' . DS);

try {

	//Register an autoloader
	$loader = new \Phalcon\Loader();
	$loader->registerDirs(array(
		'../app/classes/Controllers/',
		'../app/classes/Models/',
		'../app/classes/',
	))->register();

	\Module\Loader::instance()->init()
		->addModules(array(
			'config' => 'MODULE:config',
			'smarty' => 'MODULE:smarty',
		))
		->apply();

	//Create a DI
	$di = new Phalcon\DI\FactoryDefault();
	// echo "STAHP!";
	// exit;

	//Setting up the view component
	$di->set('view', function(){
		$view = new \Phalcon\Mvc\View();
		$view->setViewsDir('../app/views/');
		$view->registerEngines(array(
			'.phtml' => 'Phalcon\Mvc\View\Engine\Volt'
		));

		return $view;
	});

	//Handle the request
	$application = new \Phalcon\Mvc\Application($di);

	echo $application->handle()->getContent();

} catch(\Phalcon\Exception $e) {
	 echo "PhalconException: ", $e->getMessage();
}