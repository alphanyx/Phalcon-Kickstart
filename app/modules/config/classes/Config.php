<?php
namespace Modules;
use Phalcon\Exception;

class Config
{
	private static $_instance;

	protected static $_configs = array();

	public static function instance() {
		if (!self::$_instance) {
			$currentClassName = __CLASS__;
			self::$_instance = new $currentClassName();
		}
		return self::$_instance;
	}

	public function load($file) {
		if (isset(self::$_configs[$file])) {
			return self::$_configs[$file];
		}

		if (!file_exists($file)) {
			throw new Exception ('Configuration File does not exists in ' . $file);
		}

		$config = require_once $file;

		return self::$_configs[$file] = $config;
	}
}
