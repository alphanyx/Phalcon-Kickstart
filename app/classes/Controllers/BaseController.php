<?php

class BaseController extends \Phalcon\Mvc\Controller
{

	public function beforeExecuteRoute()
	{
		$this->view->setTemplateAfter('common');

		$this->view->registerEngines(
			array(
				".html" => "Modules\Smarty\TemplateEngine\Adapter"
			)
		);

		$products = array(
			array(
				'id' => '123',
				'name' => 'product x'
			),
			array(
				'id' => '456',
				'name' => 'product y'
			)
		);

		$this->view->setVar("products", $products);
	}
}