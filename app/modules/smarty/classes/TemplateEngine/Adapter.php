<?php
namespace Modules\Smarty\TemplateEngine;

class Adapter extends \Phalcon\Mvc\View\Engine
{

	/**
	 * Renders a view using the template engine
	 *
	 * @param string $path
	 * @param array $params
	 */
	public function render($path, $params)
	{
		$smarty = \Modules\Smarty\Smarty::instance()->getSmarty();

		if (($viewPos = strpos($path, 'views')) !== false) {
			$path = substr($path, $viewPos + 6);
		}

		array_walk($params, function($value, $key, &$smarty) {
			$smarty->assign($key, $value);
		}, $smarty);

		$content =  $smarty->fetch($path);
		$this->_view->setContent($content);
	}

}