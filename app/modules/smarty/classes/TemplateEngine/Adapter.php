<?php
namespace Smarty\TemplateEngine;

class Adapter extends \Phalcon\Mvc\View\Engine
{

	/**
	 * Adapter constructor
	 *
	 * @param \Phalcon\Mvc\View $view
	 * @param \Phalcon\DI $di
	 */
	public function __construct($view, $di)
	{
		//Initiliaze here the adapter
		parent::__construct($view, $di);
	}

	/**
	 * Renders a view using the template engine
	 *
	 * @param string $path
	 * @param array $params
	 */
	public function render($path, $params)
	{
		$smarty = new \Smarty\Smarty();



		echo get_class($smarty);
		exit;

		echo "Path: " . $path . "<br/>";
		echo '<pre>';
		var_dump($params);
		echo '</pre>';

		// Access view
		$view = $this->_view;

		echo '<pre>';
		var_dump($view);
		echo '</pre>';

		// Access options
		$options = $this->_options;

		echo '<pre>';
		var_dump($options);
		echo '</pre>';
		exit;

		//Render the view
		//...
	}

}