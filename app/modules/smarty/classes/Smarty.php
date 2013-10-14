<?php
namespace Smarty;

class Smarty
{
	const CONFIGURATION = 'config/smarty';

	private static $_instance;

	protected $_config;

	public static function instance() {
		if (!self::$_instance) {
			$currentClassName = __CLASS__;
			self::$_instance = new $currentClassName();
		}
		return self::$_instance;
	}


	public function __construct() {

		$smarty = new \Smarty();

		echo '<pre>';
		var_dump($this->_config);
		echo '</pre>';

		echo "Layer: " . get_class($smarty) . "<br/>";
		// exit;
	}

	public function setConfig(\Phalcon\Config $config) {
		$this->_config = $config;

		return $this;
	}

}