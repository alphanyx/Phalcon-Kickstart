<?php

class BaseController extends \Phalcon\Mvc\Controller
{

	public function beforeExecuteRoute()
	{
		$this->view->setTemplateAfter('common');

		$this->view->registerEngines(
			array(
				".html" => "\Smarty\TemplateEngine\Adapter"
			)
		);
	}
}